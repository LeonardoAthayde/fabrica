<?php

	require 'base.php';
	
	class FlowchartsOpCreateForm extends BaseForm {
		
		protected $txtProductionOrder;
		
		protected $dlgFlowChartAssn;
		protected $btnFlowChartAssn;
		protected $btnFlowChartShow;
		protected $dtgFlowchart;
		
		protected $dlgFlowChartGrid;
		protected $btnFlowChartGrid;
		protected $dtgFlowchartGrid;
		
		protected $btnSave;
		
		protected $pxyDeleteFlowchartGrid;
		
		
		protected $objFlowChartArray = array();
		protected $objFlowChartGridArray = array();
		
		protected function Form_Create() {
			$this->txtProductionOrder_Create();
			
			$this->dlgFlowChartAssn_Create();
			$this->btnFlowChartAssn_Create();
			$this->btnFlowChartShow_Create();
			$this->dtgFlowchart_Create();
			
			$this->dlgFlowChartGrid_Create();
			$this->btnFlowChartGrid_Create();;
			$this->dtgFlowchartGrid_Create();
			
			$this->pxyDeleteFlowchartGrid_Create();
			
			$this->btnSave_Create();
/*			$this->objFlowChartArray = Flowchart::LoadAll();
			
					$objDataGridRowStyle = new QDataGridRowStyle();
					$objDataGridRowStyle->CssClass = 'warning';
					
					foreach ($this->objFlowChartArray as $i => $objFlowChart){
						if(!$objFlowChart->Machine)
							$this->dtgFlowchart->OverrideRowStyle($i, $objDataGridRowStyle);			
					}
*/		}
		
		protected function txtProductionOrder_Create(){
			$this->txtProductionOrder = new QTextBox($this);
			$this->txtProductionOrder->CssClass = 'form-control';
			$this->txtProductionOrder->SetCustomAttribute('placeholder', 'ORDEM DE PRODUÇÃO');
			$this->txtProductionOrder->Required = true;
		}
		
		protected function dlgFlowChartAssn_Create(){
			$this->dlgFlowChartAssn = new QDialogBox($this);
			$this->dlgFlowChartAssn->HideDialogBox();
			$this->dlgFlowChartAssn->AutoRenderChildren = true;
			$this->dlgFlowChartAssn->CssClass = 'dialogbox';
			
			$txtReference = new QTextBox($this->dlgFlowChartAssn, 'txtReference');
			$txtReference->CssClass = 'form-control';
			$txtReference->SetCustomAttribute('placeholder', 'REFERÊNCIA');
			$txtReference->Required = true;
			$txtReference->RenderMethod = 'RenderWithName';
			
			$btnConfirm = new QButton($this->dlgFlowChartAssn);
			$btnConfirm->Text = 'CONFIRMAR';
			$btnConfirm->CssClass = 'btn btn-default';
			$btnConfirm->CausesValidation = $this->dlgFlowChartAssn;
			$btnConfirm->AddAction(new QClickEvent(), new QAjaxAction('btnConfirm_Click'));
		}		
		
		protected function btnConfirm_Click(){
			$txtReference = $this->dlgFlowChartAssn->GetChildControl('txtReference');
			$objReference = Reference::LoadByName($txtReference->Text);
			if($objReference) {
				$this->objFlowChartArray = Flowchart::LoadArrayByReferenceId($objReference->Id);
	
				if(count($this->objFlowChartArray) > 0) {
					$this->dlgFlowChartAssn->HideDialogBox();
					$this->btnFlowChartAssn->CssClass = 'btn btn-primary';
					$this->btnFlowChartAssn->Text = strtoupper($objReference->Name);
					$this->btnFlowChartShow->Enabled = true;
					$this->dtgFlowchart->Refresh();
					
					$objDataGridRowStyle = new QDataGridRowStyle();
					$objDataGridRowStyle->CssClass = 'warning';
					
					foreach ($this->objFlowChartArray as $intRowIndex => $objFlowChart) {
						if(!$objFlowChart->Machine)
							$this->dtgFlowchart->OverrideRowStyle($intRowIndex, $objDataGridRowStyle);

					}
					$txtReference->Text = '';
					
				} else
					QApplication::DisplayAlert ('FLUXOGRAMA VAZIO');				
				} else
					QApplication::DisplayAlert ('REFERÊNCIA INVÁLIDA');
		}
		
		protected function btnFlowChartAssn_Create(){
			$this->btnFlowChartAssn = new QButton($this);
			$this->btnFlowChartAssn->Text = 'NENHUM FLUXOGRAMA ENCONTRADO';
			$this->btnFlowChartAssn->CssClass = 'btn btn-warning';
			$this->btnFlowChartAssn->AddAction(new QClickEvent(), new QShowDialogBox($this->dlgFlowChartAssn));
		}
		
		
		protected function btnFlowChartShow_Create(){
			$this->btnFlowChartShow = new QButton($this);
			$this->btnFlowChartShow->Text = 'MOSTRAR FLUXOGRAMA';
			$this->btnFlowChartShow->CssClass = 'btn btn-primary';
			$this->btnFlowChartShow->Enabled = false;
			$this->btnFlowChartShow->SetCustomAttribute('data-toggle', 'collapse');
			$this->btnFlowChartShow->SetCustomAttribute('data-target', '#FlowChartShow');
		}
		
		protected function dtgFlowchart_Create (){
			$this->dtgFlowchart = new QDataGrid($this);
			$this->dtgFlowchart->CssClass = 'table table-hover table-responsive';
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('', '<?= $_ITEM->Order ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('fluxograma', '<?= $_ITEM->Actions ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('maquina', '<?= ($_ITEM->Machine)?$_ITEM->Machine->MachineKind." - ".$_ITEM->Machine->Name:"" ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('tempo', '<?= ($_ITEM->Time)?gmdate("H:i:s", $_ITEM->Time):"" ?>'));
			$this->dtgFlowchart->SetDataBinder('dtgFlowchart_Bind');
		}
		
		protected function dtgFlowchart_Bind(){
			$this->dtgFlowchart->DataSource = $this->objFlowChartArray;
		}	
		
		protected function dlgFlowChartGrid_Create(){
			$this->dlgFlowChartGrid = new QDialogBox($this);
			$this->dlgFlowChartGrid->HideDialogBox();
			$this->dlgFlowChartGrid->AutoRenderChildren = true;
			$this->dlgFlowChartGrid->CssClass = 'dialogbox';
			
			$lstColor = new QListBox($this->dlgFlowChartGrid, 'lstColor');
			$lstColor->AddItem('ESCOLHA UMA COR ==>');
			foreach (Color::LoadAll() as $objColor)
				$lstColor->AddItem ($objColor->Name, $objColor->Id);
			$lstColor->CssClass = 'form-control';
			$lstColor->Required = true;
			$lstColor->RenderMethod = 'RenderWithName';
			
			$lstSize = new QListBox($this->dlgFlowChartGrid, 'lstSize');
			$lstSize->AddItem('ESCOLHA UM TAMANHO ==>');
			foreach (Size::LoadAll() as $objSize)
				$lstSize->AddItem ($objSize->Value, $objSize->Id);
			$lstSize->CssClass = 'form-control';
			$lstSize->Required = true;
			$lstSize->RenderMethod = 'RenderWithName';
			
			$txtAmount = new QIntegerTextBox($this->dlgFlowChartGrid, 'txtAmount');
			$txtAmount->CssClass = 'form-control';
			$txtAmount->SetCustomAttribute('placeholder', 'QUANTIDADE');
			$txtAmount->Required = true;
			$txtAmount->RenderMethod = 'RenderWithName';
			
			$btnConfirmGrid = new QButton($this->dlgFlowChartGrid);
			$btnConfirmGrid->Text = 'CONFIRMAR';
			$btnConfirmGrid->CssClass = 'btn btn-default';
			$btnConfirmGrid->CausesValidation = $this->dlgFlowChartGrid;
			$btnConfirmGrid->AddAction(new QClickEvent(), new QAjaxAction('btnConfirmGrid_Click'));

		}
		
		protected function btnConfirmGrid_Click($strFormId, $strControlId, $strParameter){
			$lstColor = $this->dlgFlowChartGrid->GetChildControl('lstColor');
			$lstSize = $this->dlgFlowChartGrid->GetChildControl('lstSize');
			$txtAmount = $this->dlgFlowChartGrid->GetChildControl('txtAmount');
			$objFlowchartGrid = new FlowchartGrid();
			$objFlowchartGrid->ColorId = $lstColor->SelectedValue;
			$objFlowchartGrid->SizeId = $lstSize->SelectedValue;
			$objFlowchartGrid->Amount = $txtAmount->Text;
			array_push($this->objFlowChartGridArray, $objFlowchartGrid);
			$this->dtgFlowchartGrid->Refresh();
			$this->dlgFlowChartGrid->HideDialogBox();
			$this->btnFlowChartGrid->CssClass = 'btn btn-primary';
			
			$lstColor->SelectedIndex = 0;
			$lstSize->SelectedIndex = 0;
			$txtAmount->Text = '';
		}
		
		protected function btnFlowChartGrid_Create(){
			$this->btnFlowChartGrid = new QButton($this);
			$this->btnFlowChartGrid->Text = 'ADICIONAR UM ITEM DE GRADE';
			$this->btnFlowChartGrid->CssClass = 'btn btn-warning';
			$this->btnFlowChartGrid->AddAction(new QClickEvent(), new QShowDialogBox($this->dlgFlowChartGrid));
		}
		
		protected function dtgFlowchartGrid_Create (){
			$this->dtgFlowchartGrid = new QDataGrid($this);
			$this->dtgFlowchartGrid->CssClass = 'table table-hover table-responsive';
			$this->dtgFlowchartGrid->AddColumn(new QDataGridColumn('COR', '<?= $_ITEM->Color->Name ?>'));
			$this->dtgFlowchartGrid->AddColumn(new QDataGridColumn('TAMANHO', '<?= $_ITEM->Size->Value ?>'));
			$this->dtgFlowchartGrid->AddColumn(new QDataGridColumn('QUANTIDADE', '<?= $_ITEM->Amount ?>'));
			$this->dtgFlowchartGrid->AddColumn(new QDataGridColumn('OPÇÕES', '<?= $_FORM->RenderOptionsFlowchartGrid($_CONTROL->CurrentRowIndex) ?>', 'HtmlEntities=False'));
			$this->dtgFlowchartGrid->SetDataBinder('dtgFlowchartGrid_Bind');
		}
		
		protected function dtgFlowchartGrid_Bind(){
			$this->dtgFlowchartGrid->DataSource = $this->objFlowChartGridArray;
		}
		
		public function RenderOptionsFlowchartGrid($intIndexRow){
			$strHtml = '<a  href="#" class="btn btn-default" '.$this->pxyDeleteFlowchartGrid->RenderAsEvents($intIndexRow, false).' ><i class="glyphicon glyphicon-trash"></i> Excluir</a></div>';
			return $strHtml;
		}
		
		protected function pxyDeleteFlowchartGrid_Create(){
			$this->pxyDeleteFlowchartGrid = new QControlProxy($this);
			$this->pxyDeleteFlowchartGrid->AddAction(new QClickEvent(), new QAjaxAction('pxyDeleteFlowchartGrid_Click'));
		}
		
		protected function pxyDeleteFlowchartGrid_Click($strFormId, $strControlId, $strParameter){
			array_splice($this->objFlowChartGridArray, $strParameter, 1);
			$this->dtgFlowchartGrid->Refresh();
			if(count($this->objFlowChartGridArray)==0)
				$this->btnFlowChartGrid->CssClass = 'btn btn-warning';
		}
		
		protected function btnSave_Create(){
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = 'SALVAR';
			$this->btnSave->CssClass = 'btn btn-default';
			$this->btnSave->CausesValidation = true;
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
		}
		
		protected function btnSave_Click($strFormId, $strControlId, $strParameter){
			if(count($this->objFlowChartArray) > 0) {
				if(count($this->objFlowChartGridArray) > 0) {
					// save op
					$objFlowchartOp = new FlowchartOp();
					$objFlowchartOp->ProductionOrder = $this->txtProductionOrder->Text;
					$objFlowchartOp->Save();	
					// save grid
					foreach ($this->objFlowChartGridArray as $objFlowchartGrid){
						$objFlowchartGrid->FlowchartOpId = $objFlowchartOp->Id;
						$objFlowchartGrid->Save();
					}
					// make association with flowchart
					foreach ($this->objFlowChartArray as $objFlowChart) {
						$objFlowChart->AssociateFlowchartOp($objFlowchartOp);					
						// save flowchart time
						$objFlowchartGridArray = FlowchartGrid::LoadArrayByFlowchartOpId($objFlowchartOp->Id, 
							QQ::Clause(
								QQ::GroupBy(QQN::FlowchartGrid()->ColorId),
								QQ::Sum(QQN::FlowchartGrid()->Amount, "pecas")));
						
						foreach ($objFlowchartGridArray as $objFlowchartGrid){
							$objFlowchartTime = new FlowchartTime();
							$objFlowchartTime->ColorId = $objFlowchartGrid->ColorId;
							$objFlowchartTime->FlowchartId = $objFlowChart->Id;
							$objFlowchartTime->FlowchartOpId = $objFlowchartOp->Id;
							$objFlowchartTime->Amount = $objFlowchartGrid->GetVirtualAttribute('pecas');
							$objFlowchartTime->Save();
						}
					}
					
					QApplication::Redirect(__VIRTUAL_DIRECTORY__.'/flowchart_op_list.php');
				} else 
					QApplication::DisplayAlert ('PRECISA-SE DE UMA GRADE');
			} else 
				QApplication::DisplayAlert ('PRECISA-SE DE UM FLUXOGRAMA');
		}
				
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			//print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'catalog.css'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'flowchart_op_create.js'));
		}		
		
	}
	
	FlowchartsOpCreateForm::Run('FlowchartsOpCreateForm', 'tpl/flowchart_op_create.tpl.php');

?>