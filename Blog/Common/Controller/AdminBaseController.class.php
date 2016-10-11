<?php
namespace Common\Controller;


class AdminBaseController extends BaseController{

    public function _initialize()
    {

        parent::_initialize();
        $auth = new \Think\Auth();
        $rule_name=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        $admin  = session('admin_user');
        $result = $auth->check($rule_name,$admin['id']);
        if(!$result){
            if(empty($admin)){
                $this->redirect('Login/login');
            }else{
                //$this->redirect('Login/login');
                //$this->ajaxReturn(404);
                $this->display('Public:auth');
            }
            return;
        }
        //加载菜单列表
        $model = D("AuthRule");
        $data = $model->getTreeData('level','asc');
        $this->assign('result',$data);
    }


    //错误页面跳转
    public function _empty(){

    }

}