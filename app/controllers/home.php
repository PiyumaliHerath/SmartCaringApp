<?php

class Home extends Controller{

    protected $user;

    public function __construct() {
        $this->user = $this->model("Parentsprofile");
    }

    public function homepage(){
        $this->view('home/home');
    }

    public function login(){
        $this->view('login/login');
    }

    public function index(){

    }

    public function create($username = "", $email=""){
        $this->user->create([
            'parentName' => $username,
            'nic' => "952672223V",
            'address' => 'Galle',
            'email'=> $email,
            'password' => '123456',
            'status'=> 0,
            'type' => 'parent'
        ]);
    }
}