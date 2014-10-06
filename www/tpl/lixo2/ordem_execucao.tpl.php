<?php require 'header.inc.php'; ?>

<?php $this->pnlNewGrade->Render(); ?>
<?php $this->pnlSelectCostureira->Render(); ?>
<nav class=" navbar-fixed-bottom" role="navigation">
		<?php $this->btnConfirm->Render(); ?>
</nav>
<?php require 'footer.inc.php'; ?>