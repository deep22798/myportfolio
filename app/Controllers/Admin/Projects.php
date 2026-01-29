<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProjectModel;

class Projects extends BaseController
{
    public function index()
    {
        $model = new ProjectModel();
        return view('admin/projects/index', [
            'projects' => $model->orderBy('created_at','DESC')->findAll()
        ]);
    }

    public function create()
    {
        return view('admin/projects/create');
    }

    public function store()
    {
        $model = new ProjectModel();

        // Thumbnail
        $thumb = $this->request->getFile('thumbnail');
        $thumbName = null;
        if ($thumb && $thumb->isValid()) {
            $thumbName = $thumb->getRandomName();
            $thumb->move('uploads/projects/thumbs', $thumbName);
        }

        // Gallery
        $galleryFiles = $this->request->getFiles()['gallery'] ?? [];
        $gallery = [];
        foreach ($galleryFiles as $file) {
            if ($file->isValid()) {
                $name = $file->getRandomName();
                $file->move('uploads/projects/gallery', $name);
                $gallery[] = $name;
            }
        }

        $title = $this->request->getPost('title');

        $model->insert([
            'title'       => $title,
            'slug'        => url_title($title, '-', true),
            'description' => $this->request->getPost('description'),
            'type'        => $this->request->getPost('type'),
            'tech_stack'  => $this->request->getPost('tech_stack'),
            'thumbnail'   => $thumbName,
            'gallery'     => json_encode($gallery),
            'demo_url'    => $this->request->getPost('demo_url'),
            'github_url'  => $this->request->getPost('github_url'),
            'is_featured' => $this->request->getPost('is_featured') ? 1 : 0,
            'status'      => $this->request->getPost('status')
        ]);

        return redirect()->to('/admin/projects')->with('success', 'Project added');
    }

    public function edit($id)
    {
        $model = new ProjectModel();
        return view('admin/projects/edit', [
            'project' => $model->find($id)
        ]);
    }

    public function update($id)
    {
        $model = new ProjectModel();
        $project = $model->find($id);

        $thumbName = $project['thumbnail'];
        $thumb = $this->request->getFile('thumbnail');
        if ($thumb && $thumb->isValid()) {
            $thumbName = $thumb->getRandomName();
            $thumb->move('uploads/projects/thumbs', $thumbName);
        }

        $model->update($id, [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'type'        => $this->request->getPost('type'),
            'tech_stack'  => $this->request->getPost('tech_stack'),
            'thumbnail'   => $thumbName,
            'demo_url'    => $this->request->getPost('demo_url'),
            'github_url'  => $this->request->getPost('github_url'),
            'is_featured' => $this->request->getPost('is_featured') ? 1 : 0,
            'status'      => $this->request->getPost('status')
        ]);

        return redirect()->to('/admin/projects')->with('success', 'Project updated');
    }

    public function delete($id)
    {
        (new ProjectModel())->delete($id);
        return redirect()->to('/admin/projects')->with('success', 'Project deleted');
    }
}
