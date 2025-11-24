<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function index()
    {
        $data = [
            'name' => "Hello World"
        ];
        return view('template/header_template') . view('login_view', $data) . view('template/footer_template');
    }

    public function showLogin()
    {

        return view('template/header_template') . view('login_view') . view('template/footer_template');
    }

    public function loginValid()
    {
        $data = [
            'name' => $this->request->getPost()
        ];
        return view('template/header_template') . view('login_view', $data) . view('template/footer_template');
    }
}
