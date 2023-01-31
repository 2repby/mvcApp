<?php

namespace App\MVC\Controllers;
use Framework\Controller;
use App\MVC\Models\UserModel;

class HelloController extends Controller
{
    public function index(){
        //var_dump((new UserModel())->all());
        $usermodel = new UserModel();
        $usermodel->create(["username" => "monster"]);
        return $this->view('index.php',['users'=>$usermodel->all()]);
    }
    public function data($user_name, $group_name){
        return $this->view('data.php',['name'=>$user_name,'group'=>$group_name]);
    }
}