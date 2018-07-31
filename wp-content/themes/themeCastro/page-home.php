<?php
/*
	Template Name: Home Page	
*/

get_header(); ?>



	<div class="container carrusel col-md-8 col-md-offset-2 " id="home">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/negocios1.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>Comunicate</h3>
        <p>Nuestro equipo atiende las 24 horas!!</p>
      </div>
    </div>

    <div class="item">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/negocios2.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Proyecto</h3>
        <p>Acordemos la estrategia de tu proyecto!!</p>
      </div>
    </div>

    <div class="item">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/negocios3.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>Contento</h3>
        <p>Ten un feliz dia con un proyecto de calidad!!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>
	</div>


	
	<!-- seccion1 -->
	<div class="seccionUno col-md-6 col-md-pull-1 col-md-offset-1" id="seccionUno">
		<h1 class="text-primary page-header" id="sobreNosotros">Nosotros</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae enim quis dolor sollicitudin consectetur id ut dui. Phasellus sit amet neque semper, lacinia metus sagittis, scelerisque mi. Pellentesque faucibus mollis quam a dapibus. Maecenas sollicitudin malesuada augue vel tincidunt. Etiam nec odio sed lectus molestie ullamcorper et ac felis. Quisque convallis pellentesque urna, et eleifend tellus ultricies eu. Pellentesque elementum diam non tortor dictum, nec porttitor leo suscipit. Nam condimentum lectus tortor, sed pellentesque dolor vulputate nec. Nam vitae mollis tellus. Quisque eget nulla vitae eros malesuada vulputate.
		</p>

		<p>
		Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut aliquet nisi et nisi cursus congue. Donec luctus nulla augue, at pretium quam blandit ac. Donec condimentum cursus ante eget dictum. Integer id facilisis quam. Donec et tellus ut lectus aliquet auctor non et ligula. Suspendisse quis gravida diam. Praesent ac eros a risus rhoncus maximus vitae quis leo. Nulla mauris nulla, tempus a nisi vel, molestie aliquam metus. Pellentesque pharetra turpis elit, a vulputate metus rhoncus et. Aenean eleifend fermentum sapien, vel vestibulum tellus iaculis vitae. Praesent aliquet, diam ut porttitor viverra, dui nisl euismod urna, sed pretium nisi tellus eu turpis. Cras nibh nulla, mollis vitae condimentum eget, semper in mauris.		
		</p>
		
		<p>
		Praesent consequat sollicitudin gravida. Phasellus pharetra tempor lectus, a malesuada lorem finibus eget. Quisque iaculis, arcu nec interdum semper, ligula arcu fermentum odio, at venenatis massa ex ut odio. Vivamus porttitor leo sed nisi egestas tempus. Fusce hendrerit tempor nunc, in blandit sapien. Vivamus commodo dolor a nunc feugiat, vitae imperdiet augue tempor. Donec eget erat velit. Aliquam ullamcorper sem vestibulum eros aliquet sodales. Sed ut semper odio, sed consectetur tellus. In vel vestibulum ante. Duis fringilla nisi elit, a hendrerit ex ultricies vel.
		</p>

		<p>
		Nulla condimentum erat in vulputate sollicitudin. Fusce sollicitudin leo libero, non volutpat sapien semper eget. Donec non massa quam. Nulla ac augue nunc. Aliquam rutrum vehicula dignissim. Donec sollicitudin eleifend porttitor. Donec dapibus viverra libero, ut facilisis tellus volutpat eu. Nam metus ante, blandit eget sem ac, pulvinar pellentesque dolor. Cras sagittis dolor sit amet augue laoreet, vel feugiat erat finibus. Nullam nec posuere mi. Vestibulum ut sodales leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pulvinar ante ut justo eleifend, in ornare risus gravida. Nullam ac felis nulla. Sed tincidunt libero vitae pellentesque volutpat.
			
		</p>	
	</div>


	<!-- seccion2 -->
	<!-- ok la seccion1 la estoy empujando 1 columna,por eso coloco 5 columnas a continuacion
	 para que sumen 12 columnas  -->
	<div class="seccionDos col-md-5 " id="seccionDos">
		<h1 class="text-primary page-header" id="valores">Valores</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae enim quis dolor sollicitudin consectetur id ut dui. Phasellus sit amet neque semper, lacinia metus sagittis, scelerisque mi. Pellentesque faucibus mollis quam a dapibus. Maecenas sollicitudin malesuada augue vel tincidunt. Etiam nec odio sed lectus molestie ullamcorper et ac felis. Quisque convallis pellentesque urna, et eleifend tellus ultricies eu. Pellentesque elementum diam non tortor dictum, nec porttitor leo suscipit. Nam condimentum lectus tortor, sed pellentesque dolor vulputate nec. Nam vitae mollis tellus. Quisque eget nulla vitae eros malesuada vulputate.
		</p>

		<p>
		Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut aliquet nisi et nisi cursus congue. Donec luctus nulla augue, at pretium quam blandit ac. Donec condimentum cursus ante eget dictum. Integer id facilisis quam. Donec et tellus ut lectus aliquet auctor non et ligula. Suspendisse quis gravida diam. Praesent ac eros a risus rhoncus maximus vitae quis leo. Nulla mauris nulla, tempus a nisi vel, molestie aliquam metus. Pellentesque pharetra turpis elit, a vulputate metus rhoncus et. Aenean eleifend fermentum sapien, vel vestibulum tellus iaculis vitae. Praesent aliquet, diam ut porttitor viverra, dui nisl euismod urna, sed pretium nisi tellus eu turpis. Cras nibh nulla, mollis vitae condimentum eget, semper in mauris.		
		</p>
		
		<p>
		Praesent consequat sollicitudin gravida. Phasellus pharetra tempor lectus, a malesuada lorem finibus eget. Quisque iaculis, arcu nec interdum semper, ligula arcu fermentum odio, at venenatis massa ex ut odio. Vivamus porttitor leo sed nisi egestas tempus. Fusce hendrerit tempor nunc, in blandit sapien. Vivamus commodo dolor a nunc feugiat, vitae imperdiet augue tempor. Donec eget erat velit. Aliquam ullamcorper sem vestibulum eros aliquet sodales. Sed ut semper odio, sed consectetur tellus. In vel vestibulum ante. Duis fringilla nisi elit, a hendrerit ex ultricies vel.
		</p>
		
		<p>
		Nulla condimentum erat in vulputate sollicitudin. Fusce sollicitudin leo libero, non volutpat sapien semper eget. Donec non massa quam. Nulla ac augue nunc. Aliquam rutrum vehicula dignissim. Donec sollicitudin eleifend porttitor. Donec dapibus viverra libero, ut facilisis tellus volutpat eu. Nam metus ante, blandit eget sem ac, pulvinar pellentesque dolor. Cras sagittis dolor sit amet augue laoreet, vel feugiat erat finibus. Nullam nec posuere mi. Vestibulum ut sodales leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pulvinar ante ut justo eleifend, in ornare risus gravida. Nullam ac felis nulla. Sed tincidunt libero vitae pellentesque volutpat.
			
		</p>	
	</div>

	<!-- seccion3 -->	
	<div  class="seccionTres col-md-12" id="seccionTres">
		<h1 class="page-header text-center text-primary" id="expertos">Expertos</h1>
		<div class="col-md-4">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/expertos1.jpg" class="img-responsive img-circle" alt="">
			<h2>Carlos Chacon </h2>
			<p>Bla bla bla bla</p>
			<p>Bla bla bla bla</p>
			<p>Bla bla bla bla</p>
		</div>

		<div class="col-md-4">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/expertos2.jpg" class="img-responsive img-circle" alt="">
			<h2>Pedro Ramirez </h2>
			<p>Algo algo algo</p>
			<p>Algo algo algo</p>
			<p>Algo algo algo</p>
		</div>

		<div class="col-md-4">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/expertos3.jpg" class="img-responsive img-circle" alt="">
			<h2>Jose Mendoza </h2>
			<p>Aja aja aja</p>
			<p>Aja aja aja</p>
			<p>Aja aja aja</p>
		</div>


		
	</div>

	<!-- seccion4 -->	
	<div class="seccionCuatro col-md-6 col-md-offset-3" id="seccionCuatro">
		<div class="col-md-12">
  			<h1 class="page-header text-center text-primary" id="contacto">Contacto</h1>
		</div>
		<form action=""post">			

			<div class="form-group col-md-12">
				
				<div class="col-md-6">
					<input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre">
				</div>

				<div class="col-md-6">					
					<input type="text" name="apellido" placeholder="Apellido" class="form-control" id="apellido">
				</div>				
				
			</div>

			<div class="form-group col-md-12">
				<div class="col-md-12">
					<input type="text" name="email" placeholder="Email" class="form-control" id="email">
				</div>

			</div>

			<div class="form-group col-md-12">
				<div class="col-md-12">
					<input type="text" name="telefono" placeholder="Telefóno" class="form-control" id="telefono">
				</div>

			</div>

			<div class="form-group col-md-12">
				<div class="col-md-12">
					<textarea name="mensaje" placeholder="Mensaje" class="form-control" id="mensaje" ></textarea>
				</div>

			</div>		


			<div class="form-group col-md-12">
				<div class="col-md-12">
					<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Enviar</button>
					<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
			    </div>

			</div>

			
		</form>	


	</div>

	<!-- fin contenido -->

<?php get_footer(); ?>
