<?php
	// This is the HTML template include file (.tpl.php) for costureira_producaoEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->lstCostureira->RenderWithName(); ?>

		<?php $_CONTROL->lstBalancoAcoes->RenderWithName(); ?>

		<?php $_CONTROL->txtQuantidadePlanejada->RenderWithName(); ?>

		<?php $_CONTROL->txtQuantidadeRealizada->RenderWithName(); ?>

		<?php $_CONTROL->txtQuantidadeEstocado->RenderWithName(); ?>

		<?php $_CONTROL->txtTempoPrevisto->RenderWithName(); ?>

		<?php $_CONTROL->chkConcluido->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
