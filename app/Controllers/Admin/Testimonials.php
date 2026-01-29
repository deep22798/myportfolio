<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TestimonialModel;

class Testimonials extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new TestimonialModel();
    }

    public function index()
    {
        $data['testimonials'] = $this->model
            ->where('status', 1)
            ->findAll();

        return view('admin/testimonials/index', $data);
    }

    public function store()
    {
        $this->model->save([
            'message' => $this->request->getPost('message'),
            'author'  => $this->request->getPost('author'),
            'role'    => $this->request->getPost('role'),
            'status'  => 1
        ]);

        return redirect()->back();
    }
}
