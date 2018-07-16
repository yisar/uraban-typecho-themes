<footer>



	<ul>



<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>



                    <?php while($pages->next()): ?>



                   <li> <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>



                    <?php endwhile; ?>



	</ul>



	<p>© 2017 Acgzone Theme designed by Yisaer. </p>



</footer>



<?php $this->footer(); ?>



	</div>





  <div class="ukagaka pos">

  <div class="ukagaka-info">

  <div class="main">

    <p>欢迎来到★里世界★，这是一个专注acg优质资源的平台。<br>默认解压密码acgzone.org……<br>交流群：469183708<br></p></div>

    <div class="bottom"></div>

  </div>

    <div class="ukagaka-face">

    </div>

  </div>



<!-- 返回顶部 -->

<div id="backtop" onclick="backTop()">

<i class="urafont ura-top"></i>

</div>





<!-- 百度统计 -->



<script>



var _hmt = _hmt || [];



(function() {



  var hm = document.createElement("script");



  hm.src = "//hm.baidu.com/hm.js?201398b76ca8f0eab7e727b692bb51e5";



  var s = document.getElementsByTagName("script")[0]; 



  s.parentNode.insertBefore(hm, s);



})();



</script>

<script>

  

    // 伪春菜拖拽实现

    $(function() {

  $('.ukagaka').mousedown(function(ev){

    var left=ev.pageX;

    var top=ev.pageY;

    var old_left=$(this).position().left;

    var old_top=$(this).position().top;

  $(document).mousemove(function(ev){

    var new_left=ev.pageX;

    var new_top=ev.pageY;

    var s_top=$('.ukagaka').scrollTop();

    var diff_x=new_left-left;

    var diff_y=new_top-top;

    var finish_left=diff_x+old_left;

    var finish_top=diff_y+old_top+s_top;

    if (finish_left<20) {

      finish_left=20;

    };

    if (finish_top<20) {

      finish_top=20;

    };

    if (finish_top>$(window).height()-220) {

      finish_top=$(window).height()-220;

    };

    if (finish_left>$(document).width()-420) {

      finish_left=$(document).width()-420;

    };

  $('.ukagaka').css({

    left:finish_left+'px',

    top:finish_top+'px'

  }); 

  $('.ukagaka').removeClass('pos');

  })

  $('.ukagaka').mouseup(function(){

    $(document).off('mousemove');

  })

  })

})

</script>

<script>

// 返回顶部

var timer = null;
var isTop = true;
var height=document.documentElement.clientHeight;

window.onscroll = function  () {
  var top = document.documentElement.scrollTop || document.body.scrollTop;
  if (top>height) {
    document.getElementById('backtop').style.display='block';

  }else{
    document.getElementById('backtop').style.display='none';
  };
  if(!isTop){
    clearInterval(timer);
  }
  isTop=false;
}

function backTop () {
  timer=setInterval(function(){

     var top = document.documentElement.scrollTop || document.body.scrollTop;
     var speed =Math.floor(-top/3) ;
 document.documentElement.scrollTop=document.body.scrollTop=top+speed;
isTop=true;
 if (top=0) {
  clearInterval(timer);
 };

  },30)



}

// nav导航栏图标

    x=document.getElementsByClassName("nav-icon");

    x[0].classList.add("ura-home");

	x[1].classList.add("ura-book");

	x[2].classList.add("ura-video");

	x[3].classList.add("ura-images");

	x[4].classList.add("ura-game");

	x[5].classList.add("ura-music");

	x[6].classList.add("ura-news");



			    // 首页顶部图片



            x=document.getElementsByClassName("banner");



			x[0].style.background="url(<?php $this->options->HeadIMG() ?>)";







// 搜索框



function searchShow () {

  document.getElementById('searcher').style.display="block";

  document.getElementById('search-wrap').style.display="block";

}

function searchHide(){

  document.getElementById('search-wrap').style.display="none";

  document.getElementById('searcher').style.display="none";

}





</script>



	<link rel="stylesheet" href="//at.alicdn.com/t/font_344119_04v9t6u3c4cdte29.css">



        	<script type="text/javascript" src=" <?php $this->options->themeUrl('js/common.js'); ?> "></script>



</body>



</html>