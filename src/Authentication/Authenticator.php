<?php

namespace Allegro\Authentication;

use GuzzleHttp\Client;

class Authenticator
{
    /** @var \GuzzleHttp\Client */
    private $client;

    /** @var string */
    private $allegroUrl;

    /** @var string */
    private $clientId;

    /** @var string */
    private $redirectUrl;

    /** @var string */
    private $clientSecret;

    public function __construct(Client $client, $allegroUrl, $clientId, $clientSecret, $redirectUrl)
    {
        $this->client = $client;
        $this->allegroUrl = $allegroUrl;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUrl = $redirectUrl;
    }

    public function getAuthorizeUrl()
    {
        return $this->allegroUrl . '/auth/oauth/authorize?response_type=code&client_id=' . $this->clientId . '&redirect_uri=' . urlencode($this->redirectUrl);
    }

    public function getAuthenticationTokensFromAuthorizationToken($authorizationToken)
    {
        $res = $this->client->request(
            'GET',
            $this->allegroUrl . '/auth/oauth/token?grant_type=authorization_code&code=' . $authorizationToken . '&redirect_uri=' . urlencode($this->redirectUrl),
            [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret)
                ]
            ]
        );

        return $res->getBody();
    }
}
