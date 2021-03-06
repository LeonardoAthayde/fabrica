<?php
	// This is the HTML template include file (.tpl.php) for referenciaEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->txtNome->RenderWithName(); ?>

		<?php $_CONTROL->lstReferenciaCategoria->RenderWithName(); ?>

		<?php $_CONTROL->txtModelo->RenderWithName(); ?>

		<?php $_CONTROL->lstTecido->RenderWithName(); ?>

		<?php $_CONTROL->lstColecaos->RenderWithName(true, "Rows=7"); ?>

		<?php $_CONTROL->lstCors->RenderWithName(true, "Rows=7"); ?>

		<?php $_CONTROL->lstReferenciaRendimentosAsUniao->RenderWithName(true, "Rows=7"); ?>

		<?php $_CONTROL->lstTamanhos->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
