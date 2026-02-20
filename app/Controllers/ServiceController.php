<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ServiceModel;

class ServiceController extends BaseController
{
    public function index()
    {
        $serviceModel = new ServiceModel();
        $serviceModel->getAllServices();
    }
}
