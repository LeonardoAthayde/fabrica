<?php
	// This is the HTML template include file (.tpl.php) for the flowchart_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Flowchart') . ' - ' . $this->mctFlowchart->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctFlowchart->TitleVerb); ?></h2>
		<h1><?php _t('Flowchart')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->lstReference->RenderWithName(); ?>

		<?php $this->txtOrder->RenderWithName(); ?>

		<?php $this->lstActions->RenderWithName(); ?>

		<?php $this->lstMachine->RenderWithName(); ?>

		<?php $this->txtTime->RenderWithName(); ?>

		<?php $this->lstFlowchartOps->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>