<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\TemplatesModel;
use App\Models\OrderModel;

class AdminController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $templatesModel = new TemplatesModel();
        $orderModel = new OrderModel();

        return view('pages/admin/admin', ['user' => $userModel->countAll(), 'templates' => $templatesModel->countAll(), 'order' => $orderModel->countAll()]);
    }
    public function templatesAdmin()
    {
        $templatesModel = new TemplatesModel();

        $model = $templatesModel;

        // Ambil parameter pencarian dari query string
        $keyword = "";

        // Lakukan pencarian data template berdasarkan keyword
        $templates = $model->like('title', $keyword)
            ->orderBy('createdDate', 'desc')
            ->findAll();

        return view('pages/admin/pagesAdmin/templates', ['templatesCount' => $templatesModel->countAll(), 'templates' => $templates]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $templateModel = new TemplatesModel();
        $template = $templateModel->find($id);

        if (!$template) {
            $response = [
                'status' => false,
                'message' => 'Template not found'
            ];

            // return $this->respond($response, ResponseInterface::HTTP_NOT_FOUND);
        }

        return view('pages/admin/pagesAdmin/detailTemplate', ['template' => $template]);
    }
    public function addTemplate()
    {
        return view('pages/admin/pagesAdmin/addTemplate');
    }

    public function usersAdmin()
    {
        $usersModel = new UserModel();

        $model = $usersModel;

        // Ambil parameter pencarian dari query string
        $keyword = "";

        // Lakukan pencarian data template berdasarkan keyword
        $users = $model->like('username', $keyword)
            ->orderBy('createdDate', 'desc')
            ->findAll();

        return view('pages/admin/pagesAdmin/users', ['usersCount' => $usersModel->countAll(), 'users' => $users]);
    }
    public function ordersAdmin()
    {
        $ordersModel = new OrderModel();

        $model = $ordersModel;

        // Ambil parameter pencarian dari query string
        $keyword = "";

        // Lakukan pencarian data template berdasarkan keyword
        $orders = $model->like('id_user', $keyword)
            ->orderBy('createdDate', 'desc')
            ->findAll();

        return view('pages/admin/pagesAdmin/orders', ['ordersCount' => $ordersModel->countAll(), 'orders' => $orders]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function showOrder($id = null)
    {
        $orderModel = new OrderModel();
        $order = $orderModel->find($id);

        if (!$order) {
            $response = [
                'status' => false,
                'message' => 'Template not found'
            ];

            // return $this->respond($response, ResponseInterface::HTTP_NOT_FOUND);
        }

        return view('pages/admin/pagesAdmin/detailOrder', ['order' => $order]);
    }


}