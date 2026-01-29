<?php

namespace App\Models;

use CodeIgniter\Model;

class ExperienceModel extends Model
{
    protected $table = 'experience_stats';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'label',
        'value',
        'sort_order'
    ];
}
