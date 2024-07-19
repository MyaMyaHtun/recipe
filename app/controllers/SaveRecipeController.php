<?php 
class SaveRecipeController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->model('SaveRecipeModel');
        $this->db = new Database();
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $foodId = $_POST['foodId'];
                    $userId = $_POST['userId'];
                   
                    $saveRecipe = new SaveRecipeModel();
                    $saveRecipe->setFoodId($foodId);
                    $saveRecipe->setUserId($userId);
                    $saveRecipe->setIsFav(0);
                    $oldRecipe = $this->db->filterByMultipleColumns('save_recipe',$saveRecipe->toArray());

                    if(empty($oldRecipe)){
                        $is_saved = 1;
                        $saveRecipe->setIsSaved($is_saved);
                        $this->db->create('save_recipe',$saveRecipe->toArray());
                        echo json_encode(['success' => $is_saved]);
                    }else{
                        $is_saved = $oldRecipe['is_saved'] == 1 ? 0 : 1;
                        $saveRecipe->setId($oldRecipe['id']);
                        $saveRecipe->setIsSaved($is_saved); 
                        $this->db->update('save_recipe',$oldRecipe['id'], $saveRecipe->toArray());
                        echo json_encode(['success' => $is_saved]);
                    }
           
            
                    // $is_saved = 1;


            //  }  
            //         $food = new FoodModel();
            //         $food->setName($name);
            //         $food->setCategoryId($categoryId);
            //         $food->setCuisineId($cuisineId);

            //         $foodCreated = $this->db->create('foods',$food->toArray());

            //         if($foodCreated){
            //             setMessage('success', 'Added food successful!');
            //             redirect('foodController/index');
            //         }else{
            //             setMessage('error', 'Failed to add food!');
            //             redirect('foodController/index');
            //         }

        }
    }
          


}