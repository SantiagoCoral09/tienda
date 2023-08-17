<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Categorias extends BaseController
{
    public function index()
    {
        //
        $categorias =  new CategoryModel;
        $data=$categorias->findAll();
        $data=['data'=>$data];
        return view('categorias/listado', $data);

    }

    public function form_registro(){
        return view('categorias/formulario_registro');
    }

    public function registrar(){
        $categoria=new CategoryModel();
        $data=[
            //'atributo en la base de datos'=>...('name del formulario ')
            'nom_categoria'=>$this->request->getPost('nom_categoria'),
            'des_categoria'=>$this->request->getPost('des_categoria')
        ];
        $categoria->insert($data);

        return redirect()->to(base_url().'categorias');
    }
}
