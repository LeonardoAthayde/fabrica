<?php require 'header.inc.php'; ?>

 <div class="input-group marginBottom20">
	<?php $this->txtSearchFlowchart->Render(); ?>
	<div class="input-group-btn">
		<a  href="<?=$this->pxySearchFlowchart->RenderAsHref(null, false); ?>" class="btn btn-lg btn-default">Pesquisar</a>					
	</div>	 
 </div>

	<div class="row">
		<div class="col-lg-12">
			<?php $this->objDefaultWaitIcon->Render(); ?>
		</div>
	</div>	

<div class="marginBottom20 custom-group-form">
	<?php $this->lstProductionOrder->Render(); ?>
	<?php $this->lstColor->Render(); ?>
	<?php $this->lstSize->Render(); ?>
	<?php $this->txtAmount->Render(); ?>
</div>	

<div class="marginBottom20 custom-group-form2">
	<?php $this->txtProductionOrder->Render(); ?>
	<?php $this->btnAdd->Render(); ?>
	<div class="clearfix"></div>
</div>

<?php $this->dtgEntradaPecas->Render(); ?>

<?php require 'footer.inc.php'; ?>