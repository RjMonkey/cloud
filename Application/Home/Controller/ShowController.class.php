<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {


    public function index(){
        check_login();
        $list_picture = $this->select_map("picture");
        $list_video = $this->select_map("video");
        $list_music = $this->select_map("music");
        $list_rar = $this->select_map("rar");
        $this->assign('list_picture', $list_picture);
        $this->assign('list_video', $list_video);
        $this->assign('list_music', $list_music);
        $this->assign('list_rar', $list_rar);
        $this->display();
    }


    private function select_map($str){
        $map = array(
            'group' => "all",
            'is_delete' => "0",
            'is_examine' => "1",
            "category" => $str
        );
        $result = M('Upload')->where($map)->select();
        return $result;
    }
}