<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="mainer">

<div class="post">
<div class="ad_top">
 <?php $this->options->SiteAD_1() ?></div>

		<article>
			<h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
			<li class="post_top">
				<span><?php $this->date('F j, Y'); ?>&emsp;/&emsp;</span>
				<span>From <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
							

			</li>
 <?php $this->content(); ?>

		</article>
		<div class="ad_top">
		 <?php $this->options->SiteAD_2() ?></div>
		     <?php $this->need('comments.php'); ?>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>