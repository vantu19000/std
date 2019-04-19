<?php
$terms = get_terms( array(
    'taxonomy' => 'product_category',
    'hide_empty' => false,
) );

$dbData = $data->params->term_id;

//echo "<pre>";
//print_r($dbData);
//exit;

?>


<table class="form-table">

    <tbody>

    <!--
    <tr>
        <th></th>
        <td>
            <input type="button" name="submit" id="addnews" class="button button-primary" value="Thêm">
        </td>
    </tr>
    <tr class="needclone" style="display: none;">
        <th scope="row"><label for="hotline">Danh mục</label></th>
        <td>
            <select name="data[params][term_id][]" class="selectcategory" style="width: 100%;">
                <option value="">Chọn danh mục</option>
                <?php foreach ($terms AS $value): ?>
                <option value="<?= $value->term_id ?>" slug="<?= $value->slug ?>" term_name="<?= $value->name ?>"><?= $value->name ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    -->


    <?php if (is_array($dbData) && count($dbData) > 0): ?>
    <?php foreach ($dbData AS $val): ?>

    <tr>
        <th scope="row"><label for="hotline">Danh mục</label></th>
        <td>
            <select name="data[params][term_id][]" class="selectcategory" style="width: 100%;">
                <option value="">Chọn danh mục</option>
                <?php foreach ($terms AS $value): ?>
                    <option <?php if($value->term_id == $val){echo 'selected';} ?>
                            value="<?= $value->term_id ?>" slug="<?= $value->slug ?>" term_name="<?= $value->name ?>"><?= $value->name ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>

    <?php endforeach; ?>

    <?php else: ?>
    <tr>
        <th scope="row"><label for="hotline">Danh mục</label></th>
        <td>
            <select name="data[params][term_id][]" class="selectcategory" style="width: 100%;">
                <option value="">Chọn danh mục</option>
                <?php foreach ($terms AS $value): ?>
                    <option value="<?= $value->term_id ?>" slug="<?= $value->slug ?>" term_name="<?= $value->name ?>"><?= $value->name ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
        <tr>
            <th scope="row"><label for="hotline">Danh mục</label></th>
            <td>
                <select name="data[params][term_id][]" class="selectcategory" style="width: 100%;">
                    <option value="">Chọn danh mục</option>
                    <?php foreach ($terms AS $value): ?>
                        <option value="<?= $value->term_id ?>" slug="<?= $value->slug ?>" term_name="<?= $value->name ?>"><?= $value->name ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row"><label for="hotline">Danh mục</label></th>
            <td>
                <select name="data[params][term_id][]" class="selectcategory" style="width: 100%;">
                    <option value="">Chọn danh mục</option>
                    <?php foreach ($terms AS $value): ?>
                        <option value="<?= $value->term_id ?>" slug="<?= $value->slug ?>" term_name="<?= $value->name ?>"><?= $value->name ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
    <?php endif; ?>


    </tbody>
</table>


<script>
    $("#addnews").click(function () {
        var needClone = $(".needclone").clone();
        needClone.removeClass('needclone');
        $(".needclone").after(needClone);
    })

    $(".selectcategory").change(function () {
        var value = $(this).val();
        var slug = $('option:selected', this).attr('slug');
        var termName = $('option:selected', this).attr('term_name');
    })

</script>