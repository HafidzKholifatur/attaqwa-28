<?php

// app/Models/SettingsModel.php
namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table = 'settings';
    protected $allowedFields = ['nama_sekolah', 'no_telepon', 'email', 'alamat'];
}
