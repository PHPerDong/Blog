<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title></title>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <link rel="stylesheet" type="text/css" href="/view/Home/Public/Css/vno.css" />
    <link rel="stylesheet" type="text/css" href="/view/Home/Public/Css/black.css" />
    <link rel="stylesheet" type="text/css" href="/view/Home/Public/Css/blog.css" />

    
    <script type="application/ld+json">

    </script>

    <meta name="generator" content="Ghost 0.11" />

    <script type="text/javascript"src="Scripts/jquery.min.js"></script>

</head>
<body class="tag-template tag-laravel no-js">

    <span class="mobile btn-mobile-menu">
        <i class="fa fa-list btn-mobile-menu__icon"></i>
        <i class="fa fa-angle-up btn-mobile-close__icon hidden"></i>
    </span>



    <div class="content-wrapper">
        <div class="content-wrapper__inner">
            
  <h1 class="archive-title">Tag: Laravel</h1>

  <hr class="section-title__divider" />

  <div class="main-post-list">

    <ol class="post-list">
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-shi-zhan-pian-zi-ding-yi-fen-ye-lei/" title="link to Laravel --实战篇 (自定义分页类)">Laravel --实战篇 (自定义分页类)</a></h2>
        <p class="excerpt">前言 : Laravel框架中有封装好的分页类paginate方法,但是这个方法如果是在数据量比较大的项目中，无疑是在无形中给项目挖了一个隐藏的坑，因为如果是看DB类源码paginate的分页基础是把所有的数据都拿了，只不过根据nowPage给你分页的数据罢了，而且该分页类，你做不了缓存处理。 下面给大家分享一个干货，通过修改源码封装出来的一个自定义分页类，并且该自定义分页类，支持Redis缓存覆盖。(本篇文章中暂不介绍Redis方面) 1.新的获取数据的方法 获取数据的方法有两种(其中一&hellip;</p>
        <div class="post-list__meta">
            <time datetime="27 Sep 2016" class="post-list__meta--date date">27 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-shi-zhan-pian-zi-ding-yi-fen-ye-lei/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-shi-zhan-pian-uuid-wei-yi-shi-bie-ma/" title="link to Laravel --实战篇 UUID(唯一识别码)">Laravel --实战篇 UUID(唯一识别码)</a></h2>
        <p class="excerpt">前言 : 一般的唯一识别id都是各种时间戳、毫秒级时间戳加php内置函数或者加上随机数等手段来生成的。   下面给大家介绍一个组件，也是我在各个实战项目中必不可少的一个组件，ramsey/uuid。 一、ramsey/uuid的实现方式 机器hash（防止多台机器之间ID冲突） 进程ID（防止多进程冲突） 时间戳（秒） 自增值（同一秒内自增） 该方法号称是1000年以内不会出现重复数据的一种算法id(具体情况是不是这样，博主也无从得知，没有用那么大的数据量去特意做个测试)。 二、适用场景&hellip;</p>
        <div class="post-list__meta">
            <time datetime="27 Sep 2016" class="post-list__meta--date date">27 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-shi-zhan-pian-uuid-wei-yi-shi-bie-ma/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-validate-biao-dan-yan-zheng-2/" title="link to Laravel --Validate (表单验证) 使用实例">Laravel --Validate (表单验证) 使用实例</a></h2>
        <p class="excerpt">前言 : Laravel 提供了多种方法来验证应用输入数据。默认情况下，Laravel 的控制器基类使用ValidatesRequests trait，该trait提供了便利的方法通过各种功能强大的验证规则来验证输入的 HTTP 请求。 要掌握 Laravel 强大的验证特性，让我们先看一个完整的验证表单并返回错误信息给用户的例子。 在这之前如果您是首次接触 Laravel 而且并不知道路由如何跳转到指定的控制器 可以查看博主的Restfulapi或者Laravel官网对路由的介绍，在这里&hellip;</p>
        <div class="post-list__meta">
            <time datetime="25 Sep 2016" class="post-list__meta--date date">25 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-validate-biao-dan-yan-zheng-2/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-shi-zhan-pian-zi-zhi-er-wei-ma-simple-qrcode/" title="link to Laravel -- 实战篇 自制二维码 Simple QrCode">Laravel -- 实战篇 自制二维码 Simple QrCode</a></h2>
        <p class="excerpt">简介:Simple QrCode 是基于强大的Bacon/BaconQrCode库开发的适用于当前最流行的Laravel框架的一个扩展库.便于Laravel用户可以很方便地使用. 一、配置 1.在项目根目录输入命令 composer require simplesoftwareio/simple-qrcode 1.3.*   2.在config/app.php 的 providers 数组里添加服务提供者. SimpleSoftwareIO\QrCode\QrCodeServiceProv&hellip;</p>
        <div class="post-list__meta">
            <time datetime="25 Sep 2016" class="post-list__meta--date date">25 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-shi-zhan-pian-zi-zhi-er-wei-ma-simple-qrcode/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-jin-jie-pian-dan-dian-deng-lu-sso/" title="link to Laravel --进阶篇 (单用户登录)">Laravel --进阶篇 (单用户登录)</a></h2>
        <p class="excerpt">为什么要单用户登录? 比如: 视频教程网站, 如果一个帐号买了1个课程, 然后在把自己的帐号共享给其他人, 那其他人也能在他看视频的同时也登录他的账号看视频了, 那公司的利益就受到了损失, 那帐号如果分给 1000 人, 10000 人, 这损失就不小,如果做了单用户 就起码可以保证每个账号只能同时一个人登录 那么今天带着大家做一下单点登录的实例。 涉及技术 Laravel 路由 中间件 Redis 这里我使用的 Laravel 5.1 LTS 框架, 登录逻辑, 挺简单的这里就简单的阐述&hellip;</p>
        <div class="post-list__meta">
            <time datetime="25 Sep 2016" class="post-list__meta--date date">25 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-jin-jie-pian-dan-dian-deng-lu-sso/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-xiao-ji-qiao-cha-xun-ri-zhi-sqlyu-ju-da-yin/" title="link to Laravel -- 小技巧 查询日志(sql语句打印)">Laravel -- 小技巧 查询日志(sql语句打印)</a></h2>
        <p class="excerpt">前言 : 用Laravel的时候不管是操作DB类还是操作ORM时，都会遇到sql报错，特别是一些复杂语句查询的时候，想要看到输出的sql语句到底是哪里出问题了。 默认情况下,Laravel日志保存在内存的所有查询运行当前的请求。然而,在某些情况下,例如当插入的行数,这可能会导致应用程序使用多余的内存。禁用日志,你可以使用disableQueryLog方法: DB::connection()-&gt;enableQueryLog();   // 获取已执行的查询数组 DB::table('d&hellip;</p>
        <div class="post-list__meta">
            <time datetime="23 Sep 2016" class="post-list__meta--date date">23 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-xiao-ji-qiao-cha-xun-ri-zhi-sqlyu-ju-da-yin/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-ji-cheng-a-li-da-yu-duan-xin-jie-kou/" title="link to Laravel 集成 阿里大于 短信接口">Laravel 集成 阿里大于 短信接口</a></h2>
        <p class="excerpt">一、配置 从终端或命令行进入您的项目目录,运行 composer require iscms/alisms-for-laravel   2.在config/app.php的providers数组中配置   iscms\Alisms\AlidayuServiceProvider::class,   3.在项目根目录执行   php artisan vendor:publish   4.您的config目录应该增加了alisms.php配置文件 &lt;?php       return [&hellip;</p>
        <div class="post-list__meta">
            <time datetime="23 Sep 2016" class="post-list__meta--date date">23 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-ji-cheng-a-li-da-yu-duan-xin-jie-kou/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-zhi-fu-bao-sdkzai-laravel5de-feng-zhuang/" title="link to Laravel 支付宝SDK在Laravel5的封装">Laravel 支付宝SDK在Laravel5的封装</a></h2>
        <p class="excerpt">一、安装 composer require latrell/alipay dev-master 找到 config/app.php 配置文件中，key为 providers 的数组，在数组中添加服务提供者。 'providers' =&gt; [      // ...   Latrell\Alipay\AlipayServiceProvider::class,     ] 在项目根目录中运行 php artisan vendor:publish 命令，发布配置文件到你的项目中。 说明 配置文件&hellip;</p>
        <div class="post-list__meta">
            <time datetime="23 Sep 2016" class="post-list__meta--date date">23 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-zhi-fu-bao-sdkzai-laravel5de-feng-zhuang/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-ren-wu-diao-du-console/" title="link to Laravel 任务调度(Console)">Laravel 任务调度(Console)</a></h2>
        <p class="excerpt">在以前，开发者需要为每一个需要调度的任务编写一个Cron条目，这是很让人头疼的事。你的任务调度不在源码控制中，你必须使用SSH登录到服务器然后添加这些Cron条目。Laravel命令调度器允许你平滑而又富有表现力地在Laravel中定义命令调度，并且服务器上只需要一个Cron条目即可。 任务调度又是我们俗称的“计划任务” 任务调度定义在app/Console/Kernel.php文件的schedule方法中，该方法中已经包含了一个示例。你可以自由地添加你需要的调度任务到Schedule对象&hellip;</p>
        <div class="post-list__meta">
            <time datetime="23 Sep 2016" class="post-list__meta--date date">23 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-ren-wu-diao-du-console/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
      <li>
        <h2 class="post-list__post-title post-title"><a href="/laravel-cheng-xu-bao-cuo-shi-exceptionsyou-hao-ye-mian/" title="link to Laravel(程序报错时)Exceptions友好页面">Laravel(程序报错时)Exceptions友好页面</a></h2>
        <p class="excerpt">前言:一般来说laravel不管debug关了还是没关给定的报错页面都不是特别友好。 一般来说开启debug时报错页面是这样的   关闭debug时报错页面是这样的 在项目的app/Exceptions/Handler.php中可以在页面得到响应之前抓去到错误然后响应我们给出的比较友好的错误页面 public function render($request, Exception $e)       {         $debug = config('app.debug', false)&hellip;</p>
        <div class="post-list__meta">
            <time datetime="22 Sep 2016" class="post-list__meta--date date">22 Sep 2016</time> &#8226;
            <span class="post-list__meta--tags tags"><a href="/tag/laravel/#blog" title="Laravel">Laravel</a></span><a class="btn-border-small" href=/laravel-cheng-xu-bao-cuo-shi-exceptionsyou-hao-ye-mian/>继续阅读</a>
        </div>
        <hr class="post-list__divider" />
      </li>
    </ol>

    <hr class="post-list__divider " />

<nav class="pagination" role="navigation">
    <span class="pagination__page-number">1 / 2</span>
        <a class="older-posts pagination__older btn btn-small btn-tertiary" href="/tag/laravel/page/2/#blog">更早 &rarr;</a>
</nav>


  </div>


            <footer class="footer">
	<span class="footer__copyright">本站点为个人技术积累<a href="http://www.blog8090.com">建设本站目的是为广大开发者提供方便查阅资料的固定站点</a></span>
    <span class="footer__copyright">© 2016 - 本站由吕倡搭建 <a href="http://www.itxdh.com/">友情链接:IT 兄弟会</a> 
</footer>
        </div>
    </div>

   

</script>

    <script type="text/javascript" src="Scripts/main.js"></script>

    <script type="text/javascript" src="Scripts/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>