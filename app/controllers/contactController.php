<?php 
class contactController extends Controller
{
    private $db;


    public function __construct()
    {
        $this->model('ContactModel');
        $this->db = new Database();
    }
       

    public function index(){
        $contact = $this->db->readAll('contact');
        $data = [
            'contact' => $contact
        ];
        $this->view('admin/contact/index',$data);
    }

    public function create(){
        $this->view('admin/contact/create');
    }
     

    public function store(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $id = $_POST['id'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

             // Validate phone number
             if (!preg_match('/^\d{11}$/', $phone)) {
                setMessage('error', 'Phone number must be 11 digits');
                redirect('contactController/create/' . $id);
                return;
            }

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                setMessage('error', 'Invalid email format');
                redirect('contactController/create/' . $id);
                return;
            }
            
            $contact = new ContactModel();
            $contact->setId($id);
            $contact->setPhone($phone);
            $contact->setEmail($email);
        
            $contactCreated = $this->db->create('contact',$contact->toArray());
         
           if(!$contactCreated){
            setMessage('error', 'Fail to added contact!');
            redirect('contactController/index');
           }else{
            setMessage('success', 'Add contact successful!');
            redirect('contactController/index');
           }
        }
    }

    public function edit($id)
    {
        $contact = $this->db->readAll('contact');

        $contact = $this->db->getById('contact', $id);
        $data = [
            'contact' => $contact,
        ];

        $this->view('/admin/contact/edit', $data);
    }

    public function update(){
        
      
        if($_SERVER['REQUEST_METHOD']=='POST'){
           
            $id = $_POST['id'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            if (!preg_match('/^\d{11}$/', $phone)) {
                setMessage('error', 'Phone number must be 11 digits');
                redirect('contactController/edit/' . $id);
                return;
            }

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                setMessage('error', 'Invalid email format');
                redirect('contactController/edit/' . $id);
                return;
            }
          
            $contact = new ContactModel();
            $contact->setId($id);
            $contact->setPhone($phone);
            $contact->setEmail($email);
           
            // $contactUpdated = $this->db->update('contact', $contact->getId(), $contact->toArray());
            $contactUpdated = $this->db->update('contact', $contact->getId(), $contact->toArray());
            // echo ($contactUpdated);
            //     exit;
         
           if(!$contactUpdated){
            setMessage('error', 'Fail to updated contact!');
            redirect('contactController/index');
           }else{
            setMessage('success', 'Updated contact successful!');
            redirect('contactController/index');
           }
        }
    }

    
}