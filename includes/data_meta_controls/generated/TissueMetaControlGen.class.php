<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Tissue class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Tissue object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TissueMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Tissue $Tissue the actual Tissue data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NameControl
	 * property-read QLabel $NameLabel
	 * property QIntegerTextBox $ReferenceControl
	 * property-read QLabel $ReferenceLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TissueMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Tissue objTissue
		 * @access protected
		 */
		protected $objTissue;

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

		// Controls that allow the editing of Tissue's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtName;
         * @access protected
         */
		protected $txtName;

        /**
         * @var QIntegerTextBox txtReference;
         * @access protected
         */
		protected $txtReference;


		// Controls that allow the viewing of Tissue's individual data fields
        /**
         * @var QLabel lblName
         * @access protected
         */
		protected $lblName;

        /**
         * @var QLabel lblReference
         * @access protected
         */
		protected $lblReference;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TissueMetaControl to edit a single Tissue object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Tissue object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TissueMetaControl
		 * @param Tissue $objTissue new or existing Tissue object
		 */
		 public function __construct($objParentObject, Tissue $objTissue) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TissueMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Tissue object
			$this->objTissue = $objTissue;

			// Figure out if we're Editing or Creating New
			if ($this->objTissue->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TissueMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Tissue object creation - defaults to CreateOrEdit
 		 * @return TissueMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objTissue = Tissue::Load($intId);

				// Tissue was found -- return it!
				if ($objTissue)
					return new TissueMetaControl($objParentObject, $objTissue);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Tissue object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TissueMetaControl($objParentObject, new Tissue());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TissueMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Tissue object creation - defaults to CreateOrEdit
		 * @return TissueMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return TissueMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TissueMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Tissue object creation - defaults to CreateOrEdit
		 * @return TissueMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return TissueMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objTissue->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtName_Create($strControlId = null) {
			$this->txtName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtName->Name = QApplication::Translate('Name');
			$this->txtName->Text = $this->objTissue->Name;
			$this->txtName->Required = true;
			$this->txtName->MaxLength = Tissue::NameMaxLength;
			return $this->txtName;
		}

		/**
		 * Create and setup QLabel lblName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblName_Create($strControlId = null) {
			$this->lblName = new QLabel($this->objParentObject, $strControlId);
			$this->lblName->Name = QApplication::Translate('Name');
			$this->lblName->Text = $this->objTissue->Name;
			$this->lblName->Required = true;
			return $this->lblName;
		}

		/**
		 * Create and setup QIntegerTextBox txtReference
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtReference_Create($strControlId = null) {
			$this->txtReference = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtReference->Name = QApplication::Translate('Reference');
			$this->txtReference->Text = $this->objTissue->Reference;
			$this->txtReference->Required = true;
			return $this->txtReference;
		}

		/**
		 * Create and setup QLabel lblReference
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblReference_Create($strControlId = null, $strFormat = null) {
			$this->lblReference = new QLabel($this->objParentObject, $strControlId);
			$this->lblReference->Name = QApplication::Translate('Reference');
			$this->lblReference->Text = $this->objTissue->Reference;
			$this->lblReference->Required = true;
			$this->lblReference->Format = $strFormat;
			return $this->lblReference;
		}



		/**
		 * Refresh this MetaControl with Data from the local Tissue object.
		 * @param boolean $blnReload reload Tissue from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTissue->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objTissue->Id;

			if ($this->txtName) $this->txtName->Text = $this->objTissue->Name;
			if ($this->lblName) $this->lblName->Text = $this->objTissue->Name;

			if ($this->txtReference) $this->txtReference->Text = $this->objTissue->Reference;
			if ($this->lblReference) $this->lblReference->Text = $this->objTissue->Reference;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TISSUE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Tissue instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTissue() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtName) $this->objTissue->Name = $this->txtName->Text;
				if ($this->txtReference) $this->objTissue->Reference = $this->txtReference->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Tissue object
				$this->objTissue->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Tissue instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTissue() {
			$this->objTissue->Delete();
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
				case 'Tissue': return $this->objTissue;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Tissue fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'NameControl':
					if (!$this->txtName) return $this->txtName_Create();
					return $this->txtName;
				case 'NameLabel':
					if (!$this->lblName) return $this->lblName_Create();
					return $this->lblName;
				case 'ReferenceControl':
					if (!$this->txtReference) return $this->txtReference_Create();
					return $this->txtReference;
				case 'ReferenceLabel':
					if (!$this->lblReference) return $this->lblReference_Create();
					return $this->lblReference;
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
					// Controls that point to Tissue fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QControl'));
					case 'ReferenceControl':
						return ($this->txtReference = QType::Cast($mixValue, 'QControl'));
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