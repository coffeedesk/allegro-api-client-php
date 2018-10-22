<?php

namespace Allegro\Authentication;

class Authenticator
{
    /**
     * @var string
     */
    private $allegroUrl;

    /** @var string */
    private $clientId;

    /** @var string */
    private $redirectUrl;

    /** @var string */
    private $clientSecret;

    /** @var \GuzzleHttp\Client */
    private $client;

    public function __construct($allegroUrl, $clientId, $clientSecret, $redirectUrl)
    {
        $this->allegroUrl = $allegroUrl;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUrl = $redirectUrl;

        // @TODO: autowire this
        $this->client = new \GuzzleHttp\Client();
    }

    public function getAuthorizeUrl()
    {
        return $this->allegroUrl . '/auth/oauth/authorize?response_type=code&client_id=' . $this->clientId . '&redirect_uri=' . $this->redirectUrl;
    }

    public function getAuthenticationTokensFromAuthorizationToken($authorizationToken)
    {
        $res = $this->client->request(
            'GET',
            $this->allegroUrl . '/auth/oauth/token?grant_type=authorization_code&code=' . $authorizationToken . '&redirect_uri=' . $this->redirectUrl,
            [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret)
                ]
            ]
        );
        $resultBody = $res->getBody();

        return json_decode($resultBody);
    }

//
//if (!empty($_GET['send_offer']) && empty($_GET['code'])) {
//    $client = new GuzzleHttp\Client();
//
//    $configuration = new \OpenAPI\Client\Configuration();
////$configuration->setHost('http://integration_allegro.local:32771/');
//    $configuration->setHost('https://api.allegro.pl.allegrosandbox.pl')
//        ->setApiKey('Api-Key', '2e41bf6dda7d4957a010849237b19397')
////        ->setApiKeyPrefix('Authorization', 'Bearer')
//        ->setAccessToken('eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1NDAyMzY5NTQsInVzZXJfbmFtZSI6IjQ0MDcwMDgyIiwianRpIjoiZWQyZTMxNmUtYTc3ZS00NzFkLWIxMzktMWNiMDI1ZDI4ZTViIiwiY2xpZW50X2lkIjoiMmU0MWJmNmRkYTdkNDk1N2EwMTA4NDkyMzdiMTkzOTciLCJzY29wZSI6WyJhbGxlZ3JvX2FwaSJdfQ.qlMAO0gVMgUwqToHF2kNWTC6TYYszJrgEMBxGMT5OqMAIFcN_6tfWJArTWwxkXhKPQsrabe0V2pDwCMzJ6CUjPlpeSRh4CnPLDO1nnCq0JkwpMY7O_kC4OV7xuazlkWVHeyZus0ejKX9LPoLM54CrRLMpyfkoTTVBph4uyxtWJ_jtRLqLs73VOlG8UrBRPodhTfZp9nzi1fq-8YNIZj8pS2XOvrFHa125R0gatv5-PCa1mBSg4Zr5KG7qT1OAt5INtk7cqFzvT8I0QZavRhCVXoIoEA8V-B8FO5YvHgq__V9nB-cAhtCHn5rs6te-4NJ3SuCtXJ-xxsbqp23i0mtIw');
//
//    $apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
//// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
//// This is optional, `GuzzleHttp\Client` will be used as default.
//        $client,
//        $configuration
//    );
//    $offer = new \OpenAPI\Client\Model\Offer(); // \OpenAPI\Client\Model\Offer | offer
//    $offer->setName('test');
//
//    try {
//        $result = $apiInstance->createOfferUsingPOST($offer);
//        print_r($result);
//    } catch (Exception $e) {
//        echo 'Exception when calling OfferManagementApi->createOfferUsingPOST: ', $e->getMessage(), PHP_EOL;
//    }
//}
//}
}
