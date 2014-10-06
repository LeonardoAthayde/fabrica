<?php

	require 'base.php';
	
	class MarcagemTempoForm extends BaseForm {
	
		protected $objCostureira;
		protected $objArrayCostureiraProducao = array();
		
		protected $dtrCostureiraProducao;
		protected $pxyLiberar;
		protected $pxyFechar;
		protected $pnlProgressBar;
		
		protected $strDisabled;
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->objCostureira = $this->objUsuario->Costureira;
			if(!$this->objCostureira)
				QApplication::Redirect (__VIRTUAL_DIRECTORY__);
				
			$this->dtrCostureiraProducao_Create();
			$this->pxyLiberar_Create();
			$this->pxyFechar_Create();
			$this->pnlProgressBar_Create();
			
			$this->DefaultWaitIcon_Create();
			$this->SetPollingProcessor('MarcagemTempoForm_Poling', $this, 10000 * 1);
			
			$objCostureiraTempo = CostureiraTempo::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao->CostureiraId, $this->objCostureira->Id),
				QQ::Equal(QQN::CostureiraTempo()->Fim, null)));
			if($objCostureiraTempo)
				$this->strDisabled = 'disabled';
		}
			
		protected function dtrCostureiraProducao_Create(){
			$this->dtrCostureiraProducao = new QDataRepeater($this);
			$this->dtrCostureiraProducao->Template = __DOCROOT__.'/control/tpl/dtr_MarcarTempo.tpl.php';
			$this->dtrCostureiraProducao->SetDataBinder('dtrCostureiraProducao_Bind');
			
		}
		
		protected function dtrCostureiraProducao_Bind($dtrControl, $blnUpdate = false){
			if($blnUpdate) $this->objArrayCostureiraProducao = array();
			$blnModified = false;
			foreach (CostureiraProducao::LoadArrayByCostureiraIdConcluido($this->objCostureira->Id, 0) as $objCostureiraProducao){
				$blnFind = false;
				foreach ($this->objArrayCostureiraProducao as $objCostureiraProducaoStored)
					if($objCostureiraProducao->Id == $objCostureiraProducaoStored->Id)
						$blnFind = true;
				if(!$blnFind){
					array_push ($this->objArrayCostureiraProducao, $objCostureiraProducao);
					$blnModified = true;
				}	
			}
			if($blnModified)
				$this->dtrCostureiraProducao->DataSource = $this->objArrayCostureiraProducao;
		}
		
		protected function pxyLiberar_Create(){
			$this->pxyLiberar = new QControlProxy($this);
			$this->pxyLiberar->AddAction(new QClickEvent(), new QAjaxAction('pxyLiberar_Click'));
		}
		
		protected function pxyLiberar_Click($strFormId, $strControlId, $strParameter){
			$objCostureiraProducao = CostureiraProducao::Load($strParameter);
			$lstQuantidade = $this->dtrCostureiraProducao->GetChildControl('lstQuantidade'.$objCostureiraProducao->Id);
			
			if($objCostureiraProducao && $lstQuantidade->SelectedValue) {
				$objCostureiraProducao->QuantidadeRealizada+= $lstQuantidade->SelectedValue;
				$objCostureiraProducao->QuantidadeEstocado+= $lstQuantidade->SelectedValue;				
				$objCostureiraProducao->Save();
				
				$objCostureiraTempoEficiente = new CostureiraTempoEficiente();
				$objCostureiraTempoEficiente->CostureiraProducaoId = $objCostureiraProducao->Id;
				$objCostureiraTempoEficiente->Tempo = $lstQuantidade->SelectedValue*$objCostureiraProducao->BalancoAcoes->FluxogramaItemReal->Tempo;
				$objCostureiraTempoEficiente->Date = QDateTime::Now();
				$objCostureiraTempoEficiente->Save();
				
				$this->pnlProgressBar->Refresh();
				
				$objBalancoAcoes = $objCostureiraProducao->BalancoAcoes;
				$objBalancoAcoes->QuantidadeProduzida+= $lstQuantidade->SelectedValue;
				$objBalancoAcoes->Save();
			
				
				$objArrayFluxogramaItemDepedentes = $objBalancoAcoes->FluxogramaItemReal->GetFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
				if(count($objArrayFluxogramaItemDepedentes) == 0){
					$objBalancoPecas = BalancoPecas::LoadByOrdemProducaoGradeId($objBalancoAcoes->OrdemProducaoGradeId);
					$objBalancoPecas->Balanco-= $lstQuantidade->SelectedValue;
					$objBalancoPecas->QuantidadeProduzida+= $lstQuantidade->SelectedValue;
					$objBalancoPecas->Save();
				} else {
					foreach ($objArrayFluxogramaItemDepedentes as $objFluxogramaItemNext){
						$objBalancoAcoesNext = $objFluxogramaItemNext->BalancoAcoes;							
						$intMin = 99999999;
						foreach($objBalancoAcoesNext->GetBalancoAcoesDepedenciaArray() as $objBalancoAcoesDepedentes){
							if($objBalancoAcoesDepedentes->FluxogramaItemRealId == $objBalancoAcoes->FluxogramaItemRealId){
								$objBalancoAcoesDepedentes->QuantidadeDisponibilizada+=$lstQuantidade->SelectedValue;
								$objBalancoAcoesDepedentes->Save();
							}
							if($intMin > $objBalancoAcoesDepedentes->QuantidadeDisponibilizada)
								$intMin = $objBalancoAcoesDepedentes->QuantidadeDisponibilizada;
						}
							
						$intAdicionarQuantidadeDisponivel = $intMin - ($objBalancoAcoesNext->QuantidadeDisponivel+$objBalancoAcoesNext->QuantidadeRemetida);
							
						$objBalancoAcoesNext->QuantidadeDisponivel+= $intAdicionarQuantidadeDisponivel;
						$objBalancoAcoesNext->Save();
					}
				}						
				$this->dtrCostureiraProducao_Bind($this->dtrCostureiraProducao, true);			
			}			
		}
		
		protected function pxyFechar_Create(){
			$this->pxyFechar = new QControlProxy($this);
			$this->pxyFechar->AddAction(new QClickEvent(), new QAjaxAction('pxyFechar_Click'));
		}
		
		protected function pxyFechar_Click($strFormId, $strControlId, $strParameter){
			$objCostureiraProducao = CostureiraProducao::Load($strParameter);
			if($objCostureiraProducao) {
				$objCostureiraProducao->Concluido = true;
				$objCostureiraProducao->Save();
				
				$this->dtrCostureiraProducao->RemoveChildControl('btnMarcarTempo'.$objCostureiraProducao->Id, true);
				$this->dtrCostureiraProducao->RemoveChildControl('lstQuantidade'.$objCostureiraProducao->Id, true);
			}
			$this->dtrCostureiraProducao_Bind($this->dtrCostureiraProducao, true);				
		}
		
		protected function pnlProgressBar_Create(){
			$this->pnlProgressBar = new QPanel($this);
			$this->pnlProgressBar->Template = __DOCROOT__.'/control/tpl/pnl_ProgressBar.tpl.php';
		}
		
		protected function btnMarcarTempo_Render(CostureiraProducao $objCostureiraProducao){
			$objCostureiraTempo = CostureiraTempo::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao, $objCostureiraProducao->Id),
				QQ::Equal(QQN::CostureiraTempo()->Fim, null)));
			
			$btnMarcarTempo = $this->GetControl('btnMarcarTempo'.$objCostureiraProducao->Id);
			if(!$btnMarcarTempo){
				$btnMarcarTempo = $this->btnMarcarTempo_Create($objCostureiraProducao);
			}
			if(!$objCostureiraTempo) {
				$btnMarcarTempo->Text = 'INICIAR';
				$btnMarcarTempo->CssClass = 'btn btn-default btn-lg width100';
			} else {
				$btnMarcarTempo->Text = 'PARAR';
				$btnMarcarTempo->CssClass = 'btn btn-info btn-lg width100';
			} 
			if($this->strDisabled && !$objCostureiraTempo)
				$btnMarcarTempo->Enabled = false;
			else
				$btnMarcarTempo->Enabled = true;
			$btnMarcarTempo->Render();
		}
		
		protected function btnMarcarTempo_Create(CostureiraProducao $objCostureiraProducao){
			$btnMarcarTempo = new QButton($this->dtrCostureiraProducao, 'btnMarcarTempo'.$objCostureiraProducao->Id);
			$btnMarcarTempo->CssClass = 'btn btn-default btn-lg width100';
			$btnMarcarTempo->ActionParameter = $objCostureiraProducao->Id;
			$btnMarcarTempo->AddAction(new QClickEvent(), new QAjaxAction('btnMarcarTempo_Click'));
			return $btnMarcarTempo;
		}
		
		protected function btnMarcarTempo_Click($strFormId, $strControlId, $strParameter){
			$btnMarcarTempo = $this->GetControl('btnMarcarTempo'.$strParameter);
			$objCostureiraTempo = CostureiraTempo::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao->Id, $strParameter),
				QQ::Equal(QQN::CostureiraTempo()->Fim, null)));
			if(!$objCostureiraTempo){
				$objCostureiraTempo = new CostureiraTempo();
				$objCostureiraTempo->CostureiraProducaoId = $strParameter;
				$objCostureiraTempo->Inicio = QDateTime::Now();
				$objCostureiraTempo->Save();
				$btnMarcarTempo->Text = 'PARAR';
				$btnMarcarTempo->CssClass = 'btn btn-info btn-lg width100';
				$this->strDisabled = 'disabled';
				$this->ClearPollingProcessor();
				QApplication::ExecuteJavaScript('MarcarTempoStart("'.$strParameter.'")');
			} else {
				$objCostureiraTempo->Fim = QDateTime::Now();
				$objDateTimeSpanDifference = $objCostureiraTempo->Fim->Difference(new QDateTime($objCostureiraTempo->Inicio));
				$objCostureiraTempo->Tempo = $objDateTimeSpanDifference->Seconds;
				$objCostureiraTempo->Save();
				$btnMarcarTempo->Text = 'INICIAR';
				$btnMarcarTempo->CssClass = 'btn btn-default btn-lg width100';
				$this->strDisabled = null;	
				$this->SetPollingProcessor('MarcagemTempoForm_Poling', $this, 10000 * 1);
				QApplication::ExecuteJavaScript('MarcarTempoStop("'.$strParameter.'")');
			}
			$this->dtrCostureiraProducao_Bind($this->dtrCostureiraProducao, true);
		}
		
		protected function lstQuantidade_Render(CostureiraProducao $objCostureiraProducao){
			$lstQuantidade = $this->GetControl('lstQuantidade'.$objCostureiraProducao->Id);
			if(!$lstQuantidade)
				$lstQuantidade = $this->lstQuantidade_Create($objCostureiraProducao);
			$lstQuantidade->RemoveAllItems();
			$intMax = $objCostureiraProducao->QuantidadePlanejada-$objCostureiraProducao->QuantidadeRealizada;
			for ($i = $intMax; $i > 0; $i--)
				$lstQuantidade->AddItem($i, $i);
			if($this->strDisabled)
				$lstQuantidade->Enabled = false;
			else
				$lstQuantidade->Enabled = true;
			$lstQuantidade->Render();
		}
		
		protected function lstQuantidade_Create(CostureiraProducao $objCostureiraProducao){
			$lstQuantidade = new QListBox($this->dtrCostureiraProducao, 'lstQuantidade'.$objCostureiraProducao->Id);
			$lstQuantidade->CssClass = 'form-control input-lg';
			return $lstQuantidade;
		}
		
		protected function DefaultWaitIcon_Create(){
			$this->objDefaultWaitIcon = new QWaitIcon($this);
			$this->objDefaultWaitIcon->Text = '
				<div class="progress progress-striped active ajax-barra">
					<div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						<span class="sr-only">100% Complete</span>
					</div>
				</div>';			
		}
		
		
		protected function MarcagemTempoForm_Poling(){	
			$this->dtrCostureiraProducao_Bind($this->dtrCostureiraProducao);
		}
		
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'marcagem_tempo.css'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'marcagem_tempo.js'));
		}		
		
	}
	
	MarcagemTempoForm::Run('MarcagemTempoForm', 'tpl/marcagem_tempo.tpl.php');

?>