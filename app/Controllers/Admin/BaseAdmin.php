<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class BaseAdmin extends BaseController
{
    public function __construct()
    {
        if (!session()->get('admin_id')) {
            redirect()->to('/admin')->send();
            exit;
        }
    }
}
