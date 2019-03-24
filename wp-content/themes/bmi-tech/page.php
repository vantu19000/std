<?php get_header(); ?>

<!--Breaadcrumb hihi-->

<nav class="breadcrumb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">

                <!-- Heading -->
                <h5 class="breadcrumb-heading">
                    <?php the_title(); ?>
                </h5>

            </div>
            <div class="col-auto">

                <!-- Breadcrumb -->
                <span class="breadcrumb-item">
          <a href="<?= get_site_url() ?>">Home</a>
        </span>
                <span class="breadcrumb-item active"> <?php the_title(); ?>
        </span>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</nav>



    <section class="section pb-0">

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

    <section class="section pb-0">

    </section>



<?php
get_footer();
?>