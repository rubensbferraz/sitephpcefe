$(document).ready(function(){
	$('#header .menu a').on('click', function(){
		var id = $(this).attr('href');
		var elemento = $(id);

		if(elemento.length){
			$('.overlay').fadeIn(500);
			elemento.show();
			elemento.css({
				top:'-600px'
			});
			elemento.animate({
				top:'100px'
			}, 1000);
		}
	});

	$('#modal-cadastro .fechar-modal').on('click', function(){
		var elemento = $(this).parent();

		elemento.animate({
			top: '-600px'
		}, 1000, function(){
			elemento.hide();
		});
		$('.overlay').fadeOut(500);
	});
});