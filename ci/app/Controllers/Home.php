<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $BLOGID = '7929797291362040934';

        $options = [
                // 'baseURI' => 'http://example.com/api/v1/',
                'timeout'  => 3
        ];
        $client = \Config\Services::curlrequest($options);

        $response = $client->request('GET', 'https://www.googleapis.com/blogger/v3/blogs/'.$BLOGID.'/posts?key='.$_ENV['BLOGGER']);

        // echo $response->getStatusCode();
        dd($response->getBody());
        // echo $response->getHeader('Content-Type');
        // return view('welcome_message');
        // echo 123;
        // https://www.googleapis.com/blogger/v3/blogs/2399953?key=YOUR-API-KEY
    }
}
