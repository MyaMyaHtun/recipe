<?php
class dashboard extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();   
    }

    public function admin()
    {
        $totalFoods= $this->db->getTotalCount('foods');
        $totalCategories = $this->db->getTotalCount('categories');
        $totalUsers = $this->db->getTotalCount("users");
        $totalCuisines = $this->db->getTotalCount("cuisines");
    
            $data = [
                'totalFoods' => $totalFoods,
                'totalCategories' => $totalCategories,
                'totalUsers' => $totalUsers,
                'totalCuisines' => $totalCuisines,
            ];
        $this->view('admin/dashboard', $data);

    }
    public function logout(){
        $this->view('pages/index');
    }

}
