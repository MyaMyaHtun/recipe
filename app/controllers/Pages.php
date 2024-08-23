<?php

class Pages extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function index()
    {
        // echo('ok');
        // exit;
        $this->view('pages/login');
    }
    // public function home()
    // {
    //     $this->view('pages/index');
    // }

    public function category()
    {
        $this->view('pages/category');
    }
    public function breakfast()
    {
        $this->view('pages/breakfast');
    }
    public function lunch()
    {
        $this->view('pages/lunch');
    }
    public function dinner()
    {
        $this->view('pages/dinner');
    }
    public function italian()
    {
        $this->view('pages/italian');
    }
    public function korean()
    {
        $this->view('pages/korean');
    }
    public function japanese()
    {
        $this->view('pages/japanese');
    }
    public function myanmar()
    {
        $this->view('pages/myanmar');
    }

    public function login()
    {
        $this->view('pages/login');
    }

    public function register()
    {
        $this->view('pages/register');
    }

    public function contact()
    {
        $this->view('pages/contact');
    }
    
    public function detail()
    {
        $this->view('pages/details/detail');
    }

    public function about()
    {
        $this->view('pages/about');
    }

    public function logout()
    {
        $this->view('pages/logout');
    }
    public function nextPage()
    {
        $this->view('pages/next_page');
    }
    public function aa()
    {
        $this->view('pages/aa');
    }

    public function save()
    {
        $this->view('pages/save-recipe');
    }




    public function dashboard()
    {
        // $income = $this->db->incomeTransition();
        // $expense = $this->db->expenseTransition();
        // $data = [
        //     'income' => $income,
        //     'expense' => $expense
        // ];
        // $this->view('pages/dashboard', $data);
        $this->view('pages/dashboard');
        
    }
    public function cuisine()
    {
        $this->view('pages/cuisine');
    }
    
}
