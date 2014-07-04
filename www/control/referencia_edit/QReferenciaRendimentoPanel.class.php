<?php
	class QReferenciaRendimentoPanel extends QPanel {
	
		public $txtComprimento;
		public $txtPecas;
		public $lstTecido;
		public $btnSave;
		public $btnDelete;
		
		public $objReferenciaRendimento;
		
		public function __construct($objParentObject, $strControlId = null, ReferenciaRendimento $objReferenciaRendimento) {
			parent::__construct($objParentObject, $strControlId);
			$this->objReferenciaRendimento = $objReferenciaRendimento;
			$this->Template = __DOCROOT__.'/control/referencia_edit/tpl/QReferenciaRendimentoPanel.tpl.php';
			
			$this->txtComprimento_Create();
			$this->txtPecas_Create();
			$this->lstTecido_Create();
			$this->btnSave_Create();
			$this->btnDelete_Create();
		}
		
		protected function txtComprimento_Create(){
			$this->txtComprimento = new QFloatTextBox($this);
			$this->txtComprimento->Name = 'RENDIMENTO';
			$this->txtComprimento->Required = true;
			$this->txtComprimento->CssClass = 'form-control input-lg';
			$this->txtComprimento->Text = $this->objReferenciaRendimento->Comprimento;
		}
		
		protected function txtPecas_Create(){
			$this->txtPecas = new QIntegerTextBox($this);
			$this->txtPecas->Name = 'PEÇAS';
			$this->txtPecas->Minimum = 1;
			$this->txtPecas->Required = true;
			$this->txtPecas->CssClass= 'form-control input-lg';
			$this->txtPecas->Text = $this->objReferenciaRendimento->Pecas;
		}
		
		protected function lstTecido_Create(){
			$this->lstTecido = new QListBox($this);
			$this->lstTecido->Name = 'TECIDO';
			$this->lstTecido->Required = true;
			$this->lstTecido->CssClass = 'form-control input-lg';
			$this->lstTecido->AddItem('SELECIONAR UM TECIDO ==>');
			foreach (Tecido::QueryArray(QQ::GreaterThan(QQN::Tecido()->Metro, 0)) as $objTecido)
				if($this->objReferenciaRendimento && $this->objReferenciaRendimento->TecidoId == $objTecido->Id) 
					$this->lstTecido->AddItem($objTecido->Nome, $objTecido->Id, true);
				else
					$this->lstTecido->AddItem($objTecido->Nome, $objTecido->Id);
		}
		
		protected function btnSave_Create(){
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = 'CALCULAR PESO';
			$this->btnSave->CssClass = 'btn btn-default btn-lg width100';
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;
		}
		
		public function btnSave_Click($strFormId, $strControlId, $strParameter){
			$this->objReferenciaRendimento->Peso = ($this->txtComprimento->Text/Tecido::Load($this->lstTecido->SelectedValue)->Metro)/$this->txtPecas->Text;
			$this->Refresh();
		}
		
		protected function btnDelete_Create(){
			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = 'REMOVER';
			$this->btnDelete->CssClass = 'btn btn-danger btn-lg width100';
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
		}
		
		public function btnDelete_Click($strFormId, $strControlId, $strParameter){
			$this->Form->RemoveReferenciaRendimento($this->objReferenciaRendimento);
			$this->ParentControl->RemoveChildControl($this->ControlId, true);
		}
		
		public function SaveReferenciaRendimento(Referencia $objReferencia){
			$this->objReferenciaRendimento->Comprimento = $this->txtComprimento->Text;
			$this->objReferenciaRendimento->Pecas = $this->txtPecas->Text;
			$this->objReferenciaRendimento->TecidoId = $this->lstTecido->SelectedValue;
			$this->objReferenciaRendimento->ReferenciaId = $objReferencia->Id;
			$this->objReferenciaRendimento->Peso = ($this->txtComprimento->Text/Tecido::Load($this->lstTecido->SelectedValue)->Metro)/$this->txtPecas->Text;
			$this->objReferenciaRendimento->Save();
		}
		
		public function GetTitle(){
			if($this->objReferenciaRendimento)
				return number_format ($this->objReferenciaRendimento->Peso, 3).' Kg';
			else
				return 'N/A';
		}
		
		public function UpdateObjectFromControl(){
			$this->objReferenciaRendimento->Comprimento = $this->txtComprimento->Text;
			$this->objReferenciaRendimento->Pecas = $this->txtPecas->Text;
			$this->objReferenciaRendimento->TecidoId = $this->lstTecido->SelectedValue;
		}

	}
?>