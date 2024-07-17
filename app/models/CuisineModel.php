<?php

class CuisineModel
{
    // Access Modifier = public, private, protected
    private $cuisineName;
    private $id;



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

    public function setCuisineName($cuisineName)
    {
        $this->cuisineName = $cuisineName;
    }
    public function getCuisineName()
    {
        return $this->cuisineName;
    }
    

    public function toArray() {
        return [
            "id" => $this->getId(),
            "cuisineName" => $this->getCuisineName(),
            
        ];
    }


    
}