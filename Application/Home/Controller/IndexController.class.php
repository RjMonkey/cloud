<?php
namespace Home\Controller;
use Think\App;
use Think\Controller;
class IndexController extends Controller {

    /**
     *
     */
    public function index()
    {
        $this->show();
    }

    /**
     *
     */
    public function login()
    {
        // 判断提交方式
        if (IS_POST) {

            $username = trim(I('post.username'));
            $userpsd = trim(I('post.password'));

            $result = M("lms_user", null);
            $fwhere['user_number'] = $username;
            $fwhere['user_password'] = $userpsd;
            $find = $result->where($fwhere)->select();

            if(I('session.username') || $find)
            {
                $userid = $find[0]['id'];
                session('username', 1);
                session('userid', $userid);
//                $this->redirect('Personal/personal');
                echo "<script language='javascript'>alert('登录成功！');javascript:window.location.href='".U('Personal/personal');
            }
            else
            {
//                $this->error("帐号或密码输入错误");
                echo "<script language='javascript'>alert('账户密码输入错误！');javascript:history.go(-1);</script>";
//                echo "<script></script>";
            }

        } else {
            //echo "inelse";
            $this->display();
        }
    }

    public function logout()
    {
        session(null);
        $this->success("注销成功");
    }

}