<?php

// require_once APPROOT . '/views/inc/header.php';
class CategoryController extends Controller
{
    private $db;


    public function __construct()
    {
        $this->model('CategoryModel');
        $this->db = new Database();
    }
       
    public function viewDetail(){

        $userId = 0;
        $is_saved = 0;
        if(isset($_GET['id'])){
            $recipe = $this->db->readById('view_foods', $_GET['id']);
            session_start();
            if (isset($_SESSION['user_id'])){

                $userId = $_SESSION['user_id'];
                $data = ["userId" => $userId, "foodId" => $recipe['id']];
                $is_saved = $this->db->filterByMultipleColumns('save_recipe',$data);
            }
           
        }
        
    
        $data = [
            'recipe' => $recipe,
            'is_saved' => $is_saved,
            'user_id' => $userId 
        ];
        $this->view('pages/details/detail',$data);
    }

    public function index(){
        $categories = $this->db->readAll('categories');
        $data = [
            'categories' => $categories
        ];
        $this->view('admin/category/index',$data);
    }

    public function create(){
        $this->view('admin/category/create');
    }
     

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            
            if (empty($name)) {
                $error = 'Field is required';
                // Display the error message
                setMessage('error', $error);
                redirect('categoryController/create');
            } else {
                // Check if category already exists using LIKE
                $category = $this->db->columnFilter('categories', 'name' ,$name );
    
                if ($category) {
                    // If category exists, display an error message
                    setMessage('error', 'Category already exists');
                    redirect('categoryController/create');
                } else {
                    // Create new category
                    $category = new CategoryModel();
                    $category->setName($name);
                    $category->setDate(date('Y-m-d H:i:s'));
                    $categoryCreated = $this->db->create('categories', $category->toArray());
    
                    if ($categoryCreated) {
                        setMessage('success', 'Category Created Successfully');
                        redirect('categoryController/index');
                    } else {
                        setMessage('error', 'Failed to Create Category');
                        redirect('categoryController/create');
                    }
                }
            }
        }
    }

    public function edit($id)
    {
        $categories = $this->db->readAll('categories');

        $categories = $this->db->getById('categories', $id);
        $data = [
            'categories' => $categories,
        ];

        $this->view('/admin/category/edit', $data);
    }

    public function update(){
      
        if($_SERVER['REQUEST_METHOD']=='POST'){
           
            $id = $_POST['id'];
            $name = $_POST['name'];
          
            $category = new CategoryModel();
            $category->setId($id);
            $category->setName($name);
            $category->setDate(date('Y-m-d H:i:s'));
    
            $categoryUpdated = $this->db->update('categories', $category->getId(), $category->toArray());
         
           if(!$categoryUpdated){
            setMessage('error', 'Fail to updated category!');
            redirect('categoryController/index');
           }else{
            setMessage('success', 'Updated category successful!');
            redirect('categoryController/index');
           }
        }
    }


    
    // public function update() {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         $id = $_POST['id'];
    //         $name = $_POST['name'];
    
    //         // Check if category name already exists excluding the current category ID
    //         $existingCategories = $this->db->columnFilter('categories', 'name', $name);
    
    //         $duplicateExists = false;
    
    //         // Ensure $existingCategories is not empty
    //         if (!empty($existingCategories)) {
    //             foreach ($existingCategories as $category) {
    //                 if ($category['id'] != $id) {
    //                     $duplicateExists = true;
    //                     break;
    //                 }
    //             }
    //         }
    
    //         if ($duplicateExists) {
    //             // If category name exists, display an error message
    //             setMessage('error', 'Category name already exists');
    //             redirect('categoryController/edit/' . $id);
    //         } else {
    //             $category = new CategoryModel();
    //             $category->setId($id);
    //             $category->setName($name);
    //             $category->setDate(date('Y-m-d H:i:s'));
    
    //             $categoryUpdated = $this->db->update('categories', $category->getId(), $category->toArray());
    
    //             if (!$categoryUpdated) {
    //                 setMessage('error', 'Failed to update category!');
    //                 redirect('categoryController/index');
    //             } else {
    //                 setMessage('success', 'Category updated successfully!');
    //                 redirect('categoryController/index');
    //             }
    //         }
    //     }
    // }
    
    public function destroy($id)
    { 
       // Decode the ID
        $id = base64_decode($id);
       
        // Ensure the ID is valid
        if ($id && is_numeric($id)) {
            // Create a new CategoryModel instance and set its ID
            $category = new CategoryModel();
            $category->setId($id);

            // Delete the category from the database
            // $isdestroy = $this->db->delete('foods', $food->getId());
            $isdestroy = $this->db->delete('categories',$category->getId());


            if ($isdestroy) {
                setMessage('success', 'Category Deleted Successfully');
            } else {
                setMessage('error', 'Failed to Delete Category');
            }
        } else {
            setMessage('error', 'Invalid Category ID');
        }
        // Redirect to the food view page
        redirect('categoryController/index');
    }



}