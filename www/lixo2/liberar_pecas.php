<?php

	require 'base.php';
	
	class LiberarPecasForm extends BaseForm {
	
		protected $dtgToReleased;
		protected $dtgReleased;
		
		protected $pxyRelease;
		protected $pxyBlock;
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->objDefaultWaitIcon = new QWaitIcon($this);
			$this->objDefaultWaitIcon->Text = '
				<div class="progress progress-striped active">
					<div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						<span class="sr-only">100% Complete</span>
					</div>
				</div>';
			
			$this->dtgToReleased_Create();
			$this->dtgReleased_Create();
			$this->pxyRelease_Create();
			$this->pxyBlock_Create();
			$this->SetPollingProcessor('LiberarPecasForm_Poling', $this, 1000 * 60);
			
			
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
			
			$objArrayFluxogramaItemRoot = FluxogramaItem::QueryArray(QQ::AndCondition(
						QQ::Equal(QQN::FluxogramaItem()->ParentFluxogramaItemAsFluxogramaDepedencia->FluxogramaItem->Id, null),
						QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objOrdemProducaoGrade->OrdemProducao->ReferenciaId),
						QQ::Equal(QQN::FluxogramaItem()->CorId, $objOrdemProducaoGrade->CorId)));
						
			
			
			$objArrayFluxogramaItemFinal = FluxogramaItem::QueryArray(QQ::AndCondition(
						QQ::Equal(QQN::FluxogramaItem()->FluxogramaItemAsFluxogramaDepedencia->Pai, null),
						QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objOrdemProducaoGrade->OrdemProducao->ReferenciaId),
						QQ::Equal(QQN::FluxogramaItem()->CorId, $objOrdemProducaoGrade->CorId)));	
			
			
			if(count($objArrayFluxogramaItemFinal) > 1) {
				QApplication::DisplayAlert('O Fluxograma da referência não pode ter mais de dois finais: '.count($objArrayFluxogramaItemFinal));
				return;
			} else if (count($objArrayFluxogramaItemRoot) == 0){
				QApplication::DisplayAlert('O Fluxograma da referência precisa ter uma ação de inicio');
				return;
			}
			
			
			if(count($objOrdemProducaoGrade->GetBalancoAcoesArray()) == 0) {
				
				foreach (FluxogramaItem::LoadArrayByReferenciaIdCorId($objOrdemProducaoGrade->OrdemProducao->ReferenciaId, $objOrdemProducaoGrade->CorId) as $objFluxogramaItem){
					$objFluxogramaItemReal = new FluxogramaItemReal();
					$objFluxogramaItemReal->Referencia = $objFluxogramaItem->Referencia->Nome;
					$objFluxogramaItemReal->Acao = ($objFluxogramaItem->FluxogramaAcoes)?$objFluxogramaItem->FluxogramaAcoes->Nome:null;
					$objFluxogramaItemReal->Maquina = ($objFluxogramaItem->FluxogramaAcoes->Maquina)?$objFluxogramaItem->FluxogramaAcoes->Maquina->Nome:null;
					$objFluxogramaItemReal->Tempo = ($objFluxogramaItem->FluxogramaAcoesTempo)?$objFluxogramaItem->FluxogramaAcoesTempo->Tempo:null;
					$objFluxogramaItemReal->TempoExecucao = ($objFluxogramaItem->FluxogramaAcoesTempo)?$objFluxogramaItem->FluxogramaAcoesTempo->TempoExecucao:null;
					$objFluxogramaItemReal->Profundidade = $objFluxogramaItem->Profundidade;
					$objFluxogramaItemReal->FluxogramaItemModeloId = $objFluxogramaItem->Id;
					$objFluxogramaItemReal->Save();
					
					
					
					$objBalancoAcoes = new BalancoAcoes();
					$objBalancoAcoes->OrdemProducaoGradeId = $objOrdemProducaoGrade->Id;
					$objBalancoAcoes->QuantidadeDisponivel = 0;
					$objBalancoAcoes->QuantidadeRemetida = 0;
					$objBalancoAcoes->QuantidadeProduzida = 0;
					$objBalancoAcoes->FluxogramaItemRealId = $objFluxogramaItemReal->Id;
					
					foreach ($objArrayFluxogramaItemRoot as $objFluxogramaItemRoot)
						if($objFluxogramaItem->Id == $objFluxogramaItemRoot->Id)
							$objBalancoAcoes->QuantidadeDisponivel = $objOrdemProducaoGrade->Quantidade;
						
					$objBalancoAcoes->Save();	
				}
				
				$objArrayFluxogramaItemReal = FluxogramaItemReal::QueryArray(QQ::Equal(QQN::FluxogramaItemReal()->BalancoAcoes->OrdemProducaoGradeId, $objOrdemProducaoGrade->Id));
			
				//QApplication::DisplayAlert(count($objArrayFluxogramaItemReal));
				foreach ($objArrayFluxogramaItemReal as $objFluxogramaItemReal){
					$objFluxogramaItemModelo = FluxogramaItem::Load($objFluxogramaItemReal->FluxogramaItemModeloId);
					$objArrayFluxogramaItemModeloParent = $objFluxogramaItemModelo->GetParentFluxogramaItemAsFluxogramaDepedenciaArray();
				
					foreach ($objArrayFluxogramaItemModeloParent as $objFluxogramaItemModeloParent){
						foreach ($objArrayFluxogramaItemReal as $objFluxogramaItemRealParent){
							if($objFluxogramaItemRealParent->FluxogramaItemModeloId == $objFluxogramaItemModeloParent->Id){
								$objFluxogramaItemReal->AssociateParentFluxogramaItemRealAsFluxogramaDepedenciaReal($objFluxogramaItemRealParent);
							}
						}
					}
				}
			
				$objArrayBalancoAcoes = BalancoAcoes::LoadArrayByOrdemProducaoGradeId($objOrdemProducaoGrade->Id);

				foreach ($objArrayBalancoAcoes as $objBalancoAcoes){
					$objFluxogramaItemReal = FluxogramaItemReal::QuerySingle(QQ::Equal(QQN::FluxogramaItemReal()->BalancoAcoes->Id, $objBalancoAcoes->Id));
					$objArrayFluxogramaItemRealParent = $objFluxogramaItemReal->GetParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
					
					foreach ($objArrayFluxogramaItemRealParent as $objFluxogramaItemRealParent){
						//QApplication::DisplayAlert( $objBalancoAcoes->Id);
						$objBalancoAcoesDepedencia = new BalancoAcoesDepedencia();
						$objBalancoAcoesDepedencia->BalancoAcoesId = $objBalancoAcoes->Id;
						$objBalancoAcoesDepedencia->FluxogramaItemRealId = $objFluxogramaItemRealParent->Id;
						$objBalancoAcoesDepedencia->QuantidadeDisponibilizada = 0;
						$objBalancoAcoesDepedencia->Save();
					}
				}

			} else {
				QApplication::DisplayAlert('Grade já foi liberada.');
			}
			
			$this->dtgReleased->Refresh();
			$this->dtgToReleased->Refresh();
		}
		
		protected function pxyBlock_Create(){
			$this->pxyBlock = new QControlProxy($this);
			$this->pxyBlock->AddAction(new QClickEvent(), new QAjaxAction('pxyBlock_Click'));
		}
		
		protected function pxyBlock_Click($strFormId, $strControlId, $strParameter){
			$objOrdemProducaoGrade = OrdemProducaoGrade::Load($strParameter);
			
			foreach ($objOrdemProducaoGrade->GetBalancoAcoesArray() as $objBalancoAcoes){
				$objFluxogramaItemReal = FluxogramaItemReal::QuerySingle(QQ::Equal(QQN::FluxogramaItemReal()->BalancoAcoes->Id, $objBalancoAcoes->Id));
				$objFluxogramaItemReal->Delete();
				$objBalancoAcoes->Delete();
			}
			
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