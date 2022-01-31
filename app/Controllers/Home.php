<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function registrar()
    {
        return view('practica1/formulario');
        // $this->redirect()->to('procesar');
    }
}
