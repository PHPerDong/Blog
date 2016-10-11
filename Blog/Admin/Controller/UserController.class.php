<?php
namespace Admin\Controller;
use \Common\Controller\AdminBaseController;

class UserController extends AdminBaseController
{

    /**
     * @return config
     */
    public function userInfo(){

       $models = D('Admin');
       $datas  = $models->getAdminList();
       $this->assign('results', $datas);
       $this->display();

    }

    public function delete(){
       $models = D('Admin');
       $info   = $models->deleteUser();
       if($info){
           $data['code'] = 200;
           $this->ajaxReturn($data);
       }else{
           $data['code'] = 0;
           $this->ajaxReturn($data);
       }

    }

    public function update(){
        $id     = I('get.id');
        $models = M('Admin');
        $data   = $models->where('id='.$id)->select();
        $this->assign('data', $data);
        $this->display();
    }



}
