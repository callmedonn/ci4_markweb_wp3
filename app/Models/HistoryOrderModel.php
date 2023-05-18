<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryOrderModel extends Model
{
    protected $table = 'history_order';
    protected $allowedFields = ['id_user', 'id_order', 'createdDate'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
