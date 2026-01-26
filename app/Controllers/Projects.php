<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Projects extends BaseController
{
    public function show($slug)
    {
        $model = new ProjectModel();

        $project = $model
            ->where('slug', $slug)
            ->where('status', 'published')
            ->first();

        if (!$project) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('project/show', [
            'project' => $project,
            'title' => $project['title']
        ]);
    }
    public function index()
{
    $model = new \App\Models\ProjectModel();

    $projects = $model
        ->where('status', 'published')
        ->orderBy('created_at', 'DESC')
        ->findAll();

    return view('project/index', [
        'project' => $projects,
        'title' => 'Projects'
    ]);
}




}


