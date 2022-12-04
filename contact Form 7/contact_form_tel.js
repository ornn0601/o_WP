// ********** ********** **********
// 전화번호 입력 
jQuery(document).ready(function ($) {

    // 전화번호 '-' 자동생성 : 010-000-0000
    $(document).on('keyup', '.wpcf7-tel', function () {
		$(this).val($(this).val().replace(/[^0-9]/g, '').replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})/,'$1-$2-$3').replace('--', '-')
		);
	});

});
