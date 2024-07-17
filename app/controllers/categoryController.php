<?php 
class CategoryController extends Controller
{
    private $db;


    public function __construct()
    {
        $this->model('CategoryModel');
        $this->db = new Database();
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
     

    public function store(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
           
            $name = $_POST['name'];
            
            $category = new CategoryModel();
            $category->setName($name);
            $category->setDate(date('Y-m-d H:i:s'));
        
            $categoryCreated = $this->db->create('categories',$category->toArray());
         
           if(!$categoryCreated){
            setMessage('error', 'Fail to added category!');
            redirect('categoryController/index');
           }else{
            setMessage('success', 'Add category successful!');
            redirect('categoryController/index');
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