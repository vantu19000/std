<table class="form-table">

	<tbody>


	<tr class="addcategory" style="">
		<th><label for="hotline">Mục</label></th>
		<td>
			<select name="cat_id">
                <option value="">Chọn danh mục</option>
                <?php foreach ($terms AS $value): ?>
                <option value="<?= $value->term_id ?>"><?= $value->name ?></option>
                <?php endforeach; ?>
            </select>
		</td>
	</tr>


	</tbody>

</table>