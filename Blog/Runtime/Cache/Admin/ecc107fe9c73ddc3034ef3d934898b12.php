<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/view/Admin/Public/Css/font_1466258017_0700355.css">
    <link rel="stylesheet" href="/view/Admin/Public/Css/layui.css">
    <link rel="stylesheet" href="/view/Admin/Public/Css/global.css">
    <link rel="stylesheet" data-href="Css/stretch.css" class="fly-style">
    <script type="text/javascript" src="/view/Admin/Public/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/view/Admin/Public/Js/jquery.form.min.js"></script>
</head>
<body>
<form method="post" id="LAY-form" action="<?php echo U('News/update');?>"  enctype="multipart/form-data">
    <ul class="layui-form">
        <li class="layui-form-li">
            <div class="layui-form-label">
                <label for="news_title">Blog标题</label><input required type="text" value="<?php echo ($result[0]['news_title']); ?>" id="news_title" name="news_title" style="width:550px;">
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
                <label for="news_zaddress" style="width:150px">跳转地址：</label><input required type="text" id="news_zaddress" value="<?php echo ($result[0]['news_zaddress']); ?>" name="news_zaddress" placeholder="正确格式：http:// 开头" style="width:500px">
            </div>
        </li>
        <li class="layui-form-li">
            <div class="layui-form-label">
                <label for="news_key" style="width:150px">文章关键字：</label><input required type="text" id="news_key" name="news_key" value="<?php echo ($result[0]['news_key']); ?>" placeholder="以英文逗号隔开" style="width:500px">
            </div>
        </li>
        <li class="layui-form-li">
            <div class="layui-form-label layui-form-area">
                <label for="LAY_sign" style="top: 0;">文章简介</label><textarea placeholder="随便写些什么刷下存在感" required=""  id="LAY_sign" name="news_titleshort" autocomplete="off" style="width: 650px; height: 80px;"><?php echo ($result[0]['news_titleshort']); ?></textarea>
            </div>
        </li>

        <li class="layui-form-li">
            <label for="LAY_sign" style="top: 0;">文章内容</label>
            <script src="/view/Admin/Public//ueditor/ueditor.config.js" type="text/javascript"></script>
            <script src="/view/Admin/Public//ueditor/ueditor.all.js" type="text/javascript"></script>
            <textarea  required name="news_content"  id="myEditor" style="width:63%"><?php echo ($result[0]['news_content']); ?></textarea>
        </li>

        <li class="layui-form-li">
            <div class="layui-form-label">
                <label for="news_open" style="width:110px">是否为显示：</label><input type="radio" id="news_open" value="1" name="news_open" style="width:40px;margin-top:12px"><span style="margin-top:10px">否</span><input type="radio" value="0" name="menu" style="width:40px;margin-top:12px"><span style="margin-top:10px">是</span>
            </div>
        </li>

        <li><button type="submit" id="LAY_btn" class="layui-btn">立即添加</button><span class="layui-form-text" style="padding-left:20px;"></span></li>

    </ul>
</form>

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
</body>
</html>