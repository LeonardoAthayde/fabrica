<?php require 'header.inc.php'; ?>

 <div class="input-group marginBottom20">
	<?php $this->txtSearchFlowchart->Render(); ?>
	<div class="input-group-btn">
		<a  href="<?=$this->btnSearchFlowchart->RenderAsHref(null, false); ?>" class="btn btn-lg btn-default">Pesquisar</a>					
	</div>	 
 </div>

<div class="row marginBottom20">
	<div class="col-lg-4">
		<?php $this->lstFluxogramaAcoes->Render(); ?>
	</div>
	<div class="col-lg-4">
		<?php $this->lstMaquina->Render(); ?>
	</div>
	<div class="col-lg-3">
		<?php $this->txtTempo->Render(); ?>
	</div>	
	<div class="col-lg-1">
		<?php $this->btnAdd->Render(); ?>
	</div>	
</div>

<?php $this->dtgFlowchart->Render(); ?>

<?php require 'footer.inc.php'; ?>