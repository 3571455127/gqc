<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>"/>
    <meta name="description" content="<?php echo ($seo_description); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">

    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <!-- <link rel="stylesheet" href="__PUBLIC__/www/css/lightgallery.min.css"> -->
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <!-- <script src="__PUBLIC__/www/js/lightgallery.js"></script>
    <script src="__PUBLIC__/www/js/lg-zoom.js"></script> -->
    <script src="__PUBLIC__/www/js/swiper.min.js"></script>
    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/www/js/main.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar-example">

    <header>
        <div class="header-top">
            <div class="top-bar clearfix">
                <div class="container">
                    <div class="row">
                        <div class="phone col-lg-2 col-md-3 col-sm-3"><span><?php echo ($phone); ?></span></div>
                        <div class="eamil col-lg-2 col-md-3 col-sm-3">
                            <a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails">
                                <span><?php echo ($email); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/index.php"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                    </div>

                    <div id="navbar-example">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#home">Home</a></li>
            <?php $n=0;foreach($Categorys as $key=>$r):if($n<5) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' ): ?><li>
                <a href="#<?php echo ($r["catdir"]); ?>"><?php echo ($r["catname"]); ?></a>
            </li><?php endif; endif; endif; endforeach;?>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </div>

<div class="thank">
    <div class="container">
        <div class="row">
            <h5>Thanks for your inquiry!</h5>
            <p>Our Professional Team Will Contact With You In 24 Hours</p>
            <a class="link" href="/" onclick="history.go(-1)"><span id="sec">5</span>s Back Home</a>
            <img class="back" src="__PUBLIC__/www/images/back.png" alt="back" onClick="javascript :history.go(-1);" />
        </div>
    </div>
</div>

<script src="__PUBLIC__/www/js/jquery.js"></script>
<script>
    $(function () {
        setTimeout("lazyGo();", 1000);
    });

    function lazyGo() {
        var sec = $("#sec").text();
        $("#sec").text(--sec);
        if (sec > 0)
            setTimeout("lazyGo();", 1000);
        else

            javascript: history.back(-1);
    }
</script>