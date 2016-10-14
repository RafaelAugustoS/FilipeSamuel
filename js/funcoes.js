$(function(){
	$('.subMenu').on('click', function(e){
		e.preventDefault();
		$('.subMenu ul').slideToggle();
	});
});