<?php
namespace Admin\Model;
use \Think\Model;

class NewsModel extends Model{

    protected $_validate = array(
        array('news_title', 'require', '标题不能为空', 1),
        array('news_content', 'require', '文章内容不能为空', 1),
    );


    /**
     * 预处理
     *
     * ***/
    protected function _before_insert(&$data,$options){

        //parent::_before_insert($data, $options);
        $data['news_time'] = time();
        $img = uploadFile($_FILES);
        if($img['code']==1) $data['news_img'] = $img['file'][0];

    }

    protected function _before_update(&$data,$options){
        $data['news_time'] = time();
        $img = uploadFile($_FILES);
        if($img['code']==1) $data['news_img'] = $img['file'][0];
    }


    /**
     *
     *获取文章列表
     ****/
     public function getNewsList(){

         $info = $this->select();
         return $info;

     }

     /**
      *获取修改内容
      ***/
     public function getUpData(){
         $id   = I('get.id');
         if(empty($id)) return $data = ['code'=>-1,'msg'=>'非法请求'];
         $info = $this->where('n_id='.$id)->select();
         return $info;
     }



}