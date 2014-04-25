<?php

	require 'base.php';

	class GerenciarCostureiraForm extends BaseForm {

		protected $pxyTimeProduction;
		protected $pxyFinishProduction;
		protected $pxyFinishAll;
		
		protected $pnlSeamstress;
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->pxyTimeProduction_Create();
			$this->pxyFinishProduction_Create();
			$this->pxyFinishAll_Create();
			
			$this->pnlSeamstress_Create();
		}
		
		protected function pnlSeamstress_Create(){
			$this->pnlSeamstress = new QPanel($this);
			$this->pnlSeamstress->Template = __DOCROOT__.'/control/tpl/pnl_Seamstress.tpl.php';
		}
		
		protected function pxyTimeProduction_Create(){
			$this->pxyTimeProduction = new QControlProxy($this);
			$this->pxyTimeProduction->AddAction(new QClickEvent(), new QAjaxAction('pxyTimeProduction_Click'));
		}
		
		
		protected function pxyTimeProduction_Click($strFormId, $strControlId, $strParameter){
			$objCostureiraTempo = CostureiraTempo::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao, $strParameter),
				QQ::Equal(QQN::CostureiraTempo()->Fim, null)));
			if($objCostureiraTempo){
				$objCostureiraTempo->Fim = QDateTime::Now();
				$objDateTimeSpanDifference = $objCostureiraTempo->Fim->Difference(new QDateTime($objCostureiraTempo->Inicio));
				$objCostureiraTempo->Tempo = $objDateTimeSpanDifference->Seconds;
				$objCostureiraTempo->Save();
			} else {
				$objCostureiraTempo = new CostureiraTempo();
				$objCostureiraTempo->CostureiraProducaoId = $strParameter;
				$objCostureiraTempo->Inicio = QDateTime::Now();
				$objCostureiraTempo->Save();
			}
			$this->pnlSeamstress->Refresh();
		}
		
		protected function pxyFinishProduction_Create(){
			$this->pxyFinishProduction = new QControlProxy($this);
			$this->pxyFinishProduction->AddAction(new QClickEvent(), new QAjaxAction('pxyFinishProduction_Click'));			
		}
		
		protected function pxyFinishProduction_Click($strFormId, $strControlId, $strParameter){
			$arr = explode("#", $strParameter);
			$txtControl = $this->pnlSeamstress->GetChildControl($arr[1]);
			$objCostureiraProducao = CostureiraProducao::Load($arr[0]);
			
			//$objBalancoAcoes = $objCostureiraProducao->BalancoAcoes;
			//$objArrayFluxogramaItemFilho = $objBalancoAcoes->FluxogramaItemReal->GetFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
			
			//foreach ($objArrayFluxogramaItemFilho as $objFluxogramaItemFilho){
			//	QApplication::DisplayAlert($objFluxogramaItemFilho->Id);
			//}
			
			if($objCostureiraProducao) {
				$intMinimum = 1;
				$intMaximum = $objCostureiraProducao->QuantidadePlanejada-$objCostureiraProducao->QuantidadeRealizada;
				if(is_numeric($txtControl->Text) && $txtControl->Text >= $intMinimum && $txtControl->Text <= $intMaximum) {
							
					$objCostureiraProducao->QuantidadeRealizada+= $txtControl->Text;
					$objCostureiraProducao->QuantidadeEstocado+= $txtControl->Text;
					$objCostureiraProducao->Save();
				
					$objBalancoAcoes = $objCostureiraProducao->BalancoAcoes;
					$objBalancoAcoes->QuantidadeProduzida+= $txtControl->Text;
					$objBalancoAcoes->Save();
			
				
					$objArrayFluxogramaItemDepedentes = $objBalancoAcoes->FluxogramaItemReal->GetFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
					if(count($objArrayFluxogramaItemDepedentes) == 0){
						$objBalancoPecas = BalancoPecas::LoadByOrdemProducaoGradeId($objBalancoAcoes->OrdemProducaoGradeId);
						$objBalancoPecas->Balanco-=$txtControl->Text;
						$objBalancoPecas->QuantidadeProduzida+=$txtControl->Text;
						$objBalancoPecas->Save();
					} else {
						foreach ($objArrayFluxogramaItemDepedentes as $objFluxogramaItemNext){
							//QApplication::DisplayAlert($objFluxogramaItemNext->Id);
							$objBalancoAcoesNext = $objFluxogramaItemNext->BalancoAcoes;
							//$objBalancoAcoesNext = BalancoAcoes::LoadByOrdemProducaoGradeIdFluxogramaItemId($objBalancoAcoes->OrdemProducaoGradeId,  $objFluxogramaItemNext->Id);
							//if(!$objBalancoAcoesNext) {
							//$objBalancoAcoesNext = new BalancoAcoes();
							//$objBalancoAcoesNext->OrdemProducaoGradeId = $objBalancoAcoes->OrdemProducaoGradeId;
							//$objBalancoAcoesNext->FluxogramaItemId = $objFluxogramaItemNext->Id;
							//$objBalancoAcoesNext->QuantidadeDisponivel = 0;
							//$objBalancoAcoesNext->QuantidadeProduzida = 0;
							//$objBalancoAcoesNext->QuantidadeRemetida = 0;
							//}
							
							
							$intMin = 99999999;
							foreach($objBalancoAcoesNext->GetBalancoAcoesDepedenciaArray() as $objBalancoAcoesDepedentes){
								//QApplication::DisplayAlert($objBalancoAcoesDepedentes->FluxogramaItemRealId);
								if($objBalancoAcoesDepedentes->FluxogramaItemRealId == $objBalancoAcoes->FluxogramaItemRealId){
									$objBalancoAcoesDepedentes->QuantidadeDisponibilizada+=$txtControl->Text;
									$objBalancoAcoesDepedentes->Save();
									//QApplication::DisplayAlert('opa');
								}
								if($intMin > $objBalancoAcoesDepedentes->QuantidadeDisponibilizada)
									$intMin = $objBalancoAcoesDepedentes->QuantidadeDisponibilizada;
							}
							
							$intAdicionarQuantidadeDisponivel = $intMin - ($objBalancoAcoesNext->QuantidadeDisponivel+$objBalancoAcoesNext->QuantidadeRemetida);
							
							$objBalancoAcoesNext->QuantidadeDisponivel+= $intAdicionarQuantidadeDisponivel;
							$objBalancoAcoesNext->Save();
						}
					}
					
					/*$objFluxogramaItemNext = FluxogramaItem::QuerySingle(
						QQ::AndCondition(
							QQ::Equal(QQN::FluxogramaItem()->Ordenacao, ($objBalancoAcoes->FluxogramaItem->Ordenacao+1)),
							QQ::Equal(QQN::FluxogramaItem()->Ativo, true),
							QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objBalancoAcoes->OrdemProducaoGrade->OrdemProducao->ReferenciaId)));
					
					
					/*if(!$objFluxogramaItemNext) {
						$objBalancoPecas = BalancoPecas::LoadByOrdemProducaoGradeId($objBalancoAcoes->OrdemProducaoGradeId);
						$objBalancoPecas->Balanco-=$txtControl->Text;
						$objBalancoPecas->QuantidadeProduzida+=$txtControl->Text;
						$objBalancoPecas->Save();
					} else {
						$objBalancoAcoesNext = BalancoAcoes::LoadByOrdemProducaoGradeIdFluxogramaItemId($objBalancoAcoes->OrdemProducaoGradeId,  $objFluxogramaItemNext->Id);
						if(!$objBalancoAcoesNext) {
							$objBalancoAcoesNext = new BalancoAcoes();
							$objBalancoAcoesNext->OrdemProducaoGradeId = $objBalancoAcoes->OrdemProducaoGradeId;
							$objBalancoAcoesNext->FluxogramaItemId = $objFluxogramaItemNext->Id;
							$objBalancoAcoesNext->QuantidadeDisponivel = 0;
							$objBalancoAcoesNext->QuantidadeProduzida = 0;
							$objBalancoAcoesNext->QuantidadeRemetida = 0;
						}
						$objBalancoAcoesNext->QuantidadeDisponivel+= $txtControl->Text;
						$objBalancoAcoesNext->Save();
					}*/
					
					$this->pnlSeamstress->Refresh();
				
				} else
					QApplication::DisplayAlert ('Quantidade inválida mínimo é '.$intMinimum.' e máximo é '.$intMaximum);
			}
		}
		
		protected function pxyFinishAll_Create(){
			$this->pxyFinishAll = new QControlProxy($this);
			$this->pxyFinishAll->AddAction(new QClickEvent(), new QAjaxAction('pxyFinishAll_Click'));			
		}		
		
		protected function pxyFinishAll_Click($strFormId, $strControlId, $strParameter){
			$objCostureiraProducao = CostureiraProducao::Load($strParameter);
			if($objCostureiraProducao) {
				$objCostureiraProducao->Concluido = true;
				$objCostureiraProducao->Save();
			}
			$this->pnlSeamstress->Refresh();
		}
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'gerenciar_costureira.css'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'gerenciar_costureira.js'));
		}		
		
	}
	
	GerenciarCostureiraForm::Run('GerenciarCostureiraForm', 'tpl/gerenciar_costureira.tpl.php');
	
?>