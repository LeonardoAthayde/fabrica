<?php
	require(__DATAGEN_META_CONTROLS__ . '/FluxogramaItemMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * FluxogramaItem class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single FluxogramaItem object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FluxogramaItemMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class FluxogramaItemMetaControl extends FluxogramaItemMetaControlGen {
		
		
		public function DeleteFluxogramaItem() {
			if(BalancoAcoes::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::BalancoAcoes()->FluxogramaItemId, $this->objFluxogramaItem->Id),
				QQ::NotEqual(QQN::BalancoAcoes()->QuantidadeRemetida, 0)))){
				$this->objFluxogramaItem->Ativo = false;
				$this->objFluxogramaItem->Save();
			} else
				$this->objFluxogramaItem->Delete();
		}		
		
	}
?>