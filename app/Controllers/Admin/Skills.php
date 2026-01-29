<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SkillModel;

class Skills extends BaseController
{
    public function index()
    {
        $model = new SkillModel();
        return view('admin/skills/index', [
            'skills' => $model->orderBy('sort_order','ASC')->findAll()
        ]);
    }

    public function create()
    {
        return view('admin/skills/create');
    }

    public function store()
    {
        $model = new SkillModel();

        $icon = $this->request->getFile('icon');
        $iconName = null;

        if ($icon && $icon->isValid()) {
            $iconName = $icon->getRandomName();
            $icon->move('uploads/skills', $iconName);
        }

        $model->insert([
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon'        => $iconName,
            'sort_order'  => $this->request->getPost('sort_order') ?? 0,
            'status'      => $this->request->getPost('status')
        ]);

        return redirect()->to('/admin/skills')->with('success','Skill added');
    }

    public function edit($id)
    {
        $model = new SkillModel();
        return view('admin/skills/edit', [
            'skill' => $model->find($id)
        ]);
    }

    public function update($id)
    {
        $model = new SkillModel();
        $skill = $model->find($id);

        $iconName = $skill['icon'];
        $icon = $this->request->getFile('icon');

        if ($icon && $icon->isValid()) {
            $iconName = $icon->getRandomName();
            $icon->move('uploads/skills', $iconName);
        }

        $model->update($id, [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon'        => $iconName,
            'sort_order'  => $this->request->getPost('sort_order'),
            'status'      => $this->request->getPost('status')
        ]);

        return redirect()->to('/admin/skills')->with('success','Skill updated');
    }

    public function delete($id)
    {
        (new SkillModel())->delete($id);
        return redirect()->to('/admin/skills')->with('success','Skill deleted');
    }
}
