<?php

namespace App\Models;

use CodeIgniter\Model;

class SiteSettingModel extends Model
{
    protected $table      = 'site_settings';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';

    protected $allowedFields = [
        'hero_name',
        'hero_title',
        'hero_subtitle',
        'updated_at'
    ];

    protected $useTimestamps = false;

}

