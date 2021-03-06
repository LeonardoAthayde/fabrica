<?php
	// This is the HTML template include file (.tpl.php) for the fluxograma_item_real_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('FluxogramaItemReal') . ' - ' . $this->mctFluxogramaItemReal->TitleVerb;
	//require(__INCLUDES__ . '/header.inc.php');
	require __DOCROOT__.'/tpl/header.inc.php';
?>

	<?php //$this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctFluxogramaItemReal->TitleVerb); ?></h2>
		<h1><?php _t('FluxogramaItemReal')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->txtReferencia->RenderWithName(); ?>

		<?php $this->txtAcao->RenderWithName(); ?>

		<?php $this->txtMaquina->RenderWithName(); ?>

		<?php $this->txtTempo->RenderWithName(); ?>

		<?php $this->txtProfundidade->RenderWithName(); ?>

		<?php $this->txtFluxogramaItemModeloId->RenderWithName(); ?>

		<?php $this->lstBalancoAcoes->RenderWithName(); ?>

		<?php $this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->RenderWithName(true, "Rows=7"); ?>

		<?php $this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php //$this->RenderEnd() ?>	

<?php //require(__INCLUDES__ .'/footer.inc.php'); ?>
<?php require __DOCROOT__.'/tpl/footer.inc.php'; ?>