<?php require 'header.inc.php'; ?>
<div class="row defaultwaiticon">
	<div class="col-lg-12">
		<?php $this->objDefaultWaitIcon->Render(); ?>
	</div>
</div>

<?php $this->pnlComandoSearch->Render(); ?>
<?php $this->pnlComando->Render(); ?>
<?php $this->pnlComandoGrade->Render(); ?>

<?php require 'footer.inc.php'; ?>