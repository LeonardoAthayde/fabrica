<?php require 'header.inc.php'; ?>
<div class="row">
		<div class="col-lg-12">
			<?php $this->objDefaultWaitIcon->Render(); ?>
		</div>
</div>
<div class="row marginBottom20">
	<div class="col-lg-6 col-md-6">
		<?php $this->txtSearchFlowchart->Render(); ?>
	</div>
	<div class="col-lg-1 col-md-1">
		<a  href="<?=$this->btnSearchFlowchart->RenderAsHref(null, false); ?>" class="width100 btn btn-lg btn-default"> <span class="glyphicon glyphicon-search"></span></a>
	</div>	
	<div class="col-lg-5 col-md-5">
		<?php $this->lstCor->Render(); ?>
	</div>	
</div>
<!--
 <div class="input-group marginBottom20">
	<?php //$this->txtSearchFlowchart->Render(); ?>
	<div class="input-group-btn">
		<a  href="<?php //$this->btnSearchFlowchart->RenderAsHref(null, false); ?>" class="btn btn-lg btn-default">Pesquisar</a>					
	</div>	 
 </div>
-->
<div class="row marginBottom20">
	<div class="col-lg-6 col-md-6">
		<?php $this->txtFluxogramaAcoes->Render(); ?>
	</div>
	<div class="col-lg-1 col-md-1">
		<?php $this->btnConfirm->Render(); ?>
	</div>
	<div class="col-lg-4 col-md-4">
		<?php $this->lstTempo->Render(); ?>
	</div>	
	<div class="col-lg-1 col-md-1">
		<?php $this->btnAdd->Render(); ?>
	</div>	
</div>

<?php $this->dtgFlowchart->Render(); ?>

<?php require 'footer.inc.php'; ?>