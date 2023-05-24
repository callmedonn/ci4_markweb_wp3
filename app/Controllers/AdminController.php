<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends BaseController
{
    public function index()
    {
        return view('pages/admin/admin');
    }
}