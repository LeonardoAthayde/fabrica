<?php

	require 'base.php';
	
	class FlowchartsForm extends BaseForm {
	
		public $txtSearchFlowchart;
		protected $btnSearchFlowchart;
		
		protected $pnlFlowchart;
		protected $dtgFlowchart;
		protected $lblTotal;
		
		public $objFlowchartArray = array();
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->txtSearchFlowchart_Create();
			$this->btnSearchFlowchart_Create();
			
			$this->pnlFlowchart_Create();
			$this->dtgFlowchart_Create();
			
		}
		
		protected function txtSearchFlowchart_Create(){
			$this->txtSearchFlowchart = new QTextBox($this);
			$this->txtSearchFlowchart->CssClass = 'form-control input-lg';
			$strJavaScript = '';
			foreach (Referencia::LoadAll() as $objReference)
				$strJavaScript.= ", {value:'".$objReference."', data: '".$objReference."'}";
			$strJavaScript=  substr($strJavaScript, 1);
			QApplication::ExecuteJavaScript("$('#".$this->txtSearchFlowchart->ControlId."').autocomplete( {lookup: [".$strJavaScript."]});");		
		}
		
		protected function btnSearchFlowchart_Create(){
			$this->btnSearchFlowchart = new QControlProxy($this);
			//$this->btnSearchFlowchart->Text = 'Pesquisar';
			$this->btnSearchFlowchart->AddAction(new QClickEvent(), new QAjaxAction('btnSearchFlowchart_Click'));
		}
		
		protected function btnSearchFlowchart_Click($strFormId, $strControlId, $strParameter){
			$this->objFlowchartArray = array();
			$objReferencia = Referencia::LoadByNome($this->txtSearchFlowchart->Text);
			if(!$objReferencia){
				QApplication::DisplayAlert('Referência não encontrada');
			} else {
				$this->objFlowchartArray = FluxogramaItem::QueryArray(QQ::Equal(QQN::FluxogramaItem()->Referencia->Nome, $this->txtSearchFlowchart->Text), QQ::Clause(QQ::OrderBy(QQN::FluxogramaItem()->Ordenacao)));
				
			}
			$this->pnlFlowchart->Refresh();
		}
		
		
		protected function pnlFlowchart_Create(){
			$this->pnlFlowchart = new QPanel($this);
			$this->pnlFlowchart->Template = __DOCROOT__.'/control/tpl/pnl_Flowchart.tpl.php';
		}
		
		protected function dtgFlowchart_Create (){
			$this->dtgFlowchart = new QDataGrid($this->pnlFlowchart);
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Ordem', '<?= $_ITEM->Ordenacao ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('fluxograma', '<?= $_ITEM->FluxogramaAcoes ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('maquina', '<?= $_ITEM->Maquina ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('tempo', '<?= gmdate("H:i:s", $_ITEM->Tempo) ?>'));
			$this->dtgFlowchart->SetDataBinder('dtgFlowchart_Bind');
			$this->dtgFlowchart->CssClass = 'table table-striped table-bordered';
		}
		
		protected function dtgFlowchart_Bind(){
			$this->dtgFlowchart->DataSource = $this->objFlowchartArray;
		}
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			//print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'catalog.css'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'jquery.autocomplete.min.js'));
		}		
		
	}
	
	FlowchartsForm::Run('FlowchartsForm', 'tpl/flowcharts.tpl.php');

?>