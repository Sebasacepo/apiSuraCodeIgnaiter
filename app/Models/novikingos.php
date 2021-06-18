<?php

namespace App\Models;

use CodeIgniter\Model;

class novikingos extends Model
{
    protected $table = 'no-vikingos';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'descripcion', 'foto'];
}