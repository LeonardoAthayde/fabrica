<?php require 'header.inc.php'; ?>

	<div class="row">
		<div class="col-lg-6">
			<?php $this->dtgToReleased->Render(); ?>
		</div>
		<div class="col-lg-6">
			<?php $this->dtgReleased->Render(); ?>
		</div>
	</div>
<?php require 'footer.inc.php'; ?>