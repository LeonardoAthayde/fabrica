<?php
	// This is the HTML template include file (.tpl.php) for referencia_rendimentoEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->lstMolde->RenderWithName(); ?>

		<?php $_CONTROL->lstReferencia->RenderWithName(); ?>

		<?php $_CONTROL->txtComprimento->RenderWithName(); ?>

		<?php $_CONTROL->txtPecas->RenderWithName(); ?>

		<?php $_CONTROL->txtPeso->RenderWithName(); ?>

		<?php $_CONTROL->txtPreco->RenderWithName(); ?>

		<?php $_CONTROL->lstTecido->RenderWithName(); ?>

		<?php $_CONTROL->lstReferenciasAsUniao->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
