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

        $loginForm = $this->request->getPost(['login', 'clave']);

        $loginBD = "mp";
        $clave = "1234";

        if ($loginForm['login'] == $loginBD && $loginForm['clave'] == $clave) {
            $data = [
                'name' => "<h1>Acceso concedido</h1>"
            ];
            return view('template/header_template') . view('login_view', $data) . view('template/footer_template');
        } else {
            $data = [
                'name' => "<h1>Acceso denegado</h1>"
            ];
            return view('template/header_template') . view('login_view', $data) . view('template/footer_template');
        }
    }
}
