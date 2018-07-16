<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="mainer">
<div class="post">
			<h3 class="archive-title"><?php $this->archiveTitle(array(

            'category'  =>  _t('分类 %s 下的文章'),

            'search'    =>  _t('包含关键字 %s 的文章'),

            'tag'       =>  _t('标签 %s 下的文章'),

            'author'    =>  _t('%s 发布的文章')

        ), '', ''); ?></h3>   

        <div class="ad_top">

<?php $this->options->SiteAD_1() ?>
</div> 
    <?php if ($this->have()): ?>

		<?php while($this->next()): ?>

		<article>
			<h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
<div class="pinglun"> <span><?php $this->commentsNum('%d'); ?></span>

</div>
			<li class="post_top">
				<span><?php $this->date('F j, Y'); ?>&emsp;/&emsp;</span>
				<span>From <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
			</li>
		<?php $this->content('- 阅读剩余 -'); ?><div class="clear"></div>
		<li class="post_bottom">



			<span><?php $this->category(','); ?></span>
		</li>
		</article>
			<?php endwhile; ?>
			        <?php else: ?>

            <article class="article">

                <h1 class="post_title"><?php _e('没有找到内容'); ?></h2>

            </article>

<?php if ($this->sequence == 1) : ?>
<div class="ad_top">



 <?php $this->options->SiteAD_5() ?>



</div>
<?php endif; ?>

        <?php endif; ?>
        <div class="ad_top">
        <?php $this->options->SiteAD_2() ?></div>
  <?php $this->pageNav('&laquo;', '&raquo;'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>