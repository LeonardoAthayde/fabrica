<?php
	require(__DATAGEN_META_CONTROLS__ . '/TecidoMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Tecido class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Tecido object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TecidoMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class TecidoMetaControl extends TecidoMetaControlGen {
		
		///////////////////////////////////////////////
		// PUBLIC TECIDO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Tecido instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTecido() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNome) $this->objTecido->Nome = $this->txtNome->Text;
				if ($this->txtCodigo) $this->objTecido->Codigo = $this->txtCodigo->Text;
				if ($this->txtMetro) $this->objTecido->Metro = $this->txtMetro->Text;
				if ($this->txtPreco) $this->objTecido->Preco = $this->txtPreco->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Tecido object
				$this->objTecido->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}		
		
	}
?>