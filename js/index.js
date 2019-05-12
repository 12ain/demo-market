/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-12-24 21:04:47
 * @version $Id$
 */

$(document).ready(function(){
	navbarbounce();
	slidebarcardflag();
	newsitems();
})

// 缩略图处理
$(function(){
    $('.goods-item-pic').jqthumb();
});

    function navbarbounce(){
	$('.navbar-brand').hover(function(){
		$('.navbar-brand').addClass("bounce animated")
	},function(){
		$('.navbar-brand').removeClass("bounce animated")
	})
}

function slidebarcardflag(){
	$('.list-group-item').each(function(){
		$(this).hover(function(){
		$(this).addClass("rubberBand animated")
	},function(){
		$(this).removeClass("rubberBand animated")
	})
	})
}

function newsitems(){
	$('.goods-item').each(function(){
		$(this).hover(function(){
		$(this).addClass("pulse animated")
	},function(){
		$(this).removeClass("pulse animated")
	})
	})
}
