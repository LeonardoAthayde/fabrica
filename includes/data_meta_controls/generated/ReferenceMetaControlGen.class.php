<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Reference class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Reference object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ReferenceMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Reference $Reference the actual Reference data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NameControl
	 * property-read QLabel $NameLabel
	 * property QListBox $ReferenceCategoryIdControl
	 * property-read QLabel $ReferenceCategoryIdLabel
	 * property QTextBox $ModelControl
	 * property-read QLabel $ModelLabel
	 * property QListBox $TissueIdControl
	 * property-read QLabel $TissueIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ReferenceMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Reference objReference
		 * @access protected
		 */
		protected $objReference;

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

		// Controls that allow the editing of Reference's individual data fields
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
         * @var QListBox lstReferenceCategory;
         * @access protected
         */
		protected $lstReferenceCategory;

        /**
         * @var QTextBox txtModel;
         * @access protected
         */
		protected $txtModel;

        /**
         * @var QListBox lstTissue;
         * @access protected
         */
		protected $lstTissue;


		// Controls that allow the viewing of Reference's individual data fields
        /**
         * @var QLabel lblName
         * @access protected
         */
		protected $lblName;

        /**
         * @var QLabel lblReferenceCategoryId
         * @access protected
         */
		protected $lblReferenceCategoryId;

        /**
         * @var QLabel lblModel
         * @access protected
         */
		protected $lblModel;

        /**
         * @var QLabel lblTissueId
         * @access protected
         */
		protected $lblTissueId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ReferenceMetaControl to edit a single Reference object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Reference object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenceMetaControl
		 * @param Reference $objReference new or existing Reference object
		 */
		 public function __construct($objParentObject, Reference $objReference) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ReferenceMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Reference object
			$this->objReference = $objReference;

			// Figure out if we're Editing or Creating New
			if ($this->objReference->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenceMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Reference object creation - defaults to CreateOrEdit
 		 * @return ReferenceMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objReference = Reference::Load($intId);

				// Reference was found -- return it!
				if ($objReference)
					return new ReferenceMetaControl($objParentObject, $objReference);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Reference object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ReferenceMetaControl($objParentObject, new Reference());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenceMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Reference object creation - defaults to CreateOrEdit
		 * @return ReferenceMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ReferenceMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenceMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Reference object creation - defaults to CreateOrEdit
		 * @return ReferenceMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ReferenceMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objReference->Id;
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
			$this->txtName->Text = $this->objReference->Name;
			$this->txtName->Required = true;
			$this->txtName->MaxLength = Reference::NameMaxLength;
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
			$this->lblName->Text = $this->objReference->Name;
			$this->lblName->Required = true;
			return $this->lblName;
		}

		/**
		 * Create and setup QListBox lstReferenceCategory
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReferenceCategory_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReferenceCategory = new QListBox($this->objParentObject, $strControlId);
			$this->lstReferenceCategory->Name = QApplication::Translate('Reference Category');
			$this->lstReferenceCategory->Required = true;
			if (!$this->blnEditMode)
				$this->lstReferenceCategory->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenceCategoryCursor = ReferenceCategory::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objReferenceCategory = ReferenceCategory::InstantiateCursor($objReferenceCategoryCursor)) {
				$objListItem = new QListItem($objReferenceCategory->__toString(), $objReferenceCategory->Id);
				if (($this->objReference->ReferenceCategory) && ($this->objReference->ReferenceCategory->Id == $objReferenceCategory->Id))
					$objListItem->Selected = true;
				$this->lstReferenceCategory->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstReferenceCategory;
		}

		/**
		 * Create and setup QLabel lblReferenceCategoryId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReferenceCategoryId_Create($strControlId = null) {
			$this->lblReferenceCategoryId = new QLabel($this->objParentObject, $strControlId);
			$this->lblReferenceCategoryId->Name = QApplication::Translate('Reference Category');
			$this->lblReferenceCategoryId->Text = ($this->objReference->ReferenceCategory) ? $this->objReference->ReferenceCategory->__toString() : null;
			$this->lblReferenceCategoryId->Required = true;
			return $this->lblReferenceCategoryId;
		}

		/**
		 * Create and setup QTextBox txtModel
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtModel_Create($strControlId = null) {
			$this->txtModel = new QTextBox($this->objParentObject, $strControlId);
			$this->txtModel->Name = QApplication::Translate('Model');
			$this->txtModel->Text = $this->objReference->Model;
			$this->txtModel->Required = true;
			$this->txtModel->MaxLength = Reference::ModelMaxLength;
			return $this->txtModel;
		}

		/**
		 * Create and setup QLabel lblModel
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblModel_Create($strControlId = null) {
			$this->lblModel = new QLabel($this->objParentObject, $strControlId);
			$this->lblModel->Name = QApplication::Translate('Model');
			$this->lblModel->Text = $this->objReference->Model;
			$this->lblModel->Required = true;
			return $this->lblModel;
		}

		/**
		 * Create and setup QListBox lstTissue
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstTissue_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstTissue = new QListBox($this->objParentObject, $strControlId);
			$this->lstTissue->Name = QApplication::Translate('Tissue');
			$this->lstTissue->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTissueCursor = Tissue::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objTissue = Tissue::InstantiateCursor($objTissueCursor)) {
				$objListItem = new QListItem($objTissue->__toString(), $objTissue->Id);
				if (($this->objReference->Tissue) && ($this->objReference->Tissue->Id == $objTissue->Id))
					$objListItem->Selected = true;
				$this->lstTissue->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstTissue;
		}

		/**
		 * Create and setup QLabel lblTissueId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTissueId_Create($strControlId = null) {
			$this->lblTissueId = new QLabel($this->objParentObject, $strControlId);
			$this->lblTissueId->Name = QApplication::Translate('Tissue');
			$this->lblTissueId->Text = ($this->objReference->Tissue) ? $this->objReference->Tissue->__toString() : null;
			return $this->lblTissueId;
		}



		/**
		 * Refresh this MetaControl with Data from the local Reference object.
		 * @param boolean $blnReload reload Reference from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objReference->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objReference->Id;

			if ($this->txtName) $this->txtName->Text = $this->objReference->Name;
			if ($this->lblName) $this->lblName->Text = $this->objReference->Name;

			if ($this->lstReferenceCategory) {
					$this->lstReferenceCategory->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstReferenceCategory->AddItem(QApplication::Translate('- Select One -'), null);
				$objReferenceCategoryArray = ReferenceCategory::LoadAll();
				if ($objReferenceCategoryArray) foreach ($objReferenceCategoryArray as $objReferenceCategory) {
					$objListItem = new QListItem($objReferenceCategory->__toString(), $objReferenceCategory->Id);
					if (($this->objReference->ReferenceCategory) && ($this->objReference->ReferenceCategory->Id == $objReferenceCategory->Id))
						$objListItem->Selected = true;
					$this->lstReferenceCategory->AddItem($objListItem);
				}
			}
			if ($this->lblReferenceCategoryId) $this->lblReferenceCategoryId->Text = ($this->objReference->ReferenceCategory) ? $this->objReference->ReferenceCategory->__toString() : null;

			if ($this->txtModel) $this->txtModel->Text = $this->objReference->Model;
			if ($this->lblModel) $this->lblModel->Text = $this->objReference->Model;

			if ($this->lstTissue) {
					$this->lstTissue->RemoveAllItems();
				$this->lstTissue->AddItem(QApplication::Translate('- Select One -'), null);
				$objTissueArray = Tissue::LoadAll();
				if ($objTissueArray) foreach ($objTissueArray as $objTissue) {
					$objListItem = new QListItem($objTissue->__toString(), $objTissue->Id);
					if (($this->objReference->Tissue) && ($this->objReference->Tissue->Id == $objTissue->Id))
						$objListItem->Selected = true;
					$this->lstTissue->AddItem($objListItem);
				}
			}
			if ($this->lblTissueId) $this->lblTissueId->Text = ($this->objReference->Tissue) ? $this->objReference->Tissue->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC REFERENCE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Reference instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveReference() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtName) $this->objReference->Name = $this->txtName->Text;
				if ($this->lstReferenceCategory) $this->objReference->ReferenceCategoryId = $this->lstReferenceCategory->SelectedValue;
				if ($this->txtModel) $this->objReference->Model = $this->txtModel->Text;
				if ($this->lstTissue) $this->objReference->TissueId = $this->lstTissue->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Reference object
				$this->objReference->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Reference instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteReference() {
			$this->objReference->Delete();
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
				case 'Reference': return $this->objReference;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Reference fields -- will be created dynamically if not yet created
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
				case 'ReferenceCategoryIdControl':
					if (!$this->lstReferenceCategory) return $this->lstReferenceCategory_Create();
					return $this->lstReferenceCategory;
				case 'ReferenceCategoryIdLabel':
					if (!$this->lblReferenceCategoryId) return $this->lblReferenceCategoryId_Create();
					return $this->lblReferenceCategoryId;
				case 'ModelControl':
					if (!$this->txtModel) return $this->txtModel_Create();
					return $this->txtModel;
				case 'ModelLabel':
					if (!$this->lblModel) return $this->lblModel_Create();
					return $this->lblModel;
				case 'TissueIdControl':
					if (!$this->lstTissue) return $this->lstTissue_Create();
					return $this->lstTissue;
				case 'TissueIdLabel':
					if (!$this->lblTissueId) return $this->lblTissueId_Create();
					return $this->lblTissueId;
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
					// Controls that point to Reference fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QControl'));
					case 'ReferenceCategoryIdControl':
						return ($this->lstReferenceCategory = QType::Cast($mixValue, 'QControl'));
					case 'ModelControl':
						return ($this->txtModel = QType::Cast($mixValue, 'QControl'));
					case 'TissueIdControl':
						return ($this->lstTissue = QType::Cast($mixValue, 'QControl'));
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