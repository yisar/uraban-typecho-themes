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