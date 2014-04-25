<?php

	require 'base.php';
	
	class FluxogramaEditarForm extends BaseForm {
	
		public $txtSearchFlowchart;
		protected $btnSearchFlowchart;
		
		protected $lstFluxogramaAcoes;
		protected $lstMaquina;
		protected $txtTempo;
		protected $btnAdd;
		
		protected $dtgFlowchart;
		public $pxyDesactve;
		
		protected $objReferencia;
		public $objFlowchartArray = array();
		
		protected function Form_Create() {
			parent::Form_Create();
			
			//$objArrayFluxogramaItemFinal = FluxogramaItem::QueryArray(QQ::AndCondition(
			//			QQ::Equal(QQN::FluxogramaItem()->FluxogramaItemAsFluxogramaDepedencia->Pai, null),
			//			QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, 1)));

			//foreach ($objArrayFluxogramaItemFinal as $obj)
			//	QApplication::DisplayAlert ($obj->Id);
			
			//QApplication::DisplayAlert(count($objArrayFluxogramaItemFinal));
			
			//$objFluxogramaItem = FluxogramaItem::Load(3);
			//QApplication::DisplayAlert('Possui filhos '.count($objFluxogramaItem->GetFluxogramaItemAsFluxogramaDepedenciaArray()));
			
			//foreach ($objFluxogramaItem->GetFluxogramaItemAsFluxogramaDepedenciaArray() as $obj)
			//	QApplication::DisplayAlert ($obj->Id);
			
			//$objFluxogramaItem = FluxogramaItem::Load(3);
			//QApplication::DisplayAlert('Possui pais '.count($objFluxogramaItem->GetParentFluxogramaItemAsFluxogramaDepedenciaArray()));			
			
			//foreach ($objFluxogramaItem->GetParentFluxogramaItemAsFluxogramaDepedenciaArray()as $obj)
			//	QApplication::DisplayAlert ($obj->Id);
			
			
			//$objFluxogramaItemReal = FluxogramaItemReal::Load(626);
			//QApplication::DisplayAlert(count($objFluxogramaItemReal->GetFluxogramaItemRealArray()));
			
			$this->txtSearchFlowchart_Create();
			$this->btnSearchFlowchart_Create();
			
			$this->lstFluxogramaAcoes_Create();
			$this->lstMaquina_Create();
			$this->txtTempo_Create();
			$this->btnAdd_Create();
			
			$this->dtgFlowchart_Create();
			$this->pxyDesactve_Create();
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
			$this->objReferencia = Referencia::LoadByNome($this->txtSearchFlowchart->Text);
			if(!$this->objReferencia){
				QApplication::DisplayAlert('Referência não encontrada');
				$this->lstFluxogramaAcoes->Display = false;
				$this->lstMaquina->Display = false;
				$this->txtTempo->Display = false;
				$this->btnAdd->Display = false;
			} else {
				
				//$intCount = OrdemProducaoGrade::QueryCount(QQ::AndCondition(
				//	QQ::Equal(QQN::OrdemProducaoGrade()->OrdemProducao->ReferenciaId, $this->objReferencia->Id),
				//	QQ::Equal(QQN::OrdemProducaoGrade()->BalancoPecas->Concluido, false)
				//	));
				
				//if($intCount > 0){
				//	QApplication::DisplayAlert('Para Editar o Fluxograma não pode ter nenhuma peça dessa referência no marquinário');
				//	$this->lstFluxogramaAcoes->Display = false;
				//	$this->lstMaquina->Display = false;
				//	$this->txtTempo->Display = false;
				//	$this->btnAdd->Display = false;
				//	$this->objReferencia = null;
				//} else {
					$this->lstFluxogramaAcoes->Display = true;
					$this->lstMaquina->Display = true;
					$this->txtTempo->Display = true;
					$this->btnAdd->Display = true;
				//}
				
			}
			$this->dtgFlowchart->Refresh();
		}
		
		// Controls for register fluxograma item
		protected function lstFluxogramaAcoes_Create(){
			$this->lstFluxogramaAcoes = new QListBox($this);
			$this->lstFluxogramaAcoes->CssClass = 'form-control input-lg';
			$this->lstFluxogramaAcoes->Required = true;
			$this->lstFluxogramaAcoes->Display = false;
			
			$this->lstFluxogramaAcoes->AddItem('Selecione uma ação ==>');
			foreach (FluxogramaAcoes::LoadAll() as $objFluxogramaAcoes)
				$this->lstFluxogramaAcoes->AddItem($objFluxogramaAcoes->Nome, $objFluxogramaAcoes->Id);			
		}
		
		protected function lstMaquina_Create(){
			$this->lstMaquina = new QListBox($this);
			$this->lstMaquina->CssClass = 'form-control input-lg';
			$this->lstMaquina->Required = true;
			$this->lstMaquina->Display = false;
			
			$this->lstMaquina->AddItem('Selecione uma maquina ==>');
			foreach (Maquina::LoadAll() as $objMaquina)
				$this->lstMaquina->AddItem($objMaquina->Nome, $objMaquina->Id);			
		}
		
		
		protected function txtTempo_Create(){
			$this->txtTempo = new QIntegerTextBox($this);
			$this->txtTempo->Minimum = 0;
			$this->txtTempo->Required = true;
			$this->txtTempo->CssClass = 'form-control input-lg';
			$this->txtTempo->Display = false;
			$this->txtTempo->SetCustomAttribute('placeholder', 'Tempo');	
		}
		
		
		protected function btnAdd_Create(){
			$this->btnAdd = new QLinkButton($this);
			$this->btnAdd->Text = '<span class="glyphicon glyphicon-plus"></span>';
			$this->btnAdd->CssClass = 'btn btn-default btn-lg';
			$this->btnAdd->Height = 46;
			$this->btnAdd->Display = false;
			$this->btnAdd->HtmlEntities = false;
			$this->btnAdd->CausesValidation = true;
			$this->btnAdd->AddAction(new QClickEvent(), new QAjaxAction('btnAdd_Click'));
		}
		
		protected function btnAdd_Click($strFormId, $strControlId, $strParameter){
			$objFluxogramaItem = new FluxogramaItem();
			$objFluxogramaItem->FluxogramaAcoesId = $this->lstFluxogramaAcoes->SelectedValue;
			$objFluxogramaItem->MaquinaId = $this->lstMaquina->SelectedValue;
			//$objFluxogramaItem->Ordenacao = $this->GetOrdenacao();
			$objFluxogramaItem->ReferenciaId = $this->objReferencia->Id;
			$objFluxogramaItem->Tempo = $this->txtTempo->Text;
			$objFluxogramaItem->Profundidade = 0;
			$objFluxogramaItem->Save();
			
			$this->lstFluxogramaAcoes->SelectedIndex = 0;
			$this->lstMaquina->SelectedIndex = 0;
			$this->txtTempo->Text = '';
			
			$this->dtgFlowchart->Refresh();
		}
		
		/*protected function GetOrdenacao(){
			$objFluxogramaItem = FluxogramaItem::QuerySingle(QQ::AndCondition(QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $this->objReferencia->Id), QQ::Equal(QQN::FluxogramaItem()->Ativo, true)), QQ::Clause (QQ::OrderBy(QQN::FluxogramaItem()->Ordenacao, false)));
			if($objFluxogramaItem)
				return $objFluxogramaItem->Ordenacao+1;
			else
				return 1;
		}*/
		

		
		protected function dtgFlowchart_Create (){
			$this->dtgFlowchart = new QDataGrid($this);
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Profundidade', '<?= $_ITEM->Profundidade ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Id', '<?= $_ITEM->Id ?>'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Depedencia', '<?= $_FORM->Render_Depedencia($_ITEM) ?>', 'HtmlEntities=false'));			
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('fluxograma', '<?= $_FORM->Render_FluxogramaAcao($_ITEM) ?>', 'HtmlEntities=false'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('maquina', '<?= $_FORM->Render_Maquina($_ITEM) ?>', 'HtmlEntities=false'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('tempo', '<?= $_FORM->Render_Tempo($_ITEM) ?>', 'HtmlEntities=false'));
			$this->dtgFlowchart->AddColumn(new QDataGridColumn('Ação', '<button <?= $_FORM->pxyDesactve->RenderAsEvents($_ITEM->Id, false) ?> type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove"></span></button>', 'HtmlEntities=false'));
			/*$this->dtgFlowchart->AddColumn(new QDataGridColumn('tempo', '<?= gmdate("H:i:s", $_ITEM->Tempo) ?>'));*/
			$this->dtgFlowchart->SetDataBinder('dtgFlowchart_Bind');
			$this->dtgFlowchart->CssClass = 'table table-striped table-bordered';
		}
		
		protected function dtgFlowchart_Bind(){
			if($this->objReferencia){
				$this->objFlowchartArray = FluxogramaItem::LoadArrayByReferenciaId($this->objReferencia->Id, QQ::Clause(QQ::OrderBy(QQN::FluxogramaItem()->Profundidade), QQ::OrderBy(QQN::FluxogramaItem()->Id)));
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
				$btnDepedencia->AddAction(new QClickEvent(), new QAjaxAction('btnDepedencia_Click', $objWaitIconDepedencia));
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
		
		/*protected function UpdateProfundidade($objArrayFluxogramaItem, $intProfundidade){
			foreach ($objArrayFluxogramaItem as $objFluxogramaItem){
				QApplication::DisplayAlert($objFluxogramaItem->Id." | ".$objFluxogramaItem->Profundidade.' < '.$intProfundidade);
				if($objFluxogramaItem->Profundidade < $intProfundidade){
					QApplication::DisplayAlert('entrou');
					$objFluxogramaItem->Profundidade = $intProfundidade;
					$objFluxogramaItem->Save();
				}
				$this->UpdateProfundidade($objFluxogramaItem->GetFluxogramaItemArray(), $intProfundidade+1);
			}
		}*/
			
		
		public function Render_FluxogramaAcao(FluxogramaItem $objFluxogramaItem){
			$objWaitIconFluxogramaAcao = $this->dtgFlowchart->GetChildControl('objWaitIconFluxogramaAcao'.$objFluxogramaItem->Id);
			if(!$objWaitIconFluxogramaAcao)
				$objWaitIconFluxogramaAcao = new QWaitIcon($this->dtgFlowchart, 'objWaitIconFluxogramaAcao'.$objFluxogramaItem->Id);
			
			$lstFluxogramaAcao = $this->dtgFlowchart->GetChildControl('lstFluxogramaAcao'.$objFluxogramaItem->Id);
			if(!$lstFluxogramaAcao){
				$lstFluxogramaAcao = new QListBox($this->dtgFlowchart, 'lstFluxogramaAcao'.$objFluxogramaItem->Id);
				$lstFluxogramaAcao->CssClass = 'form-control input-lg';
				$lstFluxogramaAcao->AddAction(new QChangeEvent(), new QAjaxAction('lstFluxogramaAcao_Change', $objWaitIconFluxogramaAcao));
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
		
		public function Render_Maquina(FluxogramaItem $objFluxogramaItem){
			$objWaitIconMaquina = $this->dtgFlowchart->GetChildControl('objWaitIconMaquina'.$objFluxogramaItem->Id);
			if(!$objWaitIconMaquina)
				$objWaitIconMaquina = new QWaitIcon($this->dtgFlowchart, 'objWaitIconMaquina'.$objFluxogramaItem->Id);
			
			$lstMaquina = $this->dtgFlowchart->GetChildControl('lstMaquina'.$objFluxogramaItem->Id);
			if(!$lstMaquina){
				$lstMaquina = new QListBox($this->dtgFlowchart, 'lstMaquina'.$objFluxogramaItem->Id);
				$lstMaquina->CssClass = 'form-control input-lg';
				$lstMaquina->AddAction(new QChangeEvent(), new QAjaxAction('lstMaquina_Change', $objWaitIconMaquina));
			}
			$lstMaquina->RemoveAllItems();
			foreach (Maquina::LoadAll() as $objMaquina)
				if($objFluxogramaItem->Maquina && $objMaquina->Id == $objFluxogramaItem->Maquina->Id)
					$lstMaquina->AddItem ($objMaquina->Nome, $objMaquina->Id, true);
				else	
					$lstMaquina->AddItem ($objMaquina->Nome, $objMaquina->Id);
			$lstMaquina->Display = false;
			$lstMaquina->ActionParameter = $objFluxogramaItem->Id.'#'.$lstMaquina->ControlId;
			
			$lblMaquina = $this->dtgFlowchart->GetChildControl('lblMaquina'.$objFluxogramaItem->Id);
			if(!$lblMaquina){
				$lblMaquina = new QLabel($this->dtgFlowchart, 'lblMaquina'.$objFluxogramaItem->Id);
				$lblMaquina->AddAction(new QClickEvent(), new QToggleDisplayAction($lblMaquina));
				$lblMaquina->AddAction(new QClickEvent(), new QToggleDisplayAction($lstMaquina));			
				$lblMaquina->Cursor = QCursor::Pointer;
				
			}
			$lblMaquina->Display = true;
			if($objFluxogramaItem->Maquina)
				$lblMaquina->Text = $objFluxogramaItem->Maquina->Nome;
			else
				$lblMaquina->Text = 'N/A';
			return	$lblMaquina->Render(false).
				$lstMaquina->Render(false).
				$objWaitIconMaquina->Render(false);
		}
		
		protected function lstMaquina_Change($strFormId, $strControlId, $strParameter){
			$arrParameter = split('#', $strParameter);
			$lstMaquina = $this->dtgFlowchart->GetChildControl($arrParameter[1]);
			
			$objFluxogramaItem = FluxogramaItem::Load($arrParameter[0]);
			$objFluxogramaItem->MaquinaId = $lstMaquina->SelectedValue;
			$objFluxogramaItem->Save();
			
			$this->dtgFlowchart->Refresh();
		}
		
		public function Render_Tempo(FluxogramaItem $objFluxogramaItem){
			$objWaitIconTempo = $this->dtgFlowchart->GetChildControl('objWaitIconTempo'.$objFluxogramaItem->Id);
			if(!$objWaitIconTempo)
				$objWaitIconTempo = new QWaitIcon($this->dtgFlowchart, 'objWaitIconTempo'.$objFluxogramaItem->Id);
			
			$txtTempo = $this->dtgFlowchart->GetChildControl('txtTempo'.$objFluxogramaItem->Id);
			if(!$txtTempo){
				$txtTempo = new QIntegerTextBox($this->dtgFlowchart, 'txtTempo'.$objFluxogramaItem->Id);
				$txtTempo->CssClass = 'form-control input-lg';
				$txtTempo->Minimum = 0;
				$txtTempo->AddAction(new QEnterKeyEvent(), new QAjaxAction('lstTempo_KeyUp', $objWaitIconTempo));			
			}
			$txtTempo->Display = false;
			$txtTempo->Text = $objFluxogramaItem->Tempo;
			$txtTempo->ActionParameter = $objFluxogramaItem->Id.'#'.$txtTempo->ControlId;
			
			$lblTempo = $this->dtgFlowchart->GetChildControl('lblTempo'.$objFluxogramaItem->Id);
			if(!$lblTempo){
				$lblTempo = new QLabel($this->dtgFlowchart, 'lblTempo'.$objFluxogramaItem->Id);
				$lblTempo->AddAction(new QClickEvent(), new QToggleDisplayAction($lblTempo));
				$lblTempo->AddAction(new QClickEvent(), new QToggleDisplayAction($txtTempo));			
				$lblTempo->Cursor = QCursor::Pointer;
				
			}
			$lblTempo->Display = true;
			$lblTempo->Text = gmdate("H:i:s", $objFluxogramaItem->Tempo);
			
			return	$lblTempo->Render(false).
				$txtTempo->Render(false).
				$objWaitIconTempo->Render(false);
		}
		
		protected function lstTempo_KeyUp($strFormId, $strControlId, $strParameter){
			$arrParameter = split('#', $strParameter);
			$txtTtempo = $this->dtgFlowchart->GetChildControl($arrParameter[1]);
			
			$objFluxogramaItem = FluxogramaItem::Load($arrParameter[0]);
			$objFluxogramaItem->Tempo = $txtTtempo->Text;
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
			/*$objArrayFluxogramaItem = FluxogramaItem::QueryArray(QQ::AndCondition(
				QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objFluxogramaItem->ReferenciaId),
				QQ::GreaterThan(QQN::FluxogramaItem()->Ordenacao, $objFluxogramaItem->Ordenacao)));
			foreach ($objArrayFluxogramaItem as $objFluxogramaItemGreater){
				$objFluxogramaItemGreater->Ordenacao--;
				$objFluxogramaItemGreater->Save();
			}
			$objFluxogramaItem->Ativo = false;
			$objFluxogramaItem->Save();*/
			
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