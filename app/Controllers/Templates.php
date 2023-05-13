<?php

namespace App\Controllers;

class Templates extends BaseController
{
    public function index()
    {
        return view('pages/templates/templates');
    }
}
