<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Tecido class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Tecido object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TecidoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Tecido $Tecido the actual Tecido data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NomeControl
	 * property-read QLabel $NomeLabel
	 * property QTextBox $CodigoControl
	 * property-read QLabel $CodigoLabel
	 * property QFloatTextBox $MetroControl
	 * property-read QLabel $MetroLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TecidoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Tecido objTecido
		 * @access protected
		 */
		protected $objTecido;

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

		// Controls that allow the editing of Tecido's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtNome;
         * @access protected
         */
		protected $txtNome;

        /**
         * @var QTextBox txtCodigo;
         * @access protected
         */
		protected $txtCodigo;

        /**
         * @var QFloatTextBox txtMetro;
         * @access protected
         */
		protected $txtMetro;


		// Controls that allow the viewing of Tecido's individual data fields
        /**
         * @var QLabel lblNome
         * @access protected
         */
		protected $lblNome;

        /**
         * @var QLabel lblCodigo
         * @access protected
         */
		protected $lblCodigo;

        /**
         * @var QLabel lblMetro
         * @access protected
         */
		protected $lblMetro;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TecidoMetaControl to edit a single Tecido object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Tecido object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TecidoMetaControl
		 * @param Tecido $objTecido new or existing Tecido object
		 */
		 public function __construct($objParentObject, Tecido $objTecido) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TecidoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Tecido object
			$this->objTecido = $objTecido;

			// Figure out if we're Editing or Creating New
			if ($this->objTecido->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TecidoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Tecido object creation - defaults to CreateOrEdit
 		 * @return TecidoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objTecido = Tecido::Load($intId);

				// Tecido was found -- return it!
				if ($objTecido)
					return new TecidoMetaControl($objParentObject, $objTecido);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Tecido object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TecidoMetaControl($objParentObject, new Tecido());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TecidoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Tecido object creation - defaults to CreateOrEdit
		 * @return TecidoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return TecidoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TecidoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Tecido object creation - defaults to CreateOrEdit
		 * @return TecidoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return TecidoMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objTecido->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtNome
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNome_Create($strControlId = null) {
			$this->txtNome = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNome->Name = QApplication::Translate('Nome');
			$this->txtNome->Text = $this->objTecido->Nome;
			$this->txtNome->Required = true;
			$this->txtNome->MaxLength = Tecido::NomeMaxLength;
			return $this->txtNome;
		}

		/**
		 * Create and setup QLabel lblNome
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNome_Create($strControlId = null) {
			$this->lblNome = new QLabel($this->objParentObject, $strControlId);
			$this->lblNome->Name = QApplication::Translate('Nome');
			$this->lblNome->Text = $this->objTecido->Nome;
			$this->lblNome->Required = true;
			return $this->lblNome;
		}

		/**
		 * Create and setup QTextBox txtCodigo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCodigo_Create($strControlId = null) {
			$this->txtCodigo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCodigo->Name = QApplication::Translate('Codigo');
			$this->txtCodigo->Text = $this->objTecido->Codigo;
			$this->txtCodigo->Required = true;
			$this->txtCodigo->MaxLength = Tecido::CodigoMaxLength;
			return $this->txtCodigo;
		}

		/**
		 * Create and setup QLabel lblCodigo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCodigo_Create($strControlId = null) {
			$this->lblCodigo = new QLabel($this->objParentObject, $strControlId);
			$this->lblCodigo->Name = QApplication::Translate('Codigo');
			$this->lblCodigo->Text = $this->objTecido->Codigo;
			$this->lblCodigo->Required = true;
			return $this->lblCodigo;
		}

		/**
		 * Create and setup QFloatTextBox txtMetro
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtMetro_Create($strControlId = null) {
			$this->txtMetro = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtMetro->Name = QApplication::Translate('Metro');
			$this->txtMetro->Text = $this->objTecido->Metro;
			$this->txtMetro->Required = true;
			return $this->txtMetro;
		}

		/**
		 * Create and setup QLabel lblMetro
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblMetro_Create($strControlId = null, $strFormat = null) {
			$this->lblMetro = new QLabel($this->objParentObject, $strControlId);
			$this->lblMetro->Name = QApplication::Translate('Metro');
			$this->lblMetro->Text = $this->objTecido->Metro;
			$this->lblMetro->Required = true;
			$this->lblMetro->Format = $strFormat;
			return $this->lblMetro;
		}



		/**
		 * Refresh this MetaControl with Data from the local Tecido object.
		 * @param boolean $blnReload reload Tecido from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTecido->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objTecido->Id;

			if ($this->txtNome) $this->txtNome->Text = $this->objTecido->Nome;
			if ($this->lblNome) $this->lblNome->Text = $this->objTecido->Nome;

			if ($this->txtCodigo) $this->txtCodigo->Text = $this->objTecido->Codigo;
			if ($this->lblCodigo) $this->lblCodigo->Text = $this->objTecido->Codigo;

			if ($this->txtMetro) $this->txtMetro->Text = $this->objTecido->Metro;
			if ($this->lblMetro) $this->lblMetro->Text = $this->objTecido->Metro;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





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

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Tecido object
				$this->objTecido->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Tecido instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTecido() {
			$this->objTecido->Delete();
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
				case 'Tecido': return $this->objTecido;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Tecido fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'NomeControl':
					if (!$this->txtNome) return $this->txtNome_Create();
					return $this->txtNome;
				case 'NomeLabel':
					if (!$this->lblNome) return $this->lblNome_Create();
					return $this->lblNome;
				case 'CodigoControl':
					if (!$this->txtCodigo) return $this->txtCodigo_Create();
					return $this->txtCodigo;
				case 'CodigoLabel':
					if (!$this->lblCodigo) return $this->lblCodigo_Create();
					return $this->lblCodigo;
				case 'MetroControl':
					if (!$this->txtMetro) return $this->txtMetro_Create();
					return $this->txtMetro;
				case 'MetroLabel':
					if (!$this->lblMetro) return $this->lblMetro_Create();
					return $this->lblMetro;
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
					// Controls that point to Tecido fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NomeControl':
						return ($this->txtNome = QType::Cast($mixValue, 'QControl'));
					case 'CodigoControl':
						return ($this->txtCodigo = QType::Cast($mixValue, 'QControl'));
					case 'MetroControl':
						return ($this->txtMetro = QType::Cast($mixValue, 'QControl'));
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