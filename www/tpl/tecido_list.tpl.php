<?php	require __DOCROOT__.'/tpl/header.inc.php'; ?>
<div class="row defaultwaiticon">
	<div class="col-lg-12">
		<?php $this->objDefaultWaitIcon->Render(); ?>
	</div>
</div>
<div class="row marginBottom20">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
		<p class="create">
			<a class="btn btn-default btn-lg width100" href="<?php _p(__VIRTUAL_DIRECTORY__ ) ?>/tecido_edit.php">NOVO TECIDO</a>
		</p>
	</div>
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
		<?php $this->txtPesquisar->Render(); ?>
	</div>
</div>	
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php $this->dtgTecidos->Render(); ?>
	</div>
</div>	
<?php require __DOCROOT__.'/tpl/footer.inc.php'; ?>