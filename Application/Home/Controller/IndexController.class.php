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
//        echo md5("admin");
        $this->show();
    }

    public function login()
    {
        // 判断提交方式
        if (IS_POST) {
            $username = trim(I('post.username'));
            $userpsd = trim(I('post.password'));

            $result = M("User");
            $fwhere['username'] = $username;
            $fwhere['password'] = md5($userpsd);
            $find = $result->where($fwhere)->find();
            if(I('session.username') || $find)
            {
                session('username', $find['username']);
                session('userid', $find['user_id']);
                session('number', $find['number']);
                session('level', $find['level']);
                session('max_size', $find['max_size']);
                echo "<script>alert('登录成功！');javascript:window.location.href='".U('Personal/index')."'</script>";
            }
            else
            {
                echo "<script>alert('账户密码输入错误！');javascript:window.location.href='".U('Index/index')."'</script>";
            }
        }
        $this->display();
    }

    public function logout()
    {
        session(null);
        echo "<script language='javascript'>alert('注销成功！');javascript:window.location.href='".U('Index/index');
    }

}