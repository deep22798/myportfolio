<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model
{
    protected $table = 'testimonials';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'message',
        'author',
        'sort_order',
        'status'
    ];
}
