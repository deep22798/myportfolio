<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $table = 'skills';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title',
        'description',
        'icon',
        'sort_order',
        'status'
    ];
}
