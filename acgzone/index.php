<?php



/**



 * ACGZONE.ORG，灵感来自mono-lab，和谐区黑色主题



 * 



 * @package acgzone



 * @author Oressha



 * @version 1.0



 * @link http://www.oreshura.com



 */







if (!defined('__TYPECHO_ROOT_DIR__')) exit;



 $this->need('header.php');


 ?>







	<div id="mainer">



		<div class="mainbar">

<div class="ad_banner">
<?php $this->options->SiteAD_3() ?>

</div>

			<div class="post">





			<?php while($this->next()): ?>



				<article class="article">







  <h1 class="post_title"><a href="<?php $this->permalink() ?>" title=""><?php $this->title() ?></a></h1>



    <ul class="post_meta_top">



   <li class="post_date" ><?php $this->date('F j, Y'); ?>&emsp;/&emsp;</li>   



   <li class="post_author"><a href="<?php $this->author->permalink(); ?>"  rel="author"><?php $this->author(); ?></a></li>  </ul>



  



  <div class="post_content">



      <?php $this->content('- 阅读剩余 -'); ?>



  </div>







  <div class="post_meta_bottom">



    <ul>



    <li class="post_comment"><a href="">评论</a>&emsp;/&emsp;</li>    



    <li class="post_category"><a href="" rel="category"><?php $this->category(','); ?></a>&emsp;/&emsp;</li>    



    <li class="post_tag"><a href="" rel="tag"><?php $this->tags(', ', true, 'none'); ?></a></li>       



    </ul>



     </div>







 </article><?php endwhile; ?>


<div class="ad_banner">
<?php $this->options->SiteAD_4() ?>

</div>


    <?php $this->pageNav('&laquo;', '&raquo;'); ?>



 



</div>



</div>











<?php $this->need('sidebar.php'); ?>



<?php $this->need('footer.php'); ?>



