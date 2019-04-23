<?php
//echo "<pre>";
//print_r($data);
//echo "</pre>";
//die;

$count = 1;
if (is_array($data->params->data)){
	$count = count($data->params->data);
}

//echo "<pre>";
//print_r($data->params->data);die;

?>

<table class="form-table">

	<tbody>

	<tr>
		<th scope="row"></th>
		<td>
			<button type="button" id="addbtn" class="button button-primary"><span class="dashicons dashicons-plus"></span> Thêm</button>
		</td>
	</tr>

	<?php for ($i = 0; $i < $count; $i ++): ?>

		<?php
		if (isset($data->params->data[$i])){
			$value = $data->params->data[$i];
		}else {
			$value = (object)array();
		}
		?>


		<tr class="slider">
			<th scope="row"><label for="url<?= $i ?>">Ảnh slide</label></th>
			<td>
				<input name="data[params][data][][url]" type="text" id="url<?= $i ?>" value="<?= $value->url ?>" readonly class="regular-text">
				<input class="upload_image_button button button-primary" type="button" value="Chọn ảnh" index="<?= $i ?>" />
			</td>
		</tr>

	<?php endfor; ?>

	<tr class="sliderclone" style="display: none">
		<th scope="row"><label for="url">Ảnh slide</label></th>
		<td>
			<input name="data[params][data][][url]" type="text" id="url" readonly class="regular-text">

			<input class="upload_image_button button button-primary" type="button" value="Chọn ảnh" index="" />
		</td>
	</tr>


	</tbody>
</table>

<script>
    jQuery(document).ready(function($){

        jQuery("#addbtn").click(function () {
            var clone = jQuery( ".sliderclone" ).eq(0).clone();
            console.log(clone);
            clone.attr('class', 'slider');
            clone.show();
            clone.insertAfter(".slider:last");
        })


        var mediaUploader;

        $('.upload_image_button').live('click', function(e) {

            var index = $(this).attr('index');

            e.preventDefault();

            if (mediaUploader) {
                // mediaUploader.open();
                // return;
            }
            // Extend the wp.media object
            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Chọn Ảnh',
                button: {
                    text: 'Chọn Ảnh'
                }, multiple: false });

            // When a file is selected, grab the URL and set it as the text field's value
            mediaUploader.on('select', function() {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                console.log(attachment);
                var url = attachment.url;
                console.log(url);

                if (typeof attachment.sizes.home_slider !== "undefined"){
                    url = attachment.sizes.home_slider.url;
                }

                // $('#url'+index).val(url);
                $('#url'+index).val(url);

            });
            mediaUploader.open();
        });

    });
</script>