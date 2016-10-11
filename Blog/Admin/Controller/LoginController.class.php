<?php
namespace Admin\Controller;
use  Think\Controller;

class LoginController extends Controller
{

    public function login(){
        $admin = session('admin_user');
        if(!empty($admin)){
            $this->redirect('Index/index');
        }
        if(IS_POST){
            $post  = I('post.');
            $model = D('Admin');
            $user = $model->where(array('username'=>$post['username']))->find();
            if(!empty($user)){
                $password = md5($post['password']);
                if($user['password']==$password){
                    if($user['status']==0){
                        $this->loginSuccess($user);
                        $data['status'] = 1;
                        $data['uc_user_synlogin'] = "登入成功";
                        $data['info'] = "登入成功";
                        $data['url'] = "index";
                    }else{
                        $data['info'] = "账号禁用";
                    }
                }else{
                    $data['info'] = "密码错误";
                }
            }else{
                $data['info'] = "用户不存在";
            }
            $this->ajaxReturn($data);

        }else{

            $this->display();

        }

    }
    /**
     *中间跳转
     **/
    public function index(){
        $this->redirect('Admin/Index/index');
    }


    private function loginSuccess($user){

        unset($user['password']);
        session('admin_user',$user);
        $map['id']               = $user['id'];
        $data['last_login_time'] = time();
        $data['last_login_ip']   = get_client_ip(1);
        $model = M('Admin');
        $model->where($map)->save($data);

    }


    public function loginOut(){
        session("admin_user",null);
        $this->redirect('Login/login');
        die();
    }

}