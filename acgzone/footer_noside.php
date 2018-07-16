<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>







</div>







	 <footer id="footer_noside">
<div class="footer_page">
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
</div>

<div title="返回顶部" class="backtop"></div>



   <p class="copyright">



© 2016 Acgzone Theme designed by Oreshura.<?php $this->options->SiteICP() ?>



</p>







  </footer>



<?php $this->footer(); ?>



</div>	



<div id="bdshareside">

<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">

<div class="shareIcon">

<a class="bds_qzone" title="分享到QQ空间" href="#"></a>

<a class="bds_tsina" title="分享到新浪微博" href="#"></a>

<a class="bds_tqq" title="分享到腾讯微博" href="#"></a>

<a class="bds_tieba" title="分享到百度贴吧" href="#"></a>

<a class="bds_sqq" title="分享到QQ好友" href="#"></a>

<a class="bds_diandian" title="分享到点点" href="#"></a>

<a class="bds_duitang" title="分享到堆糖" href="#"></a>

</div>

</div>

</div>

<script type="text/javascript" id="bdshare_js" data="type=tools&mini=1" ></script>

<script type="text/javascript" id="bdshell_js"></script>

<script type="text/javascript">

document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)

</script>



<script type="text/javascript" >



jQuery(document).ready(function($){var comments=$("#comments"),loadingText="正在AJAX翻页，请稍候...",ajaxed=false;comments.on("click", ".page-navigator li a", function(e){e.preventDefault();var _this=$(this),_thisP=_this.parent();if(_thisP.hasClass('current')||ajaxed==true)return;var _list=$('.comment-list'),url=_this.attr("href").replace("#comments","")+"?action=ajax_comments";$.ajax({url:url,beforeSend:function(){_list.text(loadingText);ajaxed=true},success:function(data){comments.html(data);ajaxed=false}});return false})}); 







</script>

<script>

	

function b2top(id,n,playing){

	if (n <= 10 && n >= 0){

		var h = 100;

		var offsetHeight = h * n;

		$(id).css({backgroundPosition:'0 -'+offsetHeight+'px'});

		n = playing ? n + 1 : n - 1;

		setTimeout("b2top('" + id + "'," + n + "," + playing + ")",50);

	}

};



$body=(window.opera)?(document.compatMode=="CSS1Compat"?$('html'):$('body')):$('html,body');

$('a[href*=#]').click(function(){

	if (location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){

		var $target=$(this.hash);

		$target=$target.length&&$target||$('[name='+this.hash.slice(1)+']');

		if ($target.length){

			var targetOffset=$target.offset().top;

			$('html,body').animate({scrollTop:targetOffset});

			return false;

		}

	}

});

$(window).scroll(function(){

	if($(this).scrollTop()>200){

		$('.backtop').fadeIn()

	}else{

		$('.backtop').fadeOut()

	}

});

$('.backtop').hover(function(){

	b2top('.backtop',0,true)

},function(){

	b2top('.backtop',3)

}).click(function(){

	$('body,html').animate({scrollTop:0},600,function(){

	});

	b2top('.backtop',3)

});

</script>

<script type="text/javascript">



jQuery(document).ready(function(){jQuery("a[rel='external'],a[rel='external nofollow']").click(function(){window.open(this.href);return false})});



</script>



<script type="text/javascript">



jQuery(document).ready(function($){$('.post-content a').attr({ target:"_blank"})});



</script>

<script type="text/javascript">

    (function() {

    var Core = {

    initialize: function() {

    smoothScroll();

    },

    };

    Core.initialize();

    })();

    </script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?c99f07d07e9c90cae0302635ce5cc951";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
$(document).ready(function(){
  $("#header i").click(function(){
  $(".m_topbar").toggle(100);
  });
});
</script>

</body>



</html>







