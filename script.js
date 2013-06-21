// JavaScript Document

$(document).ready(function (){
	/*$(".fancybox").fancybox();*/
	$('.sButton').mouseenter(function(){
		$(this).fadeTo('fast', 1);
		$(this).animate({bottom: '-=10'}, 'fast');
		});
	$('.sButton').mouseleave(function(){
		$(this).fadeTo('fast', .75);
		$(this).animate({bottom: '+=10'}, 'fast');
		});
		
	$('.nav li').mouseenter(function(){
		$(this).css('background', 'url(images/menuOn.jpg)', 'color:','black');
		$('.nav li a').css('color', 'black');
		});
	$('.nav li').mouseleave(function(){
		$(this).css('background', 'url(images/menuOff.jpg)', 'color:', 'white');
	});
	$('#pm').click(function(){
		$('.pageContent').css('visibility', 'visible');
	});
	
	$('.closeButton').click(function(){
		$('.pageContent').css('visibility', 'hidden');
	});
	
	
	
	
	
	//fancy box
	
	$(document).ready(function() {
		$(".fancybox").fancybox();
		$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        type: 'iframe',
        autoSize : false,
        beforeLoad : function() {                    
            this.width = parseInt(this.href.match(/width=[0-9]+/i)[0].replace('width=',''));  
            this.height = parseInt(this.href.match(/height=[0-9]+/i)[0].replace('height=',''));
        }
    });
	});
	
});



	
