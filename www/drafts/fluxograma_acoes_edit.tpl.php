<?php
	// This is the HTML template include file (.tpl.php) for the fluxograma_acoes_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('FluxogramaAcoes') . ' - ' . $this->mctFluxogramaAcoes->TitleVerb;
	//require(__INCLUDES__ . '/header.inc.php');
	require __DOCROOT__.'/tpl/header.inc.php';
?>

	<?php //$this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctFluxogramaAcoes->TitleVerb); ?></h2>
		<h1><?php _t('FluxogramaAcoes')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->txtNome->RenderWithName(); ?>

		<?php $this->lstMaquina->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php //$this->RenderEnd() ?>	

<?php //require(__INCLUDES__ .'/footer.inc.php'); ?>
<?php require __DOCROOT__.'/tpl/footer.inc.php'; ?>