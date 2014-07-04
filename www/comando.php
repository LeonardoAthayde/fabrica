<?php

	require 'base.php';
	
	class ComandoForm extends BaseForm {
		
		protected $pnlComandoSearch;
		protected $pnlComando;
		protected $pnlComandoGrade;
		
		protected $objComando;
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->DefaultWaitIcon_Create();
			$this->pnlComandoSearch_Create();
			$this->pnlComando_Create();
			$this->pnlComandoGrade_Create();
			$this->Iniciar();
		}
		
		protected function DefaultWaitIcon_Create(){
			$this->objDefaultWaitIcon = new QWaitIcon($this);
			$this->objDefaultWaitIcon->Text = '
				<div class="progress progress-striped active">
					<div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						<span class="sr-only">100% Complete</span>
					</div>
				</div>';			
		}
		
		
		protected function pnlComandoSearch_Create(){
			$this->pnlComandoSearch = new QComandoSearchPanel($this);
		}
		
		protected function pnlComando_Create(){
			$this->pnlComando = new QComandoPanel($this);
		}
		
		protected function pnlComandoGrade_Create(){
			$this->pnlComandoGrade = new QComandoGradePanel($this);
		}

		
		protected function Form_Run() {
			parent::Form_Run();
		}
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'comando.css'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'jquery.autocomplete.min.js'));
		}
		
		public function Iniciar(){
			$this->objComando = null;
			$this->pnlComandoSearch->Display = true;
			$this->pnlComando->Display = false;
			$this->pnlComandoGrade->Display = false;
			
			$this->pnlComandoSearch->Iniciar();
		}		
		
		public function CriarComando(){
			$this->pnlComandoSearch->Display = false;
			$this->pnlComando->Display = true;
			$this->pnlComando->Iniciar();
		}
		
		public function EditarComando(Comando $objComando){
			$this->objComando = $objComando;
			$this->pnlComandoSearch->Display = false;
			$this->pnlComando->Display = true;
			$this->pnlComandoGrade->Display = true;
			$this->pnlComando->Iniciar();
			$this->pnlComandoGrade->Iniciar();
		}
		
		public function AdicionarGrade(Referencia $objReferencia = null){
			$this->pnlComandoGrade->Iniciar($objReferencia);
		}
		
		public function GetComando(){
			return $this->objComando;
		}
		
		public function UpdateComando(){
			if($this->objComando)
				$this->objComando = Comando::Load($this->objComando->Id);
		}
		
		public function RefreshTables(){
			$this->pnlComandoGrade->Iniciar();
		}
		
		
	}
	
	ComandoForm::Run('ComandoForm', 'tpl/comando.tpl.php');

?>