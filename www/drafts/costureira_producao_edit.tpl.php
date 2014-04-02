<?php
	// This is the HTML template include file (.tpl.php) for the costureira_producao_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('CostureiraProducao') . ' - ' . $this->mctCostureiraProducao->TitleVerb;
	//require(__INCLUDES__ . '/header.inc.php');
	require __DOCROOT__.'/tpl/header.inc.php';
?>

	<?php //$this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctCostureiraProducao->TitleVerb); ?></h2>
		<h1><?php _t('CostureiraProducao')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->lstCostureira->RenderWithName(); ?>

		<?php $this->lstBalancoAcoes->RenderWithName(); ?>

		<?php $this->txtQuantidadePlanejada->RenderWithName(); ?>

		<?php $this->txtQuantidadeRealizada->RenderWithName(); ?>

		<?php $this->txtQuantidadeEstocado->RenderWithName(); ?>

		<?php $this->txtTempoPrevisto->RenderWithName(); ?>

		<?php $this->chkConcluido->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php //$this->RenderEnd() ?>	

<?php //require(__INCLUDES__ .'/footer.inc.php'); ?>
<?php require __DOCROOT__.'/tpl/footer.inc.php'; ?>