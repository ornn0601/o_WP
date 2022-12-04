// ********** ********** **********
// input 입력제한 : 숫자만 입력 (e, 소수점 입력 대응)
jQuery(document).ready(function ($) {

	var inputNumber = $('.input-number-box');

	inputNumber.keyup(function (event) {
		var keyVal = $(this).val();
		$(this).val(keyVal.replace(/[^0-9]/gi, ''));
    });

});