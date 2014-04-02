<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Costureira class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Costureira object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CostureiraMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Costureira $Costureira the actual Costureira data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NomeControl
	 * property-read QLabel $NomeLabel
	 * property QTextBox $ImagemFlaControl
	 * property-read QLabel $ImagemFlaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CostureiraMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Costureira objCostureira
		 * @access protected
		 */
		protected $objCostureira;

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

		// Controls that allow the editing of Costureira's individual data fields
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
         * @var QTextBox txtImagemFla;
         * @access protected
         */
		protected $txtImagemFla;


		// Controls that allow the viewing of Costureira's individual data fields
        /**
         * @var QLabel lblNome
         * @access protected
         */
		protected $lblNome;

        /**
         * @var QLabel lblImagemFla
         * @access protected
         */
		protected $lblImagemFla;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CostureiraMetaControl to edit a single Costureira object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Costureira object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraMetaControl
		 * @param Costureira $objCostureira new or existing Costureira object
		 */
		 public function __construct($objParentObject, Costureira $objCostureira) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CostureiraMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Costureira object
			$this->objCostureira = $objCostureira;

			// Figure out if we're Editing or Creating New
			if ($this->objCostureira->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Costureira object creation - defaults to CreateOrEdit
 		 * @return CostureiraMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objCostureira = Costureira::Load($intId);

				// Costureira was found -- return it!
				if ($objCostureira)
					return new CostureiraMetaControl($objParentObject, $objCostureira);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Costureira object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CostureiraMetaControl($objParentObject, new Costureira());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Costureira object creation - defaults to CreateOrEdit
		 * @return CostureiraMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return CostureiraMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Costureira object creation - defaults to CreateOrEdit
		 * @return CostureiraMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return CostureiraMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objCostureira->Id;
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
			$this->txtNome->Text = $this->objCostureira->Nome;
			$this->txtNome->Required = true;
			$this->txtNome->MaxLength = Costureira::NomeMaxLength;
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
			$this->lblNome->Text = $this->objCostureira->Nome;
			$this->lblNome->Required = true;
			return $this->lblNome;
		}

		/**
		 * Create and setup QFileAsset txtImagemFla
		 * @param string $strControlId optional ControlId to use
		 * @return QFileAsset
		 */
		public function txtImagemFla_Create($strControlId = null) {
			$this->txtImagemFla = new QFileAsset($this->objParentObject, $strControlId);
			$this->txtImagemFla->imgFileIcon->CssClass = 'img-polaroid  img-rounded';
			if(!is_dir(__DOCROOT__.'/assets/files/Costureira'))
				mkdir (__DOCROOT__.'/assets/files/Costureira');
			$this->txtImagemFla->TemporaryUploadPath = __DOCROOT__.'/assets/files/Costureira';
			$this->txtImagemFla->Name = QApplication::Translate('Imagem Fla');
			if(is_file(__DOCROOT__.$this->objCostureira->ImagemFla))
				$this->txtImagemFla->File = __DOCROOT__.$this->objCostureira->ImagemFla;
			return $this->txtImagemFla;
		}

		/**
		 * Create and setup QLabel lblImagemFla
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblImagemFla_Create($strControlId = null) {
			$this->lblImagemFla = new QLabel($this->objParentObject, $strControlId);
			$this->lblImagemFla->Name = QApplication::Translate('Imagem Fla');
			$this->lblImagemFla->Text = $this->objCostureira->ImagemFla;
			return $this->lblImagemFla;
		}



		/**
		 * Refresh this MetaControl with Data from the local Costureira object.
		 * @param boolean $blnReload reload Costureira from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCostureira->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objCostureira->Id;

			if ($this->txtNome) $this->txtNome->Text = $this->objCostureira->Nome;
			if ($this->lblNome) $this->lblNome->Text = $this->objCostureira->Nome;

			if ($this->txtImagemFla) $this->txtImagemFla->Text = $this->objCostureira->ImagemFla;
			if ($this->lblImagemFla) $this->lblImagemFla->Text = $this->objCostureira->ImagemFla;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COSTUREIRA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Costureira instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCostureira() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNome) $this->objCostureira->Nome = $this->txtNome->Text;
				if ($this->txtImagemFla) $this->objCostureira->ImagemFla = str_replace(__DOCROOT__, '', $this->txtImagemFla->File);

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Costureira object
				$this->objCostureira->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Costureira instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCostureira() {
			$this->objCostureira->Delete();
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
				case 'Costureira': return $this->objCostureira;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Costureira fields -- will be created dynamically if not yet created
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
				case 'ImagemFlaControl':
					if (!$this->txtImagemFla) return $this->txtImagemFla_Create();
					return $this->txtImagemFla;
				case 'ImagemFlaLabel':
					if (!$this->lblImagemFla) return $this->lblImagemFla_Create();
					return $this->lblImagemFla;
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
					// Controls that point to Costureira fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NomeControl':
						return ($this->txtNome = QType::Cast($mixValue, 'QControl'));
					case 'ImagemFlaControl':
						return ($this->txtImagemFla = QType::Cast($mixValue, 'QControl'));
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