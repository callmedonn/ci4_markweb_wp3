<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends ResourceController
{
    protected $modelName = 'App\Models\UserModel';
    protected $format = 'json';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $users = $this->model->findAll();

        return $this->respond($users);
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $userModel = $this->model;
        $user = $userModel->find($id);

        if (!$user) {
            $response = [
                'status' => false,
                'message' => 'User not found'
            ];

            return $this->respond($response, ResponseInterface::HTTP_NOT_FOUND);
        }

        return $this->respond($user);
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
            'username' => 'required',
            'fullname' => 'required',
            'password' => 'required',
            'email' => 'required',
            // 'role' => 'required'
        ];

        if (!$this->validate($rules)) {
            $validationErrors = $this->validator->getErrors();
            return $this->failValidationErrors($validationErrors);
        }

        $username = $this->request->getVar('username');
        $fullname = $this->request->getVar('fullname');
        $password = $this->request->getVar('password');
        $email = $this->request->getVar('email');
        $role = $this->request->getVar('role');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $userModel = $this->model;
        $userModel->insert([
            'username' => $username,
            'fullname' => $fullname,
            'password' => $hashedPassword,
            'email' => $email,
            'role' => 'customer'
        ]);

        $response = [
            'status' => true,
            'message' => 'User created successfully'
        ];

        // return $this->respond($response, ResponseInterface::HTTP_CREATED);
        return view('pages/auth/login');
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
        //
    }

    // /**
    //  * Delete the designated resource object from the model
    //  *
    //  * @return mixed
    //  */
    // public function delete($id = null)
    // {
    //     //
    // }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = $this->model;

        // Ambil data user berdasarkan ID
        $user = $model->find($id);

        // Jika user tidak ditemukan, kembalikan response 404
        if (!$user) {
            return $this->respond(['message' => 'User not found'], 404);
        }

        // Hapus data user
        $model->delete($id);

        // Kembalikan response 200 dengan pesan sukses
        return $this->respond(['message' => 'User deleted successfully']);
    }
}