<?php
/*
Template name: Page Full
This templates add My account to the sidebar.
*/

get_header();

?>

	<!--Breaadcrumb hihi-->

    <section class="section" id="pages">

		<!-- Content -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
					?>
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->

	</section>


<?php
get_footer();
?>