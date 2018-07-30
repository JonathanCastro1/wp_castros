<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_Castro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- bootstrap estilos importante copiar la carpeta fonts en nuestro proyecto
	para poder usar glipicon etc -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/styles_footer.css">	

	<!-- font awezone estilos, copiar la carpeta webfonts en tu proyecto -->
 	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/fontawesome-all.css">	
	

	<?php wp_head(); ?>
	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'algo' ); ?></a>

	<header>
		 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right"> 

                    <li>
                         <a class="navbar-brand fas fa-home" href="#home">Home</a>          
                    </li>

                    <li>
                         <a class="navbar-brand fas fa-briefcase" href="#sobreNosotros">Sobre Nosotros</a>          
                    </li>

                    <li>
                         <a class="navbar-brand fas fa-user-tie" href="#expertos">Capital Humano</a>          
                    </li>


                     <li>
                         <a class="navbar-brand fas fa-envelope" href="#contacto">Contacto</a>          
                    </li>                                      
                
                </ul>           

            </div>
            <!-- /.navbar-collapse -->

           
					
        </div>
        <!-- /.container -->
    </nav>
	<!-- fin navbar -->
		
	</header><!-- /header -->

<!-- 	<div id="content" class="site-content"> -->
