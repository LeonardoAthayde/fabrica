<?php
	require(__DATAGEN_META_CONTROLS__ . '/OrdemProducaoMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * OrdemProducao class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single OrdemProducao object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a OrdemProducaoMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class OrdemProducaoMetaControl extends OrdemProducaoMetaControlGen {
		
		public function DeleteOrdemProducao() {
			if(BalancoAcoes::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::BalancoAcoes()->OrdemProducaoGrade->OrdemProducaoId, $this->objOrdemProducao->Id),
				QQ::NotEqual(QQN::BalancoAcoes()->QuantidadeRemetida, 0))))
					QApplication::DisplayAlert ('Essa Ordem de Produção Náo Pode ser Deletada, existe uma Produção Costureira para ela');
			else
			$this->objOrdemProducao->Delete();
		}			
		
	}
?>