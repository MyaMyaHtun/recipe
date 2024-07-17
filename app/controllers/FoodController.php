<?php 
class FoodController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->model('FoodModel');
        $this->db = new Database();
    }

        public function index(){
            $foods = $this->db->readAll('view_foods');

            $data = [
                'foods' => $foods,
            ];
            $this->view('admin/food/index',$data);

        }

    public function create(){
        $this->view('admin/food/create');
    }

    
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
            $name = $_POST['name'];
            $categoryId = $_POST['categoryId'];
            $cuisineId = $_POST['cuisineId'];
            $totaltime = $_POST['totaltime'];
            $preparetime = $_POST['preparetime'];
            $description = $_POST['description'];
            $ingredient = $_POST['ingredient'];
            $step1 = $_POST['step1'];
            $step2 = $_POST['step2'];
            $step3 = $_POST['step3'];
            $tips = $_POST['tips'];
          
            $msg = "";
            $image = $_FILES['imagefile']['name'];
            $target = "food_images/" . basename($image);

            if(!file_exists('food_images/')){
                mkdir('food_images/', 0777, true);
            }

            if(move_uploaded_file($_FILES['imagefile']['tmp_name'],$target)){
                $msg = "Image Uploaded Successfully";
            }else{
                $msg = "Fail to uploaded image";
            }
     }  
            $food = new FoodModel();
            $food->setName($name);
            $food->setCategoryId($categoryId);
            $food->setCuisineId($cuisineId);
            $food->setImagefile($image);
            $food->setTotaltime($totaltime);
            $food->setPreparetime($preparetime);
            $food->setDescription($description);
            $food->setIngredient($ingredient);
            $food->setStep1($step1);
            $food->setStep2($step2);
            $food->setStep3($step3);
            $food->setTips($tips);
            $food->setDate(date('Y-m-d H:i:s'));

            $foodCreated = $this->db->create('foods',$food->toArray());
       
            if($foodCreated){
                setMessage('success', 'Added food successful!');
                redirect('foodController/index');
            }else{
                setMessage('error', 'Failed to add food!');
                redirect('foodController/index');
            }
      
           
        }
      
    public function edit($id)
    {
        $categories = $this->db->readAll('categories');
        $cuisines = $this->db->readAll('cuisines');

        $foods = $this->db->getById('foods', $id);
        $data = [
            'categories'=>$categories,
            'cuisines'=>$cuisines,
            'foods' => $foods,
            'selected_category_id' => $foods['categoryId'],
            'selected_cuisines_id' => $foods['cuisineId'],
        ];

        $this->view('admin/food/edit', $data);
    }

    public function update()
    { 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $categoryId=$_POST['categoryId'];
            $cuisineId=$_POST['cuisineId'];
            $totaltime = $_POST['totaltime'];
            $preparetime	 = $_POST['preparetime'];
            $description = $_POST['description'];
            $ingredient = $_POST['ingredient'];
            $step1 = $_POST['step1'];
            $step2 = $_POST['step2'];
            $step3 = $_POST['step3'];
            $tips = $_POST['tips'];
           
            $currentImage = $_POST['imagefile'];
            $msg = "";
            $image = $_FILES['imagefile']['name'];
            if($image){
                if (!file_exists('food_images/')){
                    mkdir('food_images/');
                }
                $target = "food_images/" . basename($image);
                if(move_uploaded_file($_FILES['imagefile']['tmp_name'],$target)){
                    $msg = "Image uploaded successfully";
                }else{
                    $msg = "Failed to upload image";
                }
                if ($currentImage) {
                    $removePath = "food_images/" . $currentImage;
                    if (file_exists($removePath)) {
                        unlink($removePath);
                    }
                }

                }else{
                    $image = $currentImage;
                }


            $food = new FoodModel();
            $food->setId($id);
            $food->setName($name);
            $food->setCategoryId($categoryId);
            $food->setCuisineId($cuisineId);
            $food->setImagefile($image);
            $food->setTotaltime($totaltime);
            $food->setPreparetime($preparetime);
            $food->setDescription($description);
            $food->setIngredient($ingredient);
            $food->setStep1($step1);
            $food->setStep2($step2);
            $food->setStep3($step3);
            $food->setTips($tips);
            
            $isUpdated = $this->db->update('foods', $food->getId(), $food->toArray());
            if ($isUpdated) {
                // echo ($isUpdated);
                // exit;
                setMessage('success', 'food update successful!');
            } else {
                setMessage('error', 'Failed to update food.');
            }
            redirect('foodController/index');
        }
    }

   
    public function destroy($id)
    {
        // Decode the ID
        $id = base64_decode($id);
        // echo ($id);
        // exit;

        // Ensure the ID is valid
        if ($id && is_numeric($id)) {
            // Create a new CategoryModel instance and set its ID
            $food = new FoodModel();
            $food->setId($id);

            // Delete the category from the database
            // $isdestroy = $this->db->delete('foods', $food->getId());
            $isdestroy = $this->db->delete('foods',$food->getId());


            if ($isdestroy) {
                setMessage('success', 'Food Deleted Successfully');
            } else {
                setMessage('error', 'Failed to Delete Food');
            }
        } else {
            setMessage('error', 'Invalid Food ID');
        }

        // Redirect to the food view page
        redirect('foodController/index');
    }

    

    


}