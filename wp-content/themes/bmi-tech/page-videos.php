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
//	'posts_per_page'=>'3'
);

$video = new WP_Query($args);

?>

    <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
        <div class="row">

            <div class="col-md-12" id="large-video">
                <img src="<?= get_template_directory_uri() . '/assets/images/bg/large-videos.png'; ?>" alt="">
                <div style="position:absolute;text-align: center;top: 35%;width: 100%;">
                    <img id="play" style="display: block;margin-left: auto;margin-right: auto;cursor: pointer" onclick="playYoutube()"
                            src="<?= get_template_directory_uri() . '/assets/images/icon/video.png'; ?>" alt="video thumb">
                </div>
            </div>

        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-12">
                <div style="height: 52px;padding: 10px;margin-bottom: 15px;background: #0463be">
                    <div class="row">
                        <div class="col-8 col-md-8">
                            <h6 style="color: #fff;" class="company-duan-title">VIDEO</h6>
                        </div>
                        <div class="col-4 col-md-4">
                            <img src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre2.png'; ?>" style="float: right; width: 70px; height: 33px;" usemap="#nexprev1">
                            <map name="nexprev1">
                                <area href="javascript:void(0)" coords="1,2,32,32" shape="rect" id="nextpro">
                                <area href="javascript:void(0)" coords="34,0,66,32" shape="rect" id="prepro">
                            </map>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row lazy" style="margin-top: 20px;">
            <?php $i = 0; $defaultYoutube = ''; ?>
	        <?php while ($video->have_posts()) : $video->the_post(); $i++ ?>
            <?php
                $youtubeUrl = json_decode(get_post_meta( get_the_ID(), '_meta_youtube_url', true ));
                parse_str( parse_url( $youtubeUrl, PHP_URL_QUERY ), $url );
                if ($i == 1){
                    $defaultYoutube = $url['v'];
                }
            ?>
            <div class="col-12 col-md-12">
                <img style="width: 100%;height: 240px;"
                        src="<?= get_the_post_thumbnail_url() ?>" alt="">
                <div style="position:absolute;text-align: center;top: 30%;width: 100%;">
                    <img class="play" style="display: block;margin-left: auto;margin-right: auto;cursor: pointer;width: 80px;height: 80px;" onclick="playYoutube('<?= $url['v'] ?>')"
                         src="<?= get_template_directory_uri() . '/assets/images/icon/video.png'; ?>" alt="">
                </div>
                <h5 class="video-title text-center"><?= get_the_title() ?></h5>
            </div>
	        <?php endwhile; wp_reset_postdata(); ?>
        </div>



    </div>


    <script>


        function htmlYoutube(id){
            var url = 'https://www.youtube.com/embed/' + id + '?autoplay=1';
            var html = '<iframe width="100%" height="<?= $videoHeight ?>" src="'+url+'" frameborder="0"\n' +
                '                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"\n' +
                '                        allowfullscreen></iframe>';
            var defaultHtml = '<img id="play" style="display: block;margin-left: auto;margin-right: auto;cursor: pointer"\n'+
                '                            src="<?= get_template_directory_uri() . "/assets/images/icon/video.png"; ?>" alt="">';
            return html;
        }

        function playYoutube(id = '<?= ($defaultYoutube)?$defaultYoutube:"RhkgEgPqGc4" ?>'){
            var html = htmlYoutube(id);
            $('#large-video').html(html);
        }

        jQuery(document).ready(function ($) {
            $('#play').click(function () {
                // $('#large-video').html(html);
            });
        })
    </script>


    <script>
        $('.lazy').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }

            ]
        });
        $('#nextpro').click(function () {
            $('.lazy').slick('slickNext');
        })
        $('#prepro').click(function () {
            $('.lazy').slick('slickPrev');
        })

    </script>




<?php
get_footer();
?>