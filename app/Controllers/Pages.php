<?php

namespace App\Controllers;
  use App\Models\ContactMessageModel;
class Pages extends BaseController
{
  

public function sendContact()
{
    $data = [
        'name'    => $this->request->getPost('name'),
        'email'   => $this->request->getPost('email'),
        'message' => $this->request->getPost('message'),
        'created_at' => date('Y-m-d H:i:s')
    ];

    $model = new ContactMessageModel();
    $model->insert($data);

    return redirect()->to('/contact')
        ->with('success', 'Message sent successfully!');
}

    public function about()
    {
        return view('pages/about', ['title' => 'About']);
    }

    public function contact()
    {
        return view('pages/contact', ['title' => 'Contact']);
    }

}
