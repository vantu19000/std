<?php
/*
Template name: Trang Videos
*/

get_header();

$videoHeight = '550';
if (wp_is_mobile()){
    $videoHeight = '300';
}

$args = array(
	'post_type'=>'bmi_video',
	'orderby'=>'rand',
	'posts_per_page'=>'3'
);

$video = new WP_Query($args);

?>

    <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
        <div class="row">

            <div class="col-md-12" id="large-video">
                <img src="<?= get_template_directory_uri() . '/assets/images/bg/large-videos.png'; ?>" alt="">
                <div style="position:absolute;text-align: center;top: 35%;width: 100%;">
                    <img id="play" style="display: block;margin-left: auto;margin-right: auto;cursor: pointer"
                            src="<?= get_template_directory_uri() . '/assets/images/icon/video.png'; ?>" alt="">
                </div>
            </div>

        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-12">
                <div style="height: 52px;padding: 10px;margin-bottom: 15px;background: #0463be">
                    <div class="row">
                        <div class="col-8 col-md-8">
                            <h6 style="color: #fff;" class="company-duan-title">DỰ ÁN</h6>
                        </div>
                        <div class="col-4 col-md-4">
                            <img src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre2.png'; ?>" style="float: right; width: 70px; height: 33px;" usemap="#nexprev1">
                            <map name="nexprev1">
                                <area href="javascript:void(0)" coords="1,2,32,32" shape="rect">
                                <area href="javascript:void(0)" coords="34,0,66,32" shape="rect">
                            </map>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row" style="margin-top: 20px;">
	        <?php while ($video->have_posts()) : $video->the_post(); ?>
            <div class="col-6 col-md-4">
                <img style="width: 100%;height: 240px;"
                        src="<?= get_the_post_thumbnail_url() ?>" alt="">
                <div style="position:absolute;text-align: center;top: 30%;width: 100%;">
                    <img class="play" style="display: block;margin-left: auto;margin-right: auto;cursor: pointer;width: 80px;height: 80px;"
                         src="<?= get_template_directory_uri() . '/assets/images/icon/video.png'; ?>" alt="">
                </div>
                <h5 class="video-title text-center">Phun sơn chất</h5>
            </div>
	        <?php endwhile; wp_reset_postdata(); ?>
        </div>



    </div>


    <script>
        var url = 'https://www.youtube.com/embed/RhkgEgPqGc4';
        var html = '<iframe width="100%" height="<?= $videoHeight ?>" src="'+url+'" frameborder="0"\n' +
            '                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"\n' +
            '                        allowfullscreen></iframe>';
        var defaultHtml = '<img id="play" style="display: block;margin-left: auto;margin-right: auto;cursor: pointer"\n'+
'                            src="<?= get_template_directory_uri() . "/assets/images/icon/video.png"; ?>" alt="">';
        jQuery(document).ready(function ($) {
            $('#play').click(function () {
                $('#large-video').html(html);
            });
        })
    </script>




<?php
get_footer();
?>