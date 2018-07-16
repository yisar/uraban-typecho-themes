<?php  
 // 评论Ajax翻页 by 牧风
if(isset($_GET["action"]) && $_GET["action"] == "ajax_comments"){// Ajax请求的头数据   
    $this->need('comments.php');   
}else{   
    if(strpos($_SERVER["PHP_SELF"],"themes")) header('Location:/');   
    $this->need('header.php');   
?>
<div id="mainer_noside">
		<div class="mainbar_noside">
			<div class="post">
				<article class="article">

  <h1 class="post_title"><a href="<?php $this->permalink() ?>" title=""><?php $this->title() ?></a></h1>  
  <div class="post_content">
 <?php $this->content(); ?>
  </div>

 </article>
    <?php $this->need('comments.php'); ?>

</div>
</div>
 <div class="clear"></div>
<?php $this->need('footer_noside.php'); ?>
<?php }?>