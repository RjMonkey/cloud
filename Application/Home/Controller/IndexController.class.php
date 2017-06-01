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
<<<<<<< HEAD
//        echo md5("admin");
=======
>>>>>>> 0317c2698a776a5de4ca6aaab2d23ec10f2c178a
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

<<<<<<< HEAD
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

        } else {

=======
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
>>>>>>> 0317c2698a776a5de4ca6aaab2d23ec10f2c178a
            $this->display();
        }
    }

    public function logout()
    {
        session(null);
<<<<<<< HEAD
        echo "<script language='javascript'>alert('注销成功！');javascript:window.location.href='".U('Index/index');
=======
        $this->success("注销成功");
>>>>>>> 0317c2698a776a5de4ca6aaab2d23ec10f2c178a
    }

}