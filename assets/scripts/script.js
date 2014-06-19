var panelImage = function(){
	$('.panel-image').css('height', '0px');

	var contDef = $('.panel-image').parent().parent().parent();
	var contDefHeight = contDef.height() + 30;

	$('.panel-image').css('height', contDefHeight+'px');

	var panelImgHeight = $('.panel-image').height();
	var panelImgWidth = $('.panel-image').width();
	var panelImageProportion = panelImgWidth / panelImgHeight;

	var imgHeight = $('.panel-image').find('img').height();
	var imgWidth = $('.panel-image').find('img').width();
	var imgProportion = imgWidth / imgHeight;

	if(imgProportion > panelImageProportion){
		// console.log('lebih lebar img ' + imgProportion + ', ' + panelImageProportion);
		$('.panel-image').find('img').css('height', '100%');
		$('.panel-image').find('img').css('width', 'auto');
		var imgLeft = ($('.panel-image').find('img').width() - panelImgWidth) / -2;
		$('.panel-image').find('img').css('left', imgLeft + 'px');
		$('.panel-image').find('img').css('top', '0px');
	}else{
		// console.log('lebih lebar containernya ' + imgProportion + ', ' + panelImageProportion);
		$('.panel-image').find('img').css('width', '100%');
		$('.panel-image').find('img').css('height', 'auto');
		var imgTop = ($('.panel-image').find('img').height() - panelImgHeight) / -2;
		$('.panel-image').find('img').css('top', imgTop + 'px');
		$('.panel-image').find('img').css('left', '0px');
	}
}

$(document).ready(function(){
	panelImage();

	function onResize(){
		panelImage();
	}

	var timer;
	$(window).bind('resize', function(){
	   timer && clearTimeout(timer);
	   timer = setTimeout(onResize, 100);
	});
});