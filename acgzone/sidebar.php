<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
     <div id="sidebar">

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
<section>
        <h3 class="widget_title"><?php _e('-最新文章-'); ?></h3>
        <div class="widget_list">
        <ul>
        <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
        </div>
    </section> 
        <?php endif; ?> 
        <div class="ads">
<?php $this->options->SiteAD_1() ?>
</div>

<!-- <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
<section>
        <h3 class="widget_title"><?php _e('-最新回复-'); ?></h3>
        <div class="widget_list">
        <ul>
 <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments);//不含博主评论 ?>
        <?php //$this->widget('Widget_Comments_Recent')->to($comments);//包含博主评论版 ?>
        <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
        <?php endwhile; ?>
            </ul>
        </div>
    </section> 
        <?php endif; ?>  -->

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowTagcloud', $this->options->sidebarBlock)): ?>
<section>
        <h3 class="widget_title"><?php _e('-标签云-'); ?></h3>
<?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
<?php if($tags->have()): ?>
    <?php while ($tags->next()): ?>
    <a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>);font-size:<?php echo(rand(10,20)); ?>px;" href="<?php $tags->permalink();?>">
         <?php $tags->name(); ?></a>
    <?php endwhile; ?>
</section>
<?php endif; ?>
<?php endif; ?>
<div class="ads">
<?php $this->options->SiteAD_2() ?>
</div>
<!-- <section>
        <h3 class="widget_title"><?php _e('-友情链接-'); ?></h3>
            <div class="widget_list">
            <ul class="links">
            <?php $this->options->FriendLink() ?>

            </ul>
           </div>
    </section>  -->
</div>
<div class="clear">
  

</div>