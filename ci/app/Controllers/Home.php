<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        echo view('header');
        echo view('home');
        echo view('footer');
    }

     public function about()
    {
        echo view('header');
        echo view('about');
        echo view('footer');
    }

     public function admission()
    {
        echo view('header');
        echo view('admission');
        echo view('footer');
    }

     public function contact()
    {
        echo view('header');
        echo view('contact');
        echo view('footer');
    }

    public function blog()
    {
        $BLOGID = $_ENV['BLOGGER_ID'];
        $client = \Config\Services::curlrequest();

        $response = $client->request('GET', 'https://www.googleapis.com/blogger/v3/blogs/'.$BLOGID.'/posts?key='.$_ENV['BLOGGER']);

        $data = [ 'blogs' => json_decode($response->getBody())->items
        ];

        echo view('header');
        echo view('blog', $data);
        echo view('footer');
    }


    public function blogD($id)
    {
        $BLOGID = $_ENV['BLOGGER_ID'];
        $client = \Config\Services::curlrequest();

        $response = $client->request('GET', 'https://www.googleapis.com/blogger/v3/blogs/'.$BLOGID.'/posts/'.$id.'?key='.$_ENV['BLOGGER']);

        $data = [ 'blog' => json_decode($response->getBody())
        ];

        echo view('header');
        echo view('blogSingle', $data);
        echo view('footer');
    }
}
