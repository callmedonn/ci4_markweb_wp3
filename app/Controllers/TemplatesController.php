<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class TemplatesController extends ResourceController
{
    protected $modelName = 'App\Models\TemplatesModel';
    protected $format    = 'json';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = $this->model;

        // Ambil parameter pencarian dari query string
        $keyword = $this->request->getVar('keyword');

        // Lakukan pencarian data template berdasarkan keyword
        $templates = $model->like('title', $keyword)
                    // ->orLike('description', $keyword)
                    // ->orLike('price', $keyword)
                    // ->orLike('link_download', $keyword)
                    ->findAll();

        // Kembalikan response dengan data template hasil pencarian
        return $this->respond($templates);
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $templateModel = $this->model;
        $template = $templateModel->find($id);

        if (!$template) {
            $response = [
                'status' => false,
                'message' => 'Template not found'
            ];

            return $this->respond($response, ResponseInterface::HTTP_NOT_FOUND);
        }

        return view('pages/detail_template/detail_template', ['template' => $template]);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            // 'link_download' => 'required',
            'stacks' => 'required'
        ];

        if (!$this->validate($rules)) {
            $validationErrors = $this->validator->getErrors();
            return $this->failValidationErrors($validationErrors);
        }

        $title = $this->request->getVar('title');
        $description = $this->request->getVar('description');
        $price = $this->request->getVar('price');
        $stacks = $this->request->getVar('stacks');

        // Ambil file gambar yang diunggah
        $image = $this->request->getFile('image');

        // Ambil file zip yang diunggah
        $link_download = $this->request->getFile('link_download');

        // Validasi file gambar
        if ($image->isValid() && !$image->hasMoved()) {
        // Pindahkan file ke direktori tujuan
        $newName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads', $newName);

        // Pindahkan file ke direktori tujuan
        $newNameLink = $link_download->getRandomName();
        $link_download->move(ROOTPATH . 'public/uploads', $newNameLink);

            $templateModel = $this->model;
            $templateModel->insert([
                'title' => $title,
                'description' => $description,
                'price' => $price,
                'link_download' => $newNameLink,
                'image' => $newName,
                'stacks' => $stacks,
            ]);
    
            $response = [
                'status' => true,
                'message' => 'Template created successfully'
            ];
    
            return $this->respond($response, ResponseInterface::HTTP_CREATED);
        }
    }


    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {

        $templateModel = $this->model;
        // Ambil data template berdasarkan ID

        $template = $templateModel->find($id);

        // Jika template tidak ditemukan, kembalikan response 404
        if (!$template) {
            return $this->respond(['message' => 'Template not found'], 404);
        }

        // Validasi input
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'permit_empty',
            'description' => 'permit_empty',
            'price' => 'permit_empty|numeric',
            'link_download' => 'permit_empty'
        ]);

        // Cek apakah validasi berhasil
        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembalikan response 422 dengan pesan error
            return $this->respond(['message' => $validation->getErrors()], 422);
        }

        // Update data template
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'link_download' => $this->request->getVar('link_download')
        ];

        $templateModel->update($id, $data);

        // Kembalikan response 200 dengan pesan sukses
        return $this->respond(['message' => 'Template updated successfully']);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = $this->model;

        // Ambil data template berdasarkan ID
        $template = $model->find($id);

        // Jika template tidak ditemukan, kembalikan response 404
        if (!$template) {
            return $this->respond(['message' => 'Template not found'], 404);
        }

        // Hapus data template
        $model->delete($id);

        // Kembalikan response 200 dengan pesan sukses
        return $this->respond(['message' => 'Template deleted successfully']);
    }

    /**
     * getLatest
     */
    public function getLatest()
    {
        $model = $this->model;

        // Ambil 2 data terbaru dari tabel templates
        $templates = $model->orderBy('createdDate', 'DESC')->findAll(2);

        // Kembalikan response dengan data template terbaru
        return $this->respond($templates);
    }

    /**
     * getCart
     */
    public function getCart()
    {
        $model = $this->model;

        // Ambil parameter ID dari query string
        $ids = $this->request->getVar('ids'); 

        // Pisahkan ID yang dikirimkan menjadi array
        $idArr = explode(',', $ids);

        // Ambil data templates berdasarkan ID yang dikirimkan
        $templates = $model->whereIn('id', $idArr)->findAll();

        // Kembalikan response dengan data templates yang sesuai
        // return $this->respond($templates);
        return view('pages/cart/cart', ['templates' => $templates]);
    }
    
}
