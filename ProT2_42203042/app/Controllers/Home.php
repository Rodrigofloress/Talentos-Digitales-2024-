<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
        
    }

    public function inicio()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
        
    }
    public function ingresar()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/ingresar');
        echo view('front/footer_view');
        
    }

    public function sobre()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/sobre');
        echo view('front/footer_view');
        
    }

    public function registrarse()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registrarse');
        echo view('front/footer_view');
        
    }

    public function catalogo()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/catalogo');
        echo view('front/footer_view');
        
    }
}


