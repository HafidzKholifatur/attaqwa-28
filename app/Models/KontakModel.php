<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = 'kontak_masuk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'subject', 'message'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
