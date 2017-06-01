<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends Controller {
    public function index(){
        $this->display();
    }
    public function upload(){
        $data = I('post.');
        $data['user_id'] = I('session.userid');
        $data['upload_time'] =  time();
        $data['user_name'] = I('session.username');
        $data['is_delete'] = 0;
        $data['is_examine'] = 0;

        $category = $data['category'];
        $max_size = I('session.max_size');

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  = $category.'/';
        // 上传文件
        $info   =   $upload->upload();
        $filename = $info['content']['savepath'].$info['content']['savename'];
        $data['content'] = $filename;
        if(!$info) {// 上传错误提示错误信息
            echo "<script>alert('".$upload->getError()."');javascript:history.go(-1);'</script>";
        }else{
            if($category == 'pic'){
                $image = new \Think\Image();
                $image->open('./Public/Uploads/'.$filename)->text('艺术类资源库管理平台','./1.ttf',20,'#000000',\Think\Image::IMAGE_WATER_SOUTHEAST)->save('./Public/Uploads/'.$filename);
            }
            $result = M('Upload')->add($data);
            if($result)
                echo "<script>alert('文件上传成功！');javascript:window.location.href='".U('Personal/index')."'</script>";
            else
                echo "<script>alert('文件上传失败');javascript:history.go(-1);'</script>";
        }

    }


}