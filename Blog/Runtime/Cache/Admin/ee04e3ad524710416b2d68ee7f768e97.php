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
                    <h6 class="layout padding-left manage-head-con">添加权限

                    </h6>
                </div>
            </div>
            <div style="margin-left:100px;margin-top:60px">
            <form method="post" id="LAY-form" action="<?php echo U('AdminAction/insert');?>" class="login-form" autocomplete="off">
                <ul class="layui-form">
                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="title">标题</label><input required type="text" id="title" name="title" style="width:260px;">
                        </div>
                    </li>
                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="pid" style="border-right:0px">上级模块：</label>
                            <select required name="pid" id="pid" style="width:200px;height:39px;border: 1px solid #DFDFDF;">
                                <?php if(is_array($info)): foreach($info as $key=>$res): ?><option value="<?php echo ($res['id']); ?>"><?php echo ($res['title']); ?></option><?php endforeach; endif; ?>
                            </select>
                        </div>
                    </li>
                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="module_name" style="width:150px">模块名：</label><input required type="text" id="module_name" name="module_name" placeholder="例如：Admin/User/update">
                        </div>
                    </li>
                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="action_name" style="width:150px">操作名：</label><input required type="text" id="action_name" name="action_name" placeholder="例如：Admin/User/update">
                        </div>
                    </li>

                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="menu" style="width:110px">是否为菜单：</label><input required type="radio" id="menu" value="1" name="menu" style="width:40px;margin-top:12px"><span style="margin-top:10px">否</span><input required type="radio" value="0" name="menu" style="width:40px;margin-top:12px"><span style="margin-top:10px">是</span>
                        </div>
                    </li>

                    <li><button type="submit" id="LAY_btn" class="layui-btn">立即添加</button><span class="layui-form-text" style="padding-left:20px;"></span></li>

                </ul>
            </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/view/Admin/Public/Js/Validform_v5.3.2_min.js"></script>
<script>
    //添加权限
    $(document).ready(function(e) {
        $("input[name=title]").focus();
        $('.login-form').Validform({
            ajaxPost: true,
            tiptype: function(msg) {
                if (msg) { layer.msg(msg, {icon: 2}); };
            },
            callback: function(ret) {
                if (ret.status == 1) {
                    layer.msg('添加成功', {icon: 1});
                }else if(ret.status == 0){
                    layer.msg('添加失败', {icon: 2});
                }
            }
        })
    });
</script>
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