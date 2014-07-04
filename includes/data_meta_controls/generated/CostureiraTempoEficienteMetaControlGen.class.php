<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the CostureiraTempoEficiente class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single CostureiraTempoEficiente object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CostureiraTempoEficienteMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read CostureiraTempoEficiente $CostureiraTempoEficiente the actual CostureiraTempoEficiente data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $CostureiraProducaoIdControl
	 * property-read QLabel $CostureiraProducaoIdLabel
	 * property QDateTimePicker $DateControl
	 * property-read QLabel $DateLabel
	 * property QIntegerTextBox $TempoControl
	 * property-read QLabel $TempoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CostureiraTempoEficienteMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var CostureiraTempoEficiente objCostureiraTempoEficiente
		 * @access protected
		 */
		protected $objCostureiraTempoEficiente;

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

		// Controls that allow the editing of CostureiraTempoEficiente's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstCostureiraProducao;
         * @access protected
         */
		protected $lstCostureiraProducao;

        /**
         * @var QDateTimePicker calDate;
         * @access protected
         */
		protected $calDate;

        /**
         * @var QIntegerTextBox txtTempo;
         * @access protected
         */
		protected $txtTempo;


		// Controls that allow the viewing of CostureiraTempoEficiente's individual data fields
        /**
         * @var QLabel lblCostureiraProducaoId
         * @access protected
         */
		protected $lblCostureiraProducaoId;

        /**
         * @var QLabel lblDate
         * @access protected
         */
		protected $lblDate;

        /**
         * @var QLabel lblTempo
         * @access protected
         */
		protected $lblTempo;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CostureiraTempoEficienteMetaControl to edit a single CostureiraTempoEficiente object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single CostureiraTempoEficiente object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoEficienteMetaControl
		 * @param CostureiraTempoEficiente $objCostureiraTempoEficiente new or existing CostureiraTempoEficiente object
		 */
		 public function __construct($objParentObject, CostureiraTempoEficiente $objCostureiraTempoEficiente) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CostureiraTempoEficienteMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked CostureiraTempoEficiente object
			$this->objCostureiraTempoEficiente = $objCostureiraTempoEficiente;

			// Figure out if we're Editing or Creating New
			if ($this->objCostureiraTempoEficiente->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoEficienteMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraTempoEficiente object creation - defaults to CreateOrEdit
 		 * @return CostureiraTempoEficienteMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objCostureiraTempoEficiente = CostureiraTempoEficiente::Load($intId);

				// CostureiraTempoEficiente was found -- return it!
				if ($objCostureiraTempoEficiente)
					return new CostureiraTempoEficienteMetaControl($objParentObject, $objCostureiraTempoEficiente);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a CostureiraTempoEficiente object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CostureiraTempoEficienteMetaControl($objParentObject, new CostureiraTempoEficiente());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoEficienteMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraTempoEficiente object creation - defaults to CreateOrEdit
		 * @return CostureiraTempoEficienteMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return CostureiraTempoEficienteMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoEficienteMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraTempoEficiente object creation - defaults to CreateOrEdit
		 * @return CostureiraTempoEficienteMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return CostureiraTempoEficienteMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objCostureiraTempoEficiente->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstCostureiraProducao
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstCostureiraProducao_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstCostureiraProducao = new QListBox($this->objParentObject, $strControlId);
			$this->lstCostureiraProducao->Name = QApplication::Translate('Costureira Producao');
			$this->lstCostureiraProducao->Required = true;
			if (!$this->blnEditMode)
				$this->lstCostureiraProducao->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCostureiraProducaoCursor = CostureiraProducao::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCostureiraProducao = CostureiraProducao::InstantiateCursor($objCostureiraProducaoCursor)) {
				$objListItem = new QListItem($objCostureiraProducao->__toString(), $objCostureiraProducao->Id);
				if (($this->objCostureiraTempoEficiente->CostureiraProducao) && ($this->objCostureiraTempoEficiente->CostureiraProducao->Id == $objCostureiraProducao->Id))
					$objListItem->Selected = true;
				$this->lstCostureiraProducao->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstCostureiraProducao;
		}

		/**
		 * Create and setup QLabel lblCostureiraProducaoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCostureiraProducaoId_Create($strControlId = null) {
			$this->lblCostureiraProducaoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCostureiraProducaoId->Name = QApplication::Translate('Costureira Producao');
			$this->lblCostureiraProducaoId->Text = ($this->objCostureiraTempoEficiente->CostureiraProducao) ? $this->objCostureiraTempoEficiente->CostureiraProducao->__toString() : null;
			$this->lblCostureiraProducaoId->Required = true;
			return $this->lblCostureiraProducaoId;
		}

		/**
		 * Create and setup QDateTimePicker calDate
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDate_Create($strControlId = null) {
			$this->calDate = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDate->Name = QApplication::Translate('Date');
			$this->calDate->DateTime = $this->objCostureiraTempoEficiente->Date;
			$this->calDate->DateTimePickerType = QDateTimePickerType::Date;
			$this->calDate->Required = true;
			return $this->calDate;
		}

		/**
		 * Create and setup QLabel lblDate
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblDate_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDate = new QLabel($this->objParentObject, $strControlId);
			$this->lblDate->Name = QApplication::Translate('Date');
			$this->strDateDateTimeFormat = $strDateTimeFormat;
			$this->lblDate->Text = sprintf($this->objCostureiraTempoEficiente->Date) ? $this->objCostureiraTempoEficiente->Date->__toString($this->strDateDateTimeFormat) : null;
			$this->lblDate->Required = true;
			return $this->lblDate;
		}

		protected $strDateDateTimeFormat;

		/**
		 * Create and setup QIntegerTextBox txtTempo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTempo_Create($strControlId = null) {
			$this->txtTempo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTempo->Name = QApplication::Translate('Tempo');
			$this->txtTempo->Text = $this->objCostureiraTempoEficiente->Tempo;
			$this->txtTempo->Required = true;
			return $this->txtTempo;
		}

		/**
		 * Create and setup QLabel lblTempo
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTempo_Create($strControlId = null, $strFormat = null) {
			$this->lblTempo = new QLabel($this->objParentObject, $strControlId);
			$this->lblTempo->Name = QApplication::Translate('Tempo');
			$this->lblTempo->Text = $this->objCostureiraTempoEficiente->Tempo;
			$this->lblTempo->Required = true;
			$this->lblTempo->Format = $strFormat;
			return $this->lblTempo;
		}



		/**
		 * Refresh this MetaControl with Data from the local CostureiraTempoEficiente object.
		 * @param boolean $blnReload reload CostureiraTempoEficiente from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCostureiraTempoEficiente->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objCostureiraTempoEficiente->Id;

			if ($this->lstCostureiraProducao) {
					$this->lstCostureiraProducao->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstCostureiraProducao->AddItem(QApplication::Translate('- Select One -'), null);
				$objCostureiraProducaoArray = CostureiraProducao::LoadAll();
				if ($objCostureiraProducaoArray) foreach ($objCostureiraProducaoArray as $objCostureiraProducao) {
					$objListItem = new QListItem($objCostureiraProducao->__toString(), $objCostureiraProducao->Id);
					if (($this->objCostureiraTempoEficiente->CostureiraProducao) && ($this->objCostureiraTempoEficiente->CostureiraProducao->Id == $objCostureiraProducao->Id))
						$objListItem->Selected = true;
					$this->lstCostureiraProducao->AddItem($objListItem);
				}
			}
			if ($this->lblCostureiraProducaoId) $this->lblCostureiraProducaoId->Text = ($this->objCostureiraTempoEficiente->CostureiraProducao) ? $this->objCostureiraTempoEficiente->CostureiraProducao->__toString() : null;

			if ($this->calDate) $this->calDate->DateTime = $this->objCostureiraTempoEficiente->Date;
			if ($this->lblDate) $this->lblDate->Text = sprintf($this->objCostureiraTempoEficiente->Date) ? $this->objCostureiraTempoEficiente->__toString($this->strDateDateTimeFormat) : null;

			if ($this->txtTempo) $this->txtTempo->Text = $this->objCostureiraTempoEficiente->Tempo;
			if ($this->lblTempo) $this->lblTempo->Text = $this->objCostureiraTempoEficiente->Tempo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COSTUREIRATEMPOEFICIENTE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's CostureiraTempoEficiente instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCostureiraTempoEficiente() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstCostureiraProducao) $this->objCostureiraTempoEficiente->CostureiraProducaoId = $this->lstCostureiraProducao->SelectedValue;
				if ($this->calDate) $this->objCostureiraTempoEficiente->Date = $this->calDate->DateTime;
				if ($this->txtTempo) $this->objCostureiraTempoEficiente->Tempo = $this->txtTempo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the CostureiraTempoEficiente object
				$this->objCostureiraTempoEficiente->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's CostureiraTempoEficiente instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCostureiraTempoEficiente() {
			$this->objCostureiraTempoEficiente->Delete();
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
				case 'CostureiraTempoEficiente': return $this->objCostureiraTempoEficiente;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to CostureiraTempoEficiente fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'CostureiraProducaoIdControl':
					if (!$this->lstCostureiraProducao) return $this->lstCostureiraProducao_Create();
					return $this->lstCostureiraProducao;
				case 'CostureiraProducaoIdLabel':
					if (!$this->lblCostureiraProducaoId) return $this->lblCostureiraProducaoId_Create();
					return $this->lblCostureiraProducaoId;
				case 'DateControl':
					if (!$this->calDate) return $this->calDate_Create();
					return $this->calDate;
				case 'DateLabel':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
				case 'TempoControl':
					if (!$this->txtTempo) return $this->txtTempo_Create();
					return $this->txtTempo;
				case 'TempoLabel':
					if (!$this->lblTempo) return $this->lblTempo_Create();
					return $this->lblTempo;
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
					// Controls that point to CostureiraTempoEficiente fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'CostureiraProducaoIdControl':
						return ($this->lstCostureiraProducao = QType::Cast($mixValue, 'QControl'));
					case 'DateControl':
						return ($this->calDate = QType::Cast($mixValue, 'QControl'));
					case 'TempoControl':
						return ($this->txtTempo = QType::Cast($mixValue, 'QControl'));
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