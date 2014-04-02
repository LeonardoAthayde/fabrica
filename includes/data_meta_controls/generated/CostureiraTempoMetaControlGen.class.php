<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the CostureiraTempo class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single CostureiraTempo object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CostureiraTempoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read CostureiraTempo $CostureiraTempo the actual CostureiraTempo data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $CostureiraProducaoIdControl
	 * property-read QLabel $CostureiraProducaoIdLabel
	 * property QDateTimePicker $InicioControl
	 * property-read QLabel $InicioLabel
	 * property QDateTimePicker $FimControl
	 * property-read QLabel $FimLabel
	 * property QIntegerTextBox $TempoControl
	 * property-read QLabel $TempoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CostureiraTempoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var CostureiraTempo objCostureiraTempo
		 * @access protected
		 */
		protected $objCostureiraTempo;

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

		// Controls that allow the editing of CostureiraTempo's individual data fields
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
         * @var QDateTimePicker calInicio;
         * @access protected
         */
		protected $calInicio;

        /**
         * @var QDateTimePicker calFim;
         * @access protected
         */
		protected $calFim;

        /**
         * @var QIntegerTextBox txtTempo;
         * @access protected
         */
		protected $txtTempo;


		// Controls that allow the viewing of CostureiraTempo's individual data fields
        /**
         * @var QLabel lblCostureiraProducaoId
         * @access protected
         */
		protected $lblCostureiraProducaoId;

        /**
         * @var QLabel lblInicio
         * @access protected
         */
		protected $lblInicio;

        /**
         * @var QLabel lblFim
         * @access protected
         */
		protected $lblFim;

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
		 * CostureiraTempoMetaControl to edit a single CostureiraTempo object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single CostureiraTempo object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoMetaControl
		 * @param CostureiraTempo $objCostureiraTempo new or existing CostureiraTempo object
		 */
		 public function __construct($objParentObject, CostureiraTempo $objCostureiraTempo) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CostureiraTempoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked CostureiraTempo object
			$this->objCostureiraTempo = $objCostureiraTempo;

			// Figure out if we're Editing or Creating New
			if ($this->objCostureiraTempo->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraTempo object creation - defaults to CreateOrEdit
 		 * @return CostureiraTempoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objCostureiraTempo = CostureiraTempo::Load($intId);

				// CostureiraTempo was found -- return it!
				if ($objCostureiraTempo)
					return new CostureiraTempoMetaControl($objParentObject, $objCostureiraTempo);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a CostureiraTempo object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CostureiraTempoMetaControl($objParentObject, new CostureiraTempo());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraTempo object creation - defaults to CreateOrEdit
		 * @return CostureiraTempoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return CostureiraTempoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraTempoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraTempo object creation - defaults to CreateOrEdit
		 * @return CostureiraTempoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return CostureiraTempoMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objCostureiraTempo->Id;
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
				if (($this->objCostureiraTempo->CostureiraProducao) && ($this->objCostureiraTempo->CostureiraProducao->Id == $objCostureiraProducao->Id))
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
			$this->lblCostureiraProducaoId->Text = ($this->objCostureiraTempo->CostureiraProducao) ? $this->objCostureiraTempo->CostureiraProducao->__toString() : null;
			$this->lblCostureiraProducaoId->Required = true;
			return $this->lblCostureiraProducaoId;
		}

		/**
		 * Create and setup QDateTimePicker calInicio
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calInicio_Create($strControlId = null) {
			$this->calInicio = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calInicio->Name = QApplication::Translate('Inicio');
			$this->calInicio->DateTime = $this->objCostureiraTempo->Inicio;
			$this->calInicio->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calInicio->Required = true;
			return $this->calInicio;
		}

		/**
		 * Create and setup QLabel lblInicio
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblInicio_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblInicio = new QLabel($this->objParentObject, $strControlId);
			$this->lblInicio->Name = QApplication::Translate('Inicio');
			$this->strInicioDateTimeFormat = $strDateTimeFormat;
			$this->lblInicio->Text = sprintf($this->objCostureiraTempo->Inicio) ? $this->objCostureiraTempo->Inicio->__toString($this->strInicioDateTimeFormat) : null;
			$this->lblInicio->Required = true;
			return $this->lblInicio;
		}

		protected $strInicioDateTimeFormat;

		/**
		 * Create and setup QDateTimePicker calFim
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFim_Create($strControlId = null) {
			$this->calFim = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFim->Name = QApplication::Translate('Fim');
			$this->calFim->DateTime = $this->objCostureiraTempo->Fim;
			$this->calFim->DateTimePickerType = QDateTimePickerType::DateTime;
			return $this->calFim;
		}

		/**
		 * Create and setup QLabel lblFim
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFim_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFim = new QLabel($this->objParentObject, $strControlId);
			$this->lblFim->Name = QApplication::Translate('Fim');
			$this->strFimDateTimeFormat = $strDateTimeFormat;
			$this->lblFim->Text = sprintf($this->objCostureiraTempo->Fim) ? $this->objCostureiraTempo->Fim->__toString($this->strFimDateTimeFormat) : null;
			return $this->lblFim;
		}

		protected $strFimDateTimeFormat;

		/**
		 * Create and setup QIntegerTextBox txtTempo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTempo_Create($strControlId = null) {
			$this->txtTempo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTempo->Name = QApplication::Translate('Tempo');
			$this->txtTempo->Text = $this->objCostureiraTempo->Tempo;
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
			$this->lblTempo->Text = $this->objCostureiraTempo->Tempo;
			$this->lblTempo->Format = $strFormat;
			return $this->lblTempo;
		}



		/**
		 * Refresh this MetaControl with Data from the local CostureiraTempo object.
		 * @param boolean $blnReload reload CostureiraTempo from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCostureiraTempo->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objCostureiraTempo->Id;

			if ($this->lstCostureiraProducao) {
					$this->lstCostureiraProducao->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstCostureiraProducao->AddItem(QApplication::Translate('- Select One -'), null);
				$objCostureiraProducaoArray = CostureiraProducao::LoadAll();
				if ($objCostureiraProducaoArray) foreach ($objCostureiraProducaoArray as $objCostureiraProducao) {
					$objListItem = new QListItem($objCostureiraProducao->__toString(), $objCostureiraProducao->Id);
					if (($this->objCostureiraTempo->CostureiraProducao) && ($this->objCostureiraTempo->CostureiraProducao->Id == $objCostureiraProducao->Id))
						$objListItem->Selected = true;
					$this->lstCostureiraProducao->AddItem($objListItem);
				}
			}
			if ($this->lblCostureiraProducaoId) $this->lblCostureiraProducaoId->Text = ($this->objCostureiraTempo->CostureiraProducao) ? $this->objCostureiraTempo->CostureiraProducao->__toString() : null;

			if ($this->calInicio) $this->calInicio->DateTime = $this->objCostureiraTempo->Inicio;
			if ($this->lblInicio) $this->lblInicio->Text = sprintf($this->objCostureiraTempo->Inicio) ? $this->objCostureiraTempo->__toString($this->strInicioDateTimeFormat) : null;

			if ($this->calFim) $this->calFim->DateTime = $this->objCostureiraTempo->Fim;
			if ($this->lblFim) $this->lblFim->Text = sprintf($this->objCostureiraTempo->Fim) ? $this->objCostureiraTempo->__toString($this->strFimDateTimeFormat) : null;

			if ($this->txtTempo) $this->txtTempo->Text = $this->objCostureiraTempo->Tempo;
			if ($this->lblTempo) $this->lblTempo->Text = $this->objCostureiraTempo->Tempo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COSTUREIRATEMPO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's CostureiraTempo instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCostureiraTempo() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstCostureiraProducao) $this->objCostureiraTempo->CostureiraProducaoId = $this->lstCostureiraProducao->SelectedValue;
				if ($this->calInicio) $this->objCostureiraTempo->Inicio = $this->calInicio->DateTime;
				if ($this->calFim) $this->objCostureiraTempo->Fim = $this->calFim->DateTime;
				if ($this->txtTempo) $this->objCostureiraTempo->Tempo = $this->txtTempo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the CostureiraTempo object
				$this->objCostureiraTempo->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's CostureiraTempo instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCostureiraTempo() {
			$this->objCostureiraTempo->Delete();
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
				case 'CostureiraTempo': return $this->objCostureiraTempo;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to CostureiraTempo fields -- will be created dynamically if not yet created
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
				case 'InicioControl':
					if (!$this->calInicio) return $this->calInicio_Create();
					return $this->calInicio;
				case 'InicioLabel':
					if (!$this->lblInicio) return $this->lblInicio_Create();
					return $this->lblInicio;
				case 'FimControl':
					if (!$this->calFim) return $this->calFim_Create();
					return $this->calFim;
				case 'FimLabel':
					if (!$this->lblFim) return $this->lblFim_Create();
					return $this->lblFim;
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
					// Controls that point to CostureiraTempo fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'CostureiraProducaoIdControl':
						return ($this->lstCostureiraProducao = QType::Cast($mixValue, 'QControl'));
					case 'InicioControl':
						return ($this->calInicio = QType::Cast($mixValue, 'QControl'));
					case 'FimControl':
						return ($this->calFim = QType::Cast($mixValue, 'QControl'));
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