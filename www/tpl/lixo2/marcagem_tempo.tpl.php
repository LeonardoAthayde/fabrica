<?php require 'header.inc.php'; ?>
<h3><?=$this->objCostureira->Nome; ?></h3>
<div class="row">
	<div class="col-lg-12">
		<?php $this->objDefaultWaitIcon->Render(); ?>
	</div>
</div>

<?php $this->dtrCostureiraProducao->Render(); ?>

<nav class="navbar-fixed-bottom" role="navigation">
		<?php $this->pnlProgressBar->Render(); ?>
</nav>

<?php require 'footer.inc.php'; ?>