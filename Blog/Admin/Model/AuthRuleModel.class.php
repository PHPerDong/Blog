<?php
namespace Admin\Model;
use \Think\Model;

class AuthRuleModel extends Model {


      /**
       *新增前预处理
       ****/
      protected function _before_insert(&$data,$option){
          $data['name'] = I('post.module_name').'/'.I('post.action_name');
      }


      /**
       *
       *获取全部菜单
       *@param  string $type tree获取树形结构 level获取层级结构
       * @return array       	结构数据
       **/
      public function getTreeData($type="tree", $order="", $status=1){
          if($status == 2){
              $data = $this->order('id ASC')->select();
          }else{
              //判断是否要排序
              if(empty($order)){
                  $data = $this->where('menu=0')->order('id ASC')->select();
              }else{
                  $data = $this->where('menu=0')->order('id DESC')->select();
              }
          }
          //获取树形或结构数据
          if($type=="tree"){
              $data = \Org\Util\Data::tree($data, 'title', 'id', 'pid');
          }elseif($type=='level'){
              $data = \Org\Util\Data::channelLevel($data,0,'','id');
              $auth = new \Think\Auth();
              foreach ($data as $key => $value){
                   if($auth->check($value['name'],$_SESSION['admin_user']['id'])){
                        foreach ($value['_data'] as $k => $v){
                             if(!$auth->check($v['name'], $_SESSION['admin_user']['id'])){
                                  unset($data[$key]['_data'][$k]);
                             }
                        }
                   }else{
                        unset($data[$key]);
                   }
              }
          }
          return $data;
      }


     /**
      *
      *获取上级菜单
      *****/
     public function getMenu(){
        $info = $this->where('pid=0')->select();
        return $info;
     }





}
