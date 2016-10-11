<?php
namespace Admin\Controller;
use \Common\Controller\AdminBaseController;

class NewsController extends AdminBaseController{

    public function add(){
        $model = M('Newscreate');
        $data  = $model->select();
        $this->assign('info',$data);
        $this->display();
    }


    /**
     *
     *添加文章
     ***/
    public function insert(){
         $model = D('News');
         if(IS_AJAX){
             if ($model->create()){
                 if($model->add()) {
                     $data = ['code'=>1,'msg'=>'添加成功'];
                     $this->ajaxReturn($data);
                 }
             }
         }else{
             $data = ['code'=>-1,'msg'=>'非法参数'];
             $this->ajaxReturn($data);
         }
    }

    /**
     *文章列表
     *
     **/
    public function newslist(){
        $model = D('News');
        $info  = $model->getNewsList();
        $this->assign('results', $info);
        $this->display();

    }

    /**
     *文章修改
     *
     ***/
    public function updateList(){
        $model = M('Newscreate');
        $data  = $model->select();
        $model = D('News');
        $info  = $model->getUpData();
        if(!empty($info['code'])){
             die();
        }else{
            $this->assign("result", $info);
        }
        $this->assign('info',$data);
        $this->display();
    }

    /**
     *执行修改
     *
     ****/
    public function update(){
        $model = D('News');
        $id    = I('get.id');
        if(IS_AJAX){
            if ($model->create()){
                if($model->where('n_id='.$id)->save()) {
                    $data = ['code'=>1,'msg'=>'修改成功'];
                    $this->ajaxReturn($data);
                }
            }
        }else{
            $data = ['code'=>-1,'msg'=>'非法参数'];
            $this->ajaxReturn($data);
        }
    }

    /**
     *
     *文章删除
     *
     *****/
    public function delete(){

        $model  = D('News');
        $id     = I('post.id');
        $result = $model->where('n_id='.$id)->delete();
        if($result){
            $data = ['code'=>1,'msg'=>'删除成功'];
        }else{
            $data = ['code'=>-1,'msg'=>'删除失败'];
        }
        $this->ajaxReturn($data);

    }




}