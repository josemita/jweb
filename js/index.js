/*
Funciones JS

*/


85352556
function showVimeo(video){
	 $( ".fondoNegro" ).fadeIn(); 
	 $( "#contenido" ).fadeIn();   

	$( "#contenido" ).html( '<iframe src="//player.vimeo.com/video/'+video+'?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>' );

}



