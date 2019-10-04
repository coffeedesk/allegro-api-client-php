<?php

namespace AllegroApi\Authentication;

use GuzzleHttp\Client;
use AllegroApi\Exception\AuthorizationPendingException;

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

    public function authorizeDevice()
    {
        $res = $this->client->request('POST', $this->allegroUrl . '/auth/oauth/device', [
            'headers'     => [
                'Authorization' => 'Basic ' . base64_encode($this->allegroClientId . ':' . $this->allegroClientSecret),
                'Content-Type'  => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'client_id' => $this->allegroClientId
            ]
        ]);

        $authorizationTokens = $res->getBody()->getContents();

        return json_decode($authorizationTokens, true);
    }

    public function getTokensForDevice($deviceCode)
    {
        try {
            $res = $this->client->request('POST', $this->allegroUrl . '/auth/oauth/token', [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->allegroClientId . ':' . $this->allegroClientSecret),
                    'Content-Type'  => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'grant_type' => 'urn:ietf:params:oauth:grant-type:device_code',
                    'device_code' => $deviceCode,
                ]
            ]);
        }
        catch (\GuzzleHttp\Exception\ClientException $clientException)
        {
            $errorContentBody = $clientException->getResponse()->getBody()->getContents();
            $errorContent = json_decode($errorContentBody, true);

            if ('authorization_pending' === $errorContent['error'])
            {
                throw new AuthorizationPendingException();
            }

            throw $clientException;
        }

        $authorizationTokens = $res->getBody()->getContents();

        return json_decode($authorizationTokens, true);
    }
}
