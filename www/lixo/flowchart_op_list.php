<?php

	require 'base.php';
	
	class FlowchartsOpListForm extends BaseForm {
		
		protected $txtSearch;
		protected $pxyFilter;
		
		protected $dtgFlowchartOp;
		protected $pxyPrint;
		
		protected $objFlowchartOpArray = array();
		
		protected function Form_Create() {
			$this->txtSearch_Create();
			$this->pxyFilter_Create();
			$this->dtgFlowchartOp_Create();
			$this->pxyPrint_Create();
			
			$this->objFlowchartOpArray = FlowchartOp::LoadAll(QQ::Clause(QQ::OrderBy(QQN::FlowchartOp()->Id, false)));
		}
		
		protected function txtSearch_Create(){
			$this->txtSearch = new QTextBox($this);
			$this->txtSearch->CssClass = 'form-control';
			$this->txtSearch->SetCustomAttribute('placeholder', 'PESQUISAR FLUXOGRAMA POR ID / TODOS ==>');
		}
		
		protected function pxyFilter_Create(){
			$this->pxyFilter = new QControlProxy($this);
			$this->pxyFilter->AddAction(new QClickEvent(), new QAjaxAction('pxyFilter_Click'));
		}

		protected function pxyFilter_Click($strFormId, $strControlId, $strParameter){
			if($this->txtSearch->Text != '')
				$this->objFlowchartOpArray = FlowchartOp::QueryArray(QQ::Equal(QQN::FlowchartOp()->Id, $this->txtSearch->Text));
			else
				$this->objFlowchartOpArray = FlowchartOp::LoadAll(QQ::Clause(QQ::OrderBy(QQN::FlowchartOp()->Id, false)));
			$this->txtSearch->Text = '';
			$this->dtgFlowchartOp->Refresh();
		}
		
		protected function dtgFlowchartOp_Create (){
			$this->dtgFlowchartOp = new QDataGrid($this);
			$this->dtgFlowchartOp->CssClass = 'table table-hover table-responsive';
			$this->dtgFlowchartOp->AddColumn(new QDataGridColumn('ID', '<?= $_ITEM->Id ?>'));
			$this->dtgFlowchartOp->AddColumn(new QDataGridColumn('REFERÊNCIA', '<?= $_FORM->GetReference($_ITEM) ?>'));
			$this->dtgFlowchartOp->AddColumn(new QDataGridColumn('EMISSÃO', '<?= substr($_ITEM->Date, 0, 10) ?>'));
			$this->dtgFlowchartOp->AddColumn(new QDataGridColumn('OP', '<?= $_ITEM->ProductionOrder ?>'));
			$this->dtgFlowchartOp->AddColumn(new QDataGridColumn('QUANT.', '<?= $_FORM->GetTotal($_ITEM) ?>'));
			$this->dtgFlowchartOp->AddColumn(new QDataGridColumn('TEMPO', '<?= $_FORM->GetTime($_ITEM) ?>'));
			$this->dtgFlowchartOp->AddColumn(new QDataGridColumn('OPÇÕES', '<?= $_FORM->PrintFlowchartOp($_ITEM) ?>', 'HtmlEntities=False'));
			$this->dtgFlowchartOp->SetDataBinder('dtgFlowchartOp_Bind');
		}
		
		protected function dtgFlowchartOp_Bind(){
			$this->dtgFlowchartOp->DataSource = $this->objFlowchartOpArray;
		}		
		
		public function GetReference($objFlowchartOp){
			$objFlowchartArray = $objFlowchartOp->GetFlowchartArray();
			if(count($objFlowchartArray)> 0){
				$objFlowchart = $objFlowchartArray[0];
				return $objFlowchart->Reference->Name;
			}
			return 'N/A';
		}
		
		public function GetTotal($objFlowchartOp){
			$intTotal = 0;
			foreach (FlowchartGrid::LoadArrayByFlowchartOpId($objFlowchartOp->Id) as $objFlowchartGrid)
				$intTotal+= $objFlowchartGrid->Amount;
			return $intTotal;
		}
		
		public function GetTotalByColor(FlowchartTime $objFlowchartTime){
			$intTotal = 0;
			foreach (FlowchartGrid::LoadArrayByColorIdFlowchartOpId($objFlowchartTime->ColorId, $objFlowchartTime->FlowchartOpId) as $objFlowchartGrid){
				$intTotal+=$objFlowchartGrid->Amount;
			}
			return $intTotal;
				
		}
		
		public function GetTime($objFlowchartOp){
			$intTotal = 0;
			foreach ($objFlowchartOp->GetFlowchartArray() as $objFlowchart)
				$intTotal+= $objFlowchart->Time;
			return gmdate("H:i:s", $intTotal);
		}
		
		public function PrintFlowchartOp($objFlowchartOp){
			$lblPrint = new QLabel($this->dtgFlowchartOp);
			$lblPrint->Text = '<i class="glyphicon glyphicon-print"></i>';
			$lblPrint->CssClass = 'btn btn-default';
			$lblPrint->HtmlEntities = false;
			
			$strHtml = '<div class="btn-group">'
				. '<button type="button" '.$this->pxyPrint->RenderAsEvents($objFlowchartOp->Id, false).' class="btn btn-default"><i class="glyphicon glyphicon-print"></i></button>'
				. '<a class="btn btn-default" href="flowchart_time_by_flowchart_op.php?flowchart_op_id='.$objFlowchartOp->Id.'"><i class="glyphicon glyphicon-time"></i></a>'
				. '</div>';
			
			
			return $strHtml;//$lblPrint->Render(false);
		}
		
		protected function pxyPrint_Create(){
			$this->pxyPrint = new QControlProxy($this);
			$this->pxyPrint->AddAction(new QClickEvent(), new QServerAction('pxyPrint_Click'));
		}
		
		protected function pxyPrint_Click($strFormId, $strControlId, $strParameter){
			require_once __DOCROOT__.'/report/flowchart_op.php';
			FlowchartOpPrint($this, FlowchartOp::Load($strParameter));
		}

		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			//print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'catalog.css'));
			//print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'flowchart_op_create.js'));
		}		
		
	}
	
	FlowchartsOpListForm::Run('FlowchartsOpListForm', 'tpl/flowchart_op_list.tpl.php');

?>