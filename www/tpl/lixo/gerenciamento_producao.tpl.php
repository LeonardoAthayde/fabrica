<?php require 'header.inc.php'; ?>
	<ol class="breadcrumb">
		<li><a href="<?=__VIRTUAL_DIRECTORY__.'/costureira_producao_select.php'; ?>">Escolher Costureira</a></li>
		<li class="active">Gerenciar Produção</li>
	</ol>
	<!--<div class="row marginBottom20">
		<div class="col-lg-12">
			<?php //$this->txtBarCode->Render(); ?>
		</div>	
	</div>-->
	<div class="row">
		<div class="col-lg-6 col-md-6">
			<?php $this->pnlSeamstress->Render(); ?>
		</div>
		<div class="col-lg-6 col-md-6">
			<?php $this->pnlCreateCostureiraProdução->Render(); ?>
		</div>		
	</div>
<!--<input type="submit">-->
<?php require 'footer.inc.php'; ?>