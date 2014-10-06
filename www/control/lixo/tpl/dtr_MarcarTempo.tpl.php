<?php 
	$objCostureiraProducao = $_ITEM; 
	$strHeader = $objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->OrdemProducao->Referencia->Nome.' ('
		.$objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->Cor->Nome.' '
		.$objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->Tamanho->Valor.') '
		.'<b>('.$objCostureiraProducao->BalancoAcoes->FluxogramaItemReal->Acao.')</b>'; 
	
	$intTimeExecuted = 0;
	foreach (CostureiraTempo::LoadArrayByCostureiraProducaoId($objCostureiraProducao->Id) as $objCostureiraTempo)
		$intTimeExecuted+=$objCostureiraTempo->Tempo;
	
	$intPorcentagem = 100-($intTimeExecuted*100)/$objCostureiraProducao->TempoPrevisto;
	if($intPorcentagem > 60)
		$strColorBar = 'progress-bar-success';
	else if($intPorcentagem > 30)
		$strColorBar = 'progress-bar-info';
	else if($intPorcentagem > 15)
		$strColorBar = 'progress-bar-warning';
	else
		$strColorBar = 'progress-bar-danger';
	
	$intTempoRestante = $objCostureiraProducao->TempoPrevisto-$intTimeExecuted;
	if($intTempoRestante <= 0) $intTempoRestante = 0;
?>


<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading"><h3 class="panel-title"><?=$strHeader; ?></h3></div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="progress progress-striped" style="display: none;">
							<div class="progress-bar <?=$strColorBar; ?>" id="progressbar<?=$objCostureiraProducao->Id?>" role="progressbar" aria-valueseconds="<?=$intTempoRestante; ?>" aria-valuenow="<?=$intTimeExecuted?>" aria-valuemin="0" aria-valuemax="<?=$objCostureiraProducao->TempoPrevisto; ?>" style="width: <?=100-($intTimeExecuted*100)/$objCostureiraProducao->TempoPrevisto;?>%;">
								<?=gmdate("H:i:s", $intTempoRestante); ?>
							</div>
						</div>
					</div>
				</div>				
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<?php $this->btnMarcarTempo_Render($objCostureiraProducao); ?>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<?php $this->lstQuantidade_Render($objCostureiraProducao); ?>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="btn-group width100">
							<button class="btn btn-default btn-lg dropdown-toggle width100" type="button" data-toggle="dropdown" <?= $this->strDisabled; ?>>
								AÇÕES <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="<?php $this->pxyLiberar->RenderAsHref($objCostureiraProducao->Id); ?>" >LIBERAR</a></li>
								<li><a href="<?php $this->pxyFechar->RenderAsHref($objCostureiraProducao->Id); ?>">FECHAR</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	