<?php

namespace App\Models;

use CodeIgniter\Model;

class crud_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'email', 'telefono', 'usuario', 'pass', 'perfil_id', 'baja', 'created_at'];
}
