<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>



<!DOCTYPE HTML>



<html>



<head>


<meta name="viewport" content="width = device-width,initial-scale=1">
    <meta charset="<?php $this->options->charset(); ?>">



    <title><?php $this->archiveTitle(array(



            'category'  =>  _t('分类 %s 下的文章'),



            'search'    =>  _t('包含关键字 %s 的文章'),



            'tag'       =>  _t('标签 %s 下的文章'),



            'author'    =>  _t('%s 发布的文章')



        ), '', ' - '); ?><?php $this->options->title(); ?></title>







    <!-- 使用url函数转换相关路径 -->



    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">



    <script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>



    <script type="text/javascript" src="<?php $this->options->themeUrl('js/post.js'); ?>"></script>

    <!--[if lt IE 9]>



    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>



    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>



    <![endif]-->







    <!-- 通过自有函数输出HTML头部信息 -->



    <?php $this->header(); ?>



</head>



<body>



<!--[if lt IE 8]>



    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>



<![endif]-->







<div id="container">



<header id="header">
<h1 class="m_logo"><a href="<?php $this->options->siteUrl(); ?>">ACGZONE</a></h1>
<i></i>
<div class="m_topbar"> 
<ul>
          <li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>

<?php $this->widget('Widget_Metas_Category_List')

    ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
</ul>
</div>


    <div class="topbar">



<ul>



                    <li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>

<?php $this->widget('Widget_Metas_Category_List')

    ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>



</ul>



    </div>



    <div class="header">



        <div id="logo">



            <h1 class="logo"><a href="<?php $this->options->siteUrl(); ?>">ACG和谐区</a></h1>



            <h2 id="tagline"><?php $this->options->description() ?></h2>



        </div>



        <div id="search_link">



        <div id="searchbar">



            <form id="search" method="post" action="./" role="search">



            <div class="search_input"> <input type="text" name="s" class="text" placeholder="<?php _e('搜索一下菊花又不会松⊙▂⊙'); ?>" />



            <div class="search_button"><button type="submit" class="submit"></button></div>



            </form>



        </div>



        </div>



    </div>



    </header>















    



    



