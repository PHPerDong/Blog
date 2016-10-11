<?php
namespace Admin\Controller;
use \Common\Controller\AdminBaseController;

class AdminActionController extends AdminBaseController
{

     /**
      *权限列表
      *
      */
     public function index(){
          $this->display();
     }

     /**
      *
      *添加权限
      **/
     public function add(){
         $model = D('AuthRule');
         $info  = $model->getMenu();
         $this->assign("info", $info);
         $this->display();

     }

     public function insert(){
         $model = D('AuthRule');
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


}