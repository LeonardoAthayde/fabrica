<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FlowchartGrid class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FlowchartGrid object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FlowchartGridMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FlowchartGrid $FlowchartGrid the actual FlowchartGrid data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $ColorIdControl
	 * property-read QLabel $ColorIdLabel
	 * property QListBox $SizeIdControl
	 * property-read QLabel $SizeIdLabel
	 * property QIntegerTextBox $AmountControl
	 * property-read QLabel $AmountLabel
	 * property QListBox $FlowchartOpIdControl
	 * property-read QLabel $FlowchartOpIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FlowchartGridMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var FlowchartGrid objFlowchartGrid
		 * @access protected
		 */
		protected $objFlowchartGrid;

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

		// Controls that allow the editing of FlowchartGrid's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstColor;
         * @access protected
         */
		protected $lstColor;

        /**
         * @var QListBox lstSize;
         * @access protected
         */
		protected $lstSize;

        /**
         * @var QIntegerTextBox txtAmount;
         * @access protected
         */
		protected $txtAmount;

        /**
         * @var QListBox lstFlowchartOp;
         * @access protected
         */
		protected $lstFlowchartOp;


		// Controls that allow the viewing of FlowchartGrid's individual data fields
        /**
         * @var QLabel lblColorId
         * @access protected
         */
		protected $lblColorId;

        /**
         * @var QLabel lblSizeId
         * @access protected
         */
		protected $lblSizeId;

        /**
         * @var QLabel lblAmount
         * @access protected
         */
		protected $lblAmount;

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
		 * FlowchartGridMetaControl to edit a single FlowchartGrid object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FlowchartGrid object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartGridMetaControl
		 * @param FlowchartGrid $objFlowchartGrid new or existing FlowchartGrid object
		 */
		 public function __construct($objParentObject, FlowchartGrid $objFlowchartGrid) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FlowchartGridMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FlowchartGrid object
			$this->objFlowchartGrid = $objFlowchartGrid;

			// Figure out if we're Editing or Creating New
			if ($this->objFlowchartGrid->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartGridMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FlowchartGrid object creation - defaults to CreateOrEdit
 		 * @return FlowchartGridMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFlowchartGrid = FlowchartGrid::Load($intId);

				// FlowchartGrid was found -- return it!
				if ($objFlowchartGrid)
					return new FlowchartGridMetaControl($objParentObject, $objFlowchartGrid);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FlowchartGrid object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FlowchartGridMetaControl($objParentObject, new FlowchartGrid());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartGridMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FlowchartGrid object creation - defaults to CreateOrEdit
		 * @return FlowchartGridMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FlowchartGridMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartGridMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FlowchartGrid object creation - defaults to CreateOrEdit
		 * @return FlowchartGridMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FlowchartGridMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFlowchartGrid->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
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
				if (($this->objFlowchartGrid->Color) && ($this->objFlowchartGrid->Color->Id == $objColor->Id))
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
			$this->lblColorId->Text = ($this->objFlowchartGrid->Color) ? $this->objFlowchartGrid->Color->__toString() : null;
			return $this->lblColorId;
		}

		/**
		 * Create and setup QListBox lstSize
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstSize_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstSize = new QListBox($this->objParentObject, $strControlId);
			$this->lstSize->Name = QApplication::Translate('Size');
			$this->lstSize->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objSizeCursor = Size::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objSize = Size::InstantiateCursor($objSizeCursor)) {
				$objListItem = new QListItem($objSize->__toString(), $objSize->Id);
				if (($this->objFlowchartGrid->Size) && ($this->objFlowchartGrid->Size->Id == $objSize->Id))
					$objListItem->Selected = true;
				$this->lstSize->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstSize;
		}

		/**
		 * Create and setup QLabel lblSizeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSizeId_Create($strControlId = null) {
			$this->lblSizeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblSizeId->Name = QApplication::Translate('Size');
			$this->lblSizeId->Text = ($this->objFlowchartGrid->Size) ? $this->objFlowchartGrid->Size->__toString() : null;
			return $this->lblSizeId;
		}

		/**
		 * Create and setup QIntegerTextBox txtAmount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtAmount_Create($strControlId = null) {
			$this->txtAmount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtAmount->Name = QApplication::Translate('Amount');
			$this->txtAmount->Text = $this->objFlowchartGrid->Amount;
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
			$this->lblAmount->Text = $this->objFlowchartGrid->Amount;
			$this->lblAmount->Required = true;
			$this->lblAmount->Format = $strFormat;
			return $this->lblAmount;
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
				if (($this->objFlowchartGrid->FlowchartOp) && ($this->objFlowchartGrid->FlowchartOp->Id == $objFlowchartOp->Id))
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
			$this->lblFlowchartOpId->Text = ($this->objFlowchartGrid->FlowchartOp) ? $this->objFlowchartGrid->FlowchartOp->__toString() : null;
			$this->lblFlowchartOpId->Required = true;
			return $this->lblFlowchartOpId;
		}



		/**
		 * Refresh this MetaControl with Data from the local FlowchartGrid object.
		 * @param boolean $blnReload reload FlowchartGrid from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFlowchartGrid->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFlowchartGrid->Id;

			if ($this->lstColor) {
					$this->lstColor->RemoveAllItems();
				$this->lstColor->AddItem(QApplication::Translate('- Select One -'), null);
				$objColorArray = Color::LoadAll();
				if ($objColorArray) foreach ($objColorArray as $objColor) {
					$objListItem = new QListItem($objColor->__toString(), $objColor->Id);
					if (($this->objFlowchartGrid->Color) && ($this->objFlowchartGrid->Color->Id == $objColor->Id))
						$objListItem->Selected = true;
					$this->lstColor->AddItem($objListItem);
				}
			}
			if ($this->lblColorId) $this->lblColorId->Text = ($this->objFlowchartGrid->Color) ? $this->objFlowchartGrid->Color->__toString() : null;

			if ($this->lstSize) {
					$this->lstSize->RemoveAllItems();
				$this->lstSize->AddItem(QApplication::Translate('- Select One -'), null);
				$objSizeArray = Size::LoadAll();
				if ($objSizeArray) foreach ($objSizeArray as $objSize) {
					$objListItem = new QListItem($objSize->__toString(), $objSize->Id);
					if (($this->objFlowchartGrid->Size) && ($this->objFlowchartGrid->Size->Id == $objSize->Id))
						$objListItem->Selected = true;
					$this->lstSize->AddItem($objListItem);
				}
			}
			if ($this->lblSizeId) $this->lblSizeId->Text = ($this->objFlowchartGrid->Size) ? $this->objFlowchartGrid->Size->__toString() : null;

			if ($this->txtAmount) $this->txtAmount->Text = $this->objFlowchartGrid->Amount;
			if ($this->lblAmount) $this->lblAmount->Text = $this->objFlowchartGrid->Amount;

			if ($this->lstFlowchartOp) {
					$this->lstFlowchartOp->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFlowchartOp->AddItem(QApplication::Translate('- Select One -'), null);
				$objFlowchartOpArray = FlowchartOp::LoadAll();
				if ($objFlowchartOpArray) foreach ($objFlowchartOpArray as $objFlowchartOp) {
					$objListItem = new QListItem($objFlowchartOp->__toString(), $objFlowchartOp->Id);
					if (($this->objFlowchartGrid->FlowchartOp) && ($this->objFlowchartGrid->FlowchartOp->Id == $objFlowchartOp->Id))
						$objListItem->Selected = true;
					$this->lstFlowchartOp->AddItem($objListItem);
				}
			}
			if ($this->lblFlowchartOpId) $this->lblFlowchartOpId->Text = ($this->objFlowchartGrid->FlowchartOp) ? $this->objFlowchartGrid->FlowchartOp->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FLOWCHARTGRID OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FlowchartGrid instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFlowchartGrid() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstColor) $this->objFlowchartGrid->ColorId = $this->lstColor->SelectedValue;
				if ($this->lstSize) $this->objFlowchartGrid->SizeId = $this->lstSize->SelectedValue;
				if ($this->txtAmount) $this->objFlowchartGrid->Amount = $this->txtAmount->Text;
				if ($this->lstFlowchartOp) $this->objFlowchartGrid->FlowchartOpId = $this->lstFlowchartOp->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FlowchartGrid object
				$this->objFlowchartGrid->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FlowchartGrid instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFlowchartGrid() {
			$this->objFlowchartGrid->Delete();
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
				case 'FlowchartGrid': return $this->objFlowchartGrid;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FlowchartGrid fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ColorIdControl':
					if (!$this->lstColor) return $this->lstColor_Create();
					return $this->lstColor;
				case 'ColorIdLabel':
					if (!$this->lblColorId) return $this->lblColorId_Create();
					return $this->lblColorId;
				case 'SizeIdControl':
					if (!$this->lstSize) return $this->lstSize_Create();
					return $this->lstSize;
				case 'SizeIdLabel':
					if (!$this->lblSizeId) return $this->lblSizeId_Create();
					return $this->lblSizeId;
				case 'AmountControl':
					if (!$this->txtAmount) return $this->txtAmount_Create();
					return $this->txtAmount;
				case 'AmountLabel':
					if (!$this->lblAmount) return $this->lblAmount_Create();
					return $this->lblAmount;
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
					// Controls that point to FlowchartGrid fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'ColorIdControl':
						return ($this->lstColor = QType::Cast($mixValue, 'QControl'));
					case 'SizeIdControl':
						return ($this->lstSize = QType::Cast($mixValue, 'QControl'));
					case 'AmountControl':
						return ($this->txtAmount = QType::Cast($mixValue, 'QControl'));
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