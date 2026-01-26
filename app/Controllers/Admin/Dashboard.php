<?php

namespace App\Controllers\Admin;

class Dashboard extends BaseAdmin
{
    public function index()
    {
        return view('admin/dashboard');
    }
}
