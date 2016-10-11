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
							<h6 class="layout padding-left manage-head-con">账号管理
							<!--<span class="fr text-small text-normal padding-top">发布时间：2016-07-08</span>
							<span class="fr margin-large-right padding-top text-small text-normal">最新版本：<em class="text-main">2.4.0.160708</em></span>-->
							</h6>
						</div>
					</div>
					<div class="authority-content">
						<div class="list-content show">
							<div class="offcial-table tr-border margin-big-top clearfix">
								<div class="tr-th clearfix">
									<div class="th w20">
										账号名称
									</div>
									<div class="th w20">
										头像
									</div>
									<div class="th w15">
										状态
									</div>
									<div class="th w15">
										最后登入时间
									</div>
									<div class="th w15">
										最后登入IP
									</div>
									<div class="th w15">
										操作
									</div>
								</div>
								<?php if(is_array($results)): foreach($results as $key=>$res): ?><div class="tr clearfix border-bottom-none">
									<div class="td w20">
										<?php echo ($res['username']); ?>
									</div>
									<div class="td w20">
										<?php if($res['avatar'] == ''): ?><img src="/view/Admin/Public/Images/noavatar_middle.gif" alt="账户头像" style="width:20px;height:20px;line-height:20px">
											<?php else: ?>
											<img src="/view/Admin/Public/Images/noavatar_middle.gif" alt="账户头像" style="width:20px;height:20px;line-height:20px"><?php endif; ?>

									</div>
									<div class="td w15">
										<?php if($res['status'] == 0): ?><a class="button bg-green-deep  icon-button-green " href="#">正常</a>
										<?php else: ?>
											<a class="button btn-red text-white"  href="#">禁用</a><?php endif; ?>

									</div>
									<div class="td w15">
										<?php echo (date("Y-m-d H:i",$res['last_login_time'])); ?>

									</div>
									<div class="td w15">
										<a href="#" class="button-word2"><?php echo ($res['last_login_ip']); ?></a>
									</div>
									<div class="td w15">
										<a href="javascript:;" data-id="<?php echo ($res['id']); ?>" class="button-word2 update">编辑</a>
										<a href="javascript:;" data-id="<?php echo ($res['id']); ?>" msg=""  class="button-word2 btn_ajax_confirm del">删除</a>
									</div>
								</div><?php endforeach; endif; ?>
							</div>
						</div>
						<div class="show-page padding-big-right">
							<div class="page">
								<div class="page">
									<ul class="offcial-page margin-top margin-big-right">
										<li>共<em class="margin-small-left margin-small-right">1</em>条数据</li>
										<li>每页显示<em class="margin-small-left margin-small-right">15</em>条</li>
										<li><a class="next disable">上一页</a></li>
										<li></li>
										<li><a class="next disable">下一页</a></li>
										<li><span class="fl">共<em class="margin-small-left margin-small-right">1</em>页</span></li>
									</ul>
								</div>
							</div>
						</div>
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