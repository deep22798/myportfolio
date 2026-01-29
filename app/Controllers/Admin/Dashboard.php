<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SkillModel;
use App\Models\ProjectModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $skillModel   = new SkillModel();
        $projectModel = new ProjectModel();

        return view('admin/index', [
            'totalSkills'   => $skillModel->countAllResults(),
            'totalProjects' => $projectModel->countAllResults(),
            'adminName'     => session()->get('admin_name'),
        ]);
    }
}
