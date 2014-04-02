<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the OrdemProducao class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single OrdemProducao object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a OrdemProducaoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read OrdemProducao $OrdemProducao the actual OrdemProducao data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NumeroControl
	 * property-read QLabel $NumeroLabel
	 * property QListBox $ReferenciaIdControl
	 * property-read QLabel $ReferenciaIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class OrdemProducaoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var OrdemProducao objOrdemProducao
		 * @access protected
		 */
		protected $objOrdemProducao;

		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;

		/**
		 * @var string  strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;

		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of OrdemProducao's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtNumero;
         * @access protected
         */
		protected $txtNumero;

        /**
         * @var QListBox lstReferencia;
         * @access protected
         */
		protected $lstReferencia;


		// Controls that allow the viewing of OrdemProducao's individual data fields
        /**
         * @var QLabel lblNumero
         * @access protected
         */
		protected $lblNumero;

        /**
         * @var QLabel lblReferenciaId
         * @access protected
         */
		protected $lblReferenciaId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * OrdemProducaoMetaControl to edit a single OrdemProducao object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single OrdemProducao object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdemProducaoMetaControl
		 * @param OrdemProducao $objOrdemProducao new or existing OrdemProducao object
		 */
		 public function __construct($objParentObject, OrdemProducao $objOrdemProducao) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this OrdemProducaoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked OrdemProducao object
			$this->objOrdemProducao = $objOrdemProducao;

			// Figure out if we're Editing or Creating New
			if ($this->objOrdemProducao->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdemProducaoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing OrdemProducao object creation - defaults to CreateOrEdit
 		 * @return OrdemProducaoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objOrdemProducao = OrdemProducao::Load($intId);

				// OrdemProducao was found -- return it!
				if ($objOrdemProducao)
					return new OrdemProducaoMetaControl($objParentObject, $objOrdemProducao);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a OrdemProducao object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new OrdemProducaoMetaControl($objParentObject, new OrdemProducao());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdemProducaoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing OrdemProducao object creation - defaults to CreateOrEdit
		 * @return OrdemProducaoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return OrdemProducaoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdemProducaoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing OrdemProducao object creation - defaults to CreateOrEdit
		 * @return OrdemProducaoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return OrdemProducaoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblId_Create($strControlId = null) {
			$this->lblId = new QLabel($this->objParentObject, $strControlId);
			$this->lblId->Name = QApplication::Translate('Id');
			if ($this->blnEditMode)
				$this->lblId->Text = $this->objOrdemProducao->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtNumero
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNumero_Create($strControlId = null) {
			$this->txtNumero = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNumero->Name = QApplication::Translate('Numero');
			$this->txtNumero->Text = $this->objOrdemProducao->Numero;
			$this->txtNumero->Required = true;
			$this->txtNumero->MaxLength = OrdemProducao::NumeroMaxLength;
			return $this->txtNumero;
		}

		/**
		 * Create and setup QLabel lblNumero
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNumero_Create($strControlId = null) {
			$this->lblNumero = new QLabel($this->objParentObject, $strControlId);
			$this->lblNumero->Name = QApplication::Translate('Numero');
			$this->lblNumero->Text = $this->objOrdemProducao->Numero;
			$this->lblNumero->Required = true;
			return $this->lblNumero;
		}

		/**
		 * Create and setup QListBox lstReferencia
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReferencia_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReferencia = new QListBox($this->objParentObject, $strControlId);
			$this->lstReferencia->Name = QApplication::Translate('Referencia');
			$this->lstReferencia->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenciaCursor = Referencia::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objReferencia = Referencia::InstantiateCursor($objReferenciaCursor)) {
				$objListItem = new QListItem($objReferencia->__toString(), $objReferencia->Id);
				if (($this->objOrdemProducao->Referencia) && ($this->objOrdemProducao->Referencia->Id == $objReferencia->Id))
					$objListItem->Selected = true;
				$this->lstReferencia->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstReferencia;
		}

		/**
		 * Create and setup QLabel lblReferenciaId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReferenciaId_Create($strControlId = null) {
			$this->lblReferenciaId = new QLabel($this->objParentObject, $strControlId);
			$this->lblReferenciaId->Name = QApplication::Translate('Referencia');
			$this->lblReferenciaId->Text = ($this->objOrdemProducao->Referencia) ? $this->objOrdemProducao->Referencia->__toString() : null;
			return $this->lblReferenciaId;
		}



		/**
		 * Refresh this MetaControl with Data from the local OrdemProducao object.
		 * @param boolean $blnReload reload OrdemProducao from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objOrdemProducao->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objOrdemProducao->Id;

			if ($this->txtNumero) $this->txtNumero->Text = $this->objOrdemProducao->Numero;
			if ($this->lblNumero) $this->lblNumero->Text = $this->objOrdemProducao->Numero;

			if ($this->lstReferencia) {
					$this->lstReferencia->RemoveAllItems();
				$this->lstReferencia->AddItem(QApplication::Translate('- Select One -'), null);
				$objReferenciaArray = Referencia::LoadAll();
				if ($objReferenciaArray) foreach ($objReferenciaArray as $objReferencia) {
					$objListItem = new QListItem($objReferencia->__toString(), $objReferencia->Id);
					if (($this->objOrdemProducao->Referencia) && ($this->objOrdemProducao->Referencia->Id == $objReferencia->Id))
						$objListItem->Selected = true;
					$this->lstReferencia->AddItem($objListItem);
				}
			}
			if ($this->lblReferenciaId) $this->lblReferenciaId->Text = ($this->objOrdemProducao->Referencia) ? $this->objOrdemProducao->Referencia->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ORDEMPRODUCAO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's OrdemProducao instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveOrdemProducao() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNumero) $this->objOrdemProducao->Numero = $this->txtNumero->Text;
				if ($this->lstReferencia) $this->objOrdemProducao->ReferenciaId = $this->lstReferencia->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the OrdemProducao object
				$this->objOrdemProducao->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's OrdemProducao instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteOrdemProducao() {
			$this->objOrdemProducao->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'OrdemProducao': return $this->objOrdemProducao;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to OrdemProducao fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'NumeroControl':
					if (!$this->txtNumero) return $this->txtNumero_Create();
					return $this->txtNumero;
				case 'NumeroLabel':
					if (!$this->lblNumero) return $this->lblNumero_Create();
					return $this->lblNumero;
				case 'ReferenciaIdControl':
					if (!$this->lstReferencia) return $this->lstReferencia_Create();
					return $this->lstReferencia;
				case 'ReferenciaIdLabel':
					if (!$this->lblReferenciaId) return $this->lblReferenciaId_Create();
					return $this->lblReferenciaId;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to OrdemProducao fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NumeroControl':
						return ($this->txtNumero = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaIdControl':
						return ($this->lstReferencia = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>