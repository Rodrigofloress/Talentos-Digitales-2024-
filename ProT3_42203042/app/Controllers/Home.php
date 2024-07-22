<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'M-IA';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function catalogo()
    {
        $data['titulo'] = 'Catálogo';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/catalogo');
        echo view('front/footer_view');
    }

    public function ingreso()
    {
        $data['titulo'] = 'Ingresar';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/ingreso');
        echo view('front/footer_view');
    }

    public function registro()
    {
        $data['titulo'] = 'Registrarse';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }


    /* -----------mi CRUD------------------------------------- */
    public function listado()
    {
        $data['titulo'] = 'Gestión de Usuarios';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/listado');
        echo view('front/footer_view');
    }
    public function actualizar()
    {
        $data['titulo'] = 'Editar Usuarios';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/actualizar');
        echo view('front/footer_view');
    }

    /* ---------------------- -----------------------------------*/


    public function sobre()
    {
        $data['titulo'] = 'Somos M-IA';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/sobre');
        echo view('front/footer_view');
    }
}
