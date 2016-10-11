<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;

/****
 *后台控制器
 *
 **/
class IndexController extends AdminBaseController {

    /**
     *加载菜单列表,加载首页
     *
     **/
    public function index()
    {

        $this->display();
    }



}