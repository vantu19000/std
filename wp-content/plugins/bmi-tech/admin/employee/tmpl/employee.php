<?php
//echo "<pre>";
//print_r($data);
//echo "</pre>";
//die;

$count = 4;
if (is_array($data->params->data)){
    $count = count($data->params->data);
    if ($count < 4){
        $count = 4;
    }
}

?>

<table class="form-table">

	<tbody>

<!--
    <tr>
        <th scope="row"><label for="hotline">Tiêu đề</label></th>
        <td>
            <input name="data[params][title]" type="text" value="<?= $data->params->title ?>" class="regular-text">
        </td>
    </tr>

    <tr>
        <th scope="row"><label for="hotline">Mô tả ngắn</label></th>
        <td>
            <textarea rows="7" name="data[params][description]" class="regular-text"><?= $data->params->description ?></textarea>
        </td>
    </tr>
-->


	<?php for ($i = 0; $i < $count; $i ++): ?>

    <?php
    if (isset($data->params->data[$i])){
        $value = $data->params->data[$i];
    }else {
        $value = (object)array();
    }
    ?>

	<tr>
		<th scope="row"><label for="hotline">Nhân viên <?= $i + 1 ?></label></th>
		<td>
			<input name="data[params][data][<?= $i ?>][name]" type="text" id="name<?= $i ?>" value="<?= $value->name ?>" class="regular-text">
		</td>
	</tr>

	<tr>
		<th scope="row"><label for="position<?= $i ?>">Vị trí</label></th>
		<td>
			<input name="data[params][data][<?= $i ?>][position]" type="text" id="position<?= $i ?>" value="<?= $value->position ?>" class="regular-text">
		</td>
	</tr>

	<tr>
		<th scope="row"><label for="position<?= $i ?>">Mobile</label></th>
		<td>
			<input name="data[params][data][<?= $i ?>][mobile]" type="text" value="<?= $value->mobile ?>" class="regular-text" required>
		</td>
	</tr>

<!--
	<tr>
		<th scope="row"><label for="sumary<?= $i ?>">Mô tả ngắn</label></th>
		<td>
			<textarea name="data[params][data][<?= $i ?>][sumary]" id="sumary<?= $i ?>" class="regular-text"><?= $value->sumary ?></textarea>
		</td>
	</tr>
-->
	<tr>
		<th scope="row"><label for="url<?= $i ?>">Ảnh đại diện</label></th>
		<td>
			<input name="data[params][data][<?= $i ?>][url]" type="text" id="url<?= $i ?>" value="<?= $value->url ?>" readonly class="regular-text">
			<input class="upload_image_button button button-primary" type="button" value="Chọn ảnh" index="<?= $i ?>" />
		</td>
	</tr>

	<?php endfor; ?>


	</tbody>
</table>

<script>
    jQuery(document).ready(function($){

        var mediaUploader;

        $('.upload_image_button').click(function(e) {

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

                if (typeof attachment.sizes.ABOUT_US_AVATAR !== "undefined"){
                    url = attachment.sizes.ABOUT_US_AVATAR.url;
                }

                $('#url'+index).val(url);

            });
            mediaUploader.open();
        });

    });
</script>