<?php
	require(__DATAGEN_META_CONTROLS__ . '/ReferenciaMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Referencia class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Referencia object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ReferenciaMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class ReferenciaMetaControl extends ReferenciaMetaControlGen {
		

		/**
		 * Create and setup QTextBox txtNome
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNome_Create($strControlId = null) {
			$this->txtNome = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNome->Name = QApplication::Translate('Nome');
			$this->txtNome->Text = $this->objReferencia->Nome;
			//$this->txtNome->Required = true;
			$this->txtNome->MaxLength = Referencia::NomeMaxLength;
			$this->txtNome->Display = false;
			return $this->txtNome;
		}
		
		
		/**
		 * Create and setup QListBox lstReferenciaCategoria
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReferenciaCategoria_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReferenciaCategoria = new QListBox($this->objParentObject, $strControlId);
			$this->lstReferenciaCategoria->Name = QApplication::Translate('Referencia Categoria');
			$this->lstReferenciaCategoria->Required = true;
			if (!$this->blnEditMode)
				$this->lstReferenciaCategoria->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenciaCategoriaCursor = ReferenciaCategoria::QueryCursor($objCondition, QQ::Clause(QQ::OrderBy(QQN::ReferenciaCategoria()->Nome)));

			// Iterate through the Cursor
			while ($objReferenciaCategoria = ReferenciaCategoria::InstantiateCursor($objReferenciaCategoriaCursor)) {
				$objListItem = new QListItem($objReferenciaCategoria->__toString(), $objReferenciaCategoria->Id);
				if (($this->objReferencia->ReferenciaCategoria) && ($this->objReferencia->ReferenciaCategoria->Id == $objReferenciaCategoria->Id))
					$objListItem->Selected = true;
				$this->lstReferenciaCategoria->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstReferenciaCategoria;
		}		
		
		
		/**
		 * Create and setup QListBox lstTecido
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstTecido_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstTecido = new QListBox($this->objParentObject, $strControlId);
			$this->lstTecido->Name = QApplication::Translate('Tecido');
			$this->lstTecido->Required = true;
			if (!$this->blnEditMode)
				$this->lstTecido->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTecidoCursor = Tecido::QueryCursor($objCondition, QQ::Clause(QQ::OrderBy(QQN::Tecido()->Nome)));

			// Iterate through the Cursor
			while ($objTecido = Tecido::InstantiateCursor($objTecidoCursor)) {
				$objListItem = new QListItem($objTecido->__toString(), $objTecido->Id);
				if (($this->objReferencia->Tecido) && ($this->objReferencia->Tecido->Id == $objTecido->Id))
					$objListItem->Selected = true;
				$this->lstTecido->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstTecido;
		}
		
		
		
		public function SaveReferencia() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNome) $this->objReferencia->Nome = $this->txtNome->Text;
				if ($this->lstReferenciaCategoria) $this->objReferencia->ReferenciaCategoriaId = $this->lstReferenciaCategoria->SelectedValue;
				if ($this->txtModelo) $this->objReferencia->Modelo = $this->txtModelo->Text;
				if ($this->lstTecido) $this->objReferencia->TecidoId = $this->lstTecido->SelectedValue;
				
				$strTecidoCodigo = '';
				if(Tecido::Load($this->lstTecido->SelectedValue))
					$strTecidoCodigo = Tecido::Load($this->lstTecido->SelectedValue)->Codigo;
				$objTecido = Tecido::Load($this->lstTecido->SelectedValue);
				$this->objReferencia->Nome = $this->lstReferenciaCategoria->SelectedName.$this->objReferencia->Modelo.$strTecidoCodigo;
				
				// Update any UniqueReverseReferences (if any) for controls that have been created for it
				// 
				// Save the Referencia object
				$this->objReferencia->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstCors_Update();
				$this->lstTamanhos_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
		
		/**
		 * Create and setup QListBox lstReferenciaRendimento
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReferenciaRendimento_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReferenciaRendimento = new QListBox($this->objParentObject, $strControlId);
			$this->lstReferenciaRendimento->Name = QApplication::Translate('Referencia Rendimento');
			$this->lstReferenciaRendimento->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenciaRendimentoCursor = ReferenciaRendimento::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objReferenciaRendimento = ReferenciaRendimento::InstantiateCursor($objReferenciaRendimentoCursor)) {
				$objListItem = new QListItem($objReferenciaRendimento->__toString(), $objReferenciaRendimento->Id);
				if ($objReferenciaRendimento->ReferenciaId == $this->objReferencia->Id)
					$objListItem->Selected = true;
				$this->lstReferenciaRendimento->AddItem($objListItem);
			}

			// Because ReferenciaRendimento's ReferenciaRendimento is not null, if a value is already selected, it cannot be changed.
			if ($this->lstReferenciaRendimento->SelectedValue)
				$this->lstReferenciaRendimento->Enabled = false;

			// Return the QListBox
			$this->lstReferenciaRendimento->Display = false;
			return $this->lstReferenciaRendimento;
		}		
				
		
	}
?>