<div class="panel-heading">
	<h3 class="panel-title">Remeter Produção</h3>
</div>
<div class="panel-body">
	<?php $_CONTROL->lstProductionOrder->RenderWithName(); ?>
	<?php $_CONTROL->lstProductOrderGrid->RenderWithName(); ?>
	<?php $_CONTROL->lstFlowChartItem->RenderWithName(); ?>
	<?php $_CONTROL->txtAmount->RenderWithName(); ?>
	<?php $_CONTROL->btnConfirm->Render(); ?>
</div>	