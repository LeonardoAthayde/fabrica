<?php
	// This is the HTML template include file (.tpl.php) for comando_riscoEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->lstComando->RenderWithName(); ?>

		<?php $_CONTROL->txtReferencia->RenderWithName(); ?>

		<?php $_CONTROL->lstMolde->RenderWithName(); ?>

		<?php $_CONTROL->lstTamanho->RenderWithName(); ?>

		<?php $_CONTROL->txtQuantidadeRisco->RenderWithName(); ?>

		<?php $_CONTROL->lstBalancoPecasAsOrdemProducaoGrade->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
