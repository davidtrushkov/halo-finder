<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Cache;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

use GuzzleHttp;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GetGeneralStatsController extends Controller
{


    /**
     * Fetch Spartan Ranks
     *
     * @return mixed
     */
    public function getRanks() {

        $client = new GuzzleHttp\Client();

        $baseURL = 'https://www.haloapi.com/metadata/h5/metadata/spartan-ranks';

        $res = $client->request('GET', $baseURL, [
            'headers' => [
                'Ocp-Apim-Subscription-Key' => env('Ocp-Apim-Subscription-Key')
            ]
        ]);

        if ($res->getStatusCode() == 200) {
            return $result = json_decode($res->getBody());
        } elseif ($res->getStatusCode() == 404) {
            return $result = redirect()->back();
        }

        return $res;
    }


    /**
     * Fetch a Players Arena Stats
     *
     * @param $slug
     * @return mixed
     */
    public function getPlayerArenaStats($slug) {

        $client = new GuzzleHttp\Client();

        // Assign new slug to the slug in URL
        $newSlug = $slug;

        // Replace the slug (Gamertag) - with a space (%20)
        $replaceDashes = str_replace('-', ' ', $newSlug);

        $baseURL = 'https://www.haloapi.com/stats/h5/servicerecords/arena?players=' . $replaceDashes;

        $res = $client->request('GET', $baseURL, [
            'headers' => [
                'Ocp-Apim-Subscription-Key' => env('Ocp-Apim-Subscription-Key')
            ]
        ]);

        // Cache Arena stats
        Cache::put('ArenaStats', json_decode($res->getBody()), 10);

        if ($res->getStatusCode() == 200) {
            return $result = json_decode($res->getBody());
        } elseif ($res->getStatusCode() == 404) {
            return $result = redirect()->back();
        }

        return $res;
    }


    /**
     * Get a Players Spartan Image
     *
     * @param $slug
     * @return string
     */
    public function getPlayerSpartanImage($slug) {

        // https://www.haloapi.com/profile/{title}/profiles/{player}/spartan
        $onRedirect = function(RequestInterface $request, ResponseInterface $response, UriInterface $uri) {};

        $client = new GuzzleHttp\Client();

        // Assign new slug to the slug in URL
        $newSlug = $slug;

        // Replace the slug (Gamertag) - with a space (%20)
        $replaceDashes = str_replace('-', ' ', $newSlug);

        $baseURL = 'https://www.haloapi.com/profile/h5/profiles/' . $replaceDashes .'/spartan';


        $res = $client->request('GET', $baseURL,
            [
                'headers' =>
                    [
                        'Ocp-Apim-Subscription-Key' => env('Ocp-Apim-Subscription-Key')
                    ],
                'allow_redirects' => [
                    'max'             => 10,        // allow at most 10 redirects.
                    'strict'          => true,      // use "strict" RFC compliant redirects.
                    'referer'         => true,      // add a Referrer header
                    'protocols'       => ['http','https'], // only allow https URLs
                    'on_redirect'     => $onRedirect,
                    'track_redirects' => true
                ]
            ]);

        if($res->getStatusCode() == 200) {
            $redirectHistory = $res->getHeaderLine('X-Guzzle-Redirect-History');
            return $redirectHistory; // Return image URL.
        }elseif ($res->getStatusCode() == 404) {
            return $result = redirect()->back();
        }
    }


    /** Get a Players Emblem
     *
     * @param $slug
     * @return string
     */
    public function getPlayerEmblemImage($slug) {

        // https://www.haloapi.com/profile/{title}/profiles/{player}/spartan
        $onRedirect = function(RequestInterface $request, ResponseInterface $response, UriInterface $uri) {};

        // https://www.haloapi.com/profile/{title}/profiles/{player}/emblem
        $client = new GuzzleHttp\Client();

        $newSlug = $slug;

        // Replace the slug (Gamertag) - with a space (%20)
        $replaceDashes = str_replace('-', ' ', $newSlug);

        $baseURL = 'https://www.haloapi.com/profile/h5/profiles/' . $replaceDashes .'/emblem';

        $res = $client->request('GET', $baseURL,
            [
                'headers' =>
                    [
                        'Ocp-Apim-Subscription-Key' => env('Ocp-Apim-Subscription-Key')
                    ],
                'allow_redirects' => [
                    'max'             => 10,        // allow at most 10 redirects.
                    'strict'          => true,      // use "strict" RFC compliant redirects.
                    'referer'         => true,      // add a Referrer header
                    'protocols'       => ['http','https'], // only allow https URLs
                    'on_redirect'     => $onRedirect,
                    'track_redirects' => true
                ]
            ]);

        if($res->getStatusCode() == 200) {
            $redirectHistory = $res->getHeaderLine('X-Guzzle-Redirect-History');
            return $redirectHistory; // Return image URL.
        }elseif ($res->getStatusCode() == 404) {
            return $result = redirect()->back();
        }

    }

}