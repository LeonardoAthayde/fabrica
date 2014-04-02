<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FlowchartTime class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FlowchartTime object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FlowchartTimeMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FlowchartTime $FlowchartTime the actual FlowchartTime data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NameControl
	 * property-read QLabel $NameLabel
	 * property QIntegerTextBox $TimeControl
	 * property-read QLabel $TimeLabel
	 * property QListBox $ColorIdControl
	 * property-read QLabel $ColorIdLabel
	 * property QIntegerTextBox $AmountControl
	 * property-read QLabel $AmountLabel
	 * property QDateTimePicker $DateControl
	 * property-read QLabel $DateLabel
	 * property QIntegerTextBox $FlowchartIdControl
	 * property-read QLabel $FlowchartIdLabel
	 * property QListBox $FlowchartOpIdControl
	 * property-read QLabel $FlowchartOpIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FlowchartTimeMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var FlowchartTime objFlowchartTime
		 * @access protected
		 */
		protected $objFlowchartTime;

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

		// Controls that allow the editing of FlowchartTime's individual data fields
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
         * @var QIntegerTextBox txtTime;
         * @access protected
         */
		protected $txtTime;

        /**
         * @var QListBox lstColor;
         * @access protected
         */
		protected $lstColor;

        /**
         * @var QIntegerTextBox txtAmount;
         * @access protected
         */
		protected $txtAmount;

        /**
         * @var QDateTimePicker calDate;
         * @access protected
         */
		protected $calDate;

        /**
         * @var QIntegerTextBox txtFlowchartId;
         * @access protected
         */
		protected $txtFlowchartId;

        /**
         * @var QListBox lstFlowchartOp;
         * @access protected
         */
		protected $lstFlowchartOp;


		// Controls that allow the viewing of FlowchartTime's individual data fields
        /**
         * @var QLabel lblName
         * @access protected
         */
		protected $lblName;

        /**
         * @var QLabel lblTime
         * @access protected
         */
		protected $lblTime;

        /**
         * @var QLabel lblColorId
         * @access protected
         */
		protected $lblColorId;

        /**
         * @var QLabel lblAmount
         * @access protected
         */
		protected $lblAmount;

        /**
         * @var QLabel lblDate
         * @access protected
         */
		protected $lblDate;

        /**
         * @var QLabel lblFlowchartId
         * @access protected
         */
		protected $lblFlowchartId;

        /**
         * @var QLabel lblFlowchartOpId
         * @access protected
         */
		protected $lblFlowchartOpId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FlowchartTimeMetaControl to edit a single FlowchartTime object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FlowchartTime object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartTimeMetaControl
		 * @param FlowchartTime $objFlowchartTime new or existing FlowchartTime object
		 */
		 public function __construct($objParentObject, FlowchartTime $objFlowchartTime) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FlowchartTimeMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FlowchartTime object
			$this->objFlowchartTime = $objFlowchartTime;

			// Figure out if we're Editing or Creating New
			if ($this->objFlowchartTime->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartTimeMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FlowchartTime object creation - defaults to CreateOrEdit
 		 * @return FlowchartTimeMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFlowchartTime = FlowchartTime::Load($intId);

				// FlowchartTime was found -- return it!
				if ($objFlowchartTime)
					return new FlowchartTimeMetaControl($objParentObject, $objFlowchartTime);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FlowchartTime object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FlowchartTimeMetaControl($objParentObject, new FlowchartTime());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartTimeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FlowchartTime object creation - defaults to CreateOrEdit
		 * @return FlowchartTimeMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FlowchartTimeMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartTimeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FlowchartTime object creation - defaults to CreateOrEdit
		 * @return FlowchartTimeMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FlowchartTimeMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFlowchartTime->Id;
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
			$this->txtName->Text = $this->objFlowchartTime->Name;
			$this->txtName->MaxLength = FlowchartTime::NameMaxLength;
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
			$this->lblName->Text = $this->objFlowchartTime->Name;
			return $this->lblName;
		}

		/**
		 * Create and setup QIntegerTextBox txtTime
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTime_Create($strControlId = null) {
			$this->txtTime = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTime->Name = QApplication::Translate('Time');
			$this->txtTime->Text = $this->objFlowchartTime->Time;
			return $this->txtTime;
		}

		/**
		 * Create and setup QLabel lblTime
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTime_Create($strControlId = null, $strFormat = null) {
			$this->lblTime = new QLabel($this->objParentObject, $strControlId);
			$this->lblTime->Name = QApplication::Translate('Time');
			$this->lblTime->Text = $this->objFlowchartTime->Time;
			$this->lblTime->Format = $strFormat;
			return $this->lblTime;
		}

		/**
		 * Create and setup QListBox lstColor
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstColor_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstColor = new QListBox($this->objParentObject, $strControlId);
			$this->lstColor->Name = QApplication::Translate('Color');
			$this->lstColor->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objColorCursor = Color::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objColor = Color::InstantiateCursor($objColorCursor)) {
				$objListItem = new QListItem($objColor->__toString(), $objColor->Id);
				if (($this->objFlowchartTime->Color) && ($this->objFlowchartTime->Color->Id == $objColor->Id))
					$objListItem->Selected = true;
				$this->lstColor->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstColor;
		}

		/**
		 * Create and setup QLabel lblColorId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblColorId_Create($strControlId = null) {
			$this->lblColorId = new QLabel($this->objParentObject, $strControlId);
			$this->lblColorId->Name = QApplication::Translate('Color');
			$this->lblColorId->Text = ($this->objFlowchartTime->Color) ? $this->objFlowchartTime->Color->__toString() : null;
			return $this->lblColorId;
		}

		/**
		 * Create and setup QIntegerTextBox txtAmount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtAmount_Create($strControlId = null) {
			$this->txtAmount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtAmount->Name = QApplication::Translate('Amount');
			$this->txtAmount->Text = $this->objFlowchartTime->Amount;
			$this->txtAmount->Required = true;
			return $this->txtAmount;
		}

		/**
		 * Create and setup QLabel lblAmount
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblAmount_Create($strControlId = null, $strFormat = null) {
			$this->lblAmount = new QLabel($this->objParentObject, $strControlId);
			$this->lblAmount->Name = QApplication::Translate('Amount');
			$this->lblAmount->Text = $this->objFlowchartTime->Amount;
			$this->lblAmount->Required = true;
			$this->lblAmount->Format = $strFormat;
			return $this->lblAmount;
		}

		/**
		 * Create and setup QDateTimePicker calDate
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDate_Create($strControlId = null) {
			$this->calDate = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDate->Name = QApplication::Translate('Date');
			$this->calDate->DateTime = $this->objFlowchartTime->Date;
			$this->calDate->DateTimePickerType = QDateTimePickerType::Date;
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
			$this->lblDate->Text = sprintf($this->objFlowchartTime->Date) ? $this->objFlowchartTime->Date->__toString($this->strDateDateTimeFormat) : null;
			return $this->lblDate;
		}

		protected $strDateDateTimeFormat;

		/**
		 * Create and setup QIntegerTextBox txtFlowchartId
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtFlowchartId_Create($strControlId = null) {
			$this->txtFlowchartId = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtFlowchartId->Name = QApplication::Translate('Flowchart Id');
			$this->txtFlowchartId->Text = $this->objFlowchartTime->FlowchartId;
			$this->txtFlowchartId->Required = true;
			return $this->txtFlowchartId;
		}

		/**
		 * Create and setup QLabel lblFlowchartId
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblFlowchartId_Create($strControlId = null, $strFormat = null) {
			$this->lblFlowchartId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFlowchartId->Name = QApplication::Translate('Flowchart Id');
			$this->lblFlowchartId->Text = $this->objFlowchartTime->FlowchartId;
			$this->lblFlowchartId->Required = true;
			$this->lblFlowchartId->Format = $strFormat;
			return $this->lblFlowchartId;
		}

		/**
		 * Create and setup QListBox lstFlowchartOp
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstFlowchartOp_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstFlowchartOp = new QListBox($this->objParentObject, $strControlId);
			$this->lstFlowchartOp->Name = QApplication::Translate('Flowchart Op');
			$this->lstFlowchartOp->Required = true;
			if (!$this->blnEditMode)
				$this->lstFlowchartOp->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objFlowchartOpCursor = FlowchartOp::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objFlowchartOp = FlowchartOp::InstantiateCursor($objFlowchartOpCursor)) {
				$objListItem = new QListItem($objFlowchartOp->__toString(), $objFlowchartOp->Id);
				if (($this->objFlowchartTime->FlowchartOp) && ($this->objFlowchartTime->FlowchartOp->Id == $objFlowchartOp->Id))
					$objListItem->Selected = true;
				$this->lstFlowchartOp->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstFlowchartOp;
		}

		/**
		 * Create and setup QLabel lblFlowchartOpId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFlowchartOpId_Create($strControlId = null) {
			$this->lblFlowchartOpId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFlowchartOpId->Name = QApplication::Translate('Flowchart Op');
			$this->lblFlowchartOpId->Text = ($this->objFlowchartTime->FlowchartOp) ? $this->objFlowchartTime->FlowchartOp->__toString() : null;
			$this->lblFlowchartOpId->Required = true;
			return $this->lblFlowchartOpId;
		}



		/**
		 * Refresh this MetaControl with Data from the local FlowchartTime object.
		 * @param boolean $blnReload reload FlowchartTime from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFlowchartTime->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFlowchartTime->Id;

			if ($this->txtName) $this->txtName->Text = $this->objFlowchartTime->Name;
			if ($this->lblName) $this->lblName->Text = $this->objFlowchartTime->Name;

			if ($this->txtTime) $this->txtTime->Text = $this->objFlowchartTime->Time;
			if ($this->lblTime) $this->lblTime->Text = $this->objFlowchartTime->Time;

			if ($this->lstColor) {
					$this->lstColor->RemoveAllItems();
				$this->lstColor->AddItem(QApplication::Translate('- Select One -'), null);
				$objColorArray = Color::LoadAll();
				if ($objColorArray) foreach ($objColorArray as $objColor) {
					$objListItem = new QListItem($objColor->__toString(), $objColor->Id);
					if (($this->objFlowchartTime->Color) && ($this->objFlowchartTime->Color->Id == $objColor->Id))
						$objListItem->Selected = true;
					$this->lstColor->AddItem($objListItem);
				}
			}
			if ($this->lblColorId) $this->lblColorId->Text = ($this->objFlowchartTime->Color) ? $this->objFlowchartTime->Color->__toString() : null;

			if ($this->txtAmount) $this->txtAmount->Text = $this->objFlowchartTime->Amount;
			if ($this->lblAmount) $this->lblAmount->Text = $this->objFlowchartTime->Amount;

			if ($this->calDate) $this->calDate->DateTime = $this->objFlowchartTime->Date;
			if ($this->lblDate) $this->lblDate->Text = sprintf($this->objFlowchartTime->Date) ? $this->objFlowchartTime->__toString($this->strDateDateTimeFormat) : null;

			if ($this->txtFlowchartId) $this->txtFlowchartId->Text = $this->objFlowchartTime->FlowchartId;
			if ($this->lblFlowchartId) $this->lblFlowchartId->Text = $this->objFlowchartTime->FlowchartId;

			if ($this->lstFlowchartOp) {
					$this->lstFlowchartOp->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFlowchartOp->AddItem(QApplication::Translate('- Select One -'), null);
				$objFlowchartOpArray = FlowchartOp::LoadAll();
				if ($objFlowchartOpArray) foreach ($objFlowchartOpArray as $objFlowchartOp) {
					$objListItem = new QListItem($objFlowchartOp->__toString(), $objFlowchartOp->Id);
					if (($this->objFlowchartTime->FlowchartOp) && ($this->objFlowchartTime->FlowchartOp->Id == $objFlowchartOp->Id))
						$objListItem->Selected = true;
					$this->lstFlowchartOp->AddItem($objListItem);
				}
			}
			if ($this->lblFlowchartOpId) $this->lblFlowchartOpId->Text = ($this->objFlowchartTime->FlowchartOp) ? $this->objFlowchartTime->FlowchartOp->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FLOWCHARTTIME OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FlowchartTime instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFlowchartTime() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtName) $this->objFlowchartTime->Name = $this->txtName->Text;
				if ($this->txtTime) $this->objFlowchartTime->Time = $this->txtTime->Text;
				if ($this->lstColor) $this->objFlowchartTime->ColorId = $this->lstColor->SelectedValue;
				if ($this->txtAmount) $this->objFlowchartTime->Amount = $this->txtAmount->Text;
				if ($this->calDate) $this->objFlowchartTime->Date = $this->calDate->DateTime;
				if ($this->txtFlowchartId) $this->objFlowchartTime->FlowchartId = $this->txtFlowchartId->Text;
				if ($this->lstFlowchartOp) $this->objFlowchartTime->FlowchartOpId = $this->lstFlowchartOp->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FlowchartTime object
				$this->objFlowchartTime->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FlowchartTime instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFlowchartTime() {
			$this->objFlowchartTime->Delete();
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
				case 'FlowchartTime': return $this->objFlowchartTime;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FlowchartTime fields -- will be created dynamically if not yet created
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
				case 'TimeControl':
					if (!$this->txtTime) return $this->txtTime_Create();
					return $this->txtTime;
				case 'TimeLabel':
					if (!$this->lblTime) return $this->lblTime_Create();
					return $this->lblTime;
				case 'ColorIdControl':
					if (!$this->lstColor) return $this->lstColor_Create();
					return $this->lstColor;
				case 'ColorIdLabel':
					if (!$this->lblColorId) return $this->lblColorId_Create();
					return $this->lblColorId;
				case 'AmountControl':
					if (!$this->txtAmount) return $this->txtAmount_Create();
					return $this->txtAmount;
				case 'AmountLabel':
					if (!$this->lblAmount) return $this->lblAmount_Create();
					return $this->lblAmount;
				case 'DateControl':
					if (!$this->calDate) return $this->calDate_Create();
					return $this->calDate;
				case 'DateLabel':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
				case 'FlowchartIdControl':
					if (!$this->txtFlowchartId) return $this->txtFlowchartId_Create();
					return $this->txtFlowchartId;
				case 'FlowchartIdLabel':
					if (!$this->lblFlowchartId) return $this->lblFlowchartId_Create();
					return $this->lblFlowchartId;
				case 'FlowchartOpIdControl':
					if (!$this->lstFlowchartOp) return $this->lstFlowchartOp_Create();
					return $this->lstFlowchartOp;
				case 'FlowchartOpIdLabel':
					if (!$this->lblFlowchartOpId) return $this->lblFlowchartOpId_Create();
					return $this->lblFlowchartOpId;
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
					// Controls that point to FlowchartTime fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QControl'));
					case 'TimeControl':
						return ($this->txtTime = QType::Cast($mixValue, 'QControl'));
					case 'ColorIdControl':
						return ($this->lstColor = QType::Cast($mixValue, 'QControl'));
					case 'AmountControl':
						return ($this->txtAmount = QType::Cast($mixValue, 'QControl'));
					case 'DateControl':
						return ($this->calDate = QType::Cast($mixValue, 'QControl'));
					case 'FlowchartIdControl':
						return ($this->txtFlowchartId = QType::Cast($mixValue, 'QControl'));
					case 'FlowchartOpIdControl':
						return ($this->lstFlowchartOp = QType::Cast($mixValue, 'QControl'));
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