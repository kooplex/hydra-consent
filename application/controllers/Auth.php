<?php
/**
 * Created by PhpStorm.
 * User: davidt
 * Date: 2018.03.05.
 * Time: 10:39
 */

class Auth extends Base_Controller
{
    public function elte(){
        // Does authentication and sets following values in session:
        // user, idp_user
        $saml_lib = FCPATH."../application/vendor/simplesaml/simplesamlphp/lib/";
        require_once $saml_lib."_autoload.php";
        require_once $saml_lib."SimpleSAML/Auth/Simple.php";

        $simpleSaml = new SimpleSAML_Auth_Simple('kooplex-veo-elte-sp');

	$simpleSaml->requireAuth([
 		'ReturnTo' => 'https://kooplex-veo.elte.hu/consent/auth/elte'
	]);
        $attr = $simpleSaml->getAttributes();
        $this->session->elte_data = json_encode($attr);

	  $username = $attr['eduPersonPrincipalName'][0];
		  // TODO: handle usernames for multiple sources.
		  
        $this->session->user = $username;
		  if ($attr['elteLoginSource'][0] == 'neptun')
			  $this->session->idp_user = strtolower($attr['username'][0]);
          else
		  	  $this->session->idp_user = strtolower( $attr['niifPersonOrgID'][0]);

        header("Location: /consent/consent/handle");
        exit();
    }
    public function eduid(){
        // Does authentication and sets following values in session:
        // user, idp_user
        $saml_lib = FCPATH."../application/vendor/simplesaml/simplesamlphp/lib/";
        require_once $saml_lib."_autoload.php";
        require_once $saml_lib."SimpleSAML/Auth/Simple.php";

        $simpleSaml = new SimpleSAML_Auth_Simple('kooplex-veo-eduid-sp');

	$simpleSaml->requireAuth([
 		'ReturnTo' => 'https://kooplex-veo.elte.hu/consent/auth/eduid'
	]);
        $attr = $simpleSaml->getAttributes();
        $this->session->elte_data = json_encode($attr);

	$username = $attr['eduPersonPrincipalName'][0];
        $this->session->user = $username;
        $u_gusztustalan = preg_split ( '/@+/' , $username)[0];
        $this->session->idp_user = $u_gusztustalan; //strtolower($attr['username'][0]); //FIXME: the other attribute is empty!

        header("Location: /consent/consent/handle");
        exit();
    }
    public function bonfire(){
        $user = $this->session->userdata('identity');
        if (isset($user)) {
            $this->session->user = $user;
            $this->session->idp_user = $user;
            $idp_data = json_decode($this->session->idp_data,true);
            $userdata = [
                'displayName' => $idp_data['display_name'],
                'lastName' => $idp_data['k_last_name'],
                'firstName' => $idp_data['k_first_name'],
                'mail' => $idp_data['email'],
            ];
            $this->session->elte_data = json_encode($userdata);
            header("Location: /consent/consent/handle");
//            header("Location: /consent/index.php/consent/handle");
        }
        exit();
    }
}
