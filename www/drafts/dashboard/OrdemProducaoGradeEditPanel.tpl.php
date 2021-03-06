<?php
	// This is the HTML template include file (.tpl.php) for ordem_producao_gradeEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->lstCor->RenderWithName(); ?>

		<?php $_CONTROL->lstTamanho->RenderWithName(); ?>

		<?php $_CONTROL->txtQuantidade->RenderWithName(); ?>

		<?php $_CONTROL->lblDate->RenderWithName(); ?>

		<?php $_CONTROL->lstOrdemProducao->RenderWithName(); ?>

		<?php $_CONTROL->lstBalancoPecas->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
