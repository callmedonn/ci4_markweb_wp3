<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Portfolio extends BaseController
{
    public function index()
    {

        // Kembalikan response dengan data order yang telah dipopulasi
        // return $this->respond($templateOrder);
        return view('pages/portfolio/portfolio');
    }
}