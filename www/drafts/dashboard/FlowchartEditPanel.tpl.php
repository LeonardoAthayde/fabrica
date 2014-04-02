<?php
	// This is the HTML template include file (.tpl.php) for flowchartEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->lstReference->RenderWithName(); ?>

		<?php $_CONTROL->txtOrder->RenderWithName(); ?>

		<?php $_CONTROL->lstActions->RenderWithName(); ?>

		<?php $_CONTROL->lstMachine->RenderWithName(); ?>

		<?php $_CONTROL->txtTime->RenderWithName(); ?>

		<?php $_CONTROL->lstFlowchartOps->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
