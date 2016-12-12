<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends Controller {
    public function index(){
        $this->display();
    }
    public function upload(){
        check_login();
        $type = I('post.type');
        switch ($type)
        {
            case 'pic':
                $name = I('post.name');
                $content = I('post.content');
                $description = I('post.description');

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     1024*1024*5 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg', );// 设置附件上传类型
                $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
                $upload->savePath  =     '/'.$type.'/'; // 设置附件上传（子）目录
                // 上传文件
                $info=$upload->upload();
                $imgPath = $upload->rootPath.$info['content']['savepath'].$info['content']['savename'];
                $image = new \Think\Image();
                $image->open($imgPath);
                $image->text('艺术类资源共享平台','./1.ttf',20,'#99CC00',\Think\Image::IMAGE_WATER_SOUTHEAST)->save($upload->rootPath.$info['content']['savepath'].'water_'.$info['content']['savename']);
                $data=array(
                    'user_id' => I('session.user_id'),
                    'content' => $imgPath,
                    'name' => $name,
                    'description' => $description,
                    'upload_time' => time(),
                    'user_name' => I('session.user_name'),
                    'is_delete' => 0,
                    'is_examine' => 0,
                    'examine_time' => 0
                );
        //        $result = M('Upload')->add($data);
        //
        //        if(!$result) {// 上传错误提示错误信息
        //            echo "<script language='javascript'>alert('上传失败！');javascript:history.go(-1);</script>";
        //        }else{// 上传成功
        //            echo "<script language='javascript'>alert('上传成功！');javascript:history.go(-1);</script>";
        //        }
            break;
            

        }


    }
}