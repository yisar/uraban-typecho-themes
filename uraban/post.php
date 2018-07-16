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

				<span>来自<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>&emsp;/&emsp;</span>

							<span><?php $this->category(','); ?></span>



			</li>

 <?php $this->content(); ?>



		</article>
<div class="ad_top">
		 <?php $this->options->SiteAD_2() ?></div>

		 
		     <?php $this->need('comments.php'); ?>


<?php $this->thePrev('%s', NULL, array('title' => '  ','tagClass' => 'toprev'));?>

<?php $this->theNext('%s', NULL, array('title' => '  ','tagClass' => 'tonext'));?>
</div>
<script type='text/javascript'>
      var _vds = _vds || [];
      window._vds = _vds;
      (function(){
        _vds.push(['setAccountId', 'abc79ba70a42b639']);
        (function() {
          var vds = document.createElement('script');
          vds.type='text/javascript';
          vds.async = true;
          vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(vds, s);
        })();
      })();
  </script>
<?php $this->need('sidebar.php'); ?>

<?php $this->need('footer.php'); ?>