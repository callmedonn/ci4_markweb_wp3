<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\TemplatesModel;

class AuthController extends BaseController
{
    /**
     * index Login
     */
    public function index()
    {    
        return view('pages/auth/login');
    }

    /**
     * register
     */
    public function register()
    {    
        return view('pages/auth/register');
    }
}
