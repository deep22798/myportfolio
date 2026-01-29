<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\SiteSettingModel;

class Settings extends BaseController
{
    public function index()
    {
        return view('admin/settings/index', [
            'site' => (new SiteSettingModel())->first()
        ]);
    }

    public function update()
    {
        (new SiteModel())->update(1, [
            'hero_name'     => $this->request->getPost('hero_name'),
            'hero_title'    => $this->request->getPost('hero_title'),
            'hero_subtitle' => $this->request->getPost('hero_subtitle'),
        ]);

        return redirect()->back()->with('success', 'Settings updated');
    }
}
