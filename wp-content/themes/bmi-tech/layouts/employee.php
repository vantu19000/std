<?php
global $config;
$employee = $config->employee->params->data;

//echo "<pre>";
//print_r($employee);
//echo "</pre>";

?>

<?php if (is_array($employee)): ?>
<section class="section our-team" style="margin-top: 30px;">
	<div class="container">
		<div class="row">
			<?php for ($i = 0; $i < count($employee); $i ++): ?>
				<div class="col-md-3 text-center">
					<img src="<?= $employee[$i]->url ?>"/>
					<h6><?= $employee[$i]->position; ?></h6>
					<p><?= $employee[$i]->name ?></p>
					<p>Tel: <a href="tel:<?= $employee[$i]->mobile ?>"><?= $employee[$i]->mobile ?></a></p>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>
<?php endif; ?>