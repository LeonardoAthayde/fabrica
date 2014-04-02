<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the MaquinaCategoria class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single MaquinaCategoria object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MaquinaCategoriaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read MaquinaCategoria $MaquinaCategoria the actual MaquinaCategoria data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NomeControl
	 * property-read QLabel $NomeLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MaquinaCategoriaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var MaquinaCategoria objMaquinaCategoria
		 * @access protected
		 */
		protected $objMaquinaCategoria;

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

		// Controls that allow the editing of MaquinaCategoria's individual data fields
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


		// Controls that allow the viewing of MaquinaCategoria's individual data fields
        /**
         * @var QLabel lblNome
         * @access protected
         */
		protected $lblNome;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MaquinaCategoriaMetaControl to edit a single MaquinaCategoria object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single MaquinaCategoria object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MaquinaCategoriaMetaControl
		 * @param MaquinaCategoria $objMaquinaCategoria new or existing MaquinaCategoria object
		 */
		 public function __construct($objParentObject, MaquinaCategoria $objMaquinaCategoria) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MaquinaCategoriaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked MaquinaCategoria object
			$this->objMaquinaCategoria = $objMaquinaCategoria;

			// Figure out if we're Editing or Creating New
			if ($this->objMaquinaCategoria->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MaquinaCategoriaMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing MaquinaCategoria object creation - defaults to CreateOrEdit
 		 * @return MaquinaCategoriaMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objMaquinaCategoria = MaquinaCategoria::Load($intId);

				// MaquinaCategoria was found -- return it!
				if ($objMaquinaCategoria)
					return new MaquinaCategoriaMetaControl($objParentObject, $objMaquinaCategoria);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a MaquinaCategoria object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MaquinaCategoriaMetaControl($objParentObject, new MaquinaCategoria());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MaquinaCategoriaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing MaquinaCategoria object creation - defaults to CreateOrEdit
		 * @return MaquinaCategoriaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return MaquinaCategoriaMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MaquinaCategoriaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing MaquinaCategoria object creation - defaults to CreateOrEdit
		 * @return MaquinaCategoriaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return MaquinaCategoriaMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objMaquinaCategoria->Id;
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
			$this->txtNome->Text = $this->objMaquinaCategoria->Nome;
			$this->txtNome->Required = true;
			$this->txtNome->MaxLength = MaquinaCategoria::NomeMaxLength;
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
			$this->lblNome->Text = $this->objMaquinaCategoria->Nome;
			$this->lblNome->Required = true;
			return $this->lblNome;
		}



		/**
		 * Refresh this MetaControl with Data from the local MaquinaCategoria object.
		 * @param boolean $blnReload reload MaquinaCategoria from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMaquinaCategoria->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objMaquinaCategoria->Id;

			if ($this->txtNome) $this->txtNome->Text = $this->objMaquinaCategoria->Nome;
			if ($this->lblNome) $this->lblNome->Text = $this->objMaquinaCategoria->Nome;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MAQUINACATEGORIA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's MaquinaCategoria instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMaquinaCategoria() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNome) $this->objMaquinaCategoria->Nome = $this->txtNome->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the MaquinaCategoria object
				$this->objMaquinaCategoria->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's MaquinaCategoria instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMaquinaCategoria() {
			$this->objMaquinaCategoria->Delete();
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
				case 'MaquinaCategoria': return $this->objMaquinaCategoria;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to MaquinaCategoria fields -- will be created dynamically if not yet created
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
					// Controls that point to MaquinaCategoria fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NomeControl':
						return ($this->txtNome = QType::Cast($mixValue, 'QControl'));
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