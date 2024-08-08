<?php 
class CuisineController extends Controller
{
    private $db;


    public function __construct()
    {
        $this->model('CuisineModel');
        $this->db = new Database();
    }

    public function viewcuisine(){
        $cuisine =$this->db->readAll('cuisines');
        $data = [
            'cuisines' => $cuisine
        ];
        // echo('ok');
        // exit;
        $this->view('admin/cuisine/viewcuisine',$data);
    }

           public function addcuisine()
        {
            $this->view('admin/cuisine/addcuisine');
         }



     

    // public function store(){
    //     if($_SERVER['REQUEST_METHOD']=='POST'){
           
    //         $cuisineName = $_POST['cuisineName'];

           
    //         $cuisine = new CuisineModel();
    //         $cuisine->setCuisineName($cuisineName);
           
            

    //         $cuisineCreated = $this->db->create('cuisines',$cuisine->toArray());
    //         // echo ($categoryCreated);
    //         // exit;
    //         setMessage('success', 'Add cuisine successful!');
    //         redirect('CuisineController/viewcuisine');
    //     }
    // }
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cuisineName = $_POST['cuisineName'];
            
            if (empty($cuisineName)) {
                $error = 'Field is required';
                // Display the error message
                setMessage('error', $error);
                redirect('CuisineController/addcuisine');
            } else {
                // Check if category already exists using LIKE
                $name = $this->db->columnFilter('cuisines', 'cuisineName' ,$cuisineName );
    
                if ($name) {
                    // If category exists, display an error message
                    setMessage('error', 'Cuisine already exists');
                    redirect('CuisineController/addcuisine');
                } else {
                    // Create new category
                    $name = new CuisineModel();
                    $name->setCuisineName($cuisineName);
                    
                    $cuisineCreated = $this->db->create('cuisines', $name->toArray());
    
                    setMessage('success', 'Add cuisine successful!');
                     redirect('CuisineController/viewcuisine');
                }
            }
        }
    }

    
    public function edit($id)
    {
        $cuisines = $this->db->readAll('cuisines');

        $cuisines = $this->db->getById('cuisines', $id);
        $data = [
            'cuisines' => $cuisines,
        ];

        $this->view('/admin/cuisine/edit', $data);
    }



    public function update(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
            // Check if 'id' and other required fields are set in the POST request
            if (isset($_POST['id']) && isset($_POST['cuisineName'])) {
                $id = $_POST['id'];
                $cuisineName = $_POST['cuisineName'];
               
                
    
                // Create a new CategoryModel instance and set its properties
                $cuisines = new CuisineModel();
                $cuisines->setId($id);
                $cuisines->setCuisineName($cuisineName);
               
                
    
                // Update the category in the database
                $updateCategory = $this->db->update('cuisines', $cuisines->getId(), $cuisines->toArray());
    
                if ($updateCategory) {
                    setMessage('success', 'Cuisine Updated Successfully');
                    redirect('CuisineController/viewcuisine');
                } else {
                    setMessage('error', 'Failed to Update Cuisine');
                    redirect('CuisineController/viewcuisine');
                }
            } else {
                // Handle the case where required POST fields are missing
                setMessage('error', 'Missing required fields');
                redirect('CuisineController/viewcuisine');
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
            $cuisine = new CuisineModel();
            $cuisine->setId($id);

            // Delete the category from the database
            // $isdestroy = $this->db->delete('foods', $food->getId());
            $isdestroy = $this->db->delete('cuisines',$cuisine->getId());


            if ($isdestroy) {
                setMessage('success', 'Cuisine Deleted Successfully');
            } else {
                setMessage('error', 'Failed to Delete Cuisine');
            }
        } else {
            setMessage('error', 'Invalid Cuisine ID');
        }

        // Redirect to the food view page
        redirect('CuisineController/viewcuisine');
    }
    
 


}