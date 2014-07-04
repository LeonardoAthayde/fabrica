<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the TecidoRendimento class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single TecidoRendimento object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TecidoRendimentoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read TecidoRendimento $TecidoRendimento the actual TecidoRendimento data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $TecidoIdControl
	 * property-read QLabel $TecidoIdLabel
	 * property QFloatTextBox $ComprimentoControl
	 * property-read QLabel $ComprimentoLabel
	 * property QFloatTextBox $LarguraControl
	 * property-read QLabel $LarguraLabel
	 * property QFloatTextBox $PesoControl
	 * property-read QLabel $PesoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TecidoRendimentoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var TecidoRendimento objTecidoRendimento
		 * @access protected
		 */
		protected $objTecidoRendimento;

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

		// Controls that allow the editing of TecidoRendimento's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QIntegerTextBox txtTecidoId;
         * @access protected
         */
		protected $txtTecidoId;

        /**
         * @var QFloatTextBox txtComprimento;
         * @access protected
         */
		protected $txtComprimento;

        /**
         * @var QFloatTextBox txtLargura;
         * @access protected
         */
		protected $txtLargura;

        /**
         * @var QFloatTextBox txtPeso;
         * @access protected
         */
		protected $txtPeso;


		// Controls that allow the viewing of TecidoRendimento's individual data fields
        /**
         * @var QLabel lblTecidoId
         * @access protected
         */
		protected $lblTecidoId;

        /**
         * @var QLabel lblComprimento
         * @access protected
         */
		protected $lblComprimento;

        /**
         * @var QLabel lblLargura
         * @access protected
         */
		protected $lblLargura;

        /**
         * @var QLabel lblPeso
         * @access protected
         */
		protected $lblPeso;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TecidoRendimentoMetaControl to edit a single TecidoRendimento object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single TecidoRendimento object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TecidoRendimentoMetaControl
		 * @param TecidoRendimento $objTecidoRendimento new or existing TecidoRendimento object
		 */
		 public function __construct($objParentObject, TecidoRendimento $objTecidoRendimento) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TecidoRendimentoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked TecidoRendimento object
			$this->objTecidoRendimento = $objTecidoRendimento;

			// Figure out if we're Editing or Creating New
			if ($this->objTecidoRendimento->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TecidoRendimentoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing TecidoRendimento object creation - defaults to CreateOrEdit
 		 * @return TecidoRendimentoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objTecidoRendimento = TecidoRendimento::Load($intId);

				// TecidoRendimento was found -- return it!
				if ($objTecidoRendimento)
					return new TecidoRendimentoMetaControl($objParentObject, $objTecidoRendimento);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a TecidoRendimento object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TecidoRendimentoMetaControl($objParentObject, new TecidoRendimento());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TecidoRendimentoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing TecidoRendimento object creation - defaults to CreateOrEdit
		 * @return TecidoRendimentoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return TecidoRendimentoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TecidoRendimentoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing TecidoRendimento object creation - defaults to CreateOrEdit
		 * @return TecidoRendimentoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return TecidoRendimentoMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objTecidoRendimento->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QIntegerTextBox txtTecidoId
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTecidoId_Create($strControlId = null) {
			$this->txtTecidoId = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTecidoId->Name = QApplication::Translate('Tecido Id');
			$this->txtTecidoId->Text = $this->objTecidoRendimento->TecidoId;
			$this->txtTecidoId->Required = true;
			return $this->txtTecidoId;
		}

		/**
		 * Create and setup QLabel lblTecidoId
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTecidoId_Create($strControlId = null, $strFormat = null) {
			$this->lblTecidoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblTecidoId->Name = QApplication::Translate('Tecido Id');
			$this->lblTecidoId->Text = $this->objTecidoRendimento->TecidoId;
			$this->lblTecidoId->Required = true;
			$this->lblTecidoId->Format = $strFormat;
			return $this->lblTecidoId;
		}

		/**
		 * Create and setup QFloatTextBox txtComprimento
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtComprimento_Create($strControlId = null) {
			$this->txtComprimento = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtComprimento->Name = QApplication::Translate('Comprimento');
			$this->txtComprimento->Text = $this->objTecidoRendimento->Comprimento;
			$this->txtComprimento->Required = true;
			return $this->txtComprimento;
		}

		/**
		 * Create and setup QLabel lblComprimento
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblComprimento_Create($strControlId = null, $strFormat = null) {
			$this->lblComprimento = new QLabel($this->objParentObject, $strControlId);
			$this->lblComprimento->Name = QApplication::Translate('Comprimento');
			$this->lblComprimento->Text = $this->objTecidoRendimento->Comprimento;
			$this->lblComprimento->Required = true;
			$this->lblComprimento->Format = $strFormat;
			return $this->lblComprimento;
		}

		/**
		 * Create and setup QFloatTextBox txtLargura
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtLargura_Create($strControlId = null) {
			$this->txtLargura = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtLargura->Name = QApplication::Translate('Largura');
			$this->txtLargura->Text = $this->objTecidoRendimento->Largura;
			$this->txtLargura->Required = true;
			return $this->txtLargura;
		}

		/**
		 * Create and setup QLabel lblLargura
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblLargura_Create($strControlId = null, $strFormat = null) {
			$this->lblLargura = new QLabel($this->objParentObject, $strControlId);
			$this->lblLargura->Name = QApplication::Translate('Largura');
			$this->lblLargura->Text = $this->objTecidoRendimento->Largura;
			$this->lblLargura->Required = true;
			$this->lblLargura->Format = $strFormat;
			return $this->lblLargura;
		}

		/**
		 * Create and setup QFloatTextBox txtPeso
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtPeso_Create($strControlId = null) {
			$this->txtPeso = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtPeso->Name = QApplication::Translate('Peso');
			$this->txtPeso->Text = $this->objTecidoRendimento->Peso;
			$this->txtPeso->Required = true;
			return $this->txtPeso;
		}

		/**
		 * Create and setup QLabel lblPeso
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPeso_Create($strControlId = null, $strFormat = null) {
			$this->lblPeso = new QLabel($this->objParentObject, $strControlId);
			$this->lblPeso->Name = QApplication::Translate('Peso');
			$this->lblPeso->Text = $this->objTecidoRendimento->Peso;
			$this->lblPeso->Required = true;
			$this->lblPeso->Format = $strFormat;
			return $this->lblPeso;
		}



		/**
		 * Refresh this MetaControl with Data from the local TecidoRendimento object.
		 * @param boolean $blnReload reload TecidoRendimento from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTecidoRendimento->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objTecidoRendimento->Id;

			if ($this->txtTecidoId) $this->txtTecidoId->Text = $this->objTecidoRendimento->TecidoId;
			if ($this->lblTecidoId) $this->lblTecidoId->Text = $this->objTecidoRendimento->TecidoId;

			if ($this->txtComprimento) $this->txtComprimento->Text = $this->objTecidoRendimento->Comprimento;
			if ($this->lblComprimento) $this->lblComprimento->Text = $this->objTecidoRendimento->Comprimento;

			if ($this->txtLargura) $this->txtLargura->Text = $this->objTecidoRendimento->Largura;
			if ($this->lblLargura) $this->lblLargura->Text = $this->objTecidoRendimento->Largura;

			if ($this->txtPeso) $this->txtPeso->Text = $this->objTecidoRendimento->Peso;
			if ($this->lblPeso) $this->lblPeso->Text = $this->objTecidoRendimento->Peso;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TECIDORENDIMENTO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's TecidoRendimento instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTecidoRendimento() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTecidoId) $this->objTecidoRendimento->TecidoId = $this->txtTecidoId->Text;
				if ($this->txtComprimento) $this->objTecidoRendimento->Comprimento = $this->txtComprimento->Text;
				if ($this->txtLargura) $this->objTecidoRendimento->Largura = $this->txtLargura->Text;
				if ($this->txtPeso) $this->objTecidoRendimento->Peso = $this->txtPeso->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the TecidoRendimento object
				$this->objTecidoRendimento->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's TecidoRendimento instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTecidoRendimento() {
			$this->objTecidoRendimento->Delete();
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
				case 'TecidoRendimento': return $this->objTecidoRendimento;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to TecidoRendimento fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'TecidoIdControl':
					if (!$this->txtTecidoId) return $this->txtTecidoId_Create();
					return $this->txtTecidoId;
				case 'TecidoIdLabel':
					if (!$this->lblTecidoId) return $this->lblTecidoId_Create();
					return $this->lblTecidoId;
				case 'ComprimentoControl':
					if (!$this->txtComprimento) return $this->txtComprimento_Create();
					return $this->txtComprimento;
				case 'ComprimentoLabel':
					if (!$this->lblComprimento) return $this->lblComprimento_Create();
					return $this->lblComprimento;
				case 'LarguraControl':
					if (!$this->txtLargura) return $this->txtLargura_Create();
					return $this->txtLargura;
				case 'LarguraLabel':
					if (!$this->lblLargura) return $this->lblLargura_Create();
					return $this->lblLargura;
				case 'PesoControl':
					if (!$this->txtPeso) return $this->txtPeso_Create();
					return $this->txtPeso;
				case 'PesoLabel':
					if (!$this->lblPeso) return $this->lblPeso_Create();
					return $this->lblPeso;
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
					// Controls that point to TecidoRendimento fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'TecidoIdControl':
						return ($this->txtTecidoId = QType::Cast($mixValue, 'QControl'));
					case 'ComprimentoControl':
						return ($this->txtComprimento = QType::Cast($mixValue, 'QControl'));
					case 'LarguraControl':
						return ($this->txtLargura = QType::Cast($mixValue, 'QControl'));
					case 'PesoControl':
						return ($this->txtPeso = QType::Cast($mixValue, 'QControl'));
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