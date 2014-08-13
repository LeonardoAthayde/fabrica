<?php
	class QItemRiscoPanel extends QPanel {
	
		protected $blnAutoRenderChildren = true;
		
		public $objTamanho;
		
		public $chkTamanho;
		public $lstQuantidadeRisco;
		
		public function __construct($objParentObject, Tamanho $objTamanho, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->objTamanho = $objTamanho;
			
			$this->chkTamanho_Create();
			$this->lstQuantidadeRisco_Create();
		}
		
		protected function chkTamanho_Create(){
			$this->chkTamanho = new QCheckBox($this);
			$this->chkTamanho->Text = ' '.$this->objTamanho->Valor;
			$this->chkTamanho->CssClass = 'chkTamanho form-control input-lg';
			$this->chkTamanho->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'chkTamanho_Click'));
		}
		
		public function chkTamanho_Click($strFormId, $strControlId, $strParameter){
			if($this->chkTamanho->Checked) {
				$this->lstQuantidadeRisco->Required = true;
				$this->lstQuantidadeRisco->Display = true;
			} else {
				$this->lstQuantidadeRisco->Required = false;
				$this->lstQuantidadeRisco->Display = false;
			}
		}
		
		protected function lstQuantidadeRisco_Create(){
			$this->lstQuantidadeRisco = new QListBox($this);
			$this->lstQuantidadeRisco->CssClass = 'form-control input-lg width100';
			$this->lstQuantidadeRisco->SetCustomStyle('margin-bottom', '20px');
			$this->lstQuantidadeRisco->SetCustomStyle('margin-top', '20px');
			$this->lstQuantidadeRisco->Display = false;
			$this->lstQuantidadeRisco->RenderMethod = 'RenderWithName';
			$this->lstQuantidadeRisco->AddItem('QUANTIDADE RISCO');
			for($i = 0; $i <= 40; $i++)
				$this->lstQuantidadeRisco->AddItem($i, $i);
		}
		
		
	}
?>