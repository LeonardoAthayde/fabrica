<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the CostureiraTempoReal class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single CostureiraTempoReal object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CostureiraTempoRealMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read CostureiraTempoReal $CostureiraTempoReal the actual CostureiraTempoReal data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $QuantidadeControl
	 * property-read QLabel $QuantidadeLabel
	 * property QListBox $OrdemProducaoGradeIdControl
	 * property-read QLabel $OrdemProducaoGradeIdLabel
	 * property QListBox $CostureiraIdControl
	 * property-read QLabel $CostureiraIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CostureiraTempoRealMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var CostureiraTempoReal objCostureiraTempoReal
		 * @access protected
		 */
		protected $objCostureiraTempoReal;

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

		// Controls that allow the editing of CostureiraTempoReal's individual data fields
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
         * @var QListBox lstOrdemProducaoGrade;
         * @access protected
         */
		protected $lstOrdemProducaoGrade;

        /**
         * @var QListBox lstCostureira;
         * @access protected
         */
		protected $lstCostureira;


		// Controls that allow the viewing of CostureiraTempoReal's individual data fields
        /**
         * @var QLabel lblQuantidade
         * @access protected
         */
		protected $lblQuantidade;

        /**
         * @var QLabel lblOrdemProducaoGradeId
         * @access protected
         */
		protected $lblOrdemProducaoGradeId;

        /**
         * @var QLabel lblCostureiraId
         * @access protected
         */
		protected $lblCostureiraId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CostureiraTempoRealMetaControl to edit a single CostureiraTempoReal object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single CostureiraTempoReal object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoRealMetaControl
		 * @param CostureiraTempoReal $objCostureiraTempoReal new or existing CostureiraTempoReal object
		 */
		 public function __construct($objParentObject, CostureiraTempoReal $objCostureiraTempoReal) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CostureiraTempoRealMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked CostureiraTempoReal object
			$this->objCostureiraTempoReal = $objCostureiraTempoReal;

			// Figure out if we're Editing or Creating New
			if ($this->objCostureiraTempoReal->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoRealMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraTempoReal object creation - defaults to CreateOrEdit
 		 * @return CostureiraTempoRealMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objCostureiraTempoReal = CostureiraTempoReal::Load($intId);

				// CostureiraTempoReal was found -- return it!
				if ($objCostureiraTempoReal)
					return new CostureiraTempoRealMetaControl($objParentObject, $objCostureiraTempoReal);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a CostureiraTempoReal object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CostureiraTempoRealMetaControl($objParentObject, new CostureiraTempoReal());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoRealMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraTempoReal object creation - defaults to CreateOrEdit
		 * @return CostureiraTempoRealMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return CostureiraTempoRealMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoRealMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraTempoReal object creation - defaults to CreateOrEdit
		 * @return CostureiraTempoRealMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return CostureiraTempoRealMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objCostureiraTempoReal->Id;
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
			$this->txtQuantidade->Text = $this->objCostureiraTempoReal->Quantidade;
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
			$this->lblQuantidade->Text = $this->objCostureiraTempoReal->Quantidade;
			$this->lblQuantidade->Required = true;
			$this->lblQuantidade->Format = $strFormat;
			return $this->lblQuantidade;
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
				if (($this->objCostureiraTempoReal->OrdemProducaoGrade) && ($this->objCostureiraTempoReal->OrdemProducaoGrade->Id == $objOrdemProducaoGrade->Id))
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
			$this->lblOrdemProducaoGradeId->Text = ($this->objCostureiraTempoReal->OrdemProducaoGrade) ? $this->objCostureiraTempoReal->OrdemProducaoGrade->__toString() : null;
			$this->lblOrdemProducaoGradeId->Required = true;
			return $this->lblOrdemProducaoGradeId;
		}

		/**
		 * Create and setup QListBox lstCostureira
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstCostureira_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstCostureira = new QListBox($this->objParentObject, $strControlId);
			$this->lstCostureira->Name = QApplication::Translate('Costureira');
			$this->lstCostureira->Required = true;
			if (!$this->blnEditMode)
				$this->lstCostureira->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCostureiraCursor = Costureira::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCostureira = Costureira::InstantiateCursor($objCostureiraCursor)) {
				$objListItem = new QListItem($objCostureira->__toString(), $objCostureira->Id);
				if (($this->objCostureiraTempoReal->Costureira) && ($this->objCostureiraTempoReal->Costureira->Id == $objCostureira->Id))
					$objListItem->Selected = true;
				$this->lstCostureira->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstCostureira;
		}

		/**
		 * Create and setup QLabel lblCostureiraId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCostureiraId_Create($strControlId = null) {
			$this->lblCostureiraId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCostureiraId->Name = QApplication::Translate('Costureira');
			$this->lblCostureiraId->Text = ($this->objCostureiraTempoReal->Costureira) ? $this->objCostureiraTempoReal->Costureira->__toString() : null;
			$this->lblCostureiraId->Required = true;
			return $this->lblCostureiraId;
		}



		/**
		 * Refresh this MetaControl with Data from the local CostureiraTempoReal object.
		 * @param boolean $blnReload reload CostureiraTempoReal from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCostureiraTempoReal->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objCostureiraTempoReal->Id;

			if ($this->txtQuantidade) $this->txtQuantidade->Text = $this->objCostureiraTempoReal->Quantidade;
			if ($this->lblQuantidade) $this->lblQuantidade->Text = $this->objCostureiraTempoReal->Quantidade;

			if ($this->lstOrdemProducaoGrade) {
					$this->lstOrdemProducaoGrade->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstOrdemProducaoGrade->AddItem(QApplication::Translate('- Select One -'), null);
				$objOrdemProducaoGradeArray = OrdemProducaoGrade::LoadAll();
				if ($objOrdemProducaoGradeArray) foreach ($objOrdemProducaoGradeArray as $objOrdemProducaoGrade) {
					$objListItem = new QListItem($objOrdemProducaoGrade->__toString(), $objOrdemProducaoGrade->Id);
					if (($this->objCostureiraTempoReal->OrdemProducaoGrade) && ($this->objCostureiraTempoReal->OrdemProducaoGrade->Id == $objOrdemProducaoGrade->Id))
						$objListItem->Selected = true;
					$this->lstOrdemProducaoGrade->AddItem($objListItem);
				}
			}
			if ($this->lblOrdemProducaoGradeId) $this->lblOrdemProducaoGradeId->Text = ($this->objCostureiraTempoReal->OrdemProducaoGrade) ? $this->objCostureiraTempoReal->OrdemProducaoGrade->__toString() : null;

			if ($this->lstCostureira) {
					$this->lstCostureira->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstCostureira->AddItem(QApplication::Translate('- Select One -'), null);
				$objCostureiraArray = Costureira::LoadAll();
				if ($objCostureiraArray) foreach ($objCostureiraArray as $objCostureira) {
					$objListItem = new QListItem($objCostureira->__toString(), $objCostureira->Id);
					if (($this->objCostureiraTempoReal->Costureira) && ($this->objCostureiraTempoReal->Costureira->Id == $objCostureira->Id))
						$objListItem->Selected = true;
					$this->lstCostureira->AddItem($objListItem);
				}
			}
			if ($this->lblCostureiraId) $this->lblCostureiraId->Text = ($this->objCostureiraTempoReal->Costureira) ? $this->objCostureiraTempoReal->Costureira->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COSTUREIRATEMPOREAL OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's CostureiraTempoReal instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCostureiraTempoReal() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtQuantidade) $this->objCostureiraTempoReal->Quantidade = $this->txtQuantidade->Text;
				if ($this->lstOrdemProducaoGrade) $this->objCostureiraTempoReal->OrdemProducaoGradeId = $this->lstOrdemProducaoGrade->SelectedValue;
				if ($this->lstCostureira) $this->objCostureiraTempoReal->CostureiraId = $this->lstCostureira->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the CostureiraTempoReal object
				$this->objCostureiraTempoReal->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's CostureiraTempoReal instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCostureiraTempoReal() {
			$this->objCostureiraTempoReal->Delete();
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
				case 'CostureiraTempoReal': return $this->objCostureiraTempoReal;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to CostureiraTempoReal fields -- will be created dynamically if not yet created
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
				case 'OrdemProducaoGradeIdControl':
					if (!$this->lstOrdemProducaoGrade) return $this->lstOrdemProducaoGrade_Create();
					return $this->lstOrdemProducaoGrade;
				case 'OrdemProducaoGradeIdLabel':
					if (!$this->lblOrdemProducaoGradeId) return $this->lblOrdemProducaoGradeId_Create();
					return $this->lblOrdemProducaoGradeId;
				case 'CostureiraIdControl':
					if (!$this->lstCostureira) return $this->lstCostureira_Create();
					return $this->lstCostureira;
				case 'CostureiraIdLabel':
					if (!$this->lblCostureiraId) return $this->lblCostureiraId_Create();
					return $this->lblCostureiraId;
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
					// Controls that point to CostureiraTempoReal fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeControl':
						return ($this->txtQuantidade = QType::Cast($mixValue, 'QControl'));
					case 'OrdemProducaoGradeIdControl':
						return ($this->lstOrdemProducaoGrade = QType::Cast($mixValue, 'QControl'));
					case 'CostureiraIdControl':
						return ($this->lstCostureira = QType::Cast($mixValue, 'QControl'));
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