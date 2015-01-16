<?php

//api key
//https://console.developers.google.com/
// create new project
// left menu APIs & Auth => APIS
//search  URL Shortener API and turn on
//Now browse to menu APIs & Auth => Credentials and click CREATE NEW KEY under Public API Access. In lightbox confirm choose Server key and you will see the box to enter your server IP as below
//After click Create then you will see the API Key you need. It will look like this
//AIzaSyCtbKGkNtOgmxS9_N7Z26kLVVjHK6Xvvls
class GooGl
{
    // get key from http://code.google.com/apis/console/
    private $apiKey = 'AIzaSyCtbKGkNtOgmxS9_N7Z26kLVVjHK6Xvvls';

    //API google shorten url
    private $apiURL = 'https://www.googleapis.com/urlshortener/v1/url';

    private $url;

    /**
     * check curl_init off & trigger error
     */
    public function __construct()
    {
        if (!function_exists('curl_init')) {
            trigger_error('cURL off');
        }
        $this->apiURL = $this->apiURL . '?key=' . $this->apiKey;
    }

    public function setURL($url)
    {
        $this->url = $url;

        return $this;
    }

    public function getShortURL()
    {
        $jsonResponse = $this->curlRequest($this->apiURL, json_encode(array('longUrl' => $this->url)));

        return $jsonResponse->id;
    }

    public function getLongURL()
    {
        $jsonResponse = $this->curlRequest($this->apiURL . '&shortUrl=' . $this->url);

        return $jsonResponse->longUrl;
    }

    /**
     * if $jsonData is null => getLongURL, method GET
     * else getShortURL, method POST
     */
    private function curlRequest($apiURL, $jsonData = null)
    {
        $curlObj = curl_init();
        curl_setopt($curlObj, CURLOPT_URL, $apiURL);
        curl_setopt($curlObj, CURLOPT_HEADER, 0);

        if ($jsonData !== null) {
            curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
            curl_setopt($curlObj, CURLOPT_POST, 1);
            curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);
        }

        curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($curlObj);
        curl_close($curlObj);

        return json_decode($response);
    }
}
