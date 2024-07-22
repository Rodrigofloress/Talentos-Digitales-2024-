<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'email', 'telefono', 'usuario', 'pass', 'perfil_id', 'baja'];

    public function actualizarUsuario($id, $data)
    {
        return $this->update($id, $data);
    }

    public function eliminarUsuario($id)
    {
        return $this->delete($id);
    }
}
