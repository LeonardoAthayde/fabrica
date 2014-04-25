<?php foreach (Costureira::LoadAll() as $objCostureira) { ?>
<div class="panel panel-default">
  
<div class="panel-body">
		<div class="row">
			<div class="col-lg-2 col-md-2">
				<img height="200" src="<?=__VIRTUAL_DIRECTORY__.$objCostureira->ImagemFla; ?>" alt="..." class="img-thumbnail img-rounded width100">
				<h4><?=$objCostureira->Nome; ?></h4>
			</div>

			<div class="col-lg-10 col-md-10">
				<?php foreach (
					CostureiraProducao::QueryArray(QQ::AndCondition(
						QQ::Equal(QQN::CostureiraProducao()->CostureiraId, $objCostureira->Id),
						QQ::Equal(QQN::CostureiraProducao()->Concluido, 0)))
					as $objCostureiraProducao
					) {?>
	
				
				
<?php $strText = $objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->OrdemProducao->Referencia->Nome.' | '
.$objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->Cor->Nome.', '
.$objCostureiraProducao->BalancoAcoes->OrdemProducaoGrade->Tamanho->Valor.' | '
.($objCostureiraProducao->QuantidadePlanejada-$objCostureiraProducao->QuantidadeRealizada); ?>
				
		<div class="row marginBottom20">
								<div class="col-lg-12 col-md-12">
									<div class="input-group">
						
						<?php if(CostureiraTempo::QuerySingle(QQ::AndCondition(
											QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao, $objCostureiraProducao->Id),
											QQ::Equal(QQN::CostureiraTempo()->Fim, null)))) { ?>
							<a  href="<?php $this->pxyTimeProduction->RenderAsHref($objCostureiraProducao->Id); ?>" class="btn btn-lg btn-danger input-group-addon">Parar</a> 
						<?php } else if (CostureiraTempo::QuerySingle(QQ::AndCondition(
												QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao->CostureiraId, $objCostureiraProducao->CostureiraId),
												QQ::Equal(QQN::CostureiraTempo()->Fim, null)))){ ?>
							<a disabled="disabled" class="btn btn-lg btn-success input-group-addon">Inciar</a> 
						<?php } else { ?>
							<a  href="<?php $this->pxyTimeProduction->RenderAsHref($objCostureiraProducao->Id); ?>" class="btn btn-lg btn-success input-group-addon">Inciar</a> 
						<?php } ?>
							
							<?php $txtControl = new QTextBox($_CONTROL); $txtControl->CssClass = 'form-control input-lg'; $txtControl->SetCustomAttribute('placeholder', $strText); $txtControl->Render(); ?>						
							<!--<a href="<?php $this->pxyFinishProduction->RenderAsHref($objCostureiraProducao->Id.'#'.$txtControl->ControlId.'#concluir'); ?>" class="btn btn-warning btn-lg input-group-addon">Liberar</a>
							-->
						
						<?php if(CostureiraTempo::QuerySingle(QQ::AndCondition(
											QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao, $objCostureiraProducao->Id),
											QQ::Equal(QQN::CostureiraTempo()->Fim, null)))) { ?>							
							<div class="input-group-btn">
								<button type="button" disabled="disabled" class="btn btn-lg btn-primary dropdown-toggle" data-toggle="dropdown">Ação <span class="caret"></span></button>					
							</div>	
						<?php } else { ?>
							<div class="input-group-btn">
								<button type="button" class="btn btn-lg btn-primary dropdown-toggle" data-toggle="dropdown">Ação <span class="caret"></span></button>
								<ul class="dropdown-menu pull-right">
									<li><a href="<?php $this->pxyFinishProduction->RenderAsHref($objCostureiraProducao->Id.'#'.$txtControl->ControlId); ?>">Liberar</a></li>
									<li><a href="<?php $this->pxyFinishAll->RenderAsHref($objCostureiraProducao->Id); ?>">Fechar</a></li>
								</ul>					
							</div>							
						<?php } ?>							
							
									</div>
								</div>
							</div>		
				
				
				
				
				<?php } ?>
			</div>
		</div>
		
	</div>
</div>
<?php } ?>