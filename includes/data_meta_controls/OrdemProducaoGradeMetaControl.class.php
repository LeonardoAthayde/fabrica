<?php
	require(__DATAGEN_META_CONTROLS__ . '/OrdemProducaoGradeMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * OrdemProducaoGrade class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single OrdemProducaoGrade object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a OrdemProducaoGradeMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class OrdemProducaoGradeMetaControl extends OrdemProducaoGradeMetaControlGen {
		
		
		public function txtQuantidade_Create($strControlId = null) {
			$this->txtQuantidade = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidade->Name = QApplication::Translate('Quantidade');
			$this->txtQuantidade->Text = $this->objOrdemProducaoGrade->Quantidade;
			$this->txtQuantidade->Required = true;
			
			$intMinimum = 1;
			foreach (BalancoAcoes::LoadArrayByOrdemProducaoGradeId($this->objOrdemProducaoGrade->Id) as $objOrdemProducaoGrade)
				if($intMinimum < $objOrdemProducaoGrade->QuantidadeRemetida)
					$intMinimum = $objOrdemProducaoGrade->QuantidadeRemetida;
			$this->txtQuantidade->Minimum = $intMinimum;
			
				
			return $this->txtQuantidade;
		}		
		
		public function DeleteOrdemProducaoGrade() {
			if(BalancoAcoes::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::BalancoAcoes()->OrdemProducaoGradeId, $this->objOrdemProducaoGrade->Id),
				QQ::NotEqual(QQN::BalancoAcoes()->QuantidadeRemetida, 0))))
					QApplication::DisplayAlert ('Essa Ordem de Produção Grade Não Pode ser deletada, existe uma Produção Costureira para ela');
			else	
				$this->objOrdemProducaoGrade->Delete();
		}		
		
	}
?>