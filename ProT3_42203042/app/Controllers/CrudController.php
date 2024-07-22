<?php

namespace App\Controllers;

use App\Models\Crud_model;
use CodeIgniter\Controller;

class CrudController extends BaseController
{
    protected $crudModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->crudModel = new crud_model();
    }

    public function create()
    {
        $data['titulo'] = 'Crear Usuario';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/listado');
        echo view('front/footer_view');
    }

    public function formValidation()
    {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'telefono' => 'required|min_length[3]',
            'usuario' => 'required|min_length[3]',
            'pass' => 'required|min_length[3]|max_length[20]',
        ]);

        if (!$input) {
            $data['titulo'] = 'Crear Usuario';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/listado', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $this->crudModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'telefono' => $this->request->getVar('telefono'),
                'usuario' => $this->request->getVar('usuario'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito');

            return redirect()->to('/listado');
        }
    }

    public function editar($id)
    {
        $data['titulo'] = 'Editar Usuario';
        $data['usuario'] = $this->crudModel->find($id);

        if (!$data['usuario']) {
            session()->setFlashdata('fail', 'Usuario no encontrado');
            return redirect()->to('/listado');
        }

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/actualizar', $data);
        echo view('front/footer_view');
    }

    public function actualizar($id)
    {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email' => "required|valid_email|max_length[100]|is_unique[usuarios.email,email,{$id},id_usuario]",
            'telefono' => 'required|min_length[3]',
            'usuario' => 'required|min_length[3]',
            'pass' => 'permit_empty|min_length[5]|max_length[20]',
        ]);

        if (!$input) {
            $data['titulo'] = 'Editar Usuario';
            $data['usuario'] = $this->crudModel->find($id);

            if (!$data['usuario']) {
                session()->setFlashdata('fail', 'Usuario no encontrado');
                return redirect()->to('/listado');
            }

            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/actualizar', ['validation' => $this->validator, 'usuario' => $data['usuario']]);
            echo view('front/footer_view');
        } else {
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'telefono' => $this->request->getVar('telefono'),
                'usuario' => $this->request->getVar('usuario'),
            ];

            $pass = $this->request->getVar('pass');
            if (!empty($pass)) {
                $data['pass'] = password_hash($pass, PASSWORD_DEFAULT);
            }

            $this->crudModel->update($id, $data);

            session()->setFlashdata('success', 'Datos actualizados correctamente');
            return redirect()->to('/listado');
        }
    }

    public function eliminar($id)
    {
        $usuario = $this->crudModel->find($id);

        if (!$usuario) {
            session()->setFlashdata('fail', 'Usuario no encontrado');
        } else {
            $this->crudModel->delete($id);
            session()->setFlashdata('primary', 'Usuario eliminado correctamente');
        }

        return redirect()->to('/listado');
    }
}
