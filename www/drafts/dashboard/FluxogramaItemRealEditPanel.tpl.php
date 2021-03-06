<?php
	// This is the HTML template include file (.tpl.php) for fluxograma_item_realEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->txtReferencia->RenderWithName(); ?>

		<?php $_CONTROL->txtAcao->RenderWithName(); ?>

		<?php $_CONTROL->txtMaquina->RenderWithName(); ?>

		<?php $_CONTROL->txtTempo->RenderWithName(); ?>

		<?php $_CONTROL->txtProfundidade->RenderWithName(); ?>

		<?php $_CONTROL->txtFluxogramaItemModeloId->RenderWithName(); ?>

		<?php $_CONTROL->lstBalancoAcoes->RenderWithName(); ?>

		<?php $_CONTROL->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->RenderWithName(true, "Rows=7"); ?>

		<?php $_CONTROL->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
