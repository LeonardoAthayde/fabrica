<?php

	require 'base.php';
	
	class FluxogramaEditarForm extends BaseForm {
	
		public $txtSearchFlowchart;
		protected $lstCor;
		protected $btnSearchFlowchart;
		
		protected $txtFluxogramaAcoes;
		protected $btnConfirm;
		protected $lstTempo;
		protected $btnAdd;
		
		protected $dtgFlowchart;
		public $pxyDesactve;
		
		protected $objReferencia;
		protected $objCor;
		protected $objFluxogramaAcoes;
		
		public $objFlowchartArray = array();
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->objDefaultWaitIcon = new QWaitIcon($this);
			$this->objDefaultWaitIcon->Text = '
				<div class="progress progress-striped active">
					<div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						<span class="sr-only">100% Complete</span>
					</div>
				</div>';			
			
			$this->txtSearchFlowchart_Create();
			$this->lstCor_Create();
			$this->btnSearchFlowchart_Create();
			
			$this->txtFluxogramaAcoes_Create();
			$this->btnConfirm_Create();
			$this->lstTempo_Create();
			$this->btnAdd_Create();
			
			$this->dtgFlowchart_Create();
			$this->pxyDesactve_Create();
		}
		
		protected function txtSearchFlowchart_Create(){
			$this->txtSearchFlowchart = new QTextBox($this);
			$this->txtSearchFlowchart->CssClass = 'form-control input-lg';
			$this->txtSearchFlowchart->SetCustomAttribute('placeholder', 'Referência');
			$this->txtSearchFlowchart_Fill();
		}
		
		protected function txtSearchFlowchart_Fill(){
			$strJavaScript = '';
			foreach (Referencia::LoadAll() as $objReference)
				$strJavaScript.= ", {value:'".$objReference."', data: '".$objReference."'}";
			$strJavaScript=  substr($strJavaScript, 1);
			QApplication::ExecuteJavaScript("$('#".$this->txtSearchFlowchart->ControlId."').autocomplete( {lookup: [".$strJavaScript."]});");			
		}
		
		protected function btnSearchFlowchart_Create(){
			$this->btnSearchFlowchart = new QControlProxy($this);
			$this->btnSearchFlowchart->AddAction(new QClickEvent(), new QAjaxAction('btnSearchFlowchart_Click'));
		}
		
		protected function btnSearchFlowchart_Click($strFormId, $strControlId, $strParameter){
			$this->objReferencia = Referencia::LoadByNome($this->txtSearchFlowchart->Text);
			if($this->objReferencia){
				$this->lstCor_Fill();
				$this->objCor = Cor::Load($this->lstCor->SelectedValue);
				$this->dtgFlowchart->Refresh();
				if($this->objFluxogramaAcoes)
					$this->btnAdd->Enabled = true;
			} else {
				QApplication::DisplayAlert ('Referência não encontrada');
				$this->objReferencia = null;
				$this->objCor = null;
				$this->btnAdd->Enabled = false;
				$this->lstCor_Fill();
			}
		}		
		
		protected function lstCor_Create(){
			$this->lstCor = new QListBox($this);
			$this->lstCor->CssClass = 'form-control input-lg';
			$this->lstCor->AddAction(new QChangeEvent(), new QAjaxAction('lstCor_Change'));
		}
		
		protected function lstCor_Fill(){
			$this->lstCor->RemoveAllItems();
			if($this->objReferencia){
				$this->lstCor->AddItem('NENHUMA COR');
				foreach ($this->objReferencia->GetCorArray() as $objCor)
					$this->lstCor->AddItem($objCor->Nome, $objCor->Id);
			}
		}		
		
		protected function lstCor_Change($strFormId, $strControlId, $strParameter){
			$this->objCor = Cor::Load($this->lstCor->SelectedValue);
			$this->dtgFlowchart->Refresh();
		}
		
		// Controls for register fluxograma item
		protected function txtFluxogramaAcoes_Create(){
			$this->txtFluxogramaAcoes = new QTextBox($this);
			$this->txtFluxogramaAcoes->CssClass = 'form-control input-lg';
			$this->txtFluxogramaAcoes->SetCustomAttribute('placeholder', 'Operação');
			$this->txtFluxogramaAcoes_Fill();
		}
		
		protected function txtFluxogramaAcoes_Fill(){
			$strJavaScript = '';
			foreach (FluxogramaAcoes::LoadAll() as $objFluxogramaAcoes)
				$strJavaScript.= ", {value:'".$objFluxogramaAcoes."', data: '".$objFluxogramaAcoes."'}";
			$strJavaScript=  substr($strJavaScript, 1);
			QApplication::ExecuteJavaScript("$('#".$this->txtFluxogramaAcoes->ControlId."').autocomplete( {lookup: [".$strJavaScript."]});");			
		}
		
		
		protected function btnConfirm_Create(){
			$this->btnConfirm = new QLinkButton($this);
			$this->btnConfirm->Text = '<pan class="glyphicon glyphicon-ok-circle"></span>';
			$this->btnConfirm->CssClass = 'btn btn-lg btn-default width100';
			$this->btnConfirm->HtmlEntities = false;
			$this->btnConfirm->AddAction(new QClickEvent(), new QAjaxAction('btnConfirm_Click'));
		}
		
		protected function btnConfirm_Click($strFormId, $strControlId){
			$this->objFluxogramaAcoes = FluxogramaAcoes::LoadByNome($this->txtFluxogramaAcoes->Text);
			if(!$this->objFluxogramaAcoes) {
				QApplication::DisplayAlert ('Operação Inválida');
				$this->btnAdd->Enabled = false;
			} else if($this->objReferencia)
				$this->btnAdd->Enabled = true;
			$this->lstTempo_Fill();			
		}
		
		
		protected function lstTempo_Create(){
			$this->lstTempo = new QListBox($this);
			$this->lstTempo->CssClass = 'form-control input-lg';
			$this->lstTempo_Fill();
		}
		
		protected function lstTempo_Fill(){
			$this->lstTempo->RemoveAllItems();
			$objFLuxogramaAcao = FluxogramaAcoes::LoadByNome($this->txtFluxogramaAcoes->Text);
			if(!$objFLuxogramaAcao)
				$this->lstTempo->AddItem('Confirme uma operação');
			else {
				$this->lstTempo->AddItem('Escolha um tempo');
				foreach (FluxogramaAcoesTempo::LoadArrayByFluxogramaAcoesId($objFLuxogramaAcao->Id) as $objFLuxogramaAcoesTempo)
					$this->lstTempo->AddItem(gmdate("H:i:s", $objFLuxogramaAcoesTempo->Tempo), $objFLuxogramaAcoesTempo->Id);
			}
		}
		
		protected function btnAdd_Create(){
			$this->btnAdd = new QLinkButton($this);
			$this->btnAdd->Text = '<span class="glyphicon glyphicon-plus"></span>';
			$this->btnAdd->CssClass = 'btn btn-default btn-lg';
			$this->btnAdd->Height = 46;
			$this->btnAdd->Enabled = false;
			$this->btnAdd->HtmlEntities = false;
			$this->btnAdd->CausesValidation = true;
			$this->btnAdd->AddAction(new QClickEvent(), new QAjaxAction('btnAdd_Click'));
		}
		
		protected function btnAdd_Click($strFormId, $strControlId, $strParameter){						
			$objFluxogramaItem = new FluxogramaItem();
			$objFluxogramaItem->FluxogramaAcoesId = $this->objFluxogramaAcoes->Id;
			$objFluxogramaItem->ReferenciaId = $this->objReferencia->Id;
			$objFluxogramaItem->CorId = ($this->objCor)?$this->objCor->Id:null;
			$objFluxogramaItem->FluxogramaAcoesTempoId = $this->lstTempo->SelectedValue;
			$objFluxogramaItem->Profundidade = 0;
			$objFluxogramaItem->Save();
			

			$this->txtFluxogramaAcoes->Text = '';
			$this->txtFluxogramaAcoes_Fill();
			$this->objFluxogramaAcoes = null;
			$this->lstTempo_Fill();
			$this->dtgFlowchart->Refresh();
		}
		
		

		
		protected function dtgFlowchart_Create (){
			$this->dtgFlowchart = new QDataGrid($this);
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Profundidade', '<?= $_ITEM->Profundidade ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Id', '<?= $_ITEM->Id ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Depedencia', '<?= $_FORM->Render_Depedencia($_ITEM) ?>', 'HtmlEntities=false'));			
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Operação', '<?= $_FORM->Render_FluxogramaAcao($_ITEM) ?>', 'HtmlEntities=false'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Maquina', '<?= ($_ITEM->FluxogramaAcoes->Maquina)?$_ITEM->FluxogramaAcoes->Maquina->Nome:"Manual" ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Tempo', '<?= $_FORM->Render_Tempo($_ITEM) ?>', 'HtmlEntities=false'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Ação', '<button <?= $_FORM->pxyDesactve->RenderAsEvents($_ITEM->Id, false) ?> type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove"></span></button>', 'HtmlEntities=false'));
			$this->dtgFlowchart->SetDataBinder('dtgFlowchart_Bind');
			$this->dtgFlowchart->CssClass = 'table table-striped table-bordered';
		}
		
		protected function dtgFlowchart_Bind(){
			$this->objFlowchartArray = array();
			if($this->objReferencia){
				$this->objFlowchartArray = FluxogramaItem::LoadArrayByReferenciaIdCorId($this->objReferencia->Id, $this->lstCor->SelectedValue, QQ::Clause(QQ::OrderBy(QQN::FluxogramaItem()->Profundidade), QQ::OrderBy(QQN::FluxogramaItem()->Id)));
				foreach ($this->objFlowchartArray as $intIndex => $objFluxogramaItem){
					$objRowStyle = new QDataGridRowStyle();
					if(count($objFluxogramaItem->GetFluxogramaItemAsFluxogramaDepedenciaArray()) == 0)
						$objRowStyle->CssClass = 'latest-action-flowchart';
					else
						$objRowStyle->CssClass = '';
					$this->dtgFlowchart->OverrideRowStyle($intIndex , $objRowStyle);
				}
				$this->dtgFlowchart->DataSource = $this->objFlowchartArray;
			}
		}
		
		public function Render_Depedencia(FluxogramaItem $objFluxogramaItem){
			$objWaitIconDepedencia = $this->dtgFlowchart->GetChildControl('objWaitIconDepedencia'.$objFluxogramaItem->Id);
			if(!$objWaitIconDepedencia)
				$objWaitIconDepedencia = new QWaitIcon($this->dtgFlowchart, 'objWaitIconDepedencia'.$objFluxogramaItem->Id);		

			$lstDepedencia = $this->dtgFlowchart->GetChildControl('lstDepedencia'.$objFluxogramaItem->Id);
			if(!$lstDepedencia){
				$lstDepedencia = new QListBox($this->dtgFlowchart, 'lstDepedencia'.$objFluxogramaItem->Id);
				$lstDepedencia->CssClass = 'form-control input-lg';
				$lstDepedencia->Height = 200;
				$lstDepedencia->SelectionMode = QSelectionMode::Multiple; 
			}
			$objAssociatedArray = $objFluxogramaItem->GetParentFluxogramaItemAsFluxogramaDepedenciaArray();	
			$lstDepedencia->Display = false;
			$lstDepedencia->RemoveAllItems();
			foreach (FluxogramaItem::QueryArray(QQ::AndCondition(
							QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objFluxogramaItem->ReferenciaId),
							QQ::Equal(QQN::FluxogramaItem()->CorId, $objFluxogramaItem->CorId),
							QQ::NotEqual(QQN::FluxogramaItem()->Id, $objFluxogramaItem->Id))) as $objFluxogramaItemRef){
				
				if($this->CheckIsValidUpdateInterface($objFluxogramaItem, $objFluxogramaItemRef->Id)){
				
					$objListItem = new QListItem($objFluxogramaItemRef->Id.' | '.$objFluxogramaItemRef->FluxogramaAcoes->Nome , $objFluxogramaItemRef->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objFluxogramaItemRef->Id)
							$objListItem->Selected = true;
					}
					$lstDepedencia->AddItem ($objListItem);
				}
			}
			
			$btnDepedencia = $this->dtgFlowchart->GetChildControl('btnDepedencia'.$objFluxogramaItem->Id);
			if(!$btnDepedencia) {
				$btnDepedencia = new QButton($this->dtgFlowchart, 'btnDepedencia'.$objFluxogramaItem->Id);
				$btnDepedencia->Text = 'Salvar';
				$btnDepedencia->CssClass = 'btn btn-default btn-lg';
				$btnDepedencia->ActionParameter = $objFluxogramaItem->Id.'#'.$lstDepedencia->ControlId;
				$btnDepedencia->AddAction(new QClickEvent(), new QAjaxAction('btnDepedencia_Click'));
			}
			$btnDepedencia->Display = false;
			
			$lblDepedencia = $this->dtgFlowchart->GetChildControl('lblDepedencia'.$objFluxogramaItem->Id);
			if(!$lblDepedencia){
				$lblDepedencia = new QLabel($this->dtgFlowchart, 'lblDepedencia'.$objFluxogramaItem->Id);
				$lblDepedencia->AddAction(new QClickEvent(), new QToggleDisplayAction($lblDepedencia));
				$lblDepedencia->AddAction(new QClickEvent(), new QToggleDisplayAction($lstDepedencia));
				$lblDepedencia->AddAction(new QClickEvent(), new QToggleDisplayAction($btnDepedencia));
				$lblDepedencia->Cursor = QCursor::Pointer;
				
			}
			$lblDepedencia->Display = true;
			$lblDepedencia->Text = '';
			if(count($objAssociatedArray) == 0)
				$lblDepedencia->Text = 'Nenhuma Depedência';
			
			else
				foreach ($objAssociatedArray as $objAssociated)
					$lblDepedencia->Text.= $objAssociated->Id.', ';
					
			return	$lblDepedencia->Render(false).
				$lstDepedencia->Render(false).
				$btnDepedencia->Render(false).
				$objWaitIconDepedencia->Render(false);
		}
		
		public function btnDepedencia_Click($strFormId, $strControlId, $strParameter){
			$arrParameter = split('#', $strParameter);
			$lstDepedencia = $this->dtgFlowchart->GetChildControl($arrParameter[1]);
			$objSelectedListItems = $lstDepedencia->SelectedItems;
			
			$objFluxogramaItem = FluxogramaItem::Load($arrParameter[0]);
			//is valid update
			if($this->CheckIsValidUpdate($objFluxogramaItem, $objSelectedListItems)){
				// update
				$objFluxogramaItem->UnassociateAllParentFluxogramaItemsAsFluxogramaDepedencia();
				$objSelectedListItems = $lstDepedencia->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) 
					$objFluxogramaItem->AssociateParentFluxogramaItemAsFluxogramaDepedencia(FluxogramaItem::Load($objListItem->Value));
				
				
				$objArrayFluxogramaItemRoot = FluxogramaItem::QueryArray(QQ::AndCondition(
					QQ::Equal(QQN::FluxogramaItem()->ParentFluxogramaItemAsFluxogramaDepedencia->FluxogramaItem->Id, null),
					QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objFluxogramaItem->ReferenciaId)));

				foreach (FluxogramaItem::LoadArrayByReferenciaId($objFluxogramaItem->ReferenciaId) as $objFluxogramaItemRef){
					$objFluxogramaItemRef->Profundidade = 0;
					$objFluxogramaItemRef->Save();
				}
					
				$this->UpdateProfundidade($objArrayFluxogramaItemRoot, 0);
			} else
				QApplication::DisplayAlert ('Atualização Não pode ser Salva, pois as depedência formariam em um ciclo.');
			
			$this->dtgFlowchart->Refresh();
		}
		
		protected function CheckIsValidUpdateInterface(FluxogramaItem $objFluxogramaItem, $intFindId){
			foreach ($objFluxogramaItem->GetFluxogramaItemAsFluxogramaDepedenciaArray() as $objFluxogramaItemParent){
				if($intFindId == $objFluxogramaItemParent->Id)
					return false;
				if(!$this->CheckIsValidUpdateInterface($objFluxogramaItemParent, $intFindId))
					return false;
			}
			return true;
		}
		
		protected function CheckIsValidUpdate(FluxogramaItem $objFluxogramaItem, $objSelectedListItems){
			foreach ($objFluxogramaItem->GetFluxogramaItemAsFluxogramaDepedenciaArray() as $objFluxogramaItemParent){
				if ($objSelectedListItems) 
					foreach ($objSelectedListItems as $objListItem) 
						if($objListItem->Value == $objFluxogramaItemParent->Id)
							return false;
				
				if(!$this->CheckIsValidUpdate($objFluxogramaItemParent, $objSelectedListItems))
					return false;
			}
			return true;
		}
		
		protected function UpdateProfundidade($objArrayFluxogramaItem, $intProfundidade){
			foreach ($objArrayFluxogramaItem as $objFluxogramaItem){
				// realizar coerencia do objeto com o banco de dados
				$objFluxogramaItem = FluxogramaItem::Load($objFluxogramaItem->Id);
				if($objFluxogramaItem->Profundidade < $intProfundidade){
					$objFluxogramaItem->Profundidade = $intProfundidade;
					$objFluxogramaItem->Save();
				}
				$this->UpdateProfundidade($objFluxogramaItem->GetFluxogramaItemAsFluxogramaDepedenciaArray(), $intProfundidade+1);
			}
		}		
			
		
		public function Render_FluxogramaAcao(FluxogramaItem $objFluxogramaItem){
			$objWaitIconFluxogramaAcao = $this->dtgFlowchart->GetChildControl('objWaitIconFluxogramaAcao'.$objFluxogramaItem->Id);
			if(!$objWaitIconFluxogramaAcao)
				$objWaitIconFluxogramaAcao = new QWaitIcon($this->dtgFlowchart, 'objWaitIconFluxogramaAcao'.$objFluxogramaItem->Id);
			
			$lstFluxogramaAcao = $this->dtgFlowchart->GetChildControl('lstFluxogramaAcao'.$objFluxogramaItem->Id);
			if(!$lstFluxogramaAcao){
				$lstFluxogramaAcao = new QListBox($this->dtgFlowchart, 'lstFluxogramaAcao'.$objFluxogramaItem->Id);
				$lstFluxogramaAcao->CssClass = 'form-control input-lg';
				$lstFluxogramaAcao->AddAction(new QChangeEvent(), new QAjaxAction('lstFluxogramaAcao_Change'));
			}
			$lstFluxogramaAcao->RemoveAllItems();
			foreach (FluxogramaAcoes::LoadAll() as $objFluxogramaAcoes)
				if($objFluxogramaAcoes->Id == $objFluxogramaItem->FluxogramaAcoes->Id)
					$lstFluxogramaAcao->AddItem ($objFluxogramaAcoes->Nome, $objFluxogramaAcoes->Id, true);
				else	
					$lstFluxogramaAcao->AddItem ($objFluxogramaAcoes->Nome, $objFluxogramaAcoes->Id);
			$lstFluxogramaAcao->Display = false;
			$lstFluxogramaAcao->ActionParameter = $objFluxogramaItem->Id.'#'.$lstFluxogramaAcao->ControlId;
			
			
			
			$lblFluxogramaAcao = $this->dtgFlowchart->GetChildControl('lblFluxogramaAcao'.$objFluxogramaItem->Id);
			if(!$lblFluxogramaAcao){
				$lblFluxogramaAcao = new QLabel($this->dtgFlowchart, 'lblFluxogramaAcao'.$objFluxogramaItem->Id);
				$lblFluxogramaAcao->AddAction(new QClickEvent(), new QToggleDisplayAction($lblFluxogramaAcao));
				$lblFluxogramaAcao->AddAction(new QClickEvent(), new QToggleDisplayAction($lstFluxogramaAcao));			
				$lblFluxogramaAcao->Cursor = QCursor::Pointer;
				
			}
			$lblFluxogramaAcao->Display = true;
			$lblFluxogramaAcao->Text = $objFluxogramaItem->FluxogramaAcoes->Nome;
			
			return	$lblFluxogramaAcao->Render(false).
				$lstFluxogramaAcao->Render(false).
				$objWaitIconFluxogramaAcao->Render(false);
		}
		
		protected function lstFluxogramaAcao_Change($strFormId, $strControlId, $strParameter){
			$arrParameter = split('#', $strParameter);
			$lstFluxogramaAcao = $this->dtgFlowchart->GetChildControl($arrParameter[1]);
			
			$objFluxogramaItem = FluxogramaItem::Load($arrParameter[0]);
			$objFluxogramaItem->FluxogramaAcoesId = $lstFluxogramaAcao->SelectedValue;
			$objFluxogramaItem->Save();

			$this->dtgFlowchart->Refresh();
		}
		
		
		
		public function Render_Tempo(FluxogramaItem $objFluxogramaItem){
			$objWaitIconTempo = $this->dtgFlowchart->GetChildControl('objWaitIconTempo'.$objFluxogramaItem->Id);
			if(!$objWaitIconTempo)
				$objWaitIconTempo = new QWaitIcon($this->dtgFlowchart, 'objWaitIconTempo'.$objFluxogramaItem->Id);
			
			$txtTempo = $this->dtgFlowchart->GetChildControl('txtTempo'.$objFluxogramaItem->Id);
			if(!$txtTempo){
				$txtTempo = new QListBox($this->dtgFlowchart, 'txtTempo'.$objFluxogramaItem->Id);
				$txtTempo->CssClass = 'form-control input-lg';
				$txtTempo->AddAction(new QChangeEvent(), new QAjaxAction('lstTempo_Change'));			
			}
			$txtTempo->Display = false;
			$txtTempo->RemoveAllItems();
			foreach (FluxogramaAcoesTempo::LoadArrayByFluxogramaAcoesId($objFluxogramaItem->FluxogramaAcoesId) as $objFluxogramaAcoesTempo)
				if($objFluxogramaAcoesTempo->Id == $objFluxogramaItem->FluxogramaAcoesTempoId)
					$txtTempo->AddItem(gmdate("H:i:s", $objFluxogramaAcoesTempo->Tempo), $objFluxogramaAcoesTempo->Id, true);
				else	
					$txtTempo->AddItem (gmdate("H:i:s", $objFluxogramaAcoesTempo->Tempo), $objFluxogramaAcoesTempo->Id);
			$txtTempo->ActionParameter = $objFluxogramaItem->Id.'#'.$txtTempo->ControlId;
			
			$lblTempo = $this->dtgFlowchart->GetChildControl('lblTempo'.$objFluxogramaItem->Id);
			if(!$lblTempo){
				$lblTempo = new QLabel($this->dtgFlowchart, 'lblTempo'.$objFluxogramaItem->Id);
				$lblTempo->AddAction(new QClickEvent(), new QToggleDisplayAction($lblTempo));
				$lblTempo->AddAction(new QClickEvent(), new QToggleDisplayAction($txtTempo));			
				$lblTempo->Cursor = QCursor::Pointer;
				
			}
			$lblTempo->Display = true;
			if($objFluxogramaItem->FluxogramaAcoesTempoId)
				$lblTempo->Text = gmdate("H:i:s", $objFluxogramaItem->FluxogramaAcoesTempo->Tempo);
			
			return	$lblTempo->Render(false).
				$txtTempo->Render(false).
				$objWaitIconTempo->Render(false);
		}
		
		protected function lstTempo_Change($strFormId, $strControlId, $strParameter){
			$arrParameter = split('#', $strParameter);
			$txtTtempo = $this->dtgFlowchart->GetChildControl($arrParameter[1]);
			
			$objFluxogramaItem = FluxogramaItem::Load($arrParameter[0]);
			$objFluxogramaItem->FluxogramaAcoesTempoId = $txtTtempo->SelectedValue;
			$objFluxogramaItem->Save();
			
			$this->dtgFlowchart->Refresh();
		}		
		
		protected function pxyDesactve_Create(){
			$this->pxyDesactve = new QControlProxy($this);
			$this->pxyDesactve->AddAction(new QClickEvent(), new QConfirmAction('Tem certeza que deseja deletar!'));
			$this->pxyDesactve->AddAction(new QClickEvent(), new QAjaxAction('pxyDesactve_Click'));
		}
		
		protected function pxyDesactve_Click($strFormId, $strControlId, $strParameter){
			$objFluxogramaItem = FluxogramaItem::Load($strParameter);

			
			$objFluxogramaItem->Delete();
			$objArrayFluxogramaItemRoot = FluxogramaItem::QueryArray(QQ::AndCondition(
					QQ::Equal(QQN::FluxogramaItem()->ParentFluxogramaItemAsFluxogramaDepedencia->FluxogramaItem->Id, null),
					QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objFluxogramaItem->ReferenciaId)));
		
			foreach (FluxogramaItem::LoadArrayByReferenciaId($objFluxogramaItem->ReferenciaId) as $objFluxogramaItemRef){
				$objFluxogramaItemRef->Profundidade = 0;
				$objFluxogramaItemRef->Save();
			}
					
			$this->UpdateProfundidade($objArrayFluxogramaItemRoot, 0);			
			
			
			$this->dtgFlowchart->Refresh();
		}
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'fluxograma_editar.css'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'jquery.autocomplete.min.js'));
		}		
		
	}
	
	FluxogramaEditarForm::Run('FluxogramaEditarForm', 'tpl/fluxograma_editar.tpl.php');

?>