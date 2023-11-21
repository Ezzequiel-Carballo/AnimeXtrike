<?php

class dirAnime{
    private $id;
    private $name;
    private $image_path;    
    private $type;
    private $puntaje;
    private $description;
    private $created_at;  
    private $db;
    
    public function __construct() {
        $this->db = Database::conexion();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);

        return $this;
    }

    public function getImage_path()
    {
        return $this->image_path;
    }

    public function setImage_path($image_path)
    {
        $this->image_path = $image_path;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getPuntaje()
    {
        return $this->puntaje;
    }

    public function setPuntaje($puntaje)
    {
        $this->puntaje = $puntaje;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getOne(){
        $anime = $this->db->query("SELECT * FROM anime_catalogo WHERE id = {$this->getId()}");
        return $anime->fetch_object();
    }

    public function getAll(){

        $anime = $this->db->query("SELECT * FROM anime_catalogo");
        return $anime;
    }

    public function save(){

        $sql = "INSERT INTO anime_catalogo VALUES (NULL,'{$this->getName()}','{$this->getImage_path()}',
                                                        '{$this->getType()}','{$this->getPuntaje()}',
                                                        '{$this->getDescription()}',CURDATE())";
        $save = $this->db->query($sql);
        $result = false;

        //prueba
        /*
        var_dump($sql);
        var_dump($save);
        die();
        */

        if($save){
            $result = true;
        }

        return $result;
    }

    
}
