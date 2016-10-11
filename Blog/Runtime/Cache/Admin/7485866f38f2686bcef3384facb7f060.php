<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/view/Admin/Public/Css/font_1466258017_0700355.css">
    <link rel="stylesheet" href="/view/Admin/Public/Css/layui.css">
    <link rel="stylesheet" href="/view/Admin/Public/Css/global.css">
    <link rel="stylesheet" data-href="Css/stretch.css" class="fly-style">
</head>
<body>
<form method="post" id="LAY-form" action="<?php echo U('AdminGroup/updates');?>" class="login-form" autocomplete="off">
    <ul class="layui-form">
        <li class="layui-form-li">
            <div class="layui-form-label">
                <label for="title">用户组名</label><input required type="text" id="title" name="title"  value="<?php echo ($result[0]['title']); ?>">
            </div>
        </li>

        <li><button type="submit" id="LAY_btn" class="layui-btn">立即修改</button><span class="layui-form-text" style="padding-left:20px;"></span></li>
    </ul>
</form>
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
</body>
</html>