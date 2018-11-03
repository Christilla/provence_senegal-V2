<div class="row bg-light">
	<div class="col">
			<h1><?= $title?></h1>

			<?php echo $output; ?>
					<?php foreach($js_files as $file): ?>
						<script src="<?php echo $file; ?>"></script>
					<?php endforeach; ?>

	</div>
</div>