<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include_once('/srv/consent/application/vendor/tulip/oauth2-hydra/src/Provider/Exception/OauthClientException.php');
/**
 * Created by PhpStorm.
 * User: davidt
 * Date: 2018.03.05.
 * Time: 9:36
 */
class Consent extends Base_Controller
{
    protected $debug_output = false;


    public function __construct()
    {
        parent::__construct();
	$this->config->load('hydra');
        $token_config = [
            'clientId' => $this->config->item('hydra.consent_client'),
            'clientSecret' => $this->config->item('hydra.consent_secret'),
            'domain' => $this->config->item('hydra.url'),
        ];
        $this->load->library('token_handler', $token_config);
    }

    public function index()
    {
        $consent_id = $this->input->get('consent');
        if (isset($consent_id)) {
            $this->session->consent = $consent_id;
        }
        $this->twig->display('consent/index', ['consent' => $consent_id]);
    }

    public function handle()
    {

        $id = $this->session->consent;

        if (!isset($id)) {
            $id = $this->input->get('consent');
            $id = substr($id, 0, 36);
            $this->session->consent = $id;
        }

        $id = substr($id, 0, 36);

        $username = $this->session->idp_user;
        if (!isset($username)) {
            $username = $this->input->get('idp_user');
            $this->session->idp_user = $username;
        }

        $config = Hydra\SDK\Configuration::getDefaultConfiguration();

        $token = $this->token_handler->getToken();
        $config->setAccessToken($token->getToken());

        if ($this->debug_output) {
            print '<pre>';
            $config->setDebug(true);
        }

        $config->setHost($this->config->item('hydra.url'));

        try {
            $client = new Hydra\SDK\Api\OAuth2Api();
        } catch (Exception $e) {
            echo 'Exception while creating OAuth api: ', $e->getMessage(), PHP_EOL;
        }

        try {
            $consentClient = $client->getOAuth2ConsentRequest($id);
        } catch (Exception $e) {
            echo 'Error while getting Consent reqest: ', $e->getMessage(), PHP_EOL;
        }

        try {
            $acceptance = new Hydra\SDK\Model\ConsentRequestAcceptance();

            $clientName = $consentClient->getClientId();

            $scopes = $consentClient->getRequestedScopes();
            $scopenames = [
                "openid" => "Azonosítás OpenID használatával",
                "email" => "E-mail cím",
                "profile" => "ELTEAuth profil adatai",
                "offline" => "Hosszútávú bejelentkezés"
            ];

            $data = ['scopes' => []];

            foreach ($scopes as $scope) {
                $data ['scopes'][$scope] = (isset($scopenames[$scope]) ? $scopenames[$scope] : $scope);
            }

            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                $this->load->helper('form');
                $data['clientName'] = $clientName;

                $this->twig->display('consent/consent_form', $data);

            } else {
                $id_extra = ['idp_user' => $username];
                foreach (json_decode($this->session->elte_data,true) as $key=>$value)
                {
                    $id_extra[$key] = $value;
                }

                //add scopes to $acceptance
                $acceptance->setGrantScopes($scopes);
                $acceptance->setSubject($username);
                $acceptance->setIdTokenExtra($id_extra);

                // accept consent request
                $client->acceptOAuth2ConsentRequest($id, $acceptance);

                $redirect = $consentClient->getRedirectUrl();

                // Redirect to Consent Request's redirect URL

                if ($this->debug_output) {
                    print "Redirect: \n";
                    var_dump($redirect);
                    print "Acceptance: \n";
                    var_dump($acceptance);
                    print ('<br><a href="' . $redirect . "\">CLICK</a>\n");
                } else header('Location: ' . $redirect);
            }
        } catch (Exception $e) {
            echo 'Error while getting Consent reqest: ', $e->getMessage(), PHP_EOL;
        }
    }


}
