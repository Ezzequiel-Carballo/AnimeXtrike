<?php

require_once 'models/users.php';
require_once 'models/directorio.php';

class homeController{

    public function index(){
        $dirAnime = new dirAnime;
        $anime = $dirAnime->getAll();

        require_once 'views/layout/conteiner.php';
        require_once 'views/layout/muestra.php';
    }

    public function registro(){

        require_once 'views/formulario/registro.php';
    }

    public function save(){

        if(isset($_POST)){

            //Recibir datos del formulario

            $name = isset($_POST['name']) ? $_POST['name'] : 'false';
            $surname = isset($_POST['surname']) ? $_POST['surname'] : 'false';
            $email = isset($_POST['email']) ? $_POST['email'] : 'false';
            $password = isset($_POST['password']) ? $_POST['password'] : 'false';

            //Validacion 

            $errores = array();

            if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
                $val_name = true;                
            }else{
                $val_name = false;
                $errores['name'] = "El nombre es incorrecto";
            }
            
            if(!empty($surname) && !is_numeric($surname) && !preg_match("/[0-9]/", $surname)){
                $val_surname = true;                
            }else{
                $val_surname = false;
                $errores['surname'] = "El apellido es incorrecto";
            }
            
            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ){
                $val_email = true;                
            }else{
                $val_email = false;
                $errores['email'] = "El email es incorrecto";
            }
            
            if(!empty($password)){
                $val_password = true;                
            }else{
                $val_password = false;
                $errores['password'] = "La contraseña esta incompleta";
            }

            if(count($errores) == 0){

                $user = new Users;
                $user ->setName($name);
                $user ->setSurname($surname);
                $user ->setEmail($email);
                $user ->setPassword($password);

                $save = $user->save();          
                
                if($save){
                    $_SESSION['register'] = 'complete';
                
                }else{
                    $_SESSION['register'] = 'falled';
                }           
            }else{
                $_SESSION['register'] = 'falled';
            }
            header('location:'.base_URL.'home/index');
        }
    }
}