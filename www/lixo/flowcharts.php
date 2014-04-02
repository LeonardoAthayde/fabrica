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
			$this->txtSearchFlowchart_Create();
			$this->btnSearchFlowchart_Create();
			
			$this->pnlFlowchart_Create();
			$this->dtgFlowchart_Create();
			
		}
		
		protected function txtSearchFlowchart_Create(){
			$this->txtSearchFlowchart = new QTextBox($this);
			$strJavaScript = '';
			foreach (Reference::LoadAll() as $objReference)
				$strJavaScript.= ", {value:'".$objReference."', data: '".$objReference."'}";
			$strJavaScript=  substr($strJavaScript, 1);
			QApplication::ExecuteJavaScript("$('#".$this->txtSearchFlowchart->ControlId."').autocomplete( {lookup: [".$strJavaScript."]});");		
		}
		
		protected function btnSearchFlowchart_Create(){
			$this->btnSearchFlowchart = new QButton($this);
			$this->btnSearchFlowchart->Text = 'Pesquisar';
			$this->btnSearchFlowchart->AddAction(new QClickEvent(), new QAjaxAction('btnSearchFlowchart_Click'));
		}
		
		protected function btnSearchFlowchart_Click($strFormId, $strControlId, $strParameter){
			$this->objFlowchartArray = Flowchart::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::Flowchart()->Reference->ReferenceCategory->Name, substr($this->txtSearchFlowchart->Text, 0, 3)),
					QQ::Equal(QQN::Flowchart()->Reference->Model, substr($this->txtSearchFlowchart->Text, 3, 3))));
			$this->pnlFlowchart->Refresh();
		}
		
		
		protected function pnlFlowchart_Create(){
			$this->pnlFlowchart = new QPanel($this);
			$this->pnlFlowchart->Template = __DOCROOT__.'/control/tpl/pnl_Flowchart.tpl.php';
		}
		
		protected function dtgFlowchart_Create (){
			$this->dtgFlowchart = new QDataGrid($this->pnlFlowchart);
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('', '<?= $_ITEM->Order ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('fluxograma', '<?= $_ITEM->Actions ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('maquina', '<?= $_ITEM->Machine->MachineKind ?> (<?= $_ITEM->Machine->Name ?>)'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('tempo', '<?= $_ITEM->Time ?>'));
			$this->dtgFlowchart->SetDataBinder('dtgFlowchart_Bind');
		}
		
		protected function dtgFlowchart_Bind(){
			$this->dtgFlowchart->DataSource = $this->objFlowchartArray;
		}
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			//print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'catalog.css'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'flowcharts.js'));
		}		
		
	}
	
	FlowchartsForm::Run('FlowchartsForm', 'tpl/flowcharts.tpl.php');

?>