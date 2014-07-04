<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Comando class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Comando object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ComandoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Comando $Comando the actual Comando data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NumeroControl
	 * property-read QLabel $NumeroLabel
	 * property QDateTimePicker $DateControl
	 * property-read QLabel $DateLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ComandoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Comando objComando
		 * @access protected
		 */
		protected $objComando;

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

		// Controls that allow the editing of Comando's individual data fields
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
         * @var QDateTimePicker calDate;
         * @access protected
         */
		protected $calDate;


		// Controls that allow the viewing of Comando's individual data fields
        /**
         * @var QLabel lblNumero
         * @access protected
         */
		protected $lblNumero;

        /**
         * @var QLabel lblDate
         * @access protected
         */
		protected $lblDate;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ComandoMetaControl to edit a single Comando object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Comando object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoMetaControl
		 * @param Comando $objComando new or existing Comando object
		 */
		 public function __construct($objParentObject, Comando $objComando) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ComandoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Comando object
			$this->objComando = $objComando;

			// Figure out if we're Editing or Creating New
			if ($this->objComando->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Comando object creation - defaults to CreateOrEdit
 		 * @return ComandoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objComando = Comando::Load($intId);

				// Comando was found -- return it!
				if ($objComando)
					return new ComandoMetaControl($objParentObject, $objComando);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Comando object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ComandoMetaControl($objParentObject, new Comando());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Comando object creation - defaults to CreateOrEdit
		 * @return ComandoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ComandoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Comando object creation - defaults to CreateOrEdit
		 * @return ComandoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ComandoMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objComando->Id;
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
			$this->txtNumero->Text = $this->objComando->Numero;
			$this->txtNumero->Required = true;
			$this->txtNumero->MaxLength = Comando::NumeroMaxLength;
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
			$this->lblNumero->Text = $this->objComando->Numero;
			$this->lblNumero->Required = true;
			return $this->lblNumero;
		}

		/**
		 * Create and setup QDateTimePicker calDate
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDate_Create($strControlId = null) {
			$this->calDate = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDate->Name = QApplication::Translate('Date');
			$this->calDate->DateTime = $this->objComando->Date;
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
			$this->lblDate->Text = sprintf($this->objComando->Date) ? $this->objComando->Date->__toString($this->strDateDateTimeFormat) : null;
			$this->lblDate->Required = true;
			return $this->lblDate;
		}

		protected $strDateDateTimeFormat;



		/**
		 * Refresh this MetaControl with Data from the local Comando object.
		 * @param boolean $blnReload reload Comando from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objComando->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objComando->Id;

			if ($this->txtNumero) $this->txtNumero->Text = $this->objComando->Numero;
			if ($this->lblNumero) $this->lblNumero->Text = $this->objComando->Numero;

			if ($this->calDate) $this->calDate->DateTime = $this->objComando->Date;
			if ($this->lblDate) $this->lblDate->Text = sprintf($this->objComando->Date) ? $this->objComando->__toString($this->strDateDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COMANDO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Comando instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveComando() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNumero) $this->objComando->Numero = $this->txtNumero->Text;
				if ($this->calDate) $this->objComando->Date = $this->calDate->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Comando object
				$this->objComando->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Comando instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteComando() {
			$this->objComando->Delete();
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
				case 'Comando': return $this->objComando;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Comando fields -- will be created dynamically if not yet created
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
				case 'DateControl':
					if (!$this->calDate) return $this->calDate_Create();
					return $this->calDate;
				case 'DateLabel':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
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
					// Controls that point to Comando fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NumeroControl':
						return ($this->txtNumero = QType::Cast($mixValue, 'QControl'));
					case 'DateControl':
						return ($this->calDate = QType::Cast($mixValue, 'QControl'));
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