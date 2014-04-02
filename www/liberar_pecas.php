<?php

	require 'base.php';
	
	class LiberarPecasForm extends BaseForm {
	
		protected $dtgToReleased;
		protected $dtgReleased;
		
		protected $pxyRelease;
		protected $pxyBlock;
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->dtgToReleased_Create();
			$this->dtgReleased_Create();
			$this->pxyRelease_Create();
			$this->pxyBlock_Create();
			$this->SetPollingProcessor('LiberarPecasForm_Poling', $this, 1000 * 5);
		}
				
		protected function dtgToReleased_Create(){
			$this->dtgToReleased = new QDataGrid($this);
			$this->dtgToReleased->CssClass = 'table table-striped table-bordered table-hover';
			$this->dtgToReleased->AddColumn(new QDataGridColumn('Referência', '<?= $_ITEM->OrdemProducao->Referencia->Nome ?>'));
			$this->dtgToReleased->AddColumn(new QDataGridColumn('Tamanho', '<?= $_ITEM->Tamanho->Valor ?>'));
			$this->dtgToReleased->AddColumn(new QDataGridColumn('Cor', '<?= $_ITEM->Cor->Nome ?>'));
			$this->dtgToReleased->AddColumn(new QDataGridColumn('Quantidade', '<?= $_ITEM->Quantidade ?>'));
			$this->dtgToReleased->AddColumn(new QDataGridColumn('Ação', '<?= $_FORM->RenderRelease($_ITEM); ?>',  'HtmlEntities=false'));
			$this->dtgToReleased->SetDataBinder('dtgToReleased_Bind');
		}
		
		
		protected function dtgToReleased_Bind(){
			$objArrayOrdemProducaoGrade = OrdemProducaoGrade::LoadAll();
			$x = 0;
			foreach ($objArrayOrdemProducaoGrade as $i => $objOrdemProducaoGrade){
				if(count($objOrdemProducaoGrade->GetBalancoAcoesArray()) != 0){
					array_splice($objArrayOrdemProducaoGrade, $i-$x, 1);//unset ($objOrdemProducaoGrade);
					$x++;
				}
			}
			$this->dtgToReleased->DataSource = $objArrayOrdemProducaoGrade;
		}
		
		public function RenderRelease(OrdemProducaoGrade $objOrdemProducaoGrade){
			$strHtml = '<span class="btn btn-default" '.$this->pxyRelease->RenderAsEvents($objOrdemProducaoGrade->Id, false).'>LIBERAR</span>';
			return $strHtml;
		}
		
		protected function dtgReleased_Create(){
			$this->dtgReleased = new QDataGrid($this);
			$this->dtgReleased->CssClass = 'table table-striped table-bordered table-hover';
			$this->dtgReleased->AddColumn(new QDataGridColumn('Referência', '<?= $_ITEM->OrdemProducao->Referencia->Nome ?>'));
			$this->dtgReleased->AddColumn(new QDataGridColumn('Tamanho', '<?= $_ITEM->Tamanho->Valor ?>'));
			$this->dtgReleased->AddColumn(new QDataGridColumn('Cor', '<?= $_ITEM->Cor->Nome ?>'));
			$this->dtgReleased->AddColumn(new QDataGridColumn('Quantidade', '<?= $_ITEM->Quantidade ?>'));
			$this->dtgReleased->AddColumn(new QDataGridColumn('Ação', '<?= $_FORM->RenderBlock($_ITEM); ?>',  'HtmlEntities=false'));			
			$this->dtgReleased->SetDataBinder('dtgReleased_Bind');			
		}
		
		protected function dtgReleased_Bind(){
			$objArrayOrdemProducaoGrade = OrdemProducaoGrade::LoadAll();
			$x = 0;
			foreach ($objArrayOrdemProducaoGrade as $i => $objOrdemProducaoGrade){
				if(count($objOrdemProducaoGrade->GetBalancoAcoesArray()) == 0){
					array_splice($objArrayOrdemProducaoGrade, $i-$x, 1);//unset ($objOrdemProducaoGrade);
					$x++;
				} else {
					foreach ($objOrdemProducaoGrade->GetBalancoAcoesArray() as $objBalanAcoes){
						if($objBalanAcoes->QuantidadeRemetida > 0) {
							array_splice($objArrayOrdemProducaoGrade, $i-$x, 1);//unset ($objOrdemProducaoGrade);
							$x++;
							break;
						}
					}	
				}
			}
			$this->dtgReleased->DataSource = $objArrayOrdemProducaoGrade;
		}
		
		public function RenderBlock(OrdemProducaoGrade $objOrdemProducaoGrade){
			$strHtml = '<span class="btn btn-default" '.$this->pxyBlock->RenderAsEvents($objOrdemProducaoGrade->Id, false).'>BLOQUEAR</span>';
			return $strHtml;
		}	
		
		protected function pxyRelease_Create(){
			$this->pxyRelease = new QControlProxy($this);
			$this->pxyRelease->AddAction(new QClickEvent(), new QAjaxAction('pxyRelease_Click'));
		}
		
		protected function pxyRelease_Click($strFormId, $strControlId, $strParameter){
			$objOrdemProducaoGrade = OrdemProducaoGrade::Load($strParameter);
			
			$objBalancoAcoes = new BalancoAcoes();
			$objBalancoAcoes->OrdemProducaoGradeId = $objOrdemProducaoGrade->Id;
			$objBalancoAcoes->QuantidadeDisponivel = $objOrdemProducaoGrade->Quantidade;
			$objBalancoAcoes->QuantidadeRemetida = 0;
			$objBalancoAcoes->QuantidadeProduzida = 0;
			$objFluxogramaItem = FluxogramaItem::QuerySingle(QQ::AndCondition(QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objOrdemProducaoGrade->OrdemProducao->ReferenciaId), QQ::Equal(QQN::FluxogramaItem()->Ordenacao, 1)));
			if($objFluxogramaItem){
				$objBalancoAcoes->FluxogramaItemId = $objFluxogramaItem->Id;
				$objBalancoAcoes->Save();
				
				$this->dtgReleased->Refresh();
				$this->dtgToReleased->Refresh();
			} else {
				QApplication::DisplayAlert('Tem que cadastrar fluxograma para essa referencia');
			}
		}
		
		protected function pxyBlock_Create(){
			$this->pxyBlock = new QControlProxy($this);
			$this->pxyBlock->AddAction(new QClickEvent(), new QAjaxAction('pxyBlock_Click'));
		}
		
		protected function pxyBlock_Click($strFormId, $strControlId, $strParameter){
			$objOrdemProducaoGrade = OrdemProducaoGrade::Load($strParameter);
			
			foreach ($objOrdemProducaoGrade->GetBalancoAcoesArray() as $objBalancoAcoes)
				$objBalancoAcoes->Delete();
			
			$this->dtgReleased->Refresh();
			$this->dtgToReleased->Refresh();			
		}
		
		protected function LiberarPecasForm_Poling(){
			$this->dtgReleased->Refresh();
			$this->dtgToReleased->Refresh();		
		}
		
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			//print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'entrada_pecas.css'));
			//print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'jquery.autocomplete.min.js'));
		}		
		
	}
	
	LiberarPecasForm::Run('LiberarPecasForm', 'tpl/liberar_pecas.tpl.php');

?>