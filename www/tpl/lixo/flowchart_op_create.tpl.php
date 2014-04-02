<?php require 'header.inc.php'; ?>

 <div class="container">
	<?php $this->txtProductionOrder->RenderWithName(); ?>
	 
	 <div>
		<?php $this->btnFlowChartAssn->Render(); ?>
		<?php $this->dlgFlowChartAssn->RenderWithName(); ?>
		<?php $this->btnFlowChartShow->Render(); ?>
		 <div id="FlowChartShow" class="collapse">
			<?php $this->dtgFlowchart->Render(); ?> 
		</div>
	</div>
	<div>
		<?php $this->dlgFlowChartGrid->Render(); ?>
		<?php $this->btnFlowChartGrid->Render(); ?>
		<?php $this->dtgFlowchartGrid->Render(); ?>
	</div>

	<?php $this->btnSave->Render(); ?>
 </div>

<?php require 'footer.inc.php'; ?>