<?php

namespace App\Controllers\Admin;

use App\Models\ProjectModel;
use CodeIgniter\Files\File;


class Projects extends BaseAdmin
{
    public function index()
    {
        $model = new ProjectModel();
        $data['projects'] = $model->orderBy('id', 'DESC')->findAll();
        return view('admin/projects/index', $data);
    }

    public function create()
    {
        return view('admin/projects/create');
    }

public function store()
{
    helper(['text', 'filesystem']);

    $model = new \App\Models\ProjectModel();

    // ---------- Thumbnail ----------
    $thumbFile = $this->request->getFile('thumbnail');
    $thumbName = null;

    if ($thumbFile && $thumbFile->isValid()) {
        $thumbName = $thumbFile->getRandomName();
        $thumbFile->move(ROOTPATH . 'public/uploads/projects/thumbs', $thumbName);
    }

    // ---------- Gallery ----------
    $galleryFiles = $this->request->getFiles('gallery');
    $galleryNames = [];

    if (!empty($galleryFiles['gallery'])) {
        foreach ($galleryFiles['gallery'] as $file) {
            if ($file->isValid()) {
                $name = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads/projects/gallery', $name);
                $galleryNames[] = $name;
            }
        }
    }

    $slug = url_title($this->request->getPost('title'), '-', true);

    $data = [
        'title'       => $this->request->getPost('title'),
        'slug'        => $slug,
        'description' => $this->request->getPost('description'),
        'type'        => $this->request->getPost('type'),
        'tech_stack'  => json_encode($this->request->getPost('tech_stack')),
        'thumbnail'   => $thumbName,
        'gallery'     => json_encode($galleryNames),
        'demo_url'    => $this->request->getPost('demo_url'),
        'github_url'  => $this->request->getPost('github_url'),
        'is_featured' => $this->request->getPost('is_featured') ? 1 : 0,
        'status'      => $this->request->getPost('status'),
    ];

    $model->insert($data);
    return redirect()->to('/admin/projects')->with('success', 'Project added');
}

}
