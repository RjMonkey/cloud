<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {


    public function index(){

        $this->display();
    }
    public function detail(){
        $this->display();
    }
    public function video(){
        $map['category'] = "mov";
        $map['is_delete'] = 0;
        $map['is_examine'] = 1;
        $result = M('Upload')->where($map)->select();
        $this->assign('result', $result);
        $this->display();
    }
    public function pic(){
        $map['category'] = "pic";
        $map['is_delete'] = 0;
        $map['is_examine'] = 1;
        $tag = I('get.tag');
        switch($tag){
            case "erwei":
                $map['tag'] = "二维";
                break;
            case "sanwei":
                $map['tag'] = "二维";
                break;
            case "shejizuopin":
                $map['tag'] = "二维";
                break;
            default:
                $map['tsg'] = "";
                break;
        }
        $result = M('Upload')->where($map)->select();
        $this->assign('result', $result);
        $this->display();
    }
    public function rar(){
        $map['category'] = "rar";
        $map['is_delete'] = 0;
        $map['is_examine'] = 1;
        $result = M('Upload')->where($map)->select();
        $this->assign('result', $result);
        $this->display();
    }
    public function mic(){
        $map['category'] = "mic";
        $map['is_delete'] = 0;
        $map['is_examine'] = 1;
        $result = M('Upload')->where($map)->select();
        $this->assign('result', $result);
        $this->display();
    }
}