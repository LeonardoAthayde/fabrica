<?php

	require 'base.php';
	
	class AnaliseCostureiraForm extends BaseForm {
			
		protected $objCostureira;
		
		protected $pnlAnaliseSelect;
		protected $pxyAnaliseSelect;
		
		protected $pnlAnaliseShow;
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->pnlAnaliseSelect_Create();
			$this->pxyAnaliseSelect_Create();
			
			$this->pnlAnaliseShow_Create();
		}
		
		protected function pnlAnaliseSelect_Create(){
			$this->pnlAnaliseSelect = new QPanel($this);
			$this->pnlAnaliseSelect->Template = __DOCROOT__.'/control/tpl/pnl_AnaliseSelect.tpl.php';
		}
		
		protected function pxyAnaliseSelect_Create(){
			$this->pxyAnaliseSelect = new QControlProxy($this);
			$this->pxyAnaliseSelect->AddAction(new QClickEvent(), new QAjaxAction('pxyAnaliseSelect_Click'));
		}
		
		protected function pxyAnaliseSelect_Click($strFormId, $strControlId, $strParameter){
			$this->objCostureira = Costureira::Load($strParameter);
			$this->pnlAnaliseSelect->Display = false;
			$this->pnlAnaliseShow->Display = true;
		}
		
		protected function pnlAnaliseShow_Create(){
			$this->pnlAnaliseShow = new QPanel($this);
			$this->pnlAnaliseShow->Template = __DOCROOT__.'/control/tpl/pnl_AnaliseShow.tpl.php';
			$this->pnlAnaliseShow->Display = false;
		}
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'analise_costureira.css'));
			//print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'analise_costureira.min.js'));
		}		
		
	}
	
	AnaliseCostureiraForm::Run('AnaliseCostureiraForm', 'tpl/analise_costureira.tpl.php');

?>