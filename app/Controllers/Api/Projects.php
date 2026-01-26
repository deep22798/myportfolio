<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ProjectModel;

class Projects extends BaseController
{
    public function index()
    {
        $model = new ProjectModel();

        $projects = $model
            ->where('status', 'published')
            ->orderBy('is_featured', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return $this->response->setJSON($projects);
    }

    public function show($slug)
    {
        $model = new ProjectModel();

        $project = $model
            ->where('slug', $slug)
            ->where('status', 'published')
            ->first();

        if (!$project) {
            return $this->response->setStatusCode(404)
                ->setJSON(['message' => 'Project not found']);
        }

        return $this->response->setJSON($project);
    }
}
