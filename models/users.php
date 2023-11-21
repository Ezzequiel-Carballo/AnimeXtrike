<?php

require_once 'config/db.php';

class Users{

    private $id; 
    private $role;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $created_at;
    private $db;

    public function __construct() {
        $this->db = Database::conexion();
    }
            
    function getId() {
        return $this->id;
    }

    function getRole() {
        return $this->role;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT,['cost'=>4]);
    }

    function getCreated_at() {
        return $this->created_at;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setRole($role): void {
        $this->role = $role;
    }

    function setName($name): void {
        $this->name = $this->db->real_escape_string($name);
    }

    function setSurname($surname): void {
        $this->surname = $this->db->real_escape_string($surname);
    }

    function setEmail($email): void {
        $this->email = $this->db->real_escape_string(trim($email));
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function setCreated_at($created_at): void {
        $this->created_at = $created_at;
    }

    public function save(){
        $sql = "INSERT INTO users VALUES (NULL,'user','{$this->getName()}','{$this->getSurname()}','{$this->getEmail()}','{$this->getPassword()}',CURDATE())";
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;
        }

        return $result;
    }
}