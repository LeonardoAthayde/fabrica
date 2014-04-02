<?php

	require 'base.php';
	
	class EntradaPecasForm extends BaseForm {
	
		protected $objReferencia;
		//protected $objPacote;
		
		public $txtSearchFlowchart;
		protected $pxySearchFlowchart;
		
		protected $lstProductionOrder;
		protected $dtgEntradaPecas;
		
		protected $lstColor;
		protected $lstSize;
		protected $txtAmount;
		protected $txtProductionOrder;
		protected $btnAdd;
				
		protected function Form_Create() {
			parent::Form_Create();
			$this->txtSearchFlowchart_Create();
			$this->pxySearchFlowchart_Create();
			$this->lstProductionOrder_Create();
			$this->dtgEntradaPecas_Create();
			
			$this->lstColor_Create();
			$this->lstSize_Create();
			$this->txtAmount_Create();
			$this->txtProductionOrder_Create();
			$this->btnAdd_Create();
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
		
		protected function pxySearchFlowchart_Create(){
			$this->pxySearchFlowchart = new QControlProxy($this);
			$this->pxySearchFlowchart->AddAction(new QClickEvent(), new QAjaxAction('pxySearchFlowchart_Click'));
		}
		
		protected function pxySearchFlowchart_Click($strFormId, $strControlId, $strParameter){
			$this->objReferencia = Referencia::LoadByNome($this->txtSearchFlowchart->Text);
			if(!$this->objReferencia){
				QApplication::DisplayAlert('Referência não encontrada');
				$this->lstProductionOrder->Display = false;
				$this->dtgEntradaPecas->Display = false;
				$this->lstColor->Display = false;
				$this->lstSize->Display = false;
				$this->btnAdd->Display = false;
				$this->txtAmount->Display = false;
				$this->txtProductionOrder->Display = false;
				$this->txtSearchFlowchart->Text = '';
			} else {
				$this->lstProductionOrder->Display = true;
				$this->dtgEntradaPecas->Display = true;
				$this->lstColor->Display = true;
				$this->lstSize->Display = true;	
				$this->btnAdd->Display = true;
				$this->txtAmount->Display = true;
				$this->txtProductionOrder->Display = true;
				$this->lstProductionOrder_Fill();
				$this->lstColor_Fill();
				$this->lstSize_Fill();
				//$this->objPacote = Pacote::Load($this->lstPacket->SelectedValue);
				$this->txtProductionOrder_Setting();
				$this->dtgEntradaPecas_Bind();
			}
		}
		
		protected function lstProductionOrder_Create(){
			$this->lstProductionOrder = new QListBox($this);
			$this->lstProductionOrder->CssClass = 'form-control input-lg';
			$this->lstProductionOrder->Display = false;
			$this->lstProductionOrder->AddAction(new QChangeEvent(), new QAjaxAction('lstProductionOrder_Change'));
		}
		
		protected function lstProductionOrder_Change($strFormId, $strControlId, $strParameter){
			//$this->objPacote = Pacote::Load($this->lstPacket->SelectedValue);
			$this->txtProductionOrder_Setting();
			$this->dtgEntradaPecas_Bind();
		}
		
		protected function lstProductionOrder_Fill(){
			$this->lstProductionOrder->RemoveAllItems();
			$this->lstProductionOrder->AddItem('Nova Ordem de Produção', null);
			foreach (OrdemProducao::LoadArrayByReferenciaId($this->objReferencia->Id, QQ::Clause(QQ::OrderBy(QQN::OrdemProducao()->Id, false), QQ::LimitInfo(5))) as $i => $objOrdemProducao){
				if($i == 0)
					$this->lstProductionOrder->AddItem($objOrdemProducao->Numero, $objOrdemProducao->Id, true);
				else
					$this->lstProductionOrder->AddItem($objOrdemProducao->Numero, $objOrdemProducao->Id);
			}
		}
		
		protected function dtgEntradaPecas_Create(){
			$this->dtgEntradaPecas = new QDataGrid($this);
			$this->dtgEntradaPecas->CssClass = 'table table-striped table-bordered table-hover';
			$this->dtgEntradaPecas->AddColumn(new QDataGridColumn('Ordem Producao', '<?= $_ITEM->OrdemProducao->Numero ?>'));
			$this->dtgEntradaPecas->AddColumn(new QDataGridColumn('Referência', '<?= $_ITEM->OrdemProducao->Referencia->Nome ?>'));
			$this->dtgEntradaPecas->AddColumn(new QDataGridColumn('Tamanho', '<?= $_ITEM->Tamanho->Valor ?>'));
			$this->dtgEntradaPecas->AddColumn(new QDataGridColumn('Cor', '<?= $_ITEM->Cor->Nome ?>'));
			$this->dtgEntradaPecas->AddColumn(new QDataGridColumn('Quantidade', '<?= $_ITEM->Quantidade ?>'));
			$this->dtgEntradaPecas->AddColumn(new QDataGridColumn('Data', '<?= $_ITEM->Date ?>'));
			$this->dtgEntradaPecas->SetDataBinder('dtgEntradaPecas_Bind');
			$this->dtgEntradaPecas->Display = false;
		}
		
		protected function dtgEntradaPecas_Bind(){
			if($this->objReferencia) {
				//$objOrdemProducao = OrdemProducao::LoadByReferenciaIdPacoteId($this->objReferencia->Id, $this->objPacote->Id);
				$objOrdemProducao = OrdemProducao::Load($this->lstProductionOrder->SelectedValue);
				if($objOrdemProducao)
					$this->dtgEntradaPecas->DataSource = OrdemProducaoGrade::LoadArrayByOrdemProducaoId($objOrdemProducao->Id);
				else
					$this->dtgEntradaPecas->DataSource = array();
					
			}
		}
		
		protected function lstColor_Create(){
			$this->lstColor = new QListBox($this);
			$this->lstColor->CssClass = 'form-control input-lg';
			$this->lstColor->Display = false;
			$this->lstColor->Required = true;
		}
		
		protected function lstColor_Fill(){
			$this->lstColor->RemoveAllItems();
			$objArrayCor = Cor::LoadArrayByReferencia($this->objReferencia->Id);
			$this->lstColor->AddItem('Selecione uma cor ==>');	
			foreach ($objArrayCor as $objCor)
				$this->lstColor->AddItem($objCor->Nome, $objCor->Id);
		}
		
		protected function lstSize_Create(){
			$this->lstSize = new QListBox($this);
			$this->lstSize->CssClass = 'form-control input-lg';
			$this->lstSize->Display = false;
			$this->lstSize->Required = true;
		}
		
		protected function lstSize_Fill(){
			$this->lstSize->RemoveAllItems();
			$objArraySize = Tamanho::LoadArrayByReferencia($this->objReferencia->Id);
			$this->lstSize->AddItem('Selecione um tamanho ==>');	
			foreach ($objArraySize as $objSize)
				$this->lstSize->AddItem($objSize->Valor, $objSize->Id);			
		}
		
		protected function txtAmount_Create(){
			$this->txtAmount = new QIntegerTextBox($this);
			$this->txtAmount->CssClass = 'form-control input-lg';
			$this->txtAmount->Display = false;
			$this->txtAmount->SetCustomAttribute('placeholder', 'Quantidade');
			$this->txtAmount->Minimum = 1;
			$this->txtAmount->Required = true;
		}
		
		protected function txtProductionOrder_Create(){
			$this->txtProductionOrder = new QTextBox($this);
			$this->txtProductionOrder->CssClass = 'form-control input-lg';
			$this->txtProductionOrder->Display = false;
			$this->txtProductionOrder->SetCustomAttribute('placeholder', 'Ordem Produção');
		}
		
		protected function txtProductionOrder_Setting(){
			$objOrdemProducao = OrdemProducao::Load($this->lstProductionOrder->SelectedValue);
			if($objOrdemProducao){
				$this->txtProductionOrder->Display = false;
				$this->txtProductionOrder->Required = false;
			} else {
				$this->txtProductionOrder->Display = true;
				$this->txtProductionOrder->Required = true;				
			}
			$this->txtProductionOrder->Text = '';
		}
		
		protected function btnAdd_Create(){
			$this->btnAdd = new QLinkButton($this);
			$this->btnAdd->Text = '<span class="glyphicon glyphicon-plus"></span>';
			$this->btnAdd->CssClass = 'btn btn-default btn-lg';
			$this->btnAdd->HtmlEntities = false;
			$this->btnAdd->Display = false;
			$this->btnAdd->AddAction(new QClickEvent(), new QAjaxAction('btnAdd_Click'));
			$this->btnAdd->CausesValidation = true;
		}
		
		protected function btnAdd_Click($strFormId, $strControlId, $strParameter){
			$objOrdemProducao = OrdemProducao::Load($this->lstProductionOrder->SelectedValue);
			if(!$objOrdemProducao){
				$objOrdemProducao = new OrdemProducao();
				$objOrdemProducao->Numero = $this->txtProductionOrder->Text;
				$objOrdemProducao->ReferenciaId = $this->objReferencia->Id;
				$objOrdemProducao->Save();
				$this->lstProductionOrder_Fill();
			}
			
			$objOrdemProducaoGrade = new OrdemProducaoGrade();
			$objOrdemProducaoGrade->CorId = $this->lstColor->SelectedValue;
			$objOrdemProducaoGrade->OrdemProducaoId = $objOrdemProducao->Id;
			$objOrdemProducaoGrade->TamanhoId = $this->lstSize->SelectedValue;
			$objOrdemProducaoGrade->Quantidade = $this->txtAmount->Text;
			$objOrdemProducaoGrade->Save();
			
			$objBalancoPecas = new BalancoPecas();
			$objBalancoPecas->OrdemProducaoGradeId = $objOrdemProducaoGrade->Id;
			$objBalancoPecas->Balanco = $this->txtAmount->Text;
			$objBalancoPecas->QuantidadeProduzida = 0;
			$objBalancoPecas->Concluido = false;
			$objBalancoPecas->Save();
			
			$this->lstColor_Fill();
			$this->lstSize_Fill();
			$this->txtAmount->Text = '';
			$this->txtProductionOrder_Setting();
			$this->dtgEntradaPecas_Bind();
		}
		
		protected function Form_Run() {
			parent::Form_Run();
			if($this->txtSearchFlowchart){
				$strJavaScript = '';
				foreach (Referencia::LoadAll() as $objReference)
					$strJavaScript.= ", {value:'".$objReference."', data: '".$objReference."'}";
				$strJavaScript=  substr($strJavaScript, 1);
				QApplication::ExecuteJavaScript("$('#".$this->txtSearchFlowchart->ControlId."').autocomplete( {lookup: [".$strJavaScript."]});");				
			}
		}
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'entrada_pecas.css'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'jquery.autocomplete.min.js'));
		}		
		
	}
	
	EntradaPecasForm::Run('EntradaPecasForm', 'tpl/entrada_pecas.tpl.php');

?>