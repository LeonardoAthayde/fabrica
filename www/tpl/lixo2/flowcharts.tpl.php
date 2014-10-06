<?php require 'header.inc.php'; ?>

 <div class="input-group marginBottom20">
	<?php $this->txtSearchFlowchart->Render(); ?>
	 
	 
	<div class="input-group-btn">
		<a  href="<?=$this->btnSearchFlowchart->RenderAsHref(null, false); ?>" class="btn btn-lg btn-default">Pesquisar</a>					
	</div>	 
	<?php //$this->btnSearchFlowchart->Render(); ?>
 </div>

<?php $this->pnlFlowchart->Render(); ?>

<?php require 'footer.inc.php'; ?>