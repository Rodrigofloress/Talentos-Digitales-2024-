<?php

namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }


    public function create()
    {
        $data['titulo'] = 'Registrarse';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
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
            /* 'repassword' => 'matches[pass]' */
        ]);

        $formModel = new usuario_model();

        if (!$input) {
            $data['titulo'] = 'Registrarse';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'telefono' => $this->request->getVar('telefono'),
                'usuario' => $this->request->getVar('usuario'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito');

            return redirect()->to('/registro');
        }
    }


    public function listado()
    {

        $crudModel = new usuario_model();
        $data['usuarios'] = $crudModel->findAll();

        $data['titulo'] = 'Gestión de Usuarios';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/listado', $data);
        echo view('front/footer_view');
    }

    public function createe()
    {
        $crudModel = new usuario_model();
        $data['usuarios'] = $crudModel->findAll();

        $data['titulo'] = 'Crear Usuario';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/listado', $data);
        echo view('front/footer_view');
    }

    public function formValidationn()
    {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'telefono' => 'required|min_length[3]',
            'usuario' => 'required|min_length[3]',
            'pass' => 'required|min_length[3]|max_length[20]',
        ]);

        $formModel = new usuario_model();

        if (!$input) {
            $data['titulo'] = 'Crear Usuario';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/listado', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $formModel->save([
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


    public function eliminar($id)
    {
        $usuarioModel = new Usuario_model();

        if ($usuarioModel->eliminarUsuario($id)) {
            return redirect()->to('/listado')->with('success', 'Usuario eliminado correctamente.');
        } else {
            return redirect()->to('/listado')->with('fail', 'Error al eliminar usuario.');
        }
    }


    public function editar($id)
    {
        $crudModel = new Usuario_model();
        $data['usuario'] = $crudModel->find($id);

        if (empty($data['usuario'])) {
            return redirect()->to('/listado')->with('fail', 'Usuario no encontrado.');
        }

        $data['titulo'] = 'Editar Usuario';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/actualizar', $data);
        echo view('front/footer_view');
    }

    public function actualizar()
    {
        $formModel = new Usuario_model();

        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email',
            'telefono' => 'required|min_length[3]',
            'usuario' => 'required|min_length[3]',
            'pass' => 'permit_empty|min_length[5]|max_length[20]'
        ]);

        if (!$input) {
            $data['titulo'] = 'Editar Usuario';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/actualizar', ['validation' => $this->validator, 'usuario' => $this->request->getPost()]);
            echo view('front/footer_view');
        } else {
            $id = $this->request->getVar('id_usuario');
            $nombre = $this->request->getVar('nombre');
            $apellido = $this->request->getVar('apellido');
            $email = $this->request->getVar('email');
            $telefono = $this->request->getVar('telefono');
            $usuario = $this->request->getVar('usuario');
            $pass = $this->request->getVar('pass');


            $newData = [
                'nombre' => $nombre,
                'apellido' => $apellido,
                'email' => $email,
                'telefono' => $telefono,
                'usuario' => $usuario
            ];


            if (!empty($pass)) {
                $newData['pass'] = password_hash($pass, PASSWORD_DEFAULT);
            }

            $formModel->update($id, $newData);

            return redirect()->to('/listado')->with('success', 'Usuario actualizado correctamente.');
        }
    }
}
