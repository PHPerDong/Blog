<?php
namespace Admin\Controller;
use \Common\Controller\AdminBaseController;

class AdminGroupController extends AdminBaseController {

    public function index(){
        $model = D('AuthGroup');
        $info  = $model->getGroup();
        $this->assign('data', $info);
        $this->display();
    }


    public function add(){
        $model = D('AuthRule');
        $info  = $model->getTreeData('level','asc', 2);
        $this->assign("data", $info);
        $this->display();
    }


    /**
     *添加用户组和权限
     *
     ***/
    public function insert(){
        $model = D('AuthGroup');
        if($model->create()){
            if($model->add()){
                $data['status'] = 1;
            }else{
                $data['status'] = 0;
            }
        }else{
            $data['msg'] = "非法请求";
        }
        $this->ajaxReturn($data);
    }



    public function update(){
        $model = D('AuthGroup');
        $info  = $model->getOneGroupUser();
        $this->assign('result', $info);
        $this->display();
    }

    public function updates(){

    }

    /**
     *删除用户组
     *
     ***/
    public function delete(){
        $model = D('AuthGroup');
        $info  = $model->deleteGroup();
        if($info){
            $data['code'] = 200;
        }else{
            $data['code'] = 0;
        }
        $this->ajaxReturn($data);
    }


}