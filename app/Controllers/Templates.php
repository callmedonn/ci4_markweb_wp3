<?php

namespace App\Controllers;

use App\Models\TemplatesModel;

class Templates extends BaseController
{
    public function index()
    {
        $model = new TemplatesModel();

        // Ambil parameter pencarian dari query string
        $keyword = $this->request->getVar('keyword');

        if(!$keyword) {
            $keyword = "";
        };

        // Lakukan pencarian data template berdasarkan keyword
        $templates = $model->like('title', $keyword)->findAll();

        return view('pages/templates/templates', ['templates' => $templates, 'keyword' => $keyword]);
    }
}
