<?php

	require 'base.php';

	class OrdemExecucaoForm extends BaseForm {

		protected $pnlNewGrade;
		protected $btnConfirm;
		
		protected $pnlSelectCostureira;
		protected $pxyConfirm;		
		protected $lblSelected;
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->pnlNewGrade_Create();
			$this->btnConfirm_Create();
			$this->pnlSelectCostureira_Create();
			$this->pxyConfirm_Create();
			$this->lblSelected_Create();
			QApplication::ExecuteJavaScript("SelectedListGroup();");
			$this->SetPollingProcessor('OrdemExecucaoForm_Poling', $this, 1000 * 5);
		}
		
		protected function OrdemExecucaoForm_Poling(){
			QApplication::ExecuteJavaScript("SelectedListGroup();");
			$this->pnlNewGrade->Refresh();
		}
		
		protected function pnlNewGrade_Create(){
			$this->pnlNewGrade = new QPanel($this);
			$this->pnlNewGrade->Template = __DOCROOT__.'/control/tpl/pnl_NewGrade.tpl.php';
			$this->pnlNewGrade->CssClass = 'pnlNewGrade';
		}

		protected function btnConfirm_Create(){
			$this->btnConfirm = $this->GetControl('buttonconfirm');
			if(!$this->btnConfirm){
				$this->btnConfirm = new QButton($this, 'buttonconfirm');
				$this->btnConfirm->Text = 'Confirmar';
				$this->btnConfirm->CssClass = 'btn btn-default btn-lg width100 ';
				$this->btnConfirm->AddAction(new QClickEvent(), new QAjaxAction('btnConfirm_Click'));
			}
		}
		
		protected function btnConfirm_Click(){
			$this->pnlNewGrade->Display = false;
			$this->pnlSelectCostureira->Display = true;
			$this->btnConfirm->Display = false;			
			$this->lblSelected->Text = '';
			foreach ($this->pnlNewGrade->GetChildControls() as $chkChildControl){
				if($chkChildControl instanceof QCheckBox) {
					if($chkChildControl->Checked) {
						$lstControl = $this->pnlNewGrade->GetChildControl('listboxcontrol'.$chkChildControl->Text);
						$objBalancoAcoes = BalancoAcoes::Load($chkChildControl->Text);
						$this->lblSelected->Text.= $objBalancoAcoes->OrdemProducaoGrade->OrdemProducao->Referencia->Nome;
						$this->lblSelected->Text.= ', '.$objBalancoAcoes->OrdemProducaoGrade->Cor->Nome;
						$this->lblSelected->Text.= ' - '.$objBalancoAcoes->OrdemProducaoGrade->Tamanho->Valor;
						$this->lblSelected->Text.= ' ('.$lstControl->SelectedValue.')';
						$this->lblSelected->Text.= ' / ';
					}
				}
			}
		}
		
		protected function Create_CheckBox(BalancoAcoes $objBalancoAcoes){
			$chkControl = $this->GetControl('chackboxcontrol'.$objBalancoAcoes->Id);
			if(!$chkControl){
				$chkControl =  new QCheckBox($this->pnlNewGrade, 'chackboxcontrol'.$objBalancoAcoes->Id); 
			}
			$strString  = 
			'<div>'.$objBalancoAcoes->OrdemProducaoGrade->OrdemProducao->Numero.', '
			.' '.$objBalancoAcoes->OrdemProducaoGrade->OrdemProducao->Referencia->Nome.' | '
			.' '.$objBalancoAcoes->OrdemProducaoGrade->Cor->Nome.' - '
			.' '.$objBalancoAcoes->OrdemProducaoGrade->Tamanho->Valor
			.'</div><div><b>'.$objBalancoAcoes->FluxogramaItem->Ordenacao.'º '
			.$objBalancoAcoes->FluxogramaItem->FluxogramaAcoes->Nome.'</b></div>';
			$chkControl->Text = $objBalancoAcoes->Id;
			$chkControl->Display = false;	
			return $chkControl->Render(false).$strString;
		}
		
		protected function Create_SelectBox($objBalancoAcoes){
			$lstControl = $this->GetControl('listboxcontrol'.$objBalancoAcoes->Id);
			if(!$lstControl) {
				$lstControl =  new QListBox($this->pnlNewGrade, 'listboxcontrol'.$objBalancoAcoes->Id); 
				$lstControl->CssClass = 'form-control input-lg';
			}
			$lstControl->RemoveAllItems();
			for($i = $objBalancoAcoes->QuantidadeDisponivel; $i > 0; $i--)
				$lstControl->AddItem ($i, $i);
			return $lstControl->Render(false);
		}
		
		protected function pnlSelectCostureira_Create(){
			$this->pnlSelectCostureira = new QPanel($this);
			$this->pnlSelectCostureira->Template = __DOCROOT__.'/control/tpl/pnl_SelectCostureira.tpl.php';
			$this->pnlSelectCostureira->CssClass = 'pnlSelectCostureira';	
			$this->pnlSelectCostureira->Display = false;
		}
		
		protected function pxyConfirm_Create(){
			$this->pxyConfirm = new QControlProxy($this);
			$this->pxyConfirm->AddAction(new QClickEvent(), new QAjaxAction('pxyConfirm_Click'));
		}
		
		protected function pxyConfirm_Click($strFormId, $strControlId, $strParameter){
			$this->pnlNewGrade->Display = true;
			$this->pnlSelectCostureira->Display = false;
			$this->btnConfirm->Display = true;
			QApplication::ExecuteJavaScript("SelectedListGroup();");
			foreach ($this->pnlNewGrade->GetChildControls() as $chkChildControl)
				if($chkChildControl instanceof QCheckBox) 
					if($chkChildControl->Checked) {
						$lstControl = $this->pnlNewGrade->GetChildControl('listboxcontrol'.$chkChildControl->Text);
						$objBalancoAcoes = BalancoAcoes::Load($chkChildControl->Text);						
						
						$objCostureiraProducao = new CostureiraProducao();
						$objCostureiraProducao->CostureiraId = $strParameter;
						$objCostureiraProducao->BalancoAcoesId = $objBalancoAcoes->Id;
						$objCostureiraProducao->QuantidadePlanejada = $lstControl->SelectedValue;
						$objCostureiraProducao->QuantidadeRealizada = 0;
						$objCostureiraProducao->QuantidadeEstocado = 0;
						$objCostureiraProducao->Concluido = false;
						$objCostureiraProducao->Save();
						
						$objBalancoAcoes->QuantidadeDisponivel-= $lstControl->SelectedValue;
						$objBalancoAcoes->QuantidadeRemetida+= $lstControl->SelectedValue;
						$objBalancoAcoes->Save();
						
						$chkChildControl->Checked = false;
					}
		}
		
		protected function lblSelected_Create(){
			$this->lblSelected = new QLabel($this->pnlSelectCostureira);
		}
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'ordem_execucao.css'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'ordem_execucao.js'));
		}		
		
	}
	
	OrdemExecucaoForm::Run('OrdemExecucaoForm', 'tpl/ordem_execucao.tpl.php');
	
?>