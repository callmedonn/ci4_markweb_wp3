<?php

namespace App\Controllers;

use App\Models\TemplatesModel;

class Templates extends BaseController
{
    /**
     * index
     */
    public function index()
    {
        $model = new TemplatesModel();

        // Ambil parameter pencarian dari query string
        $keyword = $this->request->getVar('keyword');

        if (!$keyword) {
            $keyword = "";
        }
        ;

        // Lakukan pencarian data template berdasarkan keyword
        $templates = $model->like('title', $keyword)->findAll();

        return view('pages/templates/templates', ['templates' => $templates, 'keyword' => $keyword]);
    }

    public function getTemplatesRoute()
    {
        $model = new TemplatesModel();

        // Ambil parameter ID dari query string
        $query = $this->request->getVar('query');

        if ($query == "template_1") {
            return view('pages/templates/templates_order/template_1');
        } elseif ($query == "template_2") {
            return view('pages/templates/templates_order/template_2');
        } else {
            return view('pages/templates/templates_order/template_3');
        }

    }
}