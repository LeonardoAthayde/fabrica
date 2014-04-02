<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Balanco class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Balanco object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a BalancoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Balanco $Balanco the actual Balanco data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $QuantidadeControl
	 * property-read QLabel $QuantidadeLabel
	 * property QIntegerTextBox $BalancoControl
	 * property-read QLabel $BalancoLabel
	 * property QListBox $OrdemProducaoGradeIdControl
	 * property-read QLabel $OrdemProducaoGradeIdLabel
	 * property QListBox $FluxogramaItemIdControl
	 * property-read QLabel $FluxogramaItemIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class BalancoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Balanco objBalanco
		 * @access protected
		 */
		protected $objBalanco;

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

		// Controls that allow the editing of Balanco's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QIntegerTextBox txtQuantidade;
         * @access protected
         */
		protected $txtQuantidade;

        /**
         * @var QIntegerTextBox txtBalanco;
         * @access protected
         */
		protected $txtBalanco;

        /**
         * @var QListBox lstOrdemProducaoGrade;
         * @access protected
         */
		protected $lstOrdemProducaoGrade;

        /**
         * @var QListBox lstFluxogramaItem;
         * @access protected
         */
		protected $lstFluxogramaItem;


		// Controls that allow the viewing of Balanco's individual data fields
        /**
         * @var QLabel lblQuantidade
         * @access protected
         */
		protected $lblQuantidade;

        /**
         * @var QLabel lblBalanco
         * @access protected
         */
		protected $lblBalanco;

        /**
         * @var QLabel lblOrdemProducaoGradeId
         * @access protected
         */
		protected $lblOrdemProducaoGradeId;

        /**
         * @var QLabel lblFluxogramaItemId
         * @access protected
         */
		protected $lblFluxogramaItemId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * BalancoMetaControl to edit a single Balanco object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Balanco object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoMetaControl
		 * @param Balanco $objBalanco new or existing Balanco object
		 */
		 public function __construct($objParentObject, Balanco $objBalanco) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this BalancoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Balanco object
			$this->objBalanco = $objBalanco;

			// Figure out if we're Editing or Creating New
			if ($this->objBalanco->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Balanco object creation - defaults to CreateOrEdit
 		 * @return BalancoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objBalanco = Balanco::Load($intId);

				// Balanco was found -- return it!
				if ($objBalanco)
					return new BalancoMetaControl($objParentObject, $objBalanco);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Balanco object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new BalancoMetaControl($objParentObject, new Balanco());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Balanco object creation - defaults to CreateOrEdit
		 * @return BalancoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return BalancoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Balanco object creation - defaults to CreateOrEdit
		 * @return BalancoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return BalancoMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objBalanco->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidade
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidade_Create($strControlId = null) {
			$this->txtQuantidade = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidade->Name = QApplication::Translate('Quantidade');
			$this->txtQuantidade->Text = $this->objBalanco->Quantidade;
			$this->txtQuantidade->Required = true;
			return $this->txtQuantidade;
		}

		/**
		 * Create and setup QLabel lblQuantidade
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidade_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidade = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidade->Name = QApplication::Translate('Quantidade');
			$this->lblQuantidade->Text = $this->objBalanco->Quantidade;
			$this->lblQuantidade->Required = true;
			$this->lblQuantidade->Format = $strFormat;
			return $this->lblQuantidade;
		}

		/**
		 * Create and setup QIntegerTextBox txtBalanco
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtBalanco_Create($strControlId = null) {
			$this->txtBalanco = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtBalanco->Name = QApplication::Translate('Balanco');
			$this->txtBalanco->Text = $this->objBalanco->Balanco;
			$this->txtBalanco->Required = true;
			return $this->txtBalanco;
		}

		/**
		 * Create and setup QLabel lblBalanco
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblBalanco_Create($strControlId = null, $strFormat = null) {
			$this->lblBalanco = new QLabel($this->objParentObject, $strControlId);
			$this->lblBalanco->Name = QApplication::Translate('Balanco');
			$this->lblBalanco->Text = $this->objBalanco->Balanco;
			$this->lblBalanco->Required = true;
			$this->lblBalanco->Format = $strFormat;
			return $this->lblBalanco;
		}

		/**
		 * Create and setup QListBox lstOrdemProducaoGrade
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstOrdemProducaoGrade_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstOrdemProducaoGrade = new QListBox($this->objParentObject, $strControlId);
			$this->lstOrdemProducaoGrade->Name = QApplication::Translate('Ordem Producao Grade');
			$this->lstOrdemProducaoGrade->Required = true;
			if (!$this->blnEditMode)
				$this->lstOrdemProducaoGrade->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objOrdemProducaoGradeCursor = OrdemProducaoGrade::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objOrdemProducaoGrade = OrdemProducaoGrade::InstantiateCursor($objOrdemProducaoGradeCursor)) {
				$objListItem = new QListItem($objOrdemProducaoGrade->__toString(), $objOrdemProducaoGrade->Id);
				if (($this->objBalanco->OrdemProducaoGrade) && ($this->objBalanco->OrdemProducaoGrade->Id == $objOrdemProducaoGrade->Id))
					$objListItem->Selected = true;
				$this->lstOrdemProducaoGrade->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstOrdemProducaoGrade;
		}

		/**
		 * Create and setup QLabel lblOrdemProducaoGradeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOrdemProducaoGradeId_Create($strControlId = null) {
			$this->lblOrdemProducaoGradeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrdemProducaoGradeId->Name = QApplication::Translate('Ordem Producao Grade');
			$this->lblOrdemProducaoGradeId->Text = ($this->objBalanco->OrdemProducaoGrade) ? $this->objBalanco->OrdemProducaoGrade->__toString() : null;
			$this->lblOrdemProducaoGradeId->Required = true;
			return $this->lblOrdemProducaoGradeId;
		}

		/**
		 * Create and setup QListBox lstFluxogramaItem
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstFluxogramaItem_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstFluxogramaItem = new QListBox($this->objParentObject, $strControlId);
			$this->lstFluxogramaItem->Name = QApplication::Translate('Fluxograma Item');
			$this->lstFluxogramaItem->Required = true;
			if (!$this->blnEditMode)
				$this->lstFluxogramaItem->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objFluxogramaItemCursor = FluxogramaItem::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objFluxogramaItem = FluxogramaItem::InstantiateCursor($objFluxogramaItemCursor)) {
				$objListItem = new QListItem($objFluxogramaItem->__toString(), $objFluxogramaItem->Id);
				if (($this->objBalanco->FluxogramaItem) && ($this->objBalanco->FluxogramaItem->Id == $objFluxogramaItem->Id))
					$objListItem->Selected = true;
				$this->lstFluxogramaItem->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstFluxogramaItem;
		}

		/**
		 * Create and setup QLabel lblFluxogramaItemId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFluxogramaItemId_Create($strControlId = null) {
			$this->lblFluxogramaItemId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFluxogramaItemId->Name = QApplication::Translate('Fluxograma Item');
			$this->lblFluxogramaItemId->Text = ($this->objBalanco->FluxogramaItem) ? $this->objBalanco->FluxogramaItem->__toString() : null;
			$this->lblFluxogramaItemId->Required = true;
			return $this->lblFluxogramaItemId;
		}



		/**
		 * Refresh this MetaControl with Data from the local Balanco object.
		 * @param boolean $blnReload reload Balanco from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objBalanco->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objBalanco->Id;

			if ($this->txtQuantidade) $this->txtQuantidade->Text = $this->objBalanco->Quantidade;
			if ($this->lblQuantidade) $this->lblQuantidade->Text = $this->objBalanco->Quantidade;

			if ($this->txtBalanco) $this->txtBalanco->Text = $this->objBalanco->Balanco;
			if ($this->lblBalanco) $this->lblBalanco->Text = $this->objBalanco->Balanco;

			if ($this->lstOrdemProducaoGrade) {
					$this->lstOrdemProducaoGrade->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstOrdemProducaoGrade->AddItem(QApplication::Translate('- Select One -'), null);
				$objOrdemProducaoGradeArray = OrdemProducaoGrade::LoadAll();
				if ($objOrdemProducaoGradeArray) foreach ($objOrdemProducaoGradeArray as $objOrdemProducaoGrade) {
					$objListItem = new QListItem($objOrdemProducaoGrade->__toString(), $objOrdemProducaoGrade->Id);
					if (($this->objBalanco->OrdemProducaoGrade) && ($this->objBalanco->OrdemProducaoGrade->Id == $objOrdemProducaoGrade->Id))
						$objListItem->Selected = true;
					$this->lstOrdemProducaoGrade->AddItem($objListItem);
				}
			}
			if ($this->lblOrdemProducaoGradeId) $this->lblOrdemProducaoGradeId->Text = ($this->objBalanco->OrdemProducaoGrade) ? $this->objBalanco->OrdemProducaoGrade->__toString() : null;

			if ($this->lstFluxogramaItem) {
					$this->lstFluxogramaItem->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFluxogramaItem->AddItem(QApplication::Translate('- Select One -'), null);
				$objFluxogramaItemArray = FluxogramaItem::LoadAll();
				if ($objFluxogramaItemArray) foreach ($objFluxogramaItemArray as $objFluxogramaItem) {
					$objListItem = new QListItem($objFluxogramaItem->__toString(), $objFluxogramaItem->Id);
					if (($this->objBalanco->FluxogramaItem) && ($this->objBalanco->FluxogramaItem->Id == $objFluxogramaItem->Id))
						$objListItem->Selected = true;
					$this->lstFluxogramaItem->AddItem($objListItem);
				}
			}
			if ($this->lblFluxogramaItemId) $this->lblFluxogramaItemId->Text = ($this->objBalanco->FluxogramaItem) ? $this->objBalanco->FluxogramaItem->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC BALANCO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Balanco instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveBalanco() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtQuantidade) $this->objBalanco->Quantidade = $this->txtQuantidade->Text;
				if ($this->txtBalanco) $this->objBalanco->Balanco = $this->txtBalanco->Text;
				if ($this->lstOrdemProducaoGrade) $this->objBalanco->OrdemProducaoGradeId = $this->lstOrdemProducaoGrade->SelectedValue;
				if ($this->lstFluxogramaItem) $this->objBalanco->FluxogramaItemId = $this->lstFluxogramaItem->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Balanco object
				$this->objBalanco->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Balanco instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteBalanco() {
			$this->objBalanco->Delete();
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
				case 'Balanco': return $this->objBalanco;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Balanco fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'QuantidadeControl':
					if (!$this->txtQuantidade) return $this->txtQuantidade_Create();
					return $this->txtQuantidade;
				case 'QuantidadeLabel':
					if (!$this->lblQuantidade) return $this->lblQuantidade_Create();
					return $this->lblQuantidade;
				case 'BalancoControl':
					if (!$this->txtBalanco) return $this->txtBalanco_Create();
					return $this->txtBalanco;
				case 'BalancoLabel':
					if (!$this->lblBalanco) return $this->lblBalanco_Create();
					return $this->lblBalanco;
				case 'OrdemProducaoGradeIdControl':
					if (!$this->lstOrdemProducaoGrade) return $this->lstOrdemProducaoGrade_Create();
					return $this->lstOrdemProducaoGrade;
				case 'OrdemProducaoGradeIdLabel':
					if (!$this->lblOrdemProducaoGradeId) return $this->lblOrdemProducaoGradeId_Create();
					return $this->lblOrdemProducaoGradeId;
				case 'FluxogramaItemIdControl':
					if (!$this->lstFluxogramaItem) return $this->lstFluxogramaItem_Create();
					return $this->lstFluxogramaItem;
				case 'FluxogramaItemIdLabel':
					if (!$this->lblFluxogramaItemId) return $this->lblFluxogramaItemId_Create();
					return $this->lblFluxogramaItemId;
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
					// Controls that point to Balanco fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeControl':
						return ($this->txtQuantidade = QType::Cast($mixValue, 'QControl'));
					case 'BalancoControl':
						return ($this->txtBalanco = QType::Cast($mixValue, 'QControl'));
					case 'OrdemProducaoGradeIdControl':
						return ($this->lstOrdemProducaoGrade = QType::Cast($mixValue, 'QControl'));
					case 'FluxogramaItemIdControl':
						return ($this->lstFluxogramaItem = QType::Cast($mixValue, 'QControl'));
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