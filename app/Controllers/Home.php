<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\TemplatesModel;

class Home extends BaseController
{
    public function index()
    { 
        $model = new TemplatesModel();

        // Ambil 2 data terbaru dari tabel templates
        $templates = $model->orderBy('createdDate', 'DESC')->findAll(2);
        
        return view('pages/homepage/homepage', ['templates' => $templates]);
    }
}
