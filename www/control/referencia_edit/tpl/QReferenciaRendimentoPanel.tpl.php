<div class="panel <?=($_CONTROL->objReferenciaRendimento->Molde)?'panel-default':'panel-danger';?>">
	<div class="panel-heading">
		<div class="panel-title">PESO: <?=$_CONTROL->GetTitle(); ?></div>
	</div>
	<div class="panel-body">
		<div class="row marginBottom20">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php $_CONTROL->lstMolde->RenderWithName(); ?>
			</div>
		</div>			
		<div class="row marginBottom20">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php $_CONTROL->lstTecido->RenderWithName(); ?>
			</div>
		</div>		
		<div class="row marginBottom20">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php $_CONTROL->txtComprimento->RenderWithName(); ?>
			</div>
		</div>
		<div class="row marginBottom20">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php $_CONTROL->txtPecas->RenderWithName(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<?php $_CONTROL->btnSave->Render(); ?>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<?php $_CONTROL->btnDelete->Render(); ?>
			</div>
		</div>
	</div>
</div>