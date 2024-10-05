<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'status', 'slug', 'thumbnail', 'summary'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getTotalBerita()
    {
        return $this->countAll();
    }

    public function getTotalPublished()
    {
        return $this->where('status', 'publish')->countAllResults();
    }

    public function getTotalDraft()
    {
        return $this->where('status', 'draft')->countAllResults();
    }

    public function getLatestPublishedNews($limit = 3)
    {
        return $this->where('status', 'publish')
                    ->orderBy('created_at', 'DESC')
                    ->findAll($limit);
    }

    public function getLatestPublishedNewsExcluding($excludeSlug, $limit = 3)
    {
        return $this->where('status', 'publish')
                    ->where('slug !=', $excludeSlug)
                    ->orderBy('created_at', 'DESC')
                    ->findAll($limit);
    }
}


