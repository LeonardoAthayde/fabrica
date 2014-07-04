<?php
	class QItemRiscoPanel extends QPanel {
	
		protected $blnAutoRenderChildren = true;
		
		public $objTamanho;
		
		public $chkTamanho;
		public $lstQuantidadeRisco;
		public $chkMeia;
		
		public function __construct($objParentObject, Tamanho $objTamanho, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->objTamanho = $objTamanho;
			
			$this->chkTamanho_Create();
			$this->lstQuantidadeRisco_Create();
			$this->chkMeia_Create();
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
				$this->chkMeia->Display = true;
			} else {
				$this->lstQuantidadeRisco->Required = false;
				$this->lstQuantidadeRisco->Display = false;
				$this->chkMeia->Display = false;
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
			for($i = 1; $i <= 40; $i++)
				$this->lstQuantidadeRisco->AddItem($i, $i);
		}
		
		protected function chkMeia_Create(){
			$this->chkMeia = new QCheckBox($this);
			$this->chkMeia->Text = 'MEIA';
			$this->chkMeia->Display = false;
		}
		
	}
?>