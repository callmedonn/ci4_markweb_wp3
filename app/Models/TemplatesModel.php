<?php

namespace App\Models;

use CodeIgniter\Model;

class TemplatesModel extends Model
{
    protected $table = 'templates';
    protected $allowedFields = ['title', 'description', 'price', 'link_download', 'url', 'image', 'stacks', 'createdDate', 'updatedDate'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}