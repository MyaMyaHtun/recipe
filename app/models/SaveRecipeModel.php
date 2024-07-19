<?php

class SaveRecipeModel
{
    // Access Modifiers: public, private, protected
    private $id;
    private $foodId;
    private $userId;
    private $is_saved;
    private $is_fav;

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setFoodId($foodId)
    {
        $this->foodId = $foodId;
    }
    public function getFoodId()
    {
        return $this->foodId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    public function getUserId()
    {
        return $this->userId;
    }

    public function setIsSaved($is_saved)
    {
        $this->is_saved = $is_saved;
    }
    public function getIsSaved()
    {
        return $this->is_saved;
    }

    public function setIsFav($is_fav)
    {
        $this->is_fav = $is_fav;
    }
    public function getIsFav()
    {
        return $this->is_fav;
    }


    public function toArray()
    {
        return [
            "id" => $this->getId(),
            "foodId" => $this->getFoodId(),
            "userId" => $this->getUserId(),
            "is_saved" => $this->getIsSaved(),
            "is_fav" => $this->getIsFav(),
        ];
    }
}
