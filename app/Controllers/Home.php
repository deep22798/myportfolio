<?php

namespace App\Controllers;

class Home extends BaseController
{
public function index()
{
    $model = new \App\Models\ProjectModel();

    $projects = $model
        ->where('status', 'published')
        ->orderBy('created_at', 'DESC')
        ->findAll();

    return view('home', [
        'projects' => $projects,
        'title' => 'Home'
    ]);
}


}
