<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function login()
    {
        $model = new AdminModel();

        $admin = $model->where('email', $this->request->getPost('email'))->first();

        if ($admin && password_verify($this->request->getPost('password'), $admin['password'])) {
            session()->set('admin_id', $admin['id']);
            session()->set('admin_name', $admin['name']);
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->back()->with('error', 'Invalid login details');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin');
    }
}
