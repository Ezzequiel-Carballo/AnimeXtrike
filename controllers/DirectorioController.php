<?php

require_once 'models/directorio.php';

class directorioController{

    public function catalogo(){
        
        $dirAnime = new dirAnime;
        $anime = $dirAnime->getAll();

        require_once 'views/layout/directorio.php';
    }

    public function new(){

        require_once 'views/formulario/animes.php';        
    }

    public function listado(){

        if(isset($_GET['id'])){

            $id = $_GET['id'];

            $anime = new dirAnime;
            $anime->setId($id);

            $list = $anime->getOne();
        }
        require_once 'views/layout/episodes.php';        
    }

    public function save_new(){

        if(isset($_POST)){

            $name = isset($_POST['name']) ? $_POST['name'] : 'false';
            $type = isset($_POST['type']) ? $_POST['type'] : 'false';
            $puntaje = isset($_POST['puntaje']) ? $_POST['puntaje'] : 'false';
            $description = isset($_POST['description']) ? $_POST['description'] : 'false';            
            /*$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : 'false';*/

            if($name && $type && $puntaje && $description){
            
                //verificacion y guardado

                $new = new dirAnime;
                $new ->setName($name);
                $new ->setType($type);
                $new ->setPuntaje($puntaje);
                $new ->setDescription($description);  
                
                $imagen = $_FILES['imagen'];
                $fileName = $imagen['name'];
                $fileType = $imagen['type'];
                
                $new ->setImage_path($fileName);

                $save = $new->save();

                //prueba
                //var_dump($new);
                //die();

                if($save){
                    $_SESSION['complete'] = 'complete';
                }else{
                $_SESSION['complete'] = 'false';
                }              
            }else{
                $_SESSION['complete'] = 'false';
            }
        }

        header('location:'.base_URL.'directorio/catalogo');
    }
}