<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Theme extends Controller
{
    public function set($theme)
    {
        // security: allow only light / dark
        if (!in_array($theme, ['light', 'dark'])) {
            return;
        }

        session()->set('theme', $theme);
    }
}
