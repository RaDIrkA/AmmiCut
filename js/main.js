
    $(function() {
		$('#mindscape').smart3d(850);
    });
	
	
	
	
	
		//move the image in pixel
	var move = 0;
	
	//zoom percentage, 1.2 =120%
	var zoom = 1.020;

	//On mouse over those thumbnail
	$('.zitem,.aa').hover(function() {
		
		//Set the width and height according to the zoom percentage
		width = $('.zitem').width() * zoom;
		height = $('.zitem').height() * zoom;
		
		//Move and zoom the image
		$(this).find('img').stop(false,true).animate({'width':width, 'height':height, 'top':move, 'left':move}, {duration:400});
		
		//Display the caption
		$(this).find('div.caption').stop(false,true).fadeIn(400);
	},
	function() {
		//Reset the image
		$(this).find('img').stop(false,true).animate({'width':$('.zitem').width(), 'height':$('.zitem').height(), 'top':'0', 'left':'0'}, {duration:100});	

		//Hide the caption
		$(this).find('div.caption').stop(false,true).fadeOut(200);
	});








		//move the image in pixel
	var move = 0;
	
	//zoom percentage, 1.2 =120%
	var zoom = 1.020;

	//On mouse over those thumbnail
	$('.zitem1').hover(function() {
		
		//Set the width and height according to the zoom percentage
		width = $('.zitem1').width() * zoom;
		height = $('.zitem1').height() * zoom;
		
		//Move and zoom the image
		$(this).find('img').stop(false,true).animate({'width':width, 'height':height, 'top':move, 'left':move}, {duration:400});
		
		//Display the caption
		$(this).find('div.caption').stop(false,true).fadeIn(400);
	},
	function() {
		//Reset the image
		$(this).find('img').stop(false,true).animate({'width':$('.zitem1').width(), 'height':$('.zitem1').height(), 'top':'0', 'left':'0'}, {duration:100});	

		//Hide the caption
		$(this).find('div.caption').stop(false,true).fadeOut(200);
	});