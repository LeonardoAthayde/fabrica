<?php	require __DOCROOT__.'/tpl/header.inc.php'; ?>
<div class="row defaultwaiticon">
	<div class="col-lg-12">
		<?php $this->objDefaultWaitIcon->Render(); ?>
	</div>
</div>
<!--
<div class="row marginBottom20">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php $this->lblId->RenderWithName(); ?>
	</div>
</div>-->
<div class="row marginBottom20">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php $this->txtNome->RenderWithName(); ?>
	</div>
</div>
<div class="row marginBottom20">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php $this->lstReferenciaCategoria->RenderWithName(); ?>
	</div>
</div>
<div class="row marginBottom20">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php $this->txtModelo->RenderWithName(); ?>
	</div>
</div>
<div class="row marginBottom20">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php $this->lstTecido->RenderWithName(); ?>
	</div>
</div>
<div class="row marginBottom20">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		<?php $this->lstCors->RenderWithName(true, "Rows=9"); ?>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		<?php $this->lstTamanhos->RenderWithName(true, "Rows=9"); ?>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		<?php $this->lstColecaos->RenderWithName(true, "Rows=9"); ?>
	</div>
</div>
<div class="row marginBottom20">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php $this->btnAddReferenciaRendimento->Render(); ?>
	</div>
</div>
<div class="row marginBottom20">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php $this->dtrReferenciaRendimento->Render(); ?>
	</div>
</div>
<div class="row marginBottom20">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">		
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>
</div>


<?php require __DOCROOT__.'/tpl/footer.inc.php'; ?>