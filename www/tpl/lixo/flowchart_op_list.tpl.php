<?php require 'header.inc.php'; ?>
<div class="input-group">       
	<?php $this->txtSearch->Render(); ?>
	<span class="input-group-btn">     
		<button class="btn btn-default" type="button" <?=$this->pxyFilter->RenderAsEvents('', false); ?>><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
	</span>	
</div>
<?php $this->dtgFlowchartOp->Render(); ?>
<?php require 'footer.inc.php'; ?>