<?php
#ubicación de los controladores
namespace App\Controllers;

#controladores usados en esta clase
use App\Controllers\BaseController;
use App\Models\PeliculasModel;

Class PeliculaCo extends BaseController{

    public function index(){

        $peliculaMo=new PeliculasModel();

        #obtener todos los registros de la tabla de la DB
        $data=['pelicula'=>$peliculaMo->findAll()];

        #mandar datos a la vista
        return view('peliculas/index',$data);

    }

    public function show($id){
        $peliculaMo=new PeliculasModel();
       // $peliculaMo->find($id);

        $dataContent=['pelicula'=>$peliculaMo->find($id)];


        return view('peliculas/show',$dataContent);

    }

    public function new(){
        $peliculaMo=new PeliculasModel();

        
        return view('peliculas/new');

    }

    public function create(){

        #instancia del modelo
        $peliculaMo=new PeliculasModel();

        #insertar en la base de datos el
        #array con los datos recibidos del formulario
        $peliculaMo->insert(
            [
                'titulo'=> $this->request->getPost('titulo'),
                'descripcion'=>$this->request->getPost('descripcion')
            ] );

        ;
    }

    public function edit($id){

        #instancia del modelo
        $peliculaMo=new PeliculasModel();

        # obtengo el registro de la pelicula buscada 
        # y lo guardo en un array con el indice de 'pelicula'
        $dataContent=['pelicula'=>$peliculaMo->find($id)];

        return view('peliculas/edit',$dataContent);
    }


    public function update($id){

        #instancia del modelo
        $peliculaMo=new PeliculasModel();

        #actualizar en la base de datos el
        #array con los datos recibidos del formulario
        $peliculaMo->update(
            $id,
        [
                'titulo'=> $this->request->getPost('titulo'),
                'descripcion'=>$this->request->getPost('descripcion')
            ] );

        ;
    }

    public function delete($id){

        #instancia del modelo
        $peliculaMo=new PeliculasModel();

        #eliminar registro en la base de datos
        $peliculaMo->delete($id);

    }



}