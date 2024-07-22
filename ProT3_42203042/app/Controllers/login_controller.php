<?php

namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $dato['titulo'] = 'Ingresar';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/ingreso');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_model();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();

        if ($data) {
            $stored_password = $data['pass'];
            $ba = $data['baja'];

            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/ingreso');
            }

            if (password_verify($password, $stored_password)) {

                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'telefono' => $data['telefono'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                $session->set($ses_data);

                session()->setFlashdata('msg', '¡ Hola !');
                return redirect()->to('/panel');
            } else {

                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/ingreso');
            }
        } else {

            $session->setFlashdata('msg', 'Correo o Teléfono incorrecto');
            return redirect()->to('/ingreso');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
