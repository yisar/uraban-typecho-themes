<?php  

 // 评论Ajax翻页 by 牧风

if(isset($_GET["action"]) && $_GET["action"] == "ajax_comments"){// Ajax请求的头数据   

    $this->need('comments.php');   

}else{   

    if(strpos($_SERVER["PHP_SELF"],"themes")) header('Location:/'); 

    $this->need('header.php');

?>



<div id="mainer">

        <div class="mainbar">

<div class="ad_banner">

<?php $this->options->SiteAD_3() ?>

</div>

            <div class="post">

                <article class="article">



  <h1 class="post_title"><a href="<?php $this->permalink() ?>" title=""><?php $this->title() ?></a></h1>

    <ul class="post_meta_top">

   <li class="post_date" ><?php $this->date('F j, Y'); ?>&emsp;/&emsp;</li>   

   <li class="post_author"><a href="<?php $this->author->permalink(); ?>"  rel="author"><?php $this->author(); ?></a>&emsp;/&emsp;</li> 

   <li class="post_category"><a href="" rel="category"><?php $this->category(','); ?></a>&emsp;/&emsp;</li>    

   <li class="post_tag"><a href="" rel="tag"><?php $this->tags(', ', true, 'none'); ?></a></li>  </ul>  

  <div class="post_content">

 <?php $this->content(); ?>

  </div>



 </article>

<div class="ad_banner">

<?php $this->options->SiteAD_4() ?>



</div>

    <?php $this->need('comments.php'); ?>

 


</div>

</div>



<?php $this->thePrev('%s', NULL, array('title' => '  ','tagClass' => 'toprev'));?>

<?php $this->theNext('%s', NULL, array('title' => '  ','tagClass' => 'tonext'));?>

<?php $this->need('sidebar.php'); ?>

<?php $this->need('footer.php'); ?>



<?php } ?>