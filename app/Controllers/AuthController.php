<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\TemplatesModel;
use App\Models\UserModel;
use App\Models\OrderModel;


class AuthController extends BaseController
{
    /**
     * index Login
     */
    public function index()
    {
        $message = null;
        return view('pages/auth/login', ['message' => $message]);
    }

    /**
     * register
     */
    public function register()
    {
        return view('pages/auth/register');
    }

    /**
     * Process
     */
    public function process()
    {
        // Ambil data username dan password dari input form
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Inisialisasi model User
        $userModel = new UserModel();

        // Cari user berdasarkan username
        $user = $userModel->where('username', $username)->first();

        // Cek apakah user ditemukan dan password sesuai
        if ($user && password_verify($password, $user['password'])) {
            $model = new TemplatesModel();

            // Ambil 2 data terbaru dari tabel templates
            $templates = $model->orderBy('createdDate', 'DESC')->findAll(2);
            session()->setFlashdata('id', $user['id']);
            session()->setFlashdata('email', $user['email']);
            session()->setFlashdata('fullname', $user['fullname']);
            session()->setFlashdata('role', $user['role']);
            session()->setFlashdata('username', $username);

            if ($user['role'] == 'admin') {
                $userModel = new UserModel();
                $templatesModel = new TemplatesModel();
                $orderModel = new OrderModel();

                return view('pages/admin/admin', ['user' => $userModel->countAll(), 'templates' => $templatesModel->countAll(), 'order' => $orderModel->countAll()]);
            } else {
                return view('pages/homepage/homepage', ['templates' => $templates]);
            }

        } else {
            // Jika username atau password salah, alihkan kembali ke halaman login dengan pesan error
            // return redirect()->to('login')->with('error', 'Username or password is incorrect');
            $message = 'wrong username or password!';
            return view('pages/auth/login', ['message' => $message]);
        }
    }

    public function logout()
    {
        // Hapus data sesi pada logout
        session()->remove('username');
        session()->remove('fullname');
        session()->remove('role');
        session()->remove('email');
        session()->remove('id');

        // Redirect ke halaman utama setelah logout
        return redirect()->to('/');
    }
}