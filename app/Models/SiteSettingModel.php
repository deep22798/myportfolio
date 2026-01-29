<?php
namespace App\Models;

use CodeIgniter\Model;

class SiteSettingModel extends Model
{
    protected $table = 'site_settings';
    protected $allowedFields = ['key','value'];

    public function getAllKeyValue()
    {
        return array_column($this->findAll(), 'value', 'key');
    }
}
