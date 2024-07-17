<?php
class UserController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->model('UserModel');
        $this->db = new Database();
    }
    public function user()
    {
        $users =$this->db->readAll('users');
        $data = [
            'users' => $users
        ];
        $this->view('admin/user/user' , $data);
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
            $user = new UserModel();
            $user->setId($id);

            // Delete the category from the database
            // $isdestroy = $this->db->delete('foods', $food->getId());
            $isdestroy = $this->db->delete('users',$user->getId());


            if ($isdestroy) {
                setMessage('success', 'user Deleted Successfully');
            } else {
                setMessage('error', 'Failed to Delete user');
            }
        } else {
            setMessage('error', 'Invalid user ID');
        }

        // Redirect to the food view page
        redirect('userController/user');
    }

}