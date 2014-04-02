<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Machine class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Machine object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MachineMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Machine $Machine the actual Machine data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NameControl
	 * property-read QLabel $NameLabel
	 * property QListBox $MachineKindIdControl
	 * property-read QLabel $MachineKindIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MachineMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Machine objMachine
		 * @access protected
		 */
		protected $objMachine;

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

		// Controls that allow the editing of Machine's individual data fields
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
         * @var QListBox lstMachineKind;
         * @access protected
         */
		protected $lstMachineKind;


		// Controls that allow the viewing of Machine's individual data fields
        /**
         * @var QLabel lblName
         * @access protected
         */
		protected $lblName;

        /**
         * @var QLabel lblMachineKindId
         * @access protected
         */
		protected $lblMachineKindId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MachineMetaControl to edit a single Machine object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Machine object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MachineMetaControl
		 * @param Machine $objMachine new or existing Machine object
		 */
		 public function __construct($objParentObject, Machine $objMachine) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MachineMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Machine object
			$this->objMachine = $objMachine;

			// Figure out if we're Editing or Creating New
			if ($this->objMachine->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MachineMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Machine object creation - defaults to CreateOrEdit
 		 * @return MachineMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objMachine = Machine::Load($intId);

				// Machine was found -- return it!
				if ($objMachine)
					return new MachineMetaControl($objParentObject, $objMachine);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Machine object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MachineMetaControl($objParentObject, new Machine());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MachineMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Machine object creation - defaults to CreateOrEdit
		 * @return MachineMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return MachineMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MachineMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Machine object creation - defaults to CreateOrEdit
		 * @return MachineMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return MachineMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objMachine->Id;
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
			$this->txtName->Text = $this->objMachine->Name;
			$this->txtName->Required = true;
			$this->txtName->MaxLength = Machine::NameMaxLength;
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
			$this->lblName->Text = $this->objMachine->Name;
			$this->lblName->Required = true;
			return $this->lblName;
		}

		/**
		 * Create and setup QListBox lstMachineKind
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstMachineKind_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstMachineKind = new QListBox($this->objParentObject, $strControlId);
			$this->lstMachineKind->Name = QApplication::Translate('Machine Kind');
			$this->lstMachineKind->Required = true;
			if (!$this->blnEditMode)
				$this->lstMachineKind->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objMachineKindCursor = MachineKind::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objMachineKind = MachineKind::InstantiateCursor($objMachineKindCursor)) {
				$objListItem = new QListItem($objMachineKind->__toString(), $objMachineKind->Id);
				if (($this->objMachine->MachineKind) && ($this->objMachine->MachineKind->Id == $objMachineKind->Id))
					$objListItem->Selected = true;
				$this->lstMachineKind->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstMachineKind;
		}

		/**
		 * Create and setup QLabel lblMachineKindId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMachineKindId_Create($strControlId = null) {
			$this->lblMachineKindId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMachineKindId->Name = QApplication::Translate('Machine Kind');
			$this->lblMachineKindId->Text = ($this->objMachine->MachineKind) ? $this->objMachine->MachineKind->__toString() : null;
			$this->lblMachineKindId->Required = true;
			return $this->lblMachineKindId;
		}



		/**
		 * Refresh this MetaControl with Data from the local Machine object.
		 * @param boolean $blnReload reload Machine from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMachine->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objMachine->Id;

			if ($this->txtName) $this->txtName->Text = $this->objMachine->Name;
			if ($this->lblName) $this->lblName->Text = $this->objMachine->Name;

			if ($this->lstMachineKind) {
					$this->lstMachineKind->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstMachineKind->AddItem(QApplication::Translate('- Select One -'), null);
				$objMachineKindArray = MachineKind::LoadAll();
				if ($objMachineKindArray) foreach ($objMachineKindArray as $objMachineKind) {
					$objListItem = new QListItem($objMachineKind->__toString(), $objMachineKind->Id);
					if (($this->objMachine->MachineKind) && ($this->objMachine->MachineKind->Id == $objMachineKind->Id))
						$objListItem->Selected = true;
					$this->lstMachineKind->AddItem($objListItem);
				}
			}
			if ($this->lblMachineKindId) $this->lblMachineKindId->Text = ($this->objMachine->MachineKind) ? $this->objMachine->MachineKind->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MACHINE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Machine instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMachine() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtName) $this->objMachine->Name = $this->txtName->Text;
				if ($this->lstMachineKind) $this->objMachine->MachineKindId = $this->lstMachineKind->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Machine object
				$this->objMachine->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Machine instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMachine() {
			$this->objMachine->Delete();
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
				case 'Machine': return $this->objMachine;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Machine fields -- will be created dynamically if not yet created
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
				case 'MachineKindIdControl':
					if (!$this->lstMachineKind) return $this->lstMachineKind_Create();
					return $this->lstMachineKind;
				case 'MachineKindIdLabel':
					if (!$this->lblMachineKindId) return $this->lblMachineKindId_Create();
					return $this->lblMachineKindId;
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
					// Controls that point to Machine fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QControl'));
					case 'MachineKindIdControl':
						return ($this->lstMachineKind = QType::Cast($mixValue, 'QControl'));
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