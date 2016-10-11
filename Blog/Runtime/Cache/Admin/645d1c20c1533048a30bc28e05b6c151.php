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
                    <h6 class="layout padding-left manage-head-con">添加文章

                    </h6>
                </div>
            </div>
            <div style="margin-left:100px;margin-top:60px">
            <form method="post" id="LAY-form" action="<?php echo U('News/insert');?>"  enctype="multipart/form-data">
                <ul class="layui-form">
                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="news_title">Blog标题</label><input required type="text" id="news_title" name="news_title" style="width:550px;">
                        </div>
                    </li>
                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="pic_one">封面图片</label><input required type="file" id="pic_one" name="pic_one" >
                        </div>
                    </li>
                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="news_columnviceid" style="border-right:0px">文章分类：</label>
                            <select required name="news_columnviceid" id="news_columnviceid" style="width:200px;height:39px;border: 1px solid #DFDFDF;">
                                <?php if(is_array($info)): foreach($info as $key=>$res): ?><option value="<?php echo ($res['id']); ?>"><?php echo ($res['name']); ?></option><?php endforeach; endif; ?>
                            </select>
                        </div>
                    </li>
                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="news_zaddress" style="width:150px">跳转地址：</label><input required type="text" id="news_zaddress" name="news_zaddress" placeholder="正确格式：http:// 开头" style="width:500px">
                        </div>
                    </li>
                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="news_key" style="width:150px">文章关键字：</label><input required type="text" id="news_key" name="news_key" placeholder="以英文逗号隔开" style="width:500px">
                        </div>
                    </li>
                    <li class="layui-form-li">
                        <div class="layui-form-label layui-form-area">
                            <label for="LAY_sign" style="top: 0;">文章简介</label><textarea placeholder="随便写些什么刷下存在感" required="" id="LAY_sign" name="news_titleshort" autocomplete="off" style="width: 650px; height: 80px;"></textarea>
                        </div>
                    </li>

                    <li class="layui-form-li">
                            <label for="LAY_sign" style="top: 0;">文章内容</label>
                            <script src="/view/Admin/Public//ueditor/ueditor.config.js" type="text/javascript"></script>
                            <script src="/view/Admin/Public//ueditor/ueditor.all.js" type="text/javascript"></script>
                            <textarea  required name="news_content"  id="myEditor" style="width:63%"></textarea>
                    </li>

                    <li class="layui-form-li">
                        <div class="layui-form-label">
                            <label for="news_open" style="width:110px">是否为显示：</label><input type="radio" id="news_open" value="1" name="news_open" style="width:40px;margin-top:12px"><span style="margin-top:10px">否</span><input type="radio" value="0" name="menu" style="width:40px;margin-top:12px"><span style="margin-top:10px">是</span>
                        </div>
                    </li>

                    <li><button type="submit" id="LAY_btn" class="layui-btn">立即添加</button><span class="layui-form-text" style="padding-left:20px;"></span></li>

                </ul>
            </form>
            </div>
        </div>
    </div>
</div>

<script>

    var editor = new UE.ui.Editor();
    editor.render("myEditor");

    $(function(){
        var options = {
            //beforeSubmit:  showRequest,  //提交前处理
            success: function (data) {
                if(data.code == 1){
                    layer.msg(data.msg, {icon: 1});
                }else{
                    layer.msg(data.msg, {icon: 2});
                }
            },
            resetForm: true,
            dataType:  'json'
        };
        $('#LAY-form').submit(function() {
            $(this).ajaxSubmit(options);
            return false;
        });
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