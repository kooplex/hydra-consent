<?php
/**
 * Created by PhpStorm.
 * User: davidt
 * Date: 2018.03.05.
 * Time: 12:09
 */

class Token_handler
{
    protected $provider;
    protected $settings;
    public function __construct($settings)
    {
        try {
            $this->provider = new \Hydra\OAuth2\Provider\OAuth2($settings);
            $this->settings = $settings;
        }catch(Exception $e)
        {
            print "<pre>ERROR while initializing TokenHandler\n\n";
            var_dump($e);
            print "</pre>";
        }
    }

    public function getToken(){
        try {
            // Get an access token using the client credentials grant.
            // Note that you must separate multiple scopes with a plus (+)
            $accessToken = $this->provider->getAccessToken(
                'client_credentials', ['scope' => 'hydra.consent']
            );
            return $accessToken;
        } catch (\Hydra\Oauth2\Provider\Exception\ConnectionException $e) {
            die("Connection to Hydra failed: ".$e->getMessage());
        } catch (\Hydra\Oauth2\Provider\Exception\IdentityProviderException $e) {
            die("Failed to get an access token: ".$e->getMessage());
        }
    }
}


