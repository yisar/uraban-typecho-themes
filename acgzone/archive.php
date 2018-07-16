<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

         <div id="mainer">
        <div class="mainbar">

        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>            <div class="post">
        <?php if ($this->have()): ?>
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
    <li class="post_comment"><a href=""><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>&emsp;/&emsp;</li>    
    <li class="post_category"><a href="" rel="category"><?php $this->category(','); ?></a>&emsp;/&emsp;</li>    
    <li class="post_tag"><a href="" rel="tag">标签</a></li>       
    </ul>
     </div>

 </article>
      <?php endwhile; ?>
        <?php else: ?>
            <article class="article">
                <h1 class="post_title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

       <?php $this->pageNav('&laquo;', '&raquo;'); ?>
    </div>
</div>
  <?php $this->need('sidebar.php'); ?>
  <?php $this->need('footer.php'); ?>