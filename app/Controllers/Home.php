<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('template/header_template').view('welcome_message').view('template/footer_template');
    }

    public function avatar(): string
    {
        // echo "Hello World";
        $data = [
            'name' => 'Miguel Angel',
            'age'  => 21,
            'avatar' => 'https://picsum.photos/id/1/200/300'
        ];
        return view('template/header_template').view('welcome_message', $data).view('template/footer_template');
    }
}
