// ********** ********** ********** **********
// check box : 스타일 컨트롤을 위한 class 제어
jQuery(document).ready(function ($) {

	var inputCheck = $('.input-checkbox input');

	inputCheck.on('click', function () {
		$(this).toggleClass('checked');
	});

});