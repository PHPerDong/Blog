<?php

header("Content-type:text/html;charset=utf-8");

//传递数据以易于阅读的样式格式化后输出
function p($data){
    // 定义样式
    $str='<pre style="display: block;padding: 9.5px;margin: 44px 0 0 0;font-size: 13px;line-height: 1.42857;color: #333;word-break: break-all;word-wrap: break-word;background-color: #F5F5F5;border: 1px solid #CCC;border-radius: 4px;">';
    // 如果是boolean或者null直接显示文字；否则print
    if (is_bool($data)) {
        $show_data=$data ? 'true' : 'false';
    }elseif (is_null($data)) {
        $show_data='null';
    }else{
        $show_data=print_r($data,true);
    }
    $str.=$show_data;
    $str.='</pre>';
    echo $str;
}


function api(){

}



/**
 * 获取分页数据
 * @param  integer $count    总记录数
 * @param  integer $pageSize 每页显示记录数
 * @return array           返回分页字符串和limit数据
 */
function getPage($count,$pageSize){

    $page=new \Think\Page($count,$pageSize);
    $page->rollPage = 6;//分页栏每页显示的页数
    //$page->setConfig('header', '<div class="pxofy">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</div>');
    $page->setConfig('prev', ' 上一页');
    $page->setConfig('next', '下一页  ');
    $page->setConfig('first', '首页');
    $page->setConfig('last', '末页');

    $page->setConfig('theme', '%HEADER%<div class="pagin-list">%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%</div>');
    return array(
        'page' => $page->show(),
        'limit'=> $page->firstRow .','.$page->listRows,
    );
}


/**
  * * @param  string  $image_path 原图path
  *缩略图
  *
  ****/
function thumImage($image_path, $width, $height){
    //$image_path=trim($image_path,'.');
    $min_path='.'.str_replace('Uploads', 'Uploads/'.$width.'_'.$height, $image_path);
    //$min_path =
    $image = new \Think\Image();
    $image->open($image_path);
    // 生成一个居中裁剪为$width*$height的缩略图并保存
    @$image->thumb($width, $height, 2)->save($min_path);
    //这里可以上传到OSS上
    return $min_path;

}



/**
 *
 *文件上传
 **/
function uploadFile($file,$width="",$height="",$status=0){
    if(!isset($_FILES)){
        return array('code'=>-1,'error'=>'非法请求');
    }

    $confing = array(
        'maxSize' => 3145728,//上传的文件大小限制 (0-不做限制)
        'exts'    => array('jpg','png','jpeg','gif'),//允许上传的文件后缀
        'savePath'=> "./Uploads/",//保存路径
        'saveName'=> array('uniqid', ''),//上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath'=> "./",////保存根路径
    );
    $upload = new \Think\Upload($confing);
    //$upload->maxSize = 3145728;//上传的文件大小限制 (0-不做限制)
    //$upload->exts    = array('jpg','png','jpeg','gif');//允许上传的文件后缀
    //$upload->savePath= "./Uploads/";//保存路径
    //$upload->saveName= array('uniqid', '');//上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
    //$upload->rootPath= "./";////保存根路径
    $info = $upload->upload();
    if($info){
        foreach ($info as $key => $value){
             $img_urll[]  = $value['savepath'].$value['savename'];
        }
        if($status){
            //thumImage();
            //生成缩率图
            foreach($img_urll as $v){
                $min_path[] = thumImage($v, $width, $height);
                //dump($min_path);exit;
            }
        }
        return array("code"=>1, "file"=>$img_urll);
    }else{
        return array("code"=>-1,"error"=>$upload->getError());
    }

}



/**
 *后台记录操作日志
 *
 **/
function writeAdminlog($title=""){

    $module_list = array(
        'Admin' => '管理员',
    );

    $action_list = array(
        'add'    => '添加',
        'save'   => '编辑',
        'update' => '编辑',
        'insert' => '添加',
        'delete' => '删除',
        'toggle' => '快捷修改',
        'edit'   => '编辑',
    );

    if(isset($module_list[MODULE_NAME]) && isset($action_list[ACTION_NAME])){
        $admin = session('admin_user');
        $log   = $module_list[MODULE_NAME].$action_list[ACTION_NAME].$title;
        //插入数据库
        $data['name'] = $admin['username'];
        $data['log']  = $log;
        $data['createtime']  = time();
        $model = M('Adminlog');
        $model->add($data);

    }

}
































































