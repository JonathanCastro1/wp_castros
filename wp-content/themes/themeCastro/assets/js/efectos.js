
$(".seccionTres").hide();
$(".seccionCuatro").hide();

var tiempo;

	// establesco el tiempo,para ejecutar la funcion
    tiempo = setTimeout(mostrar, 3000);


// function cambiarValor() {
// 	$(".seccionTres").attr("style","visible", function() {
// 	$(".seccionTres").fadeIn(2000);	
// 	});
// 	// $(".seccionDos").attr("style","visible");
// 	// $(".seccionTres").attr("style","visible").fadeIn(2000);
// 	// $(".seccionCuatro").attr("style","visible").fadeIn(2000);	

//    // $(".seccionUno").show(2000);
//    // $(".seccionDos").fadeIn(2000);
//    // $(".seccionTres").fadeIn(3400);
// }

// .show('slow/400/fast', function() {
		
// 	});


function mostrar() {	

	$(".seccionTres").fadeIn(10000);
	$(".seccionCuatro").fadeIn(11000);
}
