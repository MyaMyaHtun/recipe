<?php

class FoodModel
{
    // Access Modifier = public, private, protected
    
    private $id;
    private $name;
    private $categoryId;
    private $cuisineId;
    private $imagefile;
    private $totaltime;
    private $preparetime;
    private $description;
    private $ingredient;
    private $step1;
    private $step2;
    private $step3;
    private $tips;
    private $date;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
  
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function getCategoryId()
    {
        return $this->categoryId;
    }   
    public function setCuisineId($cuisineId)
    {
        $this->cuisineId = $cuisineId;
    }
    public function getCuisineId()
    {
        return $this->cuisineId;
    }   

    public function setImagefile($imagefile)
    {
        $this->imagefile = $imagefile;
    }
    public function getImagefile()
    {
        return $this->imagefile;
    }

    public function setTotaltime($totaltime)
    {
        $this->totaltime = $totaltime;
    }
    public function getTotaltime()
    {
        return $this->totaltime;
    }

    public function setPreparetime($preparetime)
    {
        $this->preparetime = $preparetime;
    }
    public function getPreparetime()
    {
        return $this->preparetime;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;
    }

    public function getIngredient()
    {
        return $this->ingredient;
    }

    public function setStep1($step1)
    {
        $this->step1 = $step1;
    }
    public function getStep1()
    {
        return $this->step1;
    }

    public function setStep2($step2)
    {
        $this->step2 = $step2;
    }
    public function getStep2()
    {
        return $this->step2;
    }

    public function setStep3($step3)
    {
        $this->step3 = $step3;
    }
    public function getStep3()
    {
        return $this->step3;
    }

    public function setTips($tips)
    {
        $this->tips = $tips;
    }
    public function getTips()
    {
        return $this->tips;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function toArray() {
        return [
            "name" => $this->getName(),
            "categoryId" => $this->getCategoryId(),
            "cuisineId" => $this->getCuisineId(),
            "imagefile" => $this->getImagefile(),
            "totaltime" => $this->getTotaltime(),
            "preparetime" => $this->getPreparetime(),
            "description" => $this->getDescription(),
            "ingredient" => $this->getIngredient(),
            "step1" => $this->getStep1(),
            "step2" => $this->getStep2(),
            "step3" => $this->getStep3(),
            "tips" => $this->getTips(),
            "date" => $this->getDate(),
        ];
    }
}