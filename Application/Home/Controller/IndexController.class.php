<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    }
    public function do_login(){
        $user = I('post.user');
        $password = I('post.password');
        
    }
}