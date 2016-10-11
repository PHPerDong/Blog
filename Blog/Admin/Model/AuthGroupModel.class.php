<?php
namespace Admin\Model;
use \Think\Model;

class AuthGroupModel extends Model {

    /**
     *预处理
     *
     ***/
    protected function _before_update(&$data, $option){

    }

    protected function _before_insert(&$data, $option){
        $data['rules'] = implode(",", I('post.rules'));
    }


    /**
     *获取用户组
     *
     ****/
    public function getGroup(){
        $info = $this->select();
        return $info;
    }

    /**
     *
     *
     **/
    public function getOneGroupUser(){
        $id   = I('get.id');
        $info = $this->where('id='.$id)->select();
        return $info;
    }

    public function deleteGroup(){
        $id   = I('post.id');
        if($id==1) return false;
        $info = $this->where('id='.$id)->delete();
        $result = $this->where('id='.$id)->select();
        writeAdminlog($result[0]['title']);
        return $info;
    }

}