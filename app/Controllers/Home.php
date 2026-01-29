<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use App\Models\SiteSettingModel;
use App\Models\SkillModel;
use App\Models\ExperienceModel;
use App\Models\TechStackModel;
use App\Models\TestimonialModel;

class Home extends BaseController
{
    public function index()
    {
        // 🔹 Projects (already dynamic – unchanged)
        $projects = (new ProjectModel())
            ->where('status', 'published')
            ->orderBy('created_at', 'DESC')
            ->findAll();

        // 🔹 Other dynamic sections
        $settings     = (new SiteSettingModel())->getAllKeyValue();
        $skills       = (new SkillModel())->where('status', 1)->orderBy('sort_order')->findAll();
        $experience   = (new ExperienceModel())->orderBy('sort_order')->findAll();
        $techStack    = (new TechStackModel())->orderBy('sort_order')->findAll();
        $testimonials = (new TestimonialModel())->where('status', 1)->orderBy('sort_order')->findAll();

        return view('home', [
            'title'        => 'Home',
            'projects'     => $projects,
            'settings'     => $settings,
            'skills'       => $skills,
            'experience'   => $experience,
            'techStack'    => $techStack,
            'testimonials' => $testimonials,
        ]);
    }
}
