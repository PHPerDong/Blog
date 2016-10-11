<?php
namespace Admin\Model;
use \Think\Model;

class AdminModel extends Model
{
     /**
      *所有允许的字段
      *
      */
     protected $fields = array('id','username','password','last_login_time','last_login_ip','createtime','updatetime','status');


     /**
      * 自动验证
      *
      ****/
     protected $_validate = array(
                    array('username','require','账号不能为空',1),
                    array('password','require','密码不能为空',1),
               );

    /**
     * 自动完成
     *
     ****/
    protected $_auto = array(
                    array('password','md5',1,'function'),
               );



     /**
      *执行add之前做预处理
      *
      ***/
     protected function _before_insert(&$data,$options){
         writeAdminlog($data['username']);

     }

     /**
      *执行修改之前做预处理
      *
      ***/
     protected function _before_update(&$data,$options){
         writeAdminlog($data['username']);

     }

     protected function _before_delete(&$data){
         //writeAdminlog($data['username']);
     }



    /**
     * 添加用户
     * @return mixed
     */
    public function addUser()
    {

    }


    /**
     * 修改用户
     * @return mixed
     */
    public function updateUser()
    {

    }


    /**
     * 删除用户
     *
     * @return mixed
     */
    public function deleteUser()
    {
         $id   = I('post.id');
         if($id==1) return false;
         $info = $this->where('id='.$id)->delete();
         $result = $this->where('id='.$id)->select();
         writeAdminlog($result[0]['username']);
         return $info;
    }




     /**
      *
      * 获取账户数据
      * @return mixed
      */
     public function getAdminList()
     {
         $data = $this->where('status=0')->select();
         return $data;

     }















}