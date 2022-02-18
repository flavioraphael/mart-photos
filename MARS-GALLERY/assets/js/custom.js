var Script = function () {
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('a[href="#spy5"]').fadeIn();
		} else {
			$('a[href="#spy5"]').fadeOut();
		}
	});
	$('a[href="#spy5"]').click(function(){
		$('html, body').animate({scrollTop : 0},700);
		return false;
	});

	$("body").on("click", ".tipe_list", function(){

		var tipo = $(this).attr('id');
		$('.tipe_list').removeClass("g-color-gray-dark-v5");
		$('.tipe_list').removeClass("g-color-gray-dark-v1");

		if(tipo == 'tipe_grid'){
			$('.list_list').addClass("hidden");
			$('.list_grid').removeClass("hidden");

			$('#tipe_list').addClass("g-color-gray-dark-v5");
			$('#tipe_grid').addClass("g-color-gray-dark-v1");
		}else{
			$('.list_list').removeClass("hidden");
			$('.list_grid').addClass("hidden");

			$('#tipe_list').addClass("g-color-gray-dark-v1");
			$('#tipe_grid').addClass("g-color-gray-dark-v5");
		}
		return false;
	});

}();
