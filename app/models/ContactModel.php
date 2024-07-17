<?php

class ContactModel
{
    // Access Modifier = public, private, protected
   
    private $id;
    private $phone;
    private $email;



    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    

    public function toArray() {
        return [
            "id" => $this->getId(),
            "phone"=> $this->getPhone(),
            "email" => $this->getEmail(),
            
        ];
    }


    
}