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
    private $allegroClientId;

    /** @var string */
    private $allegroClientSecret;

    /** @var string */
    private $redirectUrl;

    public function __construct(Client $client, $allegroUrl, $allegroClientId, $allegroClientSecret, $redirectUrl)
    {
        $this->client = $client;
        $this->allegroUrl = $allegroUrl;
        $this->allegroClientId = $allegroClientId;
        $this->allegroClientSecret = $allegroClientSecret;
        $this->redirectUrl = $redirectUrl;
    }

    public function getAuthorizeUrl()
    {
        return $this->allegroUrl . '/auth/oauth/authorize?response_type=code&client_id=' . $this->allegroClientId . '&redirect_uri=' . urlencode($this->redirectUrl);
    }

    public function getAuthenticationTokensFromAuthorizationToken($authorizationToken)
    {
        $res = $this->client->request(
            'GET',
            $this->allegroUrl . '/auth/oauth/token?grant_type=authorization_code&code=' . $authorizationToken . '&redirect_uri=' . urlencode($this->redirectUrl),
            [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->allegroClientId . ':' . $this->allegroClientSecret)
                ]
            ]
        );

        $authorizationTokens = $res->getBody()->getContents();

        return json_decode($authorizationTokens, true);
    }

    public function getNewTokensFromCurrentTokens($refreshToken)
    {
        $res = $this->client->request(
            'GET',
            $this->allegroUrl . '/auth/oauth/token?grant_type=refresh_token&refresh_token=' . $refreshToken . '&redirect_uri=' . urlencode($this->redirectUrl),
            [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->allegroClientId . ':' . $this->allegroClientSecret)
                ]
            ]
        );

        $authorizationTokens = $res->getBody()->getContents();

        return json_decode($authorizationTokens, true);
    }
}
