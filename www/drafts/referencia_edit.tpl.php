<?php
	// This is the HTML template include file (.tpl.php) for the referencia_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Referencia') . ' - ' . $this->mctReferencia->TitleVerb;
	//require(__INCLUDES__ . '/header.inc.php');
	require __DOCROOT__.'/tpl/header.inc.php';
?>

	<?php //$this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctReferencia->TitleVerb); ?></h2>
		<h1><?php _t('Referencia')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->txtNome->RenderWithName(); ?>

		<?php $this->lstReferenciaCategoria->RenderWithName(); ?>

		<?php $this->txtModelo->RenderWithName(); ?>

		<?php $this->lstTecido->RenderWithName(); ?>

		<?php $this->lstColecaos->RenderWithName(true, "Rows=7"); ?>

		<?php $this->lstCors->RenderWithName(true, "Rows=7"); ?>

		<?php $this->lstReferenciaRendimentosAsUniao->RenderWithName(true, "Rows=7"); ?>

		<?php $this->lstTamanhos->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php //$this->RenderEnd() ?>	

<?php //require(__INCLUDES__ .'/footer.inc.php'); ?>
<?php require __DOCROOT__.'/tpl/footer.inc.php'; ?>