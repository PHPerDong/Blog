<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>控制台</title>
    <link href="/view/Admin/Public/Css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/view/Admin/Public/Css/identify.css" />
    <link rel="stylesheet" type="text/css" href="/view/Admin/Public/Css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/view/Admin/Public/Css/account.css" />
    <link rel="stylesheet" type="text/css" href="/view/Admin/Public/Css/style.css" />

    <link rel="stylesheet" type="text/css" href="/view/Admin/Public/Css/control_index.css" />
    <link rel="stylesheet" href="/view/Admin/Public/Css/font_1466258017_0700355.css">
    <link rel="stylesheet" href="/view/Admin/Public/Css/layui.css">

    <script type="text/javascript" src="/view/Admin/Public/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/view/Admin/Public/Js/layui.js"></script>
    <script type="text/javascript" src="/view/Admin/Public/Js/layer/layer.js"></script>
    <script type="text/javascript" src="/view/Admin/Public/Js/layerbox.js"></script>
  <!--  <script type="text/javascript" src="/view/Admin/Public/Js/select.js"></script>-->
    <script type="text/javascript" src="/view/Admin/Public/Js/haidao.validate.js"></script>
    <script type="text/javascript" src="/view/Admin/Public/Js/jquery.form.min.js"></script>

</head>
<body>
<div class="view-topbar">
    <div class="topbar-console">
        <div class="tobar-head fl">
            <a href="<?php echo U('Index/index');?>" class="topbar-logo fl">
                <span><img src="/view/Admin/Public/Images/logo.png" width="20" height="20"/></span>
            </a>
            <a href="<?php echo U('Index/index');?>" class="topbar-home-link topbar-btn text-center fl"><span>管理控制台</span></a>
        </div>
    </div>
    <div class="topbar-info">
        <ul class="fr">
            <li class="fl dropdown topbar-notice topbar-btn">
                <a href="#" class="dropdown-toggle">
                    <span class="icon-notice"></span>
                    <span class="topbar-num have">0</span>
                    <!--have表示有消息，没有消息去掉have-->
                </a>
            </li>

            <li class="fl topbar-info-item">
                <div class="dropdown">
                    <a href="#" class="topbar-btn">
                        <span class="fl text-normal">帮助与文档</span>
                        <span class="icon-arrow-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">模板开发手册</a></li>
                        <li><a href="#">某某数据字典</a></li>
                    </ul>
                </div>
            </li>
            <li class="fl topbar-info-item">
                <div class="dropdown">
                    <a href="#" class="topbar-btn">
                        <span class="fl text-normal"><?php echo ($_SESSION['admin_user']['username']); ?></span>
                        <span class="icon-arrow-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('Login/loginOut');?>">退出</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="view-body">
    <div class="view-sidebar">
        <div class="sidebar-content">
            <?php if(is_array($result)): foreach($result as $key=>$res): ?><div class="sidebar-nav">
        <div class="sidebar-title">
            <a href="#">
                <span class="icon"><b class="fl icon-arrow-down"></b></span>
                <span class="text-normal"><?php echo ($res['title']); ?></span>
            </a>
        </div>
        <ul class="sidebar-trans">
            <?php if(is_array($res['_data'])): foreach($res['_data'] as $key=>$resdata): ?><li>
                    <a href="<?php echo U($resdata['name']);?>">
                        <b class="sidebar-icon"></b>
                        <span class="text-normal"><?php echo ($resdata['title']); ?></span>
                    </a>
                </li><?php endforeach; endif; ?>
        </ul>
    </div><?php endforeach; endif; ?>
        </div>
    </div>
    <div class="view-product">
        <div class="authority">
            <div class="authority-head">
                <div class="manage-head">
                    <h6 class="layout padding-left manage-head-con">权限列表

                    </h6>
                </div>
            </div>
            <div class="authority-content tab-content">
                <dl>
                    <dt>管理权限</dt>
                    <dd>
                        <table border="0" cellspacing="0" cellpadding="0" class="border-table" width="98%">
                            <thead>
                            <tr>
                                <th width="30%">导航名称</th>
                                <th>权限分配</th>
                                <th width="10%">全选</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl00$hidName" id="rptList_hidName_0" value="sys_contents" />
                                    <input type="hidden" name="rptList$ctl00$hidActionType" id="rptList_hidActionType_0" value="Show" />
                                    <input type="hidden" name="rptList$ctl00$hidLayer" id="rptList_hidLayer_0" value="1" />
                                    <span class="folder-open"></span> 站点管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_0" class="cbllist"><input id="rptList_cblActionType_0_0_0" type="checkbox" name="rptList$ctl00$cblActionType$0" value="Show" /><label for="rptList_cblActionType_0_0_0"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl01$hidName" id="rptList_hidName_1" value="channel_main" />
                                    <input type="hidden" name="rptList$ctl01$hidActionType" id="rptList_hidActionType_1" value="Show" />
                                    <input type="hidden" name="rptList$ctl01$hidLayer" id="rptList_hidLayer_1" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 默认站点
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_1" class="cbllist"><input id="rptList_cblActionType_1_0_1" type="checkbox" name="rptList$ctl01$cblActionType$0" value="Show" /><label for="rptList_cblActionType_1_0_1"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl02$hidName" id="rptList_hidName_2" value="channel_news" />
                                    <input type="hidden" name="rptList$ctl02$hidActionType" id="rptList_hidActionType_2" value="Show" />
                                    <input type="hidden" name="rptList$ctl02$hidLayer" id="rptList_hidLayer_2" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 新闻资讯
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_2" class="cbllist"><input id="rptList_cblActionType_2_0_2" type="checkbox" name="rptList$ctl02$cblActionType$0" value="Show" /><label for="rptList_cblActionType_2_0_2"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl03$hidName" id="rptList_hidName_3" value="channel_news_list" />
                                    <input type="hidden" name="rptList$ctl03$hidActionType" id="rptList_hidActionType_3" value="Show,View,Add,Edit,Delete,Audit" />
                                    <input type="hidden" name="rptList$ctl03$hidLayer" id="rptList_hidLayer_3" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 内容管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_3" class="cbllist"><input id="rptList_cblActionType_3_0_3" type="checkbox" name="rptList$ctl03$cblActionType$0" value="Show" /><label for="rptList_cblActionType_3_0_3"> 显示 </label><input id="rptList_cblActionType_3_1_3" type="checkbox" name="rptList$ctl03$cblActionType$1" value="View" /><label for="rptList_cblActionType_3_1_3"> 查看 </label><input id="rptList_cblActionType_3_2_3" type="checkbox" name="rptList$ctl03$cblActionType$2" value="Add" /><label for="rptList_cblActionType_3_2_3"> 添加 </label><input id="rptList_cblActionType_3_3_3" type="checkbox" name="rptList$ctl03$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_3_3_3"> 修改 </label><input id="rptList_cblActionType_3_4_3" type="checkbox" name="rptList$ctl03$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_3_4_3"> 删除 </label><input id="rptList_cblActionType_3_5_3" type="checkbox" name="rptList$ctl03$cblActionType$5" value="Audit" /><label for="rptList_cblActionType_3_5_3"> 审核 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl04$hidName" id="rptList_hidName_4" value="channel_news_category" />
                                    <input type="hidden" name="rptList$ctl04$hidActionType" id="rptList_hidActionType_4" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl04$hidLayer" id="rptList_hidLayer_4" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 栏目类别
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_4" class="cbllist"><input id="rptList_cblActionType_4_0_4" type="checkbox" name="rptList$ctl04$cblActionType$0" value="Show" /><label for="rptList_cblActionType_4_0_4"> 显示 </label><input id="rptList_cblActionType_4_1_4" type="checkbox" name="rptList$ctl04$cblActionType$1" value="View" /><label for="rptList_cblActionType_4_1_4"> 查看 </label><input id="rptList_cblActionType_4_2_4" type="checkbox" name="rptList$ctl04$cblActionType$2" value="Add" /><label for="rptList_cblActionType_4_2_4"> 添加 </label><input id="rptList_cblActionType_4_3_4" type="checkbox" name="rptList$ctl04$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_4_3_4"> 修改 </label><input id="rptList_cblActionType_4_4_4" type="checkbox" name="rptList$ctl04$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_4_4_4"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl05$hidName" id="rptList_hidName_5" value="channel_news_comment" />
                                    <input type="hidden" name="rptList$ctl05$hidActionType" id="rptList_hidActionType_5" value="Show,View,Delete,Reply" />
                                    <input type="hidden" name="rptList$ctl05$hidLayer" id="rptList_hidLayer_5" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 评论管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_5" class="cbllist"><input id="rptList_cblActionType_5_0_5" type="checkbox" name="rptList$ctl05$cblActionType$0" value="Show" /><label for="rptList_cblActionType_5_0_5"> 显示 </label><input id="rptList_cblActionType_5_1_5" type="checkbox" name="rptList$ctl05$cblActionType$1" value="View" /><label for="rptList_cblActionType_5_1_5"> 查看 </label><input id="rptList_cblActionType_5_2_5" type="checkbox" name="rptList$ctl05$cblActionType$2" value="Delete" /><label for="rptList_cblActionType_5_2_5"> 删除 </label><input id="rptList_cblActionType_5_3_5" type="checkbox" name="rptList$ctl05$cblActionType$3" value="Reply" /><label for="rptList_cblActionType_5_3_5"> 回复 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl06$hidName" id="rptList_hidName_6" value="channel_goods" />
                                    <input type="hidden" name="rptList$ctl06$hidActionType" id="rptList_hidActionType_6" value="Show" />
                                    <input type="hidden" name="rptList$ctl06$hidLayer" id="rptList_hidLayer_6" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 购物商城
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_6" class="cbllist"><input id="rptList_cblActionType_6_0_6" type="checkbox" name="rptList$ctl06$cblActionType$0" value="Show" /><label for="rptList_cblActionType_6_0_6"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl07$hidName" id="rptList_hidName_7" value="channel_goods_list" />
                                    <input type="hidden" name="rptList$ctl07$hidActionType" id="rptList_hidActionType_7" value="Show,View,Add,Edit,Delete,Audit" />
                                    <input type="hidden" name="rptList$ctl07$hidLayer" id="rptList_hidLayer_7" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 内容管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_7" class="cbllist"><input id="rptList_cblActionType_7_0_7" type="checkbox" name="rptList$ctl07$cblActionType$0" value="Show" /><label for="rptList_cblActionType_7_0_7"> 显示 </label><input id="rptList_cblActionType_7_1_7" type="checkbox" name="rptList$ctl07$cblActionType$1" value="View" /><label for="rptList_cblActionType_7_1_7"> 查看 </label><input id="rptList_cblActionType_7_2_7" type="checkbox" name="rptList$ctl07$cblActionType$2" value="Add" /><label for="rptList_cblActionType_7_2_7"> 添加 </label><input id="rptList_cblActionType_7_3_7" type="checkbox" name="rptList$ctl07$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_7_3_7"> 修改 </label><input id="rptList_cblActionType_7_4_7" type="checkbox" name="rptList$ctl07$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_7_4_7"> 删除 </label><input id="rptList_cblActionType_7_5_7" type="checkbox" name="rptList$ctl07$cblActionType$5" value="Audit" /><label for="rptList_cblActionType_7_5_7"> 审核 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl08$hidName" id="rptList_hidName_8" value="channel_goods_category" />
                                    <input type="hidden" name="rptList$ctl08$hidActionType" id="rptList_hidActionType_8" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl08$hidLayer" id="rptList_hidLayer_8" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 栏目类别
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_8" class="cbllist"><input id="rptList_cblActionType_8_0_8" type="checkbox" name="rptList$ctl08$cblActionType$0" value="Show" /><label for="rptList_cblActionType_8_0_8"> 显示 </label><input id="rptList_cblActionType_8_1_8" type="checkbox" name="rptList$ctl08$cblActionType$1" value="View" /><label for="rptList_cblActionType_8_1_8"> 查看 </label><input id="rptList_cblActionType_8_2_8" type="checkbox" name="rptList$ctl08$cblActionType$2" value="Add" /><label for="rptList_cblActionType_8_2_8"> 添加 </label><input id="rptList_cblActionType_8_3_8" type="checkbox" name="rptList$ctl08$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_8_3_8"> 修改 </label><input id="rptList_cblActionType_8_4_8" type="checkbox" name="rptList$ctl08$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_8_4_8"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl09$hidName" id="rptList_hidName_9" value="channel_goods_comment" />
                                    <input type="hidden" name="rptList$ctl09$hidActionType" id="rptList_hidActionType_9" value="Show,View,Delete,Reply" />
                                    <input type="hidden" name="rptList$ctl09$hidLayer" id="rptList_hidLayer_9" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 评论管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_9" class="cbllist"><input id="rptList_cblActionType_9_0_9" type="checkbox" name="rptList$ctl09$cblActionType$0" value="Show" /><label for="rptList_cblActionType_9_0_9"> 显示 </label><input id="rptList_cblActionType_9_1_9" type="checkbox" name="rptList$ctl09$cblActionType$1" value="View" /><label for="rptList_cblActionType_9_1_9"> 查看 </label><input id="rptList_cblActionType_9_2_9" type="checkbox" name="rptList$ctl09$cblActionType$2" value="Delete" /><label for="rptList_cblActionType_9_2_9"> 删除 </label><input id="rptList_cblActionType_9_3_9" type="checkbox" name="rptList$ctl09$cblActionType$3" value="Reply" /><label for="rptList_cblActionType_9_3_9"> 回复 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl10$hidName" id="rptList_hidName_10" value="channel_video" />
                                    <input type="hidden" name="rptList$ctl10$hidActionType" id="rptList_hidActionType_10" value="Show" />
                                    <input type="hidden" name="rptList$ctl10$hidLayer" id="rptList_hidLayer_10" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 视频专区
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_10" class="cbllist"><input id="rptList_cblActionType_10_0_10" type="checkbox" name="rptList$ctl10$cblActionType$0" value="Show" /><label for="rptList_cblActionType_10_0_10"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl11$hidName" id="rptList_hidName_11" value="channel_video_list" />
                                    <input type="hidden" name="rptList$ctl11$hidActionType" id="rptList_hidActionType_11" value="Show,View,Add,Edit,Delete,Audit" />
                                    <input type="hidden" name="rptList$ctl11$hidLayer" id="rptList_hidLayer_11" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 内容管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_11" class="cbllist"><input id="rptList_cblActionType_11_0_11" type="checkbox" name="rptList$ctl11$cblActionType$0" value="Show" /><label for="rptList_cblActionType_11_0_11"> 显示 </label><input id="rptList_cblActionType_11_1_11" type="checkbox" name="rptList$ctl11$cblActionType$1" value="View" /><label for="rptList_cblActionType_11_1_11"> 查看 </label><input id="rptList_cblActionType_11_2_11" type="checkbox" name="rptList$ctl11$cblActionType$2" value="Add" /><label for="rptList_cblActionType_11_2_11"> 添加 </label><input id="rptList_cblActionType_11_3_11" type="checkbox" name="rptList$ctl11$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_11_3_11"> 修改 </label><input id="rptList_cblActionType_11_4_11" type="checkbox" name="rptList$ctl11$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_11_4_11"> 删除 </label><input id="rptList_cblActionType_11_5_11" type="checkbox" name="rptList$ctl11$cblActionType$5" value="Audit" /><label for="rptList_cblActionType_11_5_11"> 审核 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl12$hidName" id="rptList_hidName_12" value="channel_video_category" />
                                    <input type="hidden" name="rptList$ctl12$hidActionType" id="rptList_hidActionType_12" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl12$hidLayer" id="rptList_hidLayer_12" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 栏目类别
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_12" class="cbllist"><input id="rptList_cblActionType_12_0_12" type="checkbox" name="rptList$ctl12$cblActionType$0" value="Show" /><label for="rptList_cblActionType_12_0_12"> 显示 </label><input id="rptList_cblActionType_12_1_12" type="checkbox" name="rptList$ctl12$cblActionType$1" value="View" /><label for="rptList_cblActionType_12_1_12"> 查看 </label><input id="rptList_cblActionType_12_2_12" type="checkbox" name="rptList$ctl12$cblActionType$2" value="Add" /><label for="rptList_cblActionType_12_2_12"> 添加 </label><input id="rptList_cblActionType_12_3_12" type="checkbox" name="rptList$ctl12$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_12_3_12"> 修改 </label><input id="rptList_cblActionType_12_4_12" type="checkbox" name="rptList$ctl12$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_12_4_12"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl13$hidName" id="rptList_hidName_13" value="channel_video_comment" />
                                    <input type="hidden" name="rptList$ctl13$hidActionType" id="rptList_hidActionType_13" value="Show,View,Delete,Reply" />
                                    <input type="hidden" name="rptList$ctl13$hidLayer" id="rptList_hidLayer_13" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 评论管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_13" class="cbllist"><input id="rptList_cblActionType_13_0_13" type="checkbox" name="rptList$ctl13$cblActionType$0" value="Show" /><label for="rptList_cblActionType_13_0_13"> 显示 </label><input id="rptList_cblActionType_13_1_13" type="checkbox" name="rptList$ctl13$cblActionType$1" value="View" /><label for="rptList_cblActionType_13_1_13"> 查看 </label><input id="rptList_cblActionType_13_2_13" type="checkbox" name="rptList$ctl13$cblActionType$2" value="Delete" /><label for="rptList_cblActionType_13_2_13"> 删除 </label><input id="rptList_cblActionType_13_3_13" type="checkbox" name="rptList$ctl13$cblActionType$3" value="Reply" /><label for="rptList_cblActionType_13_3_13"> 回复 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl14$hidName" id="rptList_hidName_14" value="channel_photo" />
                                    <input type="hidden" name="rptList$ctl14$hidActionType" id="rptList_hidActionType_14" value="Show" />
                                    <input type="hidden" name="rptList$ctl14$hidLayer" id="rptList_hidLayer_14" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 图片分享
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_14" class="cbllist"><input id="rptList_cblActionType_14_0_14" type="checkbox" name="rptList$ctl14$cblActionType$0" value="Show" /><label for="rptList_cblActionType_14_0_14"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl15$hidName" id="rptList_hidName_15" value="channel_photo_list" />
                                    <input type="hidden" name="rptList$ctl15$hidActionType" id="rptList_hidActionType_15" value="Show,View,Add,Edit,Delete,Audit" />
                                    <input type="hidden" name="rptList$ctl15$hidLayer" id="rptList_hidLayer_15" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 内容管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_15" class="cbllist"><input id="rptList_cblActionType_15_0_15" type="checkbox" name="rptList$ctl15$cblActionType$0" value="Show" /><label for="rptList_cblActionType_15_0_15"> 显示 </label><input id="rptList_cblActionType_15_1_15" type="checkbox" name="rptList$ctl15$cblActionType$1" value="View" /><label for="rptList_cblActionType_15_1_15"> 查看 </label><input id="rptList_cblActionType_15_2_15" type="checkbox" name="rptList$ctl15$cblActionType$2" value="Add" /><label for="rptList_cblActionType_15_2_15"> 添加 </label><input id="rptList_cblActionType_15_3_15" type="checkbox" name="rptList$ctl15$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_15_3_15"> 修改 </label><input id="rptList_cblActionType_15_4_15" type="checkbox" name="rptList$ctl15$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_15_4_15"> 删除 </label><input id="rptList_cblActionType_15_5_15" type="checkbox" name="rptList$ctl15$cblActionType$5" value="Audit" /><label for="rptList_cblActionType_15_5_15"> 审核 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl16$hidName" id="rptList_hidName_16" value="channel_photo_category" />
                                    <input type="hidden" name="rptList$ctl16$hidActionType" id="rptList_hidActionType_16" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl16$hidLayer" id="rptList_hidLayer_16" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 栏目类别
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_16" class="cbllist"><input id="rptList_cblActionType_16_0_16" type="checkbox" name="rptList$ctl16$cblActionType$0" value="Show" /><label for="rptList_cblActionType_16_0_16"> 显示 </label><input id="rptList_cblActionType_16_1_16" type="checkbox" name="rptList$ctl16$cblActionType$1" value="View" /><label for="rptList_cblActionType_16_1_16"> 查看 </label><input id="rptList_cblActionType_16_2_16" type="checkbox" name="rptList$ctl16$cblActionType$2" value="Add" /><label for="rptList_cblActionType_16_2_16"> 添加 </label><input id="rptList_cblActionType_16_3_16" type="checkbox" name="rptList$ctl16$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_16_3_16"> 修改 </label><input id="rptList_cblActionType_16_4_16" type="checkbox" name="rptList$ctl16$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_16_4_16"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl17$hidName" id="rptList_hidName_17" value="channel_photo_comment" />
                                    <input type="hidden" name="rptList$ctl17$hidActionType" id="rptList_hidActionType_17" value="Show,View,Delete,Reply" />
                                    <input type="hidden" name="rptList$ctl17$hidLayer" id="rptList_hidLayer_17" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 评论管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_17" class="cbllist"><input id="rptList_cblActionType_17_0_17" type="checkbox" name="rptList$ctl17$cblActionType$0" value="Show" /><label for="rptList_cblActionType_17_0_17"> 显示 </label><input id="rptList_cblActionType_17_1_17" type="checkbox" name="rptList$ctl17$cblActionType$1" value="View" /><label for="rptList_cblActionType_17_1_17"> 查看 </label><input id="rptList_cblActionType_17_2_17" type="checkbox" name="rptList$ctl17$cblActionType$2" value="Delete" /><label for="rptList_cblActionType_17_2_17"> 删除 </label><input id="rptList_cblActionType_17_3_17" type="checkbox" name="rptList$ctl17$cblActionType$3" value="Reply" /><label for="rptList_cblActionType_17_3_17"> 回复 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl18$hidName" id="rptList_hidName_18" value="channel_down" />
                                    <input type="hidden" name="rptList$ctl18$hidActionType" id="rptList_hidActionType_18" value="Show" />
                                    <input type="hidden" name="rptList$ctl18$hidLayer" id="rptList_hidLayer_18" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 资源下载
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_18" class="cbllist"><input id="rptList_cblActionType_18_0_18" type="checkbox" name="rptList$ctl18$cblActionType$0" value="Show" /><label for="rptList_cblActionType_18_0_18"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl19$hidName" id="rptList_hidName_19" value="channel_down_list" />
                                    <input type="hidden" name="rptList$ctl19$hidActionType" id="rptList_hidActionType_19" value="Show,View,Add,Edit,Delete,Audit" />
                                    <input type="hidden" name="rptList$ctl19$hidLayer" id="rptList_hidLayer_19" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 内容管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_19" class="cbllist"><input id="rptList_cblActionType_19_0_19" type="checkbox" name="rptList$ctl19$cblActionType$0" value="Show" /><label for="rptList_cblActionType_19_0_19"> 显示 </label><input id="rptList_cblActionType_19_1_19" type="checkbox" name="rptList$ctl19$cblActionType$1" value="View" /><label for="rptList_cblActionType_19_1_19"> 查看 </label><input id="rptList_cblActionType_19_2_19" type="checkbox" name="rptList$ctl19$cblActionType$2" value="Add" /><label for="rptList_cblActionType_19_2_19"> 添加 </label><input id="rptList_cblActionType_19_3_19" type="checkbox" name="rptList$ctl19$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_19_3_19"> 修改 </label><input id="rptList_cblActionType_19_4_19" type="checkbox" name="rptList$ctl19$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_19_4_19"> 删除 </label><input id="rptList_cblActionType_19_5_19" type="checkbox" name="rptList$ctl19$cblActionType$5" value="Audit" /><label for="rptList_cblActionType_19_5_19"> 审核 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl20$hidName" id="rptList_hidName_20" value="channel_down_category" />
                                    <input type="hidden" name="rptList$ctl20$hidActionType" id="rptList_hidActionType_20" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl20$hidLayer" id="rptList_hidLayer_20" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 栏目类别
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_20" class="cbllist"><input id="rptList_cblActionType_20_0_20" type="checkbox" name="rptList$ctl20$cblActionType$0" value="Show" /><label for="rptList_cblActionType_20_0_20"> 显示 </label><input id="rptList_cblActionType_20_1_20" type="checkbox" name="rptList$ctl20$cblActionType$1" value="View" /><label for="rptList_cblActionType_20_1_20"> 查看 </label><input id="rptList_cblActionType_20_2_20" type="checkbox" name="rptList$ctl20$cblActionType$2" value="Add" /><label for="rptList_cblActionType_20_2_20"> 添加 </label><input id="rptList_cblActionType_20_3_20" type="checkbox" name="rptList$ctl20$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_20_3_20"> 修改 </label><input id="rptList_cblActionType_20_4_20" type="checkbox" name="rptList$ctl20$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_20_4_20"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl21$hidName" id="rptList_hidName_21" value="channel_down_comment" />
                                    <input type="hidden" name="rptList$ctl21$hidActionType" id="rptList_hidActionType_21" value="Show,View,Delete,Reply" />
                                    <input type="hidden" name="rptList$ctl21$hidLayer" id="rptList_hidLayer_21" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 评论管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_21" class="cbllist"><input id="rptList_cblActionType_21_0_21" type="checkbox" name="rptList$ctl21$cblActionType$0" value="Show" /><label for="rptList_cblActionType_21_0_21"> 显示 </label><input id="rptList_cblActionType_21_1_21" type="checkbox" name="rptList$ctl21$cblActionType$1" value="View" /><label for="rptList_cblActionType_21_1_21"> 查看 </label><input id="rptList_cblActionType_21_2_21" type="checkbox" name="rptList$ctl21$cblActionType$2" value="Delete" /><label for="rptList_cblActionType_21_2_21"> 删除 </label><input id="rptList_cblActionType_21_3_21" type="checkbox" name="rptList$ctl21$cblActionType$3" value="Reply" /><label for="rptList_cblActionType_21_3_21"> 回复 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl22$hidName" id="rptList_hidName_22" value="channel_content" />
                                    <input type="hidden" name="rptList$ctl22$hidActionType" id="rptList_hidActionType_22" value="Show" />
                                    <input type="hidden" name="rptList$ctl22$hidLayer" id="rptList_hidLayer_22" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 公司介绍
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_22" class="cbllist"><input id="rptList_cblActionType_22_0_22" type="checkbox" name="rptList$ctl22$cblActionType$0" value="Show" /><label for="rptList_cblActionType_22_0_22"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl23$hidName" id="rptList_hidName_23" value="channel_content_list" />
                                    <input type="hidden" name="rptList$ctl23$hidActionType" id="rptList_hidActionType_23" value="Show,View,Add,Edit,Delete,Audit" />
                                    <input type="hidden" name="rptList$ctl23$hidLayer" id="rptList_hidLayer_23" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 内容管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_23" class="cbllist"><input id="rptList_cblActionType_23_0_23" type="checkbox" name="rptList$ctl23$cblActionType$0" value="Show" /><label for="rptList_cblActionType_23_0_23"> 显示 </label><input id="rptList_cblActionType_23_1_23" type="checkbox" name="rptList$ctl23$cblActionType$1" value="View" /><label for="rptList_cblActionType_23_1_23"> 查看 </label><input id="rptList_cblActionType_23_2_23" type="checkbox" name="rptList$ctl23$cblActionType$2" value="Add" /><label for="rptList_cblActionType_23_2_23"> 添加 </label><input id="rptList_cblActionType_23_3_23" type="checkbox" name="rptList$ctl23$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_23_3_23"> 修改 </label><input id="rptList_cblActionType_23_4_23" type="checkbox" name="rptList$ctl23$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_23_4_23"> 删除 </label><input id="rptList_cblActionType_23_5_23" type="checkbox" name="rptList$ctl23$cblActionType$5" value="Audit" /><label for="rptList_cblActionType_23_5_23"> 审核 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl24$hidName" id="rptList_hidName_24" value="channel_content_category" />
                                    <input type="hidden" name="rptList$ctl24$hidActionType" id="rptList_hidActionType_24" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl24$hidLayer" id="rptList_hidLayer_24" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 栏目类别
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_24" class="cbllist"><input id="rptList_cblActionType_24_0_24" type="checkbox" name="rptList$ctl24$cblActionType$0" value="Show" /><label for="rptList_cblActionType_24_0_24"> 显示 </label><input id="rptList_cblActionType_24_1_24" type="checkbox" name="rptList$ctl24$cblActionType$1" value="View" /><label for="rptList_cblActionType_24_1_24"> 查看 </label><input id="rptList_cblActionType_24_2_24" type="checkbox" name="rptList$ctl24$cblActionType$2" value="Add" /><label for="rptList_cblActionType_24_2_24"> 添加 </label><input id="rptList_cblActionType_24_3_24" type="checkbox" name="rptList$ctl24$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_24_3_24"> 修改 </label><input id="rptList_cblActionType_24_4_24" type="checkbox" name="rptList$ctl24$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_24_4_24"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl25$hidName" id="rptList_hidName_25" value="channel_content_comment" />
                                    <input type="hidden" name="rptList$ctl25$hidActionType" id="rptList_hidActionType_25" value="Show,View,Delete,Reply" />
                                    <input type="hidden" name="rptList$ctl25$hidLayer" id="rptList_hidLayer_25" value="4" />
                                    <span style="display:inline-block;width:48px;"></span><span class="folder-line"></span><span class="folder-open"></span> 评论管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_25" class="cbllist"><input id="rptList_cblActionType_25_0_25" type="checkbox" name="rptList$ctl25$cblActionType$0" value="Show" /><label for="rptList_cblActionType_25_0_25"> 显示 </label><input id="rptList_cblActionType_25_1_25" type="checkbox" name="rptList$ctl25$cblActionType$1" value="View" /><label for="rptList_cblActionType_25_1_25"> 查看 </label><input id="rptList_cblActionType_25_2_25" type="checkbox" name="rptList$ctl25$cblActionType$2" value="Delete" /><label for="rptList_cblActionType_25_2_25"> 删除 </label><input id="rptList_cblActionType_25_3_25" type="checkbox" name="rptList$ctl25$cblActionType$3" value="Reply" /><label for="rptList_cblActionType_25_3_25"> 回复 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl26$hidName" id="rptList_hidName_26" value="sys_application" />
                                    <input type="hidden" name="rptList$ctl26$hidActionType" id="rptList_hidActionType_26" value="Show" />
                                    <input type="hidden" name="rptList$ctl26$hidLayer" id="rptList_hidLayer_26" value="1" />
                                    <span class="folder-open"></span> 应用管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_26" class="cbllist"><input id="rptList_cblActionType_26_0_26" type="checkbox" name="rptList$ctl26$cblActionType$0" value="Show" /><label for="rptList_cblActionType_26_0_26"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl27$hidName" id="rptList_hidName_27" value="sys_plugin_manage" />
                                    <input type="hidden" name="rptList$ctl27$hidActionType" id="rptList_hidActionType_27" value="Show,View" />
                                    <input type="hidden" name="rptList$ctl27$hidLayer" id="rptList_hidLayer_27" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 插件管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_27" class="cbllist"><input id="rptList_cblActionType_27_0_27" type="checkbox" name="rptList$ctl27$cblActionType$0" value="Show" /><label for="rptList_cblActionType_27_0_27"> 显示 </label><input id="rptList_cblActionType_27_1_27" type="checkbox" name="rptList$ctl27$cblActionType$1" value="View" /><label for="rptList_cblActionType_27_1_27"> 查看 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl28$hidName" id="rptList_hidName_28" value="plugin_link" />
                                    <input type="hidden" name="rptList$ctl28$hidActionType" id="rptList_hidActionType_28" value="Show,View,Add,Edit,Delete,Audit" />
                                    <input type="hidden" name="rptList$ctl28$hidLayer" id="rptList_hidLayer_28" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 链接管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_28" class="cbllist"><input id="rptList_cblActionType_28_0_28" type="checkbox" name="rptList$ctl28$cblActionType$0" value="Show" /><label for="rptList_cblActionType_28_0_28"> 显示 </label><input id="rptList_cblActionType_28_1_28" type="checkbox" name="rptList$ctl28$cblActionType$1" value="View" /><label for="rptList_cblActionType_28_1_28"> 查看 </label><input id="rptList_cblActionType_28_2_28" type="checkbox" name="rptList$ctl28$cblActionType$2" value="Add" /><label for="rptList_cblActionType_28_2_28"> 添加 </label><input id="rptList_cblActionType_28_3_28" type="checkbox" name="rptList$ctl28$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_28_3_28"> 修改 </label><input id="rptList_cblActionType_28_4_28" type="checkbox" name="rptList$ctl28$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_28_4_28"> 删除 </label><input id="rptList_cblActionType_28_5_28" type="checkbox" name="rptList$ctl28$cblActionType$5" value="Audit" /><label for="rptList_cblActionType_28_5_28"> 审核 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl29$hidName" id="rptList_hidName_29" value="plugin_feedback" />
                                    <input type="hidden" name="rptList$ctl29$hidActionType" id="rptList_hidActionType_29" value="Show,View,Delete,Audit,Reply" />
                                    <input type="hidden" name="rptList$ctl29$hidLayer" id="rptList_hidLayer_29" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 留言管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_29" class="cbllist"><input id="rptList_cblActionType_29_0_29" type="checkbox" name="rptList$ctl29$cblActionType$0" value="Show" /><label for="rptList_cblActionType_29_0_29"> 显示 </label><input id="rptList_cblActionType_29_1_29" type="checkbox" name="rptList$ctl29$cblActionType$1" value="View" /><label for="rptList_cblActionType_29_1_29"> 查看 </label><input id="rptList_cblActionType_29_2_29" type="checkbox" name="rptList$ctl29$cblActionType$2" value="Delete" /><label for="rptList_cblActionType_29_2_29"> 删除 </label><input id="rptList_cblActionType_29_3_29" type="checkbox" name="rptList$ctl29$cblActionType$3" value="Audit" /><label for="rptList_cblActionType_29_3_29"> 审核 </label><input id="rptList_cblActionType_29_4_29" type="checkbox" name="rptList$ctl29$cblActionType$4" value="Reply" /><label for="rptList_cblActionType_29_4_29"> 回复 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl30$hidName" id="rptList_hidName_30" value="sys_weixin_message" />
                                    <input type="hidden" name="rptList$ctl30$hidActionType" id="rptList_hidActionType_30" value="Show" />
                                    <input type="hidden" name="rptList$ctl30$hidLayer" id="rptList_hidLayer_30" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 微信管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_30" class="cbllist"><input id="rptList_cblActionType_30_0_30" type="checkbox" name="rptList$ctl30$cblActionType$0" value="Show" /><label for="rptList_cblActionType_30_0_30"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl31$hidName" id="rptList_hidName_31" value="sys_users" />
                                    <input type="hidden" name="rptList$ctl31$hidActionType" id="rptList_hidActionType_31" value="Show" />
                                    <input type="hidden" name="rptList$ctl31$hidLayer" id="rptList_hidLayer_31" value="1" />
                                    <span class="folder-open"></span> 会员管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_31" class="cbllist"><input id="rptList_cblActionType_31_0_31" type="checkbox" name="rptList$ctl31$cblActionType$0" value="Show" /><label for="rptList_cblActionType_31_0_31"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl32$hidName" id="rptList_hidName_32" value="user_manage" />
                                    <input type="hidden" name="rptList$ctl32$hidActionType" id="rptList_hidActionType_32" value="Show" />
                                    <input type="hidden" name="rptList$ctl32$hidLayer" id="rptList_hidLayer_32" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 会员管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_32" class="cbllist"><input id="rptList_cblActionType_32_0_32" type="checkbox" name="rptList$ctl32$cblActionType$0" value="Show" /><label for="rptList_cblActionType_32_0_32"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl33$hidName" id="rptList_hidName_33" value="user_audit" />
                                    <input type="hidden" name="rptList$ctl33$hidActionType" id="rptList_hidActionType_33" value="Show,View,Audit" />
                                    <input type="hidden" name="rptList$ctl33$hidLayer" id="rptList_hidLayer_33" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 审核会员
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_33" class="cbllist"><input id="rptList_cblActionType_33_0_33" type="checkbox" name="rptList$ctl33$cblActionType$0" value="Show" /><label for="rptList_cblActionType_33_0_33"> 显示 </label><input id="rptList_cblActionType_33_1_33" type="checkbox" name="rptList$ctl33$cblActionType$1" value="View" /><label for="rptList_cblActionType_33_1_33"> 查看 </label><input id="rptList_cblActionType_33_2_33" type="checkbox" name="rptList$ctl33$cblActionType$2" value="Audit" /><label for="rptList_cblActionType_33_2_33"> 审核 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl34$hidName" id="rptList_hidName_34" value="user_list" />
                                    <input type="hidden" name="rptList$ctl34$hidActionType" id="rptList_hidActionType_34" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl34$hidLayer" id="rptList_hidLayer_34" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 所有会员
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_34" class="cbllist"><input id="rptList_cblActionType_34_0_34" type="checkbox" name="rptList$ctl34$cblActionType$0" value="Show" /><label for="rptList_cblActionType_34_0_34"> 显示 </label><input id="rptList_cblActionType_34_1_34" type="checkbox" name="rptList$ctl34$cblActionType$1" value="View" /><label for="rptList_cblActionType_34_1_34"> 查看 </label><input id="rptList_cblActionType_34_2_34" type="checkbox" name="rptList$ctl34$cblActionType$2" value="Add" /><label for="rptList_cblActionType_34_2_34"> 添加 </label><input id="rptList_cblActionType_34_3_34" type="checkbox" name="rptList$ctl34$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_34_3_34"> 修改 </label><input id="rptList_cblActionType_34_4_34" type="checkbox" name="rptList$ctl34$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_34_4_34"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl35$hidName" id="rptList_hidName_35" value="user_group" />
                                    <input type="hidden" name="rptList$ctl35$hidActionType" id="rptList_hidActionType_35" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl35$hidLayer" id="rptList_hidLayer_35" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 会员组别
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_35" class="cbllist"><input id="rptList_cblActionType_35_0_35" type="checkbox" name="rptList$ctl35$cblActionType$0" value="Show" /><label for="rptList_cblActionType_35_0_35"> 显示 </label><input id="rptList_cblActionType_35_1_35" type="checkbox" name="rptList$ctl35$cblActionType$1" value="View" /><label for="rptList_cblActionType_35_1_35"> 查看 </label><input id="rptList_cblActionType_35_2_35" type="checkbox" name="rptList$ctl35$cblActionType$2" value="Add" /><label for="rptList_cblActionType_35_2_35"> 添加 </label><input id="rptList_cblActionType_35_3_35" type="checkbox" name="rptList$ctl35$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_35_3_35"> 修改 </label><input id="rptList_cblActionType_35_4_35" type="checkbox" name="rptList$ctl35$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_35_4_35"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl36$hidName" id="rptList_hidName_36" value="user_log" />
                                    <input type="hidden" name="rptList$ctl36$hidActionType" id="rptList_hidActionType_36" value="Show" />
                                    <input type="hidden" name="rptList$ctl36$hidLayer" id="rptList_hidLayer_36" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 会员日志
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_36" class="cbllist"><input id="rptList_cblActionType_36_0_36" type="checkbox" name="rptList$ctl36$cblActionType$0" value="Show" /><label for="rptList_cblActionType_36_0_36"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl37$hidName" id="rptList_hidName_37" value="user_sms" />
                                    <input type="hidden" name="rptList$ctl37$hidActionType" id="rptList_hidActionType_37" value="Show,View,Add" />
                                    <input type="hidden" name="rptList$ctl37$hidLayer" id="rptList_hidLayer_37" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 发送短信
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_37" class="cbllist"><input id="rptList_cblActionType_37_0_37" type="checkbox" name="rptList$ctl37$cblActionType$0" value="Show" /><label for="rptList_cblActionType_37_0_37"> 显示 </label><input id="rptList_cblActionType_37_1_37" type="checkbox" name="rptList$ctl37$cblActionType$1" value="View" /><label for="rptList_cblActionType_37_1_37"> 查看 </label><input id="rptList_cblActionType_37_2_37" type="checkbox" name="rptList$ctl37$cblActionType$2" value="Add" /><label for="rptList_cblActionType_37_2_37"> 添加 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl38$hidName" id="rptList_hidName_38" value="user_message" />
                                    <input type="hidden" name="rptList$ctl38$hidActionType" id="rptList_hidActionType_38" value="Show,View,Add,Delete" />
                                    <input type="hidden" name="rptList$ctl38$hidLayer" id="rptList_hidLayer_38" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 站内消息
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_38" class="cbllist"><input id="rptList_cblActionType_38_0_38" type="checkbox" name="rptList$ctl38$cblActionType$0" value="Show" /><label for="rptList_cblActionType_38_0_38"> 显示 </label><input id="rptList_cblActionType_38_1_38" type="checkbox" name="rptList$ctl38$cblActionType$1" value="View" /><label for="rptList_cblActionType_38_1_38"> 查看 </label><input id="rptList_cblActionType_38_2_38" type="checkbox" name="rptList$ctl38$cblActionType$2" value="Add" /><label for="rptList_cblActionType_38_2_38"> 添加 </label><input id="rptList_cblActionType_38_3_38" type="checkbox" name="rptList$ctl38$cblActionType$3" value="Delete" /><label for="rptList_cblActionType_38_3_38"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl39$hidName" id="rptList_hidName_39" value="user_recharge_log" />
                                    <input type="hidden" name="rptList$ctl39$hidActionType" id="rptList_hidActionType_39" value="Show,View,Add,Delete" />
                                    <input type="hidden" name="rptList$ctl39$hidLayer" id="rptList_hidLayer_39" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 充值记录
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_39" class="cbllist"><input id="rptList_cblActionType_39_0_39" type="checkbox" name="rptList$ctl39$cblActionType$0" value="Show" /><label for="rptList_cblActionType_39_0_39"> 显示 </label><input id="rptList_cblActionType_39_1_39" type="checkbox" name="rptList$ctl39$cblActionType$1" value="View" /><label for="rptList_cblActionType_39_1_39"> 查看 </label><input id="rptList_cblActionType_39_2_39" type="checkbox" name="rptList$ctl39$cblActionType$2" value="Add" /><label for="rptList_cblActionType_39_2_39"> 添加 </label><input id="rptList_cblActionType_39_3_39" type="checkbox" name="rptList$ctl39$cblActionType$3" value="Delete" /><label for="rptList_cblActionType_39_3_39"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl40$hidName" id="rptList_hidName_40" value="user_amount_log" />
                                    <input type="hidden" name="rptList$ctl40$hidActionType" id="rptList_hidActionType_40" value="Show,View,Delete" />
                                    <input type="hidden" name="rptList$ctl40$hidLayer" id="rptList_hidLayer_40" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 消费记录
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_40" class="cbllist"><input id="rptList_cblActionType_40_0_40" type="checkbox" name="rptList$ctl40$cblActionType$0" value="Show" /><label for="rptList_cblActionType_40_0_40"> 显示 </label><input id="rptList_cblActionType_40_1_40" type="checkbox" name="rptList$ctl40$cblActionType$1" value="View" /><label for="rptList_cblActionType_40_1_40"> 查看 </label><input id="rptList_cblActionType_40_2_40" type="checkbox" name="rptList$ctl40$cblActionType$2" value="Delete" /><label for="rptList_cblActionType_40_2_40"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl41$hidName" id="rptList_hidName_41" value="user_point_log" />
                                    <input type="hidden" name="rptList$ctl41$hidActionType" id="rptList_hidActionType_41" value="Show,View,Delete" />
                                    <input type="hidden" name="rptList$ctl41$hidLayer" id="rptList_hidLayer_41" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 积分记录
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_41" class="cbllist"><input id="rptList_cblActionType_41_0_41" type="checkbox" name="rptList$ctl41$cblActionType$0" value="Show" /><label for="rptList_cblActionType_41_0_41"> 显示 </label><input id="rptList_cblActionType_41_1_41" type="checkbox" name="rptList$ctl41$cblActionType$1" value="View" /><label for="rptList_cblActionType_41_1_41"> 查看 </label><input id="rptList_cblActionType_41_2_41" type="checkbox" name="rptList$ctl41$cblActionType$2" value="Delete" /><label for="rptList_cblActionType_41_2_41"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl42$hidName" id="rptList_hidName_42" value="user_settings" />
                                    <input type="hidden" name="rptList$ctl42$hidActionType" id="rptList_hidActionType_42" value="Show" />
                                    <input type="hidden" name="rptList$ctl42$hidLayer" id="rptList_hidLayer_42" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 会员设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_42" class="cbllist"><input id="rptList_cblActionType_42_0_42" type="checkbox" name="rptList$ctl42$cblActionType$0" value="Show" /><label for="rptList_cblActionType_42_0_42"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl43$hidName" id="rptList_hidName_43" value="user_config" />
                                    <input type="hidden" name="rptList$ctl43$hidActionType" id="rptList_hidActionType_43" value="Show,View,Edit" />
                                    <input type="hidden" name="rptList$ctl43$hidLayer" id="rptList_hidLayer_43" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 参数设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_43" class="cbllist"><input id="rptList_cblActionType_43_0_43" type="checkbox" name="rptList$ctl43$cblActionType$0" value="Show" /><label for="rptList_cblActionType_43_0_43"> 显示 </label><input id="rptList_cblActionType_43_1_43" type="checkbox" name="rptList$ctl43$cblActionType$1" value="View" /><label for="rptList_cblActionType_43_1_43"> 查看 </label><input id="rptList_cblActionType_43_2_43" type="checkbox" name="rptList$ctl43$cblActionType$2" value="Edit" /><label for="rptList_cblActionType_43_2_43"> 修改 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl44$hidName" id="rptList_hidName_44" value="user_oauth" />
                                    <input type="hidden" name="rptList$ctl44$hidActionType" id="rptList_hidActionType_44" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl44$hidLayer" id="rptList_hidLayer_44" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> OAuth设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_44" class="cbllist"><input id="rptList_cblActionType_44_0_44" type="checkbox" name="rptList$ctl44$cblActionType$0" value="Show" /><label for="rptList_cblActionType_44_0_44"> 显示 </label><input id="rptList_cblActionType_44_1_44" type="checkbox" name="rptList$ctl44$cblActionType$1" value="View" /><label for="rptList_cblActionType_44_1_44"> 查看 </label><input id="rptList_cblActionType_44_2_44" type="checkbox" name="rptList$ctl44$cblActionType$2" value="Add" /><label for="rptList_cblActionType_44_2_44"> 添加 </label><input id="rptList_cblActionType_44_3_44" type="checkbox" name="rptList$ctl44$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_44_3_44"> 修改 </label><input id="rptList_cblActionType_44_4_44" type="checkbox" name="rptList$ctl44$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_44_4_44"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl45$hidName" id="rptList_hidName_45" value="user_sms_template" />
                                    <input type="hidden" name="rptList$ctl45$hidActionType" id="rptList_hidActionType_45" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl45$hidLayer" id="rptList_hidLayer_45" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 短信模板
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_45" class="cbllist"><input id="rptList_cblActionType_45_0_45" type="checkbox" name="rptList$ctl45$cblActionType$0" value="Show" /><label for="rptList_cblActionType_45_0_45"> 显示 </label><input id="rptList_cblActionType_45_1_45" type="checkbox" name="rptList$ctl45$cblActionType$1" value="View" /><label for="rptList_cblActionType_45_1_45"> 查看 </label><input id="rptList_cblActionType_45_2_45" type="checkbox" name="rptList$ctl45$cblActionType$2" value="Add" /><label for="rptList_cblActionType_45_2_45"> 添加 </label><input id="rptList_cblActionType_45_3_45" type="checkbox" name="rptList$ctl45$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_45_3_45"> 修改 </label><input id="rptList_cblActionType_45_4_45" type="checkbox" name="rptList$ctl45$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_45_4_45"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl46$hidName" id="rptList_hidName_46" value="user_mail_template" />
                                    <input type="hidden" name="rptList$ctl46$hidActionType" id="rptList_hidActionType_46" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl46$hidLayer" id="rptList_hidLayer_46" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 邮件模板
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_46" class="cbllist"><input id="rptList_cblActionType_46_0_46" type="checkbox" name="rptList$ctl46$cblActionType$0" value="Show" /><label for="rptList_cblActionType_46_0_46"> 显示 </label><input id="rptList_cblActionType_46_1_46" type="checkbox" name="rptList$ctl46$cblActionType$1" value="View" /><label for="rptList_cblActionType_46_1_46"> 查看 </label><input id="rptList_cblActionType_46_2_46" type="checkbox" name="rptList$ctl46$cblActionType$2" value="Add" /><label for="rptList_cblActionType_46_2_46"> 添加 </label><input id="rptList_cblActionType_46_3_46" type="checkbox" name="rptList$ctl46$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_46_3_46"> 修改 </label><input id="rptList_cblActionType_46_4_46" type="checkbox" name="rptList$ctl46$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_46_4_46"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl47$hidName" id="rptList_hidName_47" value="sys_orders" />
                                    <input type="hidden" name="rptList$ctl47$hidActionType" id="rptList_hidActionType_47" value="Show" />
                                    <input type="hidden" name="rptList$ctl47$hidLayer" id="rptList_hidLayer_47" value="1" />
                                    <span class="folder-open"></span> 订单管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_47" class="cbllist"><input id="rptList_cblActionType_47_0_47" type="checkbox" name="rptList$ctl47$cblActionType$0" value="Show" /><label for="rptList_cblActionType_47_0_47"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl48$hidName" id="rptList_hidName_48" value="order_manage" />
                                    <input type="hidden" name="rptList$ctl48$hidActionType" id="rptList_hidActionType_48" value="Show" />
                                    <input type="hidden" name="rptList$ctl48$hidLayer" id="rptList_hidLayer_48" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 订单管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_48" class="cbllist"><input id="rptList_cblActionType_48_0_48" type="checkbox" name="rptList$ctl48$cblActionType$0" value="Show" /><label for="rptList_cblActionType_48_0_48"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl49$hidName" id="rptList_hidName_49" value="order_confirm" />
                                    <input type="hidden" name="rptList$ctl49$hidActionType" id="rptList_hidActionType_49" value="Show,View,Confirm" />
                                    <input type="hidden" name="rptList$ctl49$hidLayer" id="rptList_hidLayer_49" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 待确认订单
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_49" class="cbllist"><input id="rptList_cblActionType_49_0_49" type="checkbox" name="rptList$ctl49$cblActionType$0" value="Show" /><label for="rptList_cblActionType_49_0_49"> 显示 </label><input id="rptList_cblActionType_49_1_49" type="checkbox" name="rptList$ctl49$cblActionType$1" value="View" /><label for="rptList_cblActionType_49_1_49"> 查看 </label><input id="rptList_cblActionType_49_2_49" type="checkbox" name="rptList$ctl49$cblActionType$2" value="Confirm" /><label for="rptList_cblActionType_49_2_49"> 确认 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl50$hidName" id="rptList_hidName_50" value="order_list" />
                                    <input type="hidden" name="rptList$ctl50$hidActionType" id="rptList_hidActionType_50" value="Show,View,Add,Edit,Delete,Confirm,Cancel,Invalid" />
                                    <input type="hidden" name="rptList$ctl50$hidLayer" id="rptList_hidLayer_50" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 全部订单
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_50" class="cbllist"><input id="rptList_cblActionType_50_0_50" type="checkbox" name="rptList$ctl50$cblActionType$0" value="Show" /><label for="rptList_cblActionType_50_0_50"> 显示 </label><input id="rptList_cblActionType_50_1_50" type="checkbox" name="rptList$ctl50$cblActionType$1" value="View" /><label for="rptList_cblActionType_50_1_50"> 查看 </label><input id="rptList_cblActionType_50_2_50" type="checkbox" name="rptList$ctl50$cblActionType$2" value="Add" /><label for="rptList_cblActionType_50_2_50"> 添加 </label><input id="rptList_cblActionType_50_3_50" type="checkbox" name="rptList$ctl50$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_50_3_50"> 修改 </label><input id="rptList_cblActionType_50_4_50" type="checkbox" name="rptList$ctl50$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_50_4_50"> 删除 </label><input id="rptList_cblActionType_50_5_50" type="checkbox" name="rptList$ctl50$cblActionType$5" value="Confirm" /><label for="rptList_cblActionType_50_5_50"> 确认 </label><input id="rptList_cblActionType_50_6_50" type="checkbox" name="rptList$ctl50$cblActionType$6" value="Cancel" /><label for="rptList_cblActionType_50_6_50"> 取消 </label><input id="rptList_cblActionType_50_7_50" type="checkbox" name="rptList$ctl50$cblActionType$7" value="Invalid" /><label for="rptList_cblActionType_50_7_50"> 作废 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl51$hidName" id="rptList_hidName_51" value="order_settings" />
                                    <input type="hidden" name="rptList$ctl51$hidActionType" id="rptList_hidActionType_51" value="Show" />
                                    <input type="hidden" name="rptList$ctl51$hidLayer" id="rptList_hidLayer_51" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 订单设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_51" class="cbllist"><input id="rptList_cblActionType_51_0_51" type="checkbox" name="rptList$ctl51$cblActionType$0" value="Show" /><label for="rptList_cblActionType_51_0_51"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl52$hidName" id="rptList_hidName_52" value="order_config" />
                                    <input type="hidden" name="rptList$ctl52$hidActionType" id="rptList_hidActionType_52" value="Show,View,Edit" />
                                    <input type="hidden" name="rptList$ctl52$hidLayer" id="rptList_hidLayer_52" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 订单参数设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_52" class="cbllist"><input id="rptList_cblActionType_52_0_52" type="checkbox" name="rptList$ctl52$cblActionType$0" value="Show" /><label for="rptList_cblActionType_52_0_52"> 显示 </label><input id="rptList_cblActionType_52_1_52" type="checkbox" name="rptList$ctl52$cblActionType$1" value="View" /><label for="rptList_cblActionType_52_1_52"> 查看 </label><input id="rptList_cblActionType_52_2_52" type="checkbox" name="rptList$ctl52$cblActionType$2" value="Edit" /><label for="rptList_cblActionType_52_2_52"> 修改 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl53$hidName" id="rptList_hidName_53" value="order_payment" />
                                    <input type="hidden" name="rptList$ctl53$hidActionType" id="rptList_hidActionType_53" value="Show,View,Edit" />
                                    <input type="hidden" name="rptList$ctl53$hidLayer" id="rptList_hidLayer_53" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 支付方式设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_53" class="cbllist"><input id="rptList_cblActionType_53_0_53" type="checkbox" name="rptList$ctl53$cblActionType$0" value="Show" /><label for="rptList_cblActionType_53_0_53"> 显示 </label><input id="rptList_cblActionType_53_1_53" type="checkbox" name="rptList$ctl53$cblActionType$1" value="View" /><label for="rptList_cblActionType_53_1_53"> 查看 </label><input id="rptList_cblActionType_53_2_53" type="checkbox" name="rptList$ctl53$cblActionType$2" value="Edit" /><label for="rptList_cblActionType_53_2_53"> 修改 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl54$hidName" id="rptList_hidName_54" value="order_express" />
                                    <input type="hidden" name="rptList$ctl54$hidActionType" id="rptList_hidActionType_54" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl54$hidLayer" id="rptList_hidLayer_54" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 配送方式设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_54" class="cbllist"><input id="rptList_cblActionType_54_0_54" type="checkbox" name="rptList$ctl54$cblActionType$0" value="Show" /><label for="rptList_cblActionType_54_0_54"> 显示 </label><input id="rptList_cblActionType_54_1_54" type="checkbox" name="rptList$ctl54$cblActionType$1" value="View" /><label for="rptList_cblActionType_54_1_54"> 查看 </label><input id="rptList_cblActionType_54_2_54" type="checkbox" name="rptList$ctl54$cblActionType$2" value="Add" /><label for="rptList_cblActionType_54_2_54"> 添加 </label><input id="rptList_cblActionType_54_3_54" type="checkbox" name="rptList$ctl54$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_54_3_54"> 修改 </label><input id="rptList_cblActionType_54_4_54" type="checkbox" name="rptList$ctl54$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_54_4_54"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl55$hidName" id="rptList_hidName_55" value="sys_controller" />
                                    <input type="hidden" name="rptList$ctl55$hidActionType" id="rptList_hidActionType_55" value="Show" />
                                    <input type="hidden" name="rptList$ctl55$hidLayer" id="rptList_hidLayer_55" value="1" />
                                    <span class="folder-open"></span> 控制面板
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_55" class="cbllist"><input id="rptList_cblActionType_55_0_55" type="checkbox" name="rptList$ctl55$cblActionType$0" value="Show" /><label for="rptList_cblActionType_55_0_55"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl56$hidName" id="rptList_hidName_56" value="sys_settings" />
                                    <input type="hidden" name="rptList$ctl56$hidActionType" id="rptList_hidActionType_56" value="Show" />
                                    <input type="hidden" name="rptList$ctl56$hidLayer" id="rptList_hidLayer_56" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 系统管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_56" class="cbllist"><input id="rptList_cblActionType_56_0_56" type="checkbox" name="rptList$ctl56$cblActionType$0" value="Show" /><label for="rptList_cblActionType_56_0_56"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl57$hidName" id="rptList_hidName_57" value="sys_config" />
                                    <input type="hidden" name="rptList$ctl57$hidActionType" id="rptList_hidActionType_57" value="Show,View,Edit" />
                                    <input type="hidden" name="rptList$ctl57$hidLayer" id="rptList_hidLayer_57" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 系统设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_57" class="cbllist"><input id="rptList_cblActionType_57_0_57" type="checkbox" name="rptList$ctl57$cblActionType$0" value="Show" /><label for="rptList_cblActionType_57_0_57"> 显示 </label><input id="rptList_cblActionType_57_1_57" type="checkbox" name="rptList$ctl57$cblActionType$1" value="View" /><label for="rptList_cblActionType_57_1_57"> 查看 </label><input id="rptList_cblActionType_57_2_57" type="checkbox" name="rptList$ctl57$cblActionType$2" value="Edit" /><label for="rptList_cblActionType_57_2_57"> 修改 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl58$hidName" id="rptList_hidName_58" value="sys_plugin_config" />
                                    <input type="hidden" name="rptList$ctl58$hidActionType" id="rptList_hidActionType_58" value="Show,View,Build,Instal,Unload" />
                                    <input type="hidden" name="rptList$ctl58$hidLayer" id="rptList_hidLayer_58" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 插件设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_58" class="cbllist"><input id="rptList_cblActionType_58_0_58" type="checkbox" name="rptList$ctl58$cblActionType$0" value="Show" /><label for="rptList_cblActionType_58_0_58"> 显示 </label><input id="rptList_cblActionType_58_1_58" type="checkbox" name="rptList$ctl58$cblActionType$1" value="View" /><label for="rptList_cblActionType_58_1_58"> 查看 </label><input id="rptList_cblActionType_58_2_58" type="checkbox" name="rptList$ctl58$cblActionType$2" value="Build" /><label for="rptList_cblActionType_58_2_58"> 生成 </label><input id="rptList_cblActionType_58_3_58" type="checkbox" name="rptList$ctl58$cblActionType$3" value="Instal" /><label for="rptList_cblActionType_58_3_58"> 安装 </label><input id="rptList_cblActionType_58_4_58" type="checkbox" name="rptList$ctl58$cblActionType$4" value="Unload" /><label for="rptList_cblActionType_58_4_58"> 卸载 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl59$hidName" id="rptList_hidName_59" value="sys_url_rewrite" />
                                    <input type="hidden" name="rptList$ctl59$hidActionType" id="rptList_hidActionType_59" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl59$hidLayer" id="rptList_hidLayer_59" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> URL配置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_59" class="cbllist"><input id="rptList_cblActionType_59_0_59" type="checkbox" name="rptList$ctl59$cblActionType$0" value="Show" /><label for="rptList_cblActionType_59_0_59"> 显示 </label><input id="rptList_cblActionType_59_1_59" type="checkbox" name="rptList$ctl59$cblActionType$1" value="View" /><label for="rptList_cblActionType_59_1_59"> 查看 </label><input id="rptList_cblActionType_59_2_59" type="checkbox" name="rptList$ctl59$cblActionType$2" value="Add" /><label for="rptList_cblActionType_59_2_59"> 添加 </label><input id="rptList_cblActionType_59_3_59" type="checkbox" name="rptList$ctl59$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_59_3_59"> 修改 </label><input id="rptList_cblActionType_59_4_59" type="checkbox" name="rptList$ctl59$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_59_4_59"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl60$hidName" id="rptList_hidName_60" value="sys_site_settings" />
                                    <input type="hidden" name="rptList$ctl60$hidActionType" id="rptList_hidActionType_60" value="Show" />
                                    <input type="hidden" name="rptList$ctl60$hidLayer" id="rptList_hidLayer_60" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 站点设置
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_60" class="cbllist"><input id="rptList_cblActionType_60_0_60" type="checkbox" name="rptList$ctl60$cblActionType$0" value="Show" /><label for="rptList_cblActionType_60_0_60"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl61$hidName" id="rptList_hidName_61" value="sys_site_manage" />
                                    <input type="hidden" name="rptList$ctl61$hidActionType" id="rptList_hidActionType_61" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl61$hidLayer" id="rptList_hidLayer_61" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 站点管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_61" class="cbllist"><input id="rptList_cblActionType_61_0_61" type="checkbox" name="rptList$ctl61$cblActionType$0" value="Show" /><label for="rptList_cblActionType_61_0_61"> 显示 </label><input id="rptList_cblActionType_61_1_61" type="checkbox" name="rptList$ctl61$cblActionType$1" value="View" /><label for="rptList_cblActionType_61_1_61"> 查看 </label><input id="rptList_cblActionType_61_2_61" type="checkbox" name="rptList$ctl61$cblActionType$2" value="Add" /><label for="rptList_cblActionType_61_2_61"> 添加 </label><input id="rptList_cblActionType_61_3_61" type="checkbox" name="rptList$ctl61$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_61_3_61"> 修改 </label><input id="rptList_cblActionType_61_4_61" type="checkbox" name="rptList$ctl61$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_61_4_61"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl62$hidName" id="rptList_hidName_62" value="sys_channel_manage" />
                                    <input type="hidden" name="rptList$ctl62$hidActionType" id="rptList_hidActionType_62" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl62$hidLayer" id="rptList_hidLayer_62" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 频道管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_62" class="cbllist"><input id="rptList_cblActionType_62_0_62" type="checkbox" name="rptList$ctl62$cblActionType$0" value="Show" /><label for="rptList_cblActionType_62_0_62"> 显示 </label><input id="rptList_cblActionType_62_1_62" type="checkbox" name="rptList$ctl62$cblActionType$1" value="View" /><label for="rptList_cblActionType_62_1_62"> 查看 </label><input id="rptList_cblActionType_62_2_62" type="checkbox" name="rptList$ctl62$cblActionType$2" value="Add" /><label for="rptList_cblActionType_62_2_62"> 添加 </label><input id="rptList_cblActionType_62_3_62" type="checkbox" name="rptList$ctl62$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_62_3_62"> 修改 </label><input id="rptList_cblActionType_62_4_62" type="checkbox" name="rptList$ctl62$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_62_4_62"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl63$hidName" id="rptList_hidName_63" value="sys_channel_field" />
                                    <input type="hidden" name="rptList$ctl63$hidActionType" id="rptList_hidActionType_63" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl63$hidLayer" id="rptList_hidLayer_63" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 扩展字段
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_63" class="cbllist"><input id="rptList_cblActionType_63_0_63" type="checkbox" name="rptList$ctl63$cblActionType$0" value="Show" /><label for="rptList_cblActionType_63_0_63"> 显示 </label><input id="rptList_cblActionType_63_1_63" type="checkbox" name="rptList$ctl63$cblActionType$1" value="View" /><label for="rptList_cblActionType_63_1_63"> 查看 </label><input id="rptList_cblActionType_63_2_63" type="checkbox" name="rptList$ctl63$cblActionType$2" value="Add" /><label for="rptList_cblActionType_63_2_63"> 添加 </label><input id="rptList_cblActionType_63_3_63" type="checkbox" name="rptList$ctl63$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_63_3_63"> 修改 </label><input id="rptList_cblActionType_63_4_63" type="checkbox" name="rptList$ctl63$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_63_4_63"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl64$hidName" id="rptList_hidName_64" value="sys_goods_spec" />
                                    <input type="hidden" name="rptList$ctl64$hidActionType" id="rptList_hidActionType_64" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl64$hidLayer" id="rptList_hidLayer_64" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 商品规格
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_64" class="cbllist"><input id="rptList_cblActionType_64_0_64" type="checkbox" name="rptList$ctl64$cblActionType$0" value="Show" /><label for="rptList_cblActionType_64_0_64"> 显示 </label><input id="rptList_cblActionType_64_1_64" type="checkbox" name="rptList$ctl64$cblActionType$1" value="View" /><label for="rptList_cblActionType_64_1_64"> 查看 </label><input id="rptList_cblActionType_64_2_64" type="checkbox" name="rptList$ctl64$cblActionType$2" value="Add" /><label for="rptList_cblActionType_64_2_64"> 添加 </label><input id="rptList_cblActionType_64_3_64" type="checkbox" name="rptList$ctl64$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_64_3_64"> 修改 </label><input id="rptList_cblActionType_64_4_64" type="checkbox" name="rptList$ctl64$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_64_4_64"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl65$hidName" id="rptList_hidName_65" value="sys_article_tags" />
                                    <input type="hidden" name="rptList$ctl65$hidActionType" id="rptList_hidActionType_65" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl65$hidLayer" id="rptList_hidLayer_65" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> Tags标签
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_65" class="cbllist"><input id="rptList_cblActionType_65_0_65" type="checkbox" name="rptList$ctl65$cblActionType$0" value="Show" /><label for="rptList_cblActionType_65_0_65"> 显示 </label><input id="rptList_cblActionType_65_1_65" type="checkbox" name="rptList$ctl65$cblActionType$1" value="View" /><label for="rptList_cblActionType_65_1_65"> 查看 </label><input id="rptList_cblActionType_65_2_65" type="checkbox" name="rptList$ctl65$cblActionType$2" value="Add" /><label for="rptList_cblActionType_65_2_65"> 添加 </label><input id="rptList_cblActionType_65_3_65" type="checkbox" name="rptList$ctl65$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_65_3_65"> 修改 </label><input id="rptList_cblActionType_65_4_65" type="checkbox" name="rptList$ctl65$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_65_4_65"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl66$hidName" id="rptList_hidName_66" value="sys_design" />
                                    <input type="hidden" name="rptList$ctl66$hidActionType" id="rptList_hidActionType_66" value="Show" />
                                    <input type="hidden" name="rptList$ctl66$hidLayer" id="rptList_hidLayer_66" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 界面管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_66" class="cbllist"><input id="rptList_cblActionType_66_0_66" type="checkbox" name="rptList$ctl66$cblActionType$0" value="Show" /><label for="rptList_cblActionType_66_0_66"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl67$hidName" id="rptList_hidName_67" value="sys_site_templet" />
                                    <input type="hidden" name="rptList$ctl67$hidActionType" id="rptList_hidActionType_67" value="Show,View,Add,Edit,Delete,Build" />
                                    <input type="hidden" name="rptList$ctl67$hidLayer" id="rptList_hidLayer_67" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 站点模板管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_67" class="cbllist"><input id="rptList_cblActionType_67_0_67" type="checkbox" name="rptList$ctl67$cblActionType$0" value="Show" /><label for="rptList_cblActionType_67_0_67"> 显示 </label><input id="rptList_cblActionType_67_1_67" type="checkbox" name="rptList$ctl67$cblActionType$1" value="View" /><label for="rptList_cblActionType_67_1_67"> 查看 </label><input id="rptList_cblActionType_67_2_67" type="checkbox" name="rptList$ctl67$cblActionType$2" value="Add" /><label for="rptList_cblActionType_67_2_67"> 添加 </label><input id="rptList_cblActionType_67_3_67" type="checkbox" name="rptList$ctl67$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_67_3_67"> 修改 </label><input id="rptList_cblActionType_67_4_67" type="checkbox" name="rptList$ctl67$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_67_4_67"> 删除 </label><input id="rptList_cblActionType_67_5_67" type="checkbox" name="rptList$ctl67$cblActionType$5" value="Build" /><label for="rptList_cblActionType_67_5_67"> 生成 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl68$hidName" id="rptList_hidName_68" value="sys_builder_html" />
                                    <input type="hidden" name="rptList$ctl68$hidActionType" id="rptList_hidActionType_68" value="Show,View,Build" />
                                    <input type="hidden" name="rptList$ctl68$hidLayer" id="rptList_hidLayer_68" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 生成静态管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_68" class="cbllist"><input id="rptList_cblActionType_68_0_68" type="checkbox" name="rptList$ctl68$cblActionType$0" value="Show" /><label for="rptList_cblActionType_68_0_68"> 显示 </label><input id="rptList_cblActionType_68_1_68" type="checkbox" name="rptList$ctl68$cblActionType$1" value="View" /><label for="rptList_cblActionType_68_1_68"> 查看 </label><input id="rptList_cblActionType_68_2_68" type="checkbox" name="rptList$ctl68$cblActionType$2" value="Build" /><label for="rptList_cblActionType_68_2_68"> 生成 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl69$hidName" id="rptList_hidName_69" value="sys_navigation" />
                                    <input type="hidden" name="rptList$ctl69$hidActionType" id="rptList_hidActionType_69" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl69$hidLayer" id="rptList_hidLayer_69" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 后台导航管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_69" class="cbllist"><input id="rptList_cblActionType_69_0_69" type="checkbox" name="rptList$ctl69$cblActionType$0" value="Show" /><label for="rptList_cblActionType_69_0_69"> 显示 </label><input id="rptList_cblActionType_69_1_69" type="checkbox" name="rptList$ctl69$cblActionType$1" value="View" /><label for="rptList_cblActionType_69_1_69"> 查看 </label><input id="rptList_cblActionType_69_2_69" type="checkbox" name="rptList$ctl69$cblActionType$2" value="Add" /><label for="rptList_cblActionType_69_2_69"> 添加 </label><input id="rptList_cblActionType_69_3_69" type="checkbox" name="rptList$ctl69$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_69_3_69"> 修改 </label><input id="rptList_cblActionType_69_4_69" type="checkbox" name="rptList$ctl69$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_69_4_69"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl70$hidName" id="rptList_hidName_70" value="sys_manager" />
                                    <input type="hidden" name="rptList$ctl70$hidActionType" id="rptList_hidActionType_70" value="Show" />
                                    <input type="hidden" name="rptList$ctl70$hidLayer" id="rptList_hidLayer_70" value="2" />
                                    <span style="display:inline-block;width:0px;"></span><span class="folder-line"></span><span class="folder-open"></span> 系统用户
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_70" class="cbllist"><input id="rptList_cblActionType_70_0_70" type="checkbox" name="rptList$ctl70$cblActionType$0" value="Show" /><label for="rptList_cblActionType_70_0_70"> 显示 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl71$hidName" id="rptList_hidName_71" value="manager_list" />
                                    <input type="hidden" name="rptList$ctl71$hidActionType" id="rptList_hidActionType_71" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl71$hidLayer" id="rptList_hidLayer_71" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 管理员管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_71" class="cbllist"><input id="rptList_cblActionType_71_0_71" type="checkbox" name="rptList$ctl71$cblActionType$0" value="Show" /><label for="rptList_cblActionType_71_0_71"> 显示 </label><input id="rptList_cblActionType_71_1_71" type="checkbox" name="rptList$ctl71$cblActionType$1" value="View" /><label for="rptList_cblActionType_71_1_71"> 查看 </label><input id="rptList_cblActionType_71_2_71" type="checkbox" name="rptList$ctl71$cblActionType$2" value="Add" /><label for="rptList_cblActionType_71_2_71"> 添加 </label><input id="rptList_cblActionType_71_3_71" type="checkbox" name="rptList$ctl71$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_71_3_71"> 修改 </label><input id="rptList_cblActionType_71_4_71" type="checkbox" name="rptList$ctl71$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_71_4_71"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl72$hidName" id="rptList_hidName_72" value="manager_role" />
                                    <input type="hidden" name="rptList$ctl72$hidActionType" id="rptList_hidActionType_72" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl72$hidLayer" id="rptList_hidLayer_72" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 角色管理
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_72" class="cbllist"><input id="rptList_cblActionType_72_0_72" type="checkbox" name="rptList$ctl72$cblActionType$0" value="Show" /><label for="rptList_cblActionType_72_0_72"> 显示 </label><input id="rptList_cblActionType_72_1_72" type="checkbox" name="rptList$ctl72$cblActionType$1" value="View" /><label for="rptList_cblActionType_72_1_72"> 查看 </label><input id="rptList_cblActionType_72_2_72" type="checkbox" name="rptList$ctl72$cblActionType$2" value="Add" /><label for="rptList_cblActionType_72_2_72"> 添加 </label><input id="rptList_cblActionType_72_3_72" type="checkbox" name="rptList$ctl72$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_72_3_72"> 修改 </label><input id="rptList_cblActionType_72_4_72" type="checkbox" name="rptList$ctl72$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_72_4_72"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            <tr>
                                <td style="white-space:nowrap;word-break:break-all;overflow:hidden;">
                                    <input type="hidden" name="rptList$ctl73$hidName" id="rptList_hidName_73" value="manager_log" />
                                    <input type="hidden" name="rptList$ctl73$hidActionType" id="rptList_hidActionType_73" value="Show,View,Add,Edit,Delete" />
                                    <input type="hidden" name="rptList$ctl73$hidLayer" id="rptList_hidLayer_73" value="3" />
                                    <span style="display:inline-block;width:24px;"></span><span class="folder-line"></span><span class="folder-open"></span> 管理日志
                                </td>
                                <td>
                                    <span id="rptList_cblActionType_73" class="cbllist"><input id="rptList_cblActionType_73_0_73" type="checkbox" name="rptList$ctl73$cblActionType$0" value="Show" /><label for="rptList_cblActionType_73_0_73"> 显示 </label><input id="rptList_cblActionType_73_1_73" type="checkbox" name="rptList$ctl73$cblActionType$1" value="View" /><label for="rptList_cblActionType_73_1_73"> 查看 </label><input id="rptList_cblActionType_73_2_73" type="checkbox" name="rptList$ctl73$cblActionType$2" value="Add" /><label for="rptList_cblActionType_73_2_73"> 添加 </label><input id="rptList_cblActionType_73_3_73" type="checkbox" name="rptList$ctl73$cblActionType$3" value="Edit" /><label for="rptList_cblActionType_73_3_73"> 修改 </label><input id="rptList_cblActionType_73_4_73" type="checkbox" name="rptList$ctl73$cblActionType$4" value="Delete" /><label for="rptList_cblActionType_73_4_73"> 删除 </label></span>
                                </td>
                                <td align="center"><input name="checkAll" type="checkbox" /></td>
                            </tr>

                            </tbody>
                        </table>
                    </dd>
                </dl>

            </div>
        </div>
    </div>
</div>
<script>
    $(".sidebar-title").live('click', function() {
        if ($(this).parent(".sidebar-nav").hasClass("sidebar-nav-fold")) {
            $(this).next().slideDown(200);
            $(this).parent(".sidebar-nav").removeClass("sidebar-nav-fold");
        } else {
            $(this).next().slideUp(200);
            $(this).parent(".sidebar-nav").addClass("sidebar-nav-fold");
        }
    });

</script>
</body>

</html>