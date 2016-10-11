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
<form method="post" id="LAY-form">
    <ul class="layui-form">
        <li class="layui-form-li">
            <div class="layui-form-label">
                <label for="user">账户</label><input required type="text" id="user" name="username" disabled="disabled" value="<?php echo ($data[0]['username']); ?>">
            </div>
        </li>
        <li class="layui-form-li">
            <div class="layui-form-label">
                <label for="face">头像</label><input required type="text" id="face" name="avatar">
            </div>
        </li>
        <li class="layui-form-li">
            <div class="layui-form-label">
                <label for="pass">密码：</label><input required type="password" id="pass" name="pass">
            </div>
        </li>
        <li class="layui-form-li">
            <!--<div class="layui-form-label">
                <label for="LAY_vercode" style="width: auto;">人类验证：<span style="color: #c00;">"100" > "2" 的结果是true 还是 false？</span></label><input style="width:260px;" placeholder="请回答问题，以验证你是正常人类" required type="text" id="LAY_vercode" name="vercode" autocomplete="off">
            </div>-->
        </li>
        <li><button type="submit" id="LAY_btn" class="layui-btn">立即修改</button><span class="layui-form-text" style="padding-left:20px;"></span></li>
        <!--<li class="layui-form-block fly-form-app"><span>或者使用社交账号登入</span><a href="http://fly.layui.com:8098/app/qq" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a><a href="http://fly.layui.com:8098/app/weibo/" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a></li>-->
    </ul>
</form>
</body>
</html>