<?php
	// This is the HTML template include file (.tpl.php) for the comando_grade_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('ComandoGrade') . ' - ' . $this->mctComandoGrade->TitleVerb;
	//require(__INCLUDES__ . '/header.inc.php');
	require __DOCROOT__.'/tpl/header.inc.php';
?>

	<?php //$this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctComandoGrade->TitleVerb); ?></h2>
		<h1><?php _t('ComandoGrade')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->lstReferencia->RenderWithName(); ?>

		<?php $this->lstTamanho->RenderWithName(); ?>

		<?php $this->lstComandoTecidoPeca->RenderWithName(); ?>

		<?php $this->txtQuantidadeRisco->RenderWithName(); ?>

		<?php $this->chkMeiaRisco->RenderWithName(); ?>

		<?php $this->txtQuantidadeReal->RenderWithName(); ?>

		<?php $this->txtPeso->RenderWithName(); ?>

		<?php $this->lstBalancoPecasAsOrdemProducaoGrade->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php //$this->RenderEnd() ?>	

<?php //require(__INCLUDES__ .'/footer.inc.php'); ?>
<?php require __DOCROOT__.'/tpl/footer.inc.php'; ?>