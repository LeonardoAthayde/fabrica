<?php

	class QCreateCostureiraProducaoPanel extends QPanel {
		
		public $lstProductionOrder;
		public $lstProductOrderGrid;
		public $lstFlowChartItem;
		public $txtAmount;
		public $btnConfirm;
		
		
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->CssClass = 'panel panel-default';
			$this->Template = __DOCROOT__.'/control/tpl/pnl_CreateCostureiraProdução.tpl.php';	
			$this->Display = false;	
			
			
			$this->lstProductionOrder_Create();
			$this->lstProductOrderGrid_Create();
			$this->lstFlowChartItem_Create();
			$this->txtAmount_Create();
			$this->btnConfirm_Create();
		}
		
		protected function lstProductionOrder_Create(){
			$this->lstProductionOrder = new QListBox($this);
			$this->lstProductionOrder->CssClass = 'form-control input-lg marginBottom20';
			$this->lstProductionOrder->AddItem('Selecione Uma Ordem de Produção ==>');
			
			foreach (OrdemProducao::QueryArray(QQ::NotEqual(QQN::OrdemProducao()->OrdemProducaoGrade->BalancoAcoes->QuantidadeDisponivel, 0), QQ::Clause(QQ::GroupBy(QQN::OrdemProducao()->Id))) as $objOrdemProducao){
				$this->lstProductionOrder->AddItem($objOrdemProducao->Referencia->Nome.' - pacote'.$objOrdemProducao->Pacote->Nome, $objOrdemProducao->Id);
			}
			$this->lstProductionOrder->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'lstProductOrder_Change'));
			$this->lstProductionOrder->Required = true;
		}
		
		public function lstProductOrder_Change(){
			$objOrdemProducao = OrdemProducaoGrade::LoadArrayByOrdemProducaoId($this->lstProductionOrder->SelectedValue);
			if($objOrdemProducao){
			
				$this->lstProductOrderGrid->RemoveAllItems();
				$this->lstProductOrderGrid->AddItem('Selecione um Item da Grade ==>');
				foreach (OrdemProducaoGrade::QueryArray(
								QQ::AndCondition(
									QQ::Equal(QQN::OrdemProducaoGrade()->OrdemProducaoId, $this->lstProductionOrder->SelectedValue), 
									QQ::NotEqual(QQN::OrdemProducaoGrade()->BalancoAcoes->QuantidadeDisponivel, 0))) as $objOrdemProducaoGrade){
					$this->lstProductOrderGrid->AddItem($objOrdemProducaoGrade->Cor->Nome.' '.$objOrdemProducaoGrade->Tamanho->Valor, $objOrdemProducaoGrade->Id);
				}
				$this->lstProductOrderGrid->Display = true;
				
				$this->lstFlowChartItem->RemoveAllItems();
				$this->lstFlowChartItem->AddItem('Selecione a Ação a ser Executada ==>');
				foreach (FluxogramaItem::LoadArrayByReferenciaId(OrdemProducao::LoadById($this->lstProductionOrder->SelectedValue)->ReferenciaId) as $objReferencia){
					$this->lstFlowChartItem->AddItem($objReferencia->FluxogramaAcoes->Nome, $objReferencia->FluxogramaAcoes->Id);
				}
				$this->lstFlowChartItem->Display = true;
			} else {
				$this->lstFlowChartItem->Display = false;
				$this->lstProductOrderGrid->Display = false;
				$this->lstProductOrderGrid->RemoveAllItems();
				$this->lstFlowChartItem->RemoveAllItems();
				$this->txtAmount->Display = false;
				$this->txtAmount->Text = '';
			}
		}
		
		protected function lstProductOrderGrid_Create(){
			$this->lstProductOrderGrid = new QListBox($this);
			$this->lstProductOrderGrid->CssClass = 'form-control input-lg marginBottom20';
			$this->lstProductOrderGrid->Display = false;
			$this->lstProductOrderGrid->Required = true;
			$this->lstProductOrderGrid->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'lstProductOrderGrid_Change'));
		}

		
		public function lstProductOrderGrid_Change(){
			$this->ShowtxtAmount();
		}
		
		protected function lstFlowChartItem_Create(){
			$this->lstFlowChartItem = new QListBox($this);
			$this->lstFlowChartItem->CssClass = 'form-control input-lg marginBottom20';
			$this->lstFlowChartItem->Display = false;
			$this->lstFlowChartItem->Required = true;
			$this->lstFlowChartItem->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'lstFlowChartItem_Change'));			
		}
		
		public function lstFlowChartItem_Change(){
			$this->ShowtxtAmount();
		}		
		
		protected function ShowtxtAmount(){
			$objFluxogramaItem = FluxogramaItem::Load($this->lstFlowChartItem->SelectedValue);
			$objOrdemProducaoGrade = OrdemProducaoGrade::Load($this->lstProductOrderGrid->SelectedValue);
			if($objOrdemProducaoGrade && $objFluxogramaItem){
				$objBalancoAcoes = BalancoAcoes::LoadByOrdemProducaoGradeIdFluxogramaItemId($objOrdemProducaoGrade->Id, $objFluxogramaItem->Id);
				if($objBalancoAcoes){
					$this->txtAmount->Display = true;
					$this->txtAmount->Text = $objBalancoAcoes->QuantidadeDisponivel;
					$this->txtAmount->Maximum = $objBalancoAcoes->QuantidadeDisponivel;
					$this->txtAmount->Minimum = 1;
				} else {
					QApplication::DisplayAlert ('Erro: System ShowtxtAmount()');
					$this->txtAmount->Display = false;
					$this->txtAmount->Text = '';
					$this->lstFlowChartItem->SelectedIndex = 0;
					$this->lstProductOrderGrid->SelectedIndex = 0;
				}
			} else {
				$this->txtAmount->Display = false;
				$this->txtAmount->Text = '';
			}			
		}
		
		
		protected function txtAmount_Create(){
			$this->txtAmount = new QIntegerTextBox($this);
			$this->txtAmount->Required = true;
			$this->txtAmount->Display = false;
			$this->txtAmount->CssClass = 'form-control input-lg marginBottom20';
		}
		
		protected function btnConfirm_Create(){
			$this->btnConfirm = new QButton($this);
			$this->btnConfirm->Text = 'Confirmar';
			$this->btnConfirm->CssClass = 'btn btn-default input-lg width100';
			$this->btnConfirm->CausesValidation = $this;
			$this->btnConfirm->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnConfirm_Click'));
		}
		
		public function btnConfirm_Click(){
			$objFluxogramaItem = FluxogramaItem::Load($this->lstFlowChartItem->SelectedValue);
			$objOrdemProducaoGrade = OrdemProducaoGrade::Load($this->lstProductOrderGrid->SelectedValue);

			$objBalancoAcoes = BalancoAcoes::LoadByOrdemProducaoGradeIdFluxogramaItemId($objOrdemProducaoGrade->Id, $objFluxogramaItem->Id);
			
			
			$objCostureiraProducao = new CostureiraProducao($this->lstProductionOrder->SelectedValue);
			$objCostureiraProducao->CostureiraId = $this->Form->objCostureira->Id;
			$objCostureiraProducao->BalancoAcoesId = $objBalancoAcoes->Id;
			$objCostureiraProducao->QuantidadePlanejada = $this->txtAmount->Text;
			$objCostureiraProducao->TempoPrevisto = $this->txtAmount->Text*$objFluxogramaItem->Tempo;
			$objCostureiraProducao->Concluido = false;
			$objCostureiraProducao->Save();
			
			$objBalancoAcoes->QuantidadeDisponivel-= $this->txtAmount->Text;
			$objBalancoAcoes->QuantidadeRemetida+= $this->txtAmount->Text;
			$objBalancoAcoes->Save();		
			
			$this->lstProductionOrder->RemoveAllItems();
			$this->lstProductionOrder->AddItem('Selecione Uma Ordem de Produção ==>');
			foreach (OrdemProducao::QueryArray(QQ::NotEqual(QQN::OrdemProducao()->OrdemProducaoGrade->BalancoAcoes->QuantidadeDisponivel, 0), QQ::Clause(QQ::GroupBy(QQN::OrdemProducao()->Id))) as $objOrdemProducao){
				$this->lstProductionOrder->AddItem($objOrdemProducao->Referencia->Nome.' - pacote'.$objOrdemProducao->Pacote->Nome, $objOrdemProducao->Id);
			}
			$this->lstProductOrder_Change();
		
			
			$this->Form->pnlSeamstress->Refresh();
		}
		
	}

?>