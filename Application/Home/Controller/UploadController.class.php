<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends Controller {
    public function index(){
        $this->display();
    }
    public function upload(){

        check_login();
        $ip = getIP();
        cout(I('post.'));
cout($_FILES);
        $type = I('post.type');
        $name = I('post.name');
        $content = I('post.content');
        $description = I('post.description');
        $tag = I('post.tag');

        $upload = new \Think\Upload();// 实例化上传类


        switch ($type)
        {
            case 'pic':
                $upload->maxSize   =     1024*1024*5 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg', );// 设置附件上传类型
                $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
                $upload->savePath  =     '/'.$type.'/'; // 设置附件上传（子）目录
                // 上传文件
                $info=$upload->upload();
                cout($info);
                $imgPath = $upload->rootPath.$info['content']['savepath'].$info['content']['savename'];
                $image = new \Think\Image();
//                $image->open($imgPath);
//                $image->text('艺术类资源共享平台','./1.ttf',20,'#99CC00',\Think\Image::IMAGE_WATER_SOUTHEAST)->save($upload->rootPath.$info['content']['savepath'].'water_'.$info['content']['savename']);
//
////
                break;
//            case 'mic':
//
//                $upload->maxSize   =     1024*1024*5 ;// 设置附件上传大小
//                $upload->exts      =     array('mp3', 'ra', 'wma', 'wav', 'aif', 'aiff', 'mpc', 'flac', 'pac', 'ape', 'wv');// 设置附件上传类型
//                $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
//                $upload->savePath  =     '/'.$type.'/'; // 设置附件上传（子）目录
//                // 上传文件
//                $info=$upload->upload();
//                $imgPath = $upload->rootPath.$info['content']['savepath'].$info['content']['savename'];
////
//                break;
//            case 'rar':
//
//                $upload->maxSize   =     1024*1024*5 ;// 设置附件上传大小
//                $upload->exts      =     array('rar', 'zip', 'png', 'tar', 'jar', 'jae', 'iso');// 设置附件上传类型
//                $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
//                $upload->savePath  =     '/'.$type.'/'; // 设置附件上传（子）目录
//                // 上传文件
//                $info=$upload->upload();
//                $imgPath = $upload->rootPath.$info['content']['savepath'].$info['content']['savename'];
//                break;

        }

//        $data=array(
//            'user_id' => I('session.user_id'),
//            'level' => 0,
//            'content' => $imgPath,
//            'name' => $name,
//            'description' => $description,
//            'upload_time' => time(),
//            'user_name' => I('session.user_name'),
//            'tag' => $tag,
//            'is_delete' => 0,
//            'is_examine' => 0,
//            'group' => $type,
//            'category' => $type,
//            'examine_time' => 0
//        );
//        $is_err = 1;
//        $err_message = $upload->getError();
//
//
//        if($type && $name  && $description ){
//            $result = M('Upload')->add($data);
//            if($result){
//                $is_err = 0;
//                $err_message = "上传成功";
//            }else{
//                $err_message = "多不起, 发生位置错误";
//            }
//        }
//        else{
//            $err_message = "所填信息不完整";
//        }
//        $response = array(
//            'is_err' => $is_err,
//            'err_message' => $err_message
//        );
//        $response = json_encode($response, JSON_UNESCAPED_UNICODE);
//
//        echo $response;
    }



}