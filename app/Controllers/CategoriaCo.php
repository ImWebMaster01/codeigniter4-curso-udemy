<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriaCo extends BaseController
{
    public function index()
    {
        //cargar controlador
        $categoriaMo=new CategoriaModel();

         #obtener todos los registros de la tabla de la DB
         $data=['categoria'=>$categoriaMo->findAll()];

         #mandar datos a la vista
         return view('categorias/index',$data);
 
    }

    public function show($id){
        $categoriaMo=new CategoriaModel();

       // $peliculaMo->find($id);

        $dataContent=['categoria'=>$categoriaMo->find($id)];


        return view('categorias/show',$dataContent);

    }


    public function new(){
        $categoriaMo=new CategoriaModel();


        return view('categorias/new');

    }

    public function create(){

        #instancia del modelo
        $categoriaMo=new CategoriaModel();

        #insertar en la base de datos el
        #array con los datos recibidos del formulario
        $categoriaMo->insert(
            [
                'titulo'=> $this->request->getPost('titulo'),
                'descripcion'=>$this->request->getPost('descripcion')
            ] );

            return redirect()->to('/dashboard/categoria/');
    }

    public function edit($id){

        #instancia del modelo
        $categoriaMo=new CategoriaModel();

        # obtengo el registro de la pelicula buscada 
        # y lo guardo en un array con el indice de 'pelicula'
        $dataContent=['categoria'=>$categoriaMo->find($id)];

        return view('categorias/edit',$dataContent);
    }

    public function update($id){

        #instancia del modelo
        $categoriaMo=new CategoriaModel();

        #actualizar en la base de datos el
        #array con los datos recibidos del formulario
        $categoriaMo->update(
            $id,
        [
                'titulo'=> $this->request->getPost('titulo'),
                'descripcion'=>$this->request->getPost('descripcion')
            ] );

            return redirect()->to('/dashboard/categoria/');
    }

    public function delete($id){

        #instancia del modelo
        $categoriaMo=new CategoriaModel();

        #eliminar registro en la base de datos
        $categoriaMo->delete($id);

        return redirect()->back();

    }
}
