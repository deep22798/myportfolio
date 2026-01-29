<?php

namespace App\Models;

use CodeIgniter\Model;

class TechStackModel extends Model
{
    protected $table = 'tech_stack';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'sort_order'
    ];
}
