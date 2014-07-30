<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FluxogramaAcoesTempo class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FluxogramaAcoesTempo object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FluxogramaAcoesTempoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FluxogramaAcoesTempo $FluxogramaAcoesTempo the actual FluxogramaAcoesTempo data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $FluxogramaAcoesIdControl
	 * property-read QLabel $FluxogramaAcoesIdLabel
	 * property QIntegerTextBox $TempoControl
	 * property-read QLabel $TempoLabel
	 * property QDateTimePicker $TempoMarcadoControl
	 * property-read QLabel $TempoMarcadoLabel
	 * property QDateTimePicker $TempoAjustadoControl
	 * property-read QLabel $TempoAjustadoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FluxogramaAcoesTempoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var FluxogramaAcoesTempo objFluxogramaAcoesTempo
		 * @access protected
		 */
		protected $objFluxogramaAcoesTempo;

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

		// Controls that allow the editing of FluxogramaAcoesTempo's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstFluxogramaAcoes;
         * @access protected
         */
		protected $lstFluxogramaAcoes;

        /**
         * @var QIntegerTextBox txtTempo;
         * @access protected
         */
		protected $txtTempo;

        /**
         * @var QDateTimePicker calTempoMarcado;
         * @access protected
         */
		protected $calTempoMarcado;

        /**
         * @var QDateTimePicker calTempoAjustado;
         * @access protected
         */
		protected $calTempoAjustado;


		// Controls that allow the viewing of FluxogramaAcoesTempo's individual data fields
        /**
         * @var QLabel lblFluxogramaAcoesId
         * @access protected
         */
		protected $lblFluxogramaAcoesId;

        /**
         * @var QLabel lblTempo
         * @access protected
         */
		protected $lblTempo;

        /**
         * @var QLabel lblTempoMarcado
         * @access protected
         */
		protected $lblTempoMarcado;

        /**
         * @var QLabel lblTempoAjustado
         * @access protected
         */
		protected $lblTempoAjustado;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FluxogramaAcoesTempoMetaControl to edit a single FluxogramaAcoesTempo object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FluxogramaAcoesTempo object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaAcoesTempoMetaControl
		 * @param FluxogramaAcoesTempo $objFluxogramaAcoesTempo new or existing FluxogramaAcoesTempo object
		 */
		 public function __construct($objParentObject, FluxogramaAcoesTempo $objFluxogramaAcoesTempo) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FluxogramaAcoesTempoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FluxogramaAcoesTempo object
			$this->objFluxogramaAcoesTempo = $objFluxogramaAcoesTempo;

			// Figure out if we're Editing or Creating New
			if ($this->objFluxogramaAcoesTempo->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaAcoesTempoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FluxogramaAcoesTempo object creation - defaults to CreateOrEdit
 		 * @return FluxogramaAcoesTempoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFluxogramaAcoesTempo = FluxogramaAcoesTempo::Load($intId);

				// FluxogramaAcoesTempo was found -- return it!
				if ($objFluxogramaAcoesTempo)
					return new FluxogramaAcoesTempoMetaControl($objParentObject, $objFluxogramaAcoesTempo);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FluxogramaAcoesTempo object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FluxogramaAcoesTempoMetaControl($objParentObject, new FluxogramaAcoesTempo());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaAcoesTempoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FluxogramaAcoesTempo object creation - defaults to CreateOrEdit
		 * @return FluxogramaAcoesTempoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FluxogramaAcoesTempoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaAcoesTempoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FluxogramaAcoesTempo object creation - defaults to CreateOrEdit
		 * @return FluxogramaAcoesTempoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FluxogramaAcoesTempoMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFluxogramaAcoesTempo->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstFluxogramaAcoes
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstFluxogramaAcoes_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstFluxogramaAcoes = new QListBox($this->objParentObject, $strControlId);
			$this->lstFluxogramaAcoes->Name = QApplication::Translate('Fluxograma Acoes');
			$this->lstFluxogramaAcoes->Required = true;
			if (!$this->blnEditMode)
				$this->lstFluxogramaAcoes->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objFluxogramaAcoesCursor = FluxogramaAcoes::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objFluxogramaAcoes = FluxogramaAcoes::InstantiateCursor($objFluxogramaAcoesCursor)) {
				$objListItem = new QListItem($objFluxogramaAcoes->__toString(), $objFluxogramaAcoes->Id);
				if (($this->objFluxogramaAcoesTempo->FluxogramaAcoes) && ($this->objFluxogramaAcoesTempo->FluxogramaAcoes->Id == $objFluxogramaAcoes->Id))
					$objListItem->Selected = true;
				$this->lstFluxogramaAcoes->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstFluxogramaAcoes;
		}

		/**
		 * Create and setup QLabel lblFluxogramaAcoesId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFluxogramaAcoesId_Create($strControlId = null) {
			$this->lblFluxogramaAcoesId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFluxogramaAcoesId->Name = QApplication::Translate('Fluxograma Acoes');
			$this->lblFluxogramaAcoesId->Text = ($this->objFluxogramaAcoesTempo->FluxogramaAcoes) ? $this->objFluxogramaAcoesTempo->FluxogramaAcoes->__toString() : null;
			$this->lblFluxogramaAcoesId->Required = true;
			return $this->lblFluxogramaAcoesId;
		}

		/**
		 * Create and setup QIntegerTextBox txtTempo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTempo_Create($strControlId = null) {
			$this->txtTempo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTempo->Name = QApplication::Translate('Tempo');
			$this->txtTempo->Text = $this->objFluxogramaAcoesTempo->Tempo;
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
			$this->lblTempo->Text = $this->objFluxogramaAcoesTempo->Tempo;
			$this->lblTempo->Required = true;
			$this->lblTempo->Format = $strFormat;
			return $this->lblTempo;
		}

		/**
		 * Create and setup QDateTimePicker calTempoMarcado
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTempoMarcado_Create($strControlId = null) {
			$this->calTempoMarcado = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTempoMarcado->Name = QApplication::Translate('Tempo Marcado');
			$this->calTempoMarcado->DateTime = $this->objFluxogramaAcoesTempo->TempoMarcado;
			$this->calTempoMarcado->DateTimePickerType = QDateTimePickerType::Time;
			$this->calTempoMarcado->Required = true;
			return $this->calTempoMarcado;
		}

		/**
		 * Create and setup QLabel lblTempoMarcado
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTempoMarcado_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTempoMarcado = new QLabel($this->objParentObject, $strControlId);
			$this->lblTempoMarcado->Name = QApplication::Translate('Tempo Marcado');
			$this->strTempoMarcadoDateTimeFormat = $strDateTimeFormat;
			$this->lblTempoMarcado->Text = sprintf($this->objFluxogramaAcoesTempo->TempoMarcado) ? $this->objFluxogramaAcoesTempo->TempoMarcado->__toString($this->strTempoMarcadoDateTimeFormat) : null;
			$this->lblTempoMarcado->Required = true;
			return $this->lblTempoMarcado;
		}

		protected $strTempoMarcadoDateTimeFormat;

		/**
		 * Create and setup QDateTimePicker calTempoAjustado
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTempoAjustado_Create($strControlId = null) {
			$this->calTempoAjustado = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTempoAjustado->Name = QApplication::Translate('Tempo Ajustado');
			$this->calTempoAjustado->DateTime = $this->objFluxogramaAcoesTempo->TempoAjustado;
			$this->calTempoAjustado->DateTimePickerType = QDateTimePickerType::Time;
			$this->calTempoAjustado->Required = true;
			return $this->calTempoAjustado;
		}

		/**
		 * Create and setup QLabel lblTempoAjustado
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTempoAjustado_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTempoAjustado = new QLabel($this->objParentObject, $strControlId);
			$this->lblTempoAjustado->Name = QApplication::Translate('Tempo Ajustado');
			$this->strTempoAjustadoDateTimeFormat = $strDateTimeFormat;
			$this->lblTempoAjustado->Text = sprintf($this->objFluxogramaAcoesTempo->TempoAjustado) ? $this->objFluxogramaAcoesTempo->TempoAjustado->__toString($this->strTempoAjustadoDateTimeFormat) : null;
			$this->lblTempoAjustado->Required = true;
			return $this->lblTempoAjustado;
		}

		protected $strTempoAjustadoDateTimeFormat;



		/**
		 * Refresh this MetaControl with Data from the local FluxogramaAcoesTempo object.
		 * @param boolean $blnReload reload FluxogramaAcoesTempo from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFluxogramaAcoesTempo->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFluxogramaAcoesTempo->Id;

			if ($this->lstFluxogramaAcoes) {
					$this->lstFluxogramaAcoes->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFluxogramaAcoes->AddItem(QApplication::Translate('- Select One -'), null);
				$objFluxogramaAcoesArray = FluxogramaAcoes::LoadAll();
				if ($objFluxogramaAcoesArray) foreach ($objFluxogramaAcoesArray as $objFluxogramaAcoes) {
					$objListItem = new QListItem($objFluxogramaAcoes->__toString(), $objFluxogramaAcoes->Id);
					if (($this->objFluxogramaAcoesTempo->FluxogramaAcoes) && ($this->objFluxogramaAcoesTempo->FluxogramaAcoes->Id == $objFluxogramaAcoes->Id))
						$objListItem->Selected = true;
					$this->lstFluxogramaAcoes->AddItem($objListItem);
				}
			}
			if ($this->lblFluxogramaAcoesId) $this->lblFluxogramaAcoesId->Text = ($this->objFluxogramaAcoesTempo->FluxogramaAcoes) ? $this->objFluxogramaAcoesTempo->FluxogramaAcoes->__toString() : null;

			if ($this->txtTempo) $this->txtTempo->Text = $this->objFluxogramaAcoesTempo->Tempo;
			if ($this->lblTempo) $this->lblTempo->Text = $this->objFluxogramaAcoesTempo->Tempo;

			if ($this->calTempoMarcado) $this->calTempoMarcado->DateTime = $this->objFluxogramaAcoesTempo->TempoMarcado;
			if ($this->lblTempoMarcado) $this->lblTempoMarcado->Text = sprintf($this->objFluxogramaAcoesTempo->TempoMarcado) ? $this->objFluxogramaAcoesTempo->__toString($this->strTempoMarcadoDateTimeFormat) : null;

			if ($this->calTempoAjustado) $this->calTempoAjustado->DateTime = $this->objFluxogramaAcoesTempo->TempoAjustado;
			if ($this->lblTempoAjustado) $this->lblTempoAjustado->Text = sprintf($this->objFluxogramaAcoesTempo->TempoAjustado) ? $this->objFluxogramaAcoesTempo->__toString($this->strTempoAjustadoDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FLUXOGRAMAACOESTEMPO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FluxogramaAcoesTempo instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFluxogramaAcoesTempo() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstFluxogramaAcoes) $this->objFluxogramaAcoesTempo->FluxogramaAcoesId = $this->lstFluxogramaAcoes->SelectedValue;
				if ($this->txtTempo) $this->objFluxogramaAcoesTempo->Tempo = $this->txtTempo->Text;
				if ($this->calTempoMarcado) $this->objFluxogramaAcoesTempo->TempoMarcado = $this->calTempoMarcado->DateTime;
				if ($this->calTempoAjustado) $this->objFluxogramaAcoesTempo->TempoAjustado = $this->calTempoAjustado->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FluxogramaAcoesTempo object
				$this->objFluxogramaAcoesTempo->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FluxogramaAcoesTempo instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFluxogramaAcoesTempo() {
			$this->objFluxogramaAcoesTempo->Delete();
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
				case 'FluxogramaAcoesTempo': return $this->objFluxogramaAcoesTempo;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FluxogramaAcoesTempo fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'FluxogramaAcoesIdControl':
					if (!$this->lstFluxogramaAcoes) return $this->lstFluxogramaAcoes_Create();
					return $this->lstFluxogramaAcoes;
				case 'FluxogramaAcoesIdLabel':
					if (!$this->lblFluxogramaAcoesId) return $this->lblFluxogramaAcoesId_Create();
					return $this->lblFluxogramaAcoesId;
				case 'TempoControl':
					if (!$this->txtTempo) return $this->txtTempo_Create();
					return $this->txtTempo;
				case 'TempoLabel':
					if (!$this->lblTempo) return $this->lblTempo_Create();
					return $this->lblTempo;
				case 'TempoMarcadoControl':
					if (!$this->calTempoMarcado) return $this->calTempoMarcado_Create();
					return $this->calTempoMarcado;
				case 'TempoMarcadoLabel':
					if (!$this->lblTempoMarcado) return $this->lblTempoMarcado_Create();
					return $this->lblTempoMarcado;
				case 'TempoAjustadoControl':
					if (!$this->calTempoAjustado) return $this->calTempoAjustado_Create();
					return $this->calTempoAjustado;
				case 'TempoAjustadoLabel':
					if (!$this->lblTempoAjustado) return $this->lblTempoAjustado_Create();
					return $this->lblTempoAjustado;
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
					// Controls that point to FluxogramaAcoesTempo fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'FluxogramaAcoesIdControl':
						return ($this->lstFluxogramaAcoes = QType::Cast($mixValue, 'QControl'));
					case 'TempoControl':
						return ($this->txtTempo = QType::Cast($mixValue, 'QControl'));
					case 'TempoMarcadoControl':
						return ($this->calTempoMarcado = QType::Cast($mixValue, 'QControl'));
					case 'TempoAjustadoControl':
						return ($this->calTempoAjustado = QType::Cast($mixValue, 'QControl'));
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