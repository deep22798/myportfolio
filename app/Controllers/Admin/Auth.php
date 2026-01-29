<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminUserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }

  public function authenticate()
{
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $model = new \App\Models\AdminUserModel();
    $user = $model->where('email', $email)->first();

    if (!$user || !password_verify($password, $user['password'])) {
        return redirect()->back()->with('error', 'Invalid login');
    }

    session()->set([
        'admin_id' => $user['id'],
        'admin_name' => $user['name'],
        'isAdminLoggedIn' => true
    ]);

    return redirect()->to('/admin');
}


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
