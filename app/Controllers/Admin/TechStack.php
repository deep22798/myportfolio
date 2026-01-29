<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TechStackModel;

class TechStack extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new TechStackModel();
    }

    public function index()
    {
        $data['stack'] = $this->model
            ->orderBy('sort_order','ASC')
            ->findAll();

        return view('admin/techstack/index', $data);
    }

    public function store()
    {
        $this->model->save([
            'name'       => $this->request->getPost('name'),
            'sort_order' => $this->request->getPost('sort_order'),
            'status'     => 1
        ]);

        return redirect()->back();
    }
}
