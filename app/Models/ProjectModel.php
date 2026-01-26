<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title',
        'slug',
        'description',
        'type',
        'tech_stack',
        'thumbnail',
        'gallery',
        'demo_url',
        'github_url',
        'is_featured',
        'status'
    ];

    protected $useTimestamps = true;
}
