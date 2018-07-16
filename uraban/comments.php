<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>



<div id="comments">



    <?php $this->comments()->to($comments); ?>











    <?php if($this->allow('comment')): ?>



    <div id="<?php $this->respondId(); ?>" class="respond">



        <div class="cancel-comment-reply">



        <?php $comments->cancelReply(); ?>



        </div>



    



    	<h3 id="response"><?php _e('快上车'); ?></h3>



    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">



            <?php if($this->user->hasLogin()): ?>
        <p class="hasLogin"><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>



    			<input type="text" name="author" id="author" class="text" placeholder="输入昵称凑个数嘛" value="<?php $this->remember('author'); ?>" required />



    			<input type="email" name="mail" id="mail" class="text" placeholder="再输入邮箱凑个数的啦~" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />





            <?php endif; ?>



    		<p>



                <textarea rows="3" cols="50" name="text" id="textarea" class="textarea" required placeholder="回复一下下菊花又坏不了……"><?php $this->remember('text'); ?></textarea>



            </p>



    		<p>



                <button type="submit" class="submit"><?php _e('射了……'); ?></button>



            </p>



    	</form>

<div class="clear"></div>

    </div>



    <?php else: ?>



    <h3><?php _e('不给艹'); ?></h3>



    <?php endif; ?>
    <?php if ($comments->have()): ?>



  <h3><?php $this->commentsNum(_t('还没有人菊花坏……'), _t('只有一个人的菊花坏了'), _t('已有 %d 人的菊花坏了(⊙o⊙)…')); ?></h3>



   



    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo;', '&raquo;'); ?>



    



    <?php endif; ?>



</div>







<style>







#comments {padding-top: 15px;}
#comments .page-navigator{margin-top:-40px}
#comments h3{font-weight: normal;font-size: 16px;padding: 0 15px;border-left: 2px solid #387eb0;margin: 15px 0}
.textarea{width: 100%;height: 80px;background: #21272e;border: none;box-sizing:border-box;padding: 10px; margin: 20px 0;color: #aaa}
.submit{background: #21272e;font-size: 16px;padding: 5px 20px;border: 1px solid #21272e;float: right;color: #aaa}
.submit:hover{background: #387eb0;color: #fff;border: 1px solid #387eb0}
.comment-list{padding-top: 20px}
.comment-parent{ margin-bottom: 40px;}
ol.comment-list li .comment-reply{float: right; margin-top: 5px;}
ol.comment-list li .comment-reply a{font-size:12px;border:none;}
ol.comment-list li .comment-reply a:hover{color:#387eb0;}
.comment-body{overflow:hidden;}
.comment-author{float: left;width: 60px;text-align: center;margin-right: 20px;}
.avatar{border-radius: 21px}
.comment-info {color: #888;float: left;line-height: 16px;padding-left: 5px;}
.comment-info .fn{font-style:normal; display: block; margin-top: 4px}
.comment-info .comment-meta{color:#999;font-size:10px;}
.comment-content{float: left;width: 600px;padding: 10px 0}
.comment-author span{display: block;}
.comment-meta{font-size: 11px;float: right;display: inline-block;}
#comment-form input{background: #21272e;padding: 8px;width: 200px;color: #aaa;box-sizing: border-box;}
#mail{margin-left: 18px}
.hasLogin{float: right}
.comment-child{float: right;width: 600px;margin-top: 40px}
.comment-child .comment-content{width: 500px}
.fn{font-size: 12px;display:inline-block}
#cancel-comment-reply-link{display:inline-block}
</style>