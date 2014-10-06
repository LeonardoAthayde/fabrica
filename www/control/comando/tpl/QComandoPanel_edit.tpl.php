<div class="row marginBottom20">
	<div class="col-lg-2 col-md-2 col-sm-2"><?php $_CONTROL->btnCancel->Render(); ?></div>
	<div class="col-lg-1 col-md-1 col-sm-1"><?php $_CONTROL->btnPrint->Render(); ?></div>
	<div class="col-lg-3 col-md-3 col-sm-3"><?php $_CONTROL->txtComando->Render(); ?></div>
	<div class="col-lg-3 col-md-3 col-sm-3"><input type="button" data-toggle="modal" data-target=".peca-modal" class="btn btn-default btn-lg width100" value="ADICIONAR PEÇA" ></div>
	<div class="col-lg-3 col-md-3 col-sm-3"><input type="button" data-toggle="modal" data-target=".risco-modal" class="btn btn-default btn-lg width100" value="ADICIONAR RISCO" ></div>
</div>

<div id="peca-modal" class="modal fade peca-modal">
	<div class="modal-dialog">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">ADICIONAR/EDITAR PEÇA</div>
			</div>
			<div class="panel-body">
				<?php $_CONTROL->pnlPeca->Render(); ?>
			</div>
		</div>
	</div>
</div>

<div id="risco-modal" class="modal fade risco-modal">
	<div class="modal-dialog">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">ADICIONAR/EDITAR RISCO</div>
			</div>
			<div class="panel-body">
				<?php $_CONTROL->pnlRisco->Render(); ?>
			</div>
		</div>
	</div>
</div>		