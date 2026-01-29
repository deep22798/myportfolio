<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ExperienceModel;

class Experience extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ExperienceModel();
    }

    public function index()
    {
        $data['stats'] = $this->model
            ->orderBy('sort_order','ASC')
            ->findAll();

        return view('admin/experience/index', $data);
    }

    public function store()
    {
        $this->model->save([
            'label'      => $this->request->getPost('label'),
            'value'      => $this->request->getPost('value'),
            'suffix'     => '+',
            'sort_order' => $this->request->getPost('sort_order'),
            'status'     => 1
        ]);

        return redirect()->back();
    }
}
