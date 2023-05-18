<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\OrderModel;
use App\Models\UserModel;
use App\Models\TemplatesModel;

class OrderController extends ResourceController
{
    // protected $modelName = 'App\Models\OrderModel';
    // protected $format    = 'json';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $orderModel = new OrderModel();
        $userModel = new UserModel();
        $templateModel = new TemplatesModel();

        // Mengambil data order dari tabel order
        $orders = $orderModel->findAll();

        // Loop melalui setiap order
        foreach ($orders as &$order) {
            // Mempopulate data id_user dari tabel user
            $user = $userModel->find($order['id_user']);
            $order['id_user'] = $user; // Ganti dengan kolom yang sesuai dari tabel user

            // Mengambil data id_template dalam bentuk string yang berisi ID
            $id_template = explode(',', $order['id_template']); // Jika id_template adalah string yang berisi ID yang dipisahkan koma
            $templateNames = array();
            foreach ($id_template as $id_template) {
                $template = $templateModel->find($id_template);
                if ($template) {
                    $templateNames[] = $template; // Ganti dengan kolom yang sesuai dari tabel id_template
                }
            }
            $order['id_template'] = $templateNames; // Menggabungkan nama template menjadi string yang dipisahkan koma
        }

        // Kembalikan response dengan data order yang telah dipopulasi
        return $this->respond($orders);
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $orderModel = new OrderModel();
        $userModel = new UserModel();
        $templateModel = new TemplatesModel();


        // Cari order berdasarkan ID
        $order = $orderModel->find($id);

        
        if (!$order) {
            $response = [
                'status' => false,
                'message' => 'Order not found'
            ];

            return $this->respond($response, ResponseInterface::HTTP_NOT_FOUND);
        }

        // Mempopulate data id_user dari tabel user
        $user = $userModel->find($order['id_user']);
        $order['id_user'] = $user; // Ganti dengan kolom yang sesuai dari tabel user
                
        // Mengambil data id_template dalam bentuk string yang berisi ID
        $id_template = explode(',', $order['id_template']); // Jika id_template adalah string yang berisi ID yang dipisahkan koma
            $templateNames = array();
            foreach ($id_template as $id_template) {
                 $template = $templateModel->find($id_template);
                  if ($template) {
                      $templateNames[] = $template; // Ganti dengan kolom yang sesuai dari tabel id_template
                  }
        }

        $order['id_template'] = $templateNames; // Menggabungkan nama template menjadi string yang dipisahkan koma
                // Kembalikan response dengan data order yang telah dipopulasi
                return $this->respond($order);
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
        $orderModel = new OrderModel();

        // Ambil data dari body request
        $id_user = $this->request->getVar('id_user');
        $id_template = $this->request->getVar('id_template');
        $status = $this->request->getVar('status');
        $no_order = $this->request->getVar('no_order');

        // Ambil file gambar yang diunggah
        $image = $this->request->getFile('image');

        // Validasi file gambar
        if ($image->isValid() && !$image->hasMoved()) {
        // Pindahkan file ke direktori tujuan
        $newName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads', $newName);

        // Validasi data
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id_user' => 'required',
            'id_template' => 'required',
            // 'image' => 'required',
            'status' => 'required',
            'no_order' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->fail($validation->getErrors(), 400);
        }

        // Ubah array $id_template menjadi string dengan pemisah koma
        // $id_template = implode(',', $id_template);

        // Simpan order ke dalam database
        $data = [
            'id_user' => (int)$id_user,
            'id_template' => $id_template,
            'image' => $newName,
            'status' => $status,
            'no_order' => $no_order
        ];

        $orderModel->insert($data);

        // Kembalikan response 201 Created
        return $this->respondCreated(['message' => 'Order created successfully']);

        } else {
                // Tampilkan response gagal
        return $this->fail('Failed to create order.');
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
    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {

        $orderModel = new OrderModel();
        // Ambil data order berdasarkan ID

        $order = $orderModel->find($id);

        // Jika order tidak ditemukan, kembalikan response 404
        if (!$order) {
            return $this->respond(['message' => 'Template not found'], 404);
        }

        // Validasi input
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'status' => 'permit_empty',
        ]);

        // Cek apakah validasi berhasil
        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembalikan response 422 dengan pesan error
            return $this->respond(['message' => $validation->getErrors()], 422);
        }

        // Update data order
        $data = [
            'status' => $this->request->getVar('status'),
        ];

        $orderModel->update($id, $data);

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
        //
    }
}