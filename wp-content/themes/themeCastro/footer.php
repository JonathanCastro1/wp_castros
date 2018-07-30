<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_Castro
 */

?>

<?php wp_footer(); ?>

	<div class="footer  col-md-12  text-center">
		<footer>@Jonathan Castro All right reserved</footer>
		
	</div>


  <!-- en el calendario es importante cargar primero jquery y moment, si no hay problemas -->
   <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>

    
   <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>  


</body>
</html>
