	<div class="panel-heading">
		<h3 class="panel-title">Costureira</h3>
	</div>
<?php if($this->objCostureira) { ?>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<img height="200" src="<?=__VIRTUAL_DIRECTORY__.$this->objCostureira->ImagemFla; ?>" alt="..." class="img-thumbnail img-rounded width100">
			</div>
			<div class="col-lg-8 col-md-8">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h3><?=$this->objCostureira->Nome; ?></h3>
					</div>
				</div>
				<?php $this->btnDeliverProduction->Render(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h2>Mesa</h2>
				<?php foreach (
					CostureiraProducao::QueryArray(QQ::AndCondition(
						QQ::Equal(QQN::CostureiraProducao()->CostureiraId, $this->objCostureira->Id),
						QQ::Equal(QQN::CostureiraProducao()->Concluido, 0)))
					as $objCostureiraProducao
					) {?>
	
				
				
<?php $strText = 'Pac. '.$objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->OrdemProducao->Pacote->Nome.' | Ref. ' 
.$objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->OrdemProducao->Referencia->Nome.' | Grd. '
.$objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->Cor->Nome.' '
.$objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->Tamanho->Valor.' | '
.$objCostureiraProducao->QuantidadePlanejada.']'; ?>
				
		<div class="row marginBottom20">
								<div class="col-lg-12 col-md-12">
									<div class="input-group">
						
						<?php if(CostureiraTempo::QuerySingle(QQ::AndCondition(
											QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao, $objCostureiraProducao->Id),
											QQ::Equal(QQN::CostureiraTempo()->Fim, null)))) { ?>
							<a  href="<?php $this->pxyTimeProduction->RenderAsHref($objCostureiraProducao->Id); ?>" class="btn btn-lg btn-warning input-group-addon">Parar</a> 
						<?php } else if (CostureiraTempo::QuerySingle(QQ::AndCondition(
												QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao->CostureiraId, $objCostureiraProducao->CostureiraId),
												QQ::Equal(QQN::CostureiraTempo()->Fim, null)))){ ?>
							<a disabled="disabled" class="btn btn-lg btn-success input-group-addon">Inciar</a> 
						<?php } else { ?>
							<a  href="<?php $this->pxyTimeProduction->RenderAsHref($objCostureiraProducao->Id); ?>" class="btn btn-lg btn-success input-group-addon">Inciar</a> 
						<?php } ?>
							
							<?php $txtControl = new QTextBox($_CONTROL); $txtControl->CssClass = 'form-control input-lg'; $txtControl->SetCustomAttribute('placeholder', $strText); $txtControl->Render(); ?>
							
							<?php 
								$objFluxogramaItem = BalancoAcoes::QuerySingle(
													QQ::Equal(QQN::BalancoAcoes()->OrdemProducaoGradeId, $objCostureiraProducao->BalancoAcoes->OrdemProducaoGradeId), 
													QQ::Clause(QQ::OrderBy(QQN::BalancoAcoes()->FluxogramaItem->Ordenacao, false)))->FluxogramaItem;
							
								//$objFluxogramaItem = FluxogramaItem::QuerySingle(QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objCostureiraProducao->BalancoAcoes->FluxogramaItem->ReferenciaId),
								//QQ::Clause(QQ::OrderBy(QQN::FluxogramaItem()->Ordenacao, false)));
								if($objCostureiraProducao->BalancoAcoes->Final == 1) { ?>
								<a href="<?php $this->pxyFinishProduction->RenderAsHref($objCostureiraProducao->Id.'#'.$txtControl->ControlId.'#lancar'); ?>" class="btn btn-danger btn-lg input-group-addon">Lançar</a>
							<?php } else { ?>
								<a href="<?php $this->pxyFinishProduction->RenderAsHref($objCostureiraProducao->Id.'#'.$txtControl->ControlId.'#concluir'); ?>" class="btn btn-warning btn-lg input-group-addon">Concluir</a>
							<?php } ?>
							
							
							
									
										
									</div>
								</div>
							</div>		
				
				
				
				
				<?php } ?>
			</div>
		</div>
		
	</div>	
<?php } else {?>
	<div class="panel-body">
		Nenhuma Identificada
	</div>	
<?php } ?>