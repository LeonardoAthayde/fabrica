<?php
	class QComandoGradePanel extends QPanel {
			
		public $dtgComandoPecas;
		public $dtgComandoRisco;
		
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->strTemplate = __DOCROOT__.'/control/comando/tpl/QComandoGradePanel.tpl.php';
		
			$this->dtgComandoPecas_Create();
			$this->dtgComandoRisco_Create();
		}
				
		
		protected function dtgComandoPecas_Create(){
			$this->dtgComandoPecas = new QDataGrid($this);
			$this->dtgComandoPecas->CssClass = 'table table-striped table-bordered table-hover';
			$this->dtgComandoPecas->SetDataBinder('dtgComandoPecas_Bind', $this);
			
			$this->dtgComandoPecas->AddColumn(new QDataGridColumn('TECIDO', '<?= $_ITEM->Tecido->Nome; ?>'));
			$this->dtgComandoPecas->AddColumn(new QDataGridColumn('COR', '<?= $_ITEM->Cor->Nome; ?>'));
			$this->dtgComandoPecas->AddColumn(new QDataGridColumn('PANOS', '<?= $_ITEM->QuantidadePanos; ?>'));
			$this->dtgComandoPecas->AddColumn(new QDataGridColumn('PESO', '<?= number_format($_ITEM->Peso, 3); ?> Kg'));
			$this->dtgComandoPecas->AddColumn(new QDataGridColumn('REMOVER', '<?= $_CONTROL->ParentControl->DeletePeca_Render($_ITEM) ?>', 'HtmlEntities=false'));
		}
		
		public function DeletePeca_Render(ComandoPeca $objComandoPeca){
			$btnDeletePeca = new QButton($this->dtgComandoPecas);
			$btnDeletePeca->CssClass = 'btn btn-default btn-lg width100';
			$btnDeletePeca->Text = 'REMOVER';
			$btnDeletePeca->ActionParameter = $objComandoPeca->Id;
			$btnDeletePeca->AddAction(new QClickEvent(), new QConfirmAction('TEM CERTEZA QUE QUER REMOVER?'));
			$btnDeletePeca->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDeletePeca_Click'));
			return $btnDeletePeca->Render(false);
		}
		
		public function btnDeletePeca_Click($strFormId, $strControlId, $strParameter){
			$objComandoPeca = ComandoPeca::Load($strParameter);
			$objComandoPeca->Delete();
			$this->dtgComandoPecas->Refresh();
			$this->dtgComandoRisco->Refresh();
		}

		public function dtgComandoPecas_Bind(){
			$objComando = $this->Form->GetComando();
			if($objComando)
				$this->dtgComandoPecas->DataSource = $objComando->GetComandoPecaArray();				
		}
		
		protected function dtgComandoRisco_Create(){
			$this->dtgComandoRisco = new QDataGrid($this);
			$this->dtgComandoRisco->CssClass = 'table table-striped table-bordered table-hover';
			$this->dtgComandoRisco->AddColumn(new QDataGridColumn('REFERÊNCIA', '<?= $_ITEM->Referencia; ?>'));
			$this->dtgComandoRisco->AddColumn(new QDataGridColumn('TAMANHO', '<?= $_ITEM->Tamanho->Valor; ?>'));
			$this->dtgComandoRisco->AddColumn(new QDataGridColumn('QUANTIDADE RISCO', '<?= $_ITEM->QuantidadeRisco; ?>'));
			$this->dtgComandoRisco->AddColumn(new QDataGridColumn('PEÇAS', '<?= $_CONTROL->ParentControl->Peca_Render($_ITEM); ?>', 'HtmlEntities=false'));
			$this->dtgComandoRisco->AddColumn(new QDataGridColumn('QUANTIDADE REAL', '<?= $_CONTROL->ParentControl->QuantidadeReal_Render($_ITEM); ?>', 'HtmlEntities=false'));
			$this->dtgComandoRisco->AddColumn(new QDataGridColumn('PESO', '<?= $_CONTROL->ParentControl->Peso_Render($_ITEM); ?>', 'HtmlEntities=false'));
			$this->dtgComandoRisco->AddColumn(new QDataGridColumn('REMOVER', '<?= $_CONTROL->ParentControl->DeleteRisco_Render($_ITEM) ?>', 'HtmlEntities=false'));
			$this->dtgComandoRisco->SetDataBinder('dtgComandoRisco_Bind', $this);	
		}
		
		public function dtgComandoRisco_Bind(){
			$objComando = $this->Form->GetComando();
			if($objComando)
				$this->dtgComandoRisco->DataSource = $objComando->GetComandoRiscoArray();
		}
		
		public function DeleteRisco_Render(ComandoRisco $objComandoRisco){
			$btnDeleteRisco = new QButton($this->dtgComandoPecas);
			$btnDeleteRisco->CssClass = 'btn btn-default btn-lg width100';
			$btnDeleteRisco->Text = 'REMOVER';
			$btnDeleteRisco->ActionParameter = $objComandoRisco->Id;
			$btnDeleteRisco->AddAction(new QClickEvent(), new QConfirmAction('TEM CERTEZA QUE QUER REMOVER?'));
			$btnDeleteRisco->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDeleteRisco_Click'));
			return $btnDeleteRisco->Render(false);
		}
		
		public function btnDeleteRisco_Click($strFormId, $strControlId, $strParameter){
			$objComandoRisco = ComandoRisco::Load($strParameter);
			$objComandoRisco->Delete();
			
			$objComando = $this->Form->GetComando();
			foreach ($objComando->GetComandoPecaArray() as $objComandoPeca){
				$fltTotalPeso = 0;
				foreach ($objComandoPeca->GetComandoRiscoPecaArray() as $objComandoRiscoPeca) {
					$fltTotalPeso+=$objComandoRiscoPeca->Peso;
				}
				$objComandoPeca->Peso = $fltTotalPeso;
				$objComandoPeca->Save();
			}
			
			$this->dtgComandoPecas->Refresh();
			$this->dtgComandoRisco->Refresh();
		}		

		public function Peca_Render(ComandoRisco $objComandoRisco){
			$strToReturn = '';
			foreach ($objComandoRisco->GetComandoRiscoPecaArray() as $objComandoRiscoPeca){
				$strToReturn.= $objComandoRiscoPeca->ComandoPeca->Tecido->Nome.' - '.$objComandoRiscoPeca->ComandoPeca->Cor->Nome.'<hr>';
			}
			return substr($strToReturn, 0, strlen($strToReturn)-4);
		}		
		
		public function QuantidadeReal_Render(ComandoRisco $objComandoRisco){
			$strToReturn = '';
			foreach ($objComandoRisco->GetComandoRiscoPecaArray() as $objComandoRiscoPeca){
				$strToReturn.= $objComandoRiscoPeca->QuantidadeReal.'<hr>';
			}
			return substr($strToReturn, 0, strlen($strToReturn)-4);
		}
		
		public function Peso_Render(ComandoRisco $objComandoRisco){
			$strToReturn = '';
			foreach ($objComandoRisco->GetComandoRiscoPecaArray() as $objComandoRiscoPeca){
				$strToReturn.= number_format($objComandoRiscoPeca->Peso, 3).' Kg<hr>';
			}
			return substr($strToReturn, 0, strlen($strToReturn)-4);
		}		
		
		public function btnDeleteComandoGrade_Render(ComandoGrade $objComandoGrade){
			$btnDeleteComandoGrade = $this->dtgComandoGrade->GetChildControl('btnDeleteComandoGrade'.$objComandoGrade->Id);
			if(!$btnDeleteComandoGrade){
				$btnDeleteComandoGrade = new QLinkButton($this->dtgComandoGrade, 'btnDeleteComandoGrade'.$objComandoGrade->Id);
				$btnDeleteComandoGrade->HtmlEntities = false;
				$btnDeleteComandoGrade->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDeleteComandoGrade_Click'));
				$btnDeleteComandoGrade->ActionParameter = $objComandoGrade->Id;
				$btnDeleteComandoGrade->Text = '
					<button type="button" class="btn btn-default btn-lg width100">
						<span class="glyphicon glyphicon-remove"></span>
					</button>';
			}
			return $btnDeleteComandoGrade->Render(false);
		}
		
		public function btnDeleteComandoGrade_Click($strFormId, $strControlId, $strParameter){
			$objComandoGrade = ComandoGrade::Load($strParameter);
			$objComandoGrade->Delete();
			$this->Iniciar();
			$this->dtgComandoGrade->RemoveChildControl($strControlId, true);
		}
		
		public function Iniciar(){
			$this->dtgComandoRisco->Refresh();
			$this->dtgComandoPecas->Refresh();
		}
		
		
		
	}
?>