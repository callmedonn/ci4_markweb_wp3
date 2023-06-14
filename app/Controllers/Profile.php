<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\TemplatesModel;
use App\Models\OrderModel;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $orderModel = new OrderModel();
        $userModel = new UserModel();
        $templateModel = new TemplatesModel();

        // Ambil parameter ID dari query string
        // $id_user = $this->request->getVar('id_user'); 
        $id_user = session()->getFlashData('id');

        // Mengambil data order dari tabel order
        $orders = $orderModel->where('id_user', $id_user)->orderBy('createdDate', 'desc')->findAll();

        $templateOrder = array();
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
                    $customTemplate = $template;
                    $customTemplate['no_order'] = $order['no_order'];
                    $customTemplate['status'] = $order['status'];
                    $templateNames[] = $template; // Ganti dengan kolom yang sesuai dari tabel id_template
                    $templateOrder[] = $customTemplate; // Ganti dengan kolom yang sesuai dari tabel id_template
                }
            }
            $order['id_template'] = $templateNames; // Menggabungkan nama template menjadi string yang dipisahkan koma
        }

        // Kembalikan response dengan data order yang telah dipopulasi
        // return $this->respond($templateOrder);
        return view('pages/profile/profile', ['templates' => $templateOrder]);
    }
}