<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FlowchartOp class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FlowchartOp object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FlowchartOpMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FlowchartOp $FlowchartOp the actual FlowchartOp data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $ProductionOrderControl
	 * property-read QLabel $ProductionOrderLabel
	 * property QListBox $PackageIdControl
	 * property-read QLabel $PackageIdLabel
	 * property QLabel $DateControl
	 * property-read QLabel $DateLabel
	 * property QListBox $FlowchartControl
	 * property-read QLabel $FlowchartLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FlowchartOpMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var FlowchartOp objFlowchartOp
		 * @access protected
		 */
		protected $objFlowchartOp;

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

		// Controls that allow the editing of FlowchartOp's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtProductionOrder;
         * @access protected
         */
		protected $txtProductionOrder;

        /**
         * @var QListBox lstPackage;
         * @access protected
         */
		protected $lstPackage;

        /**
         * @var QLabel lblDate;
         * @access protected
         */
		protected $lblDate;


		// Controls that allow the viewing of FlowchartOp's individual data fields
        /**
         * @var QLabel lblProductionOrder
         * @access protected
         */
		protected $lblProductionOrder;

        /**
         * @var QLabel lblPackageId
         * @access protected
         */
		protected $lblPackageId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstFlowcharts;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblFlowcharts;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FlowchartOpMetaControl to edit a single FlowchartOp object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FlowchartOp object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartOpMetaControl
		 * @param FlowchartOp $objFlowchartOp new or existing FlowchartOp object
		 */
		 public function __construct($objParentObject, FlowchartOp $objFlowchartOp) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FlowchartOpMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FlowchartOp object
			$this->objFlowchartOp = $objFlowchartOp;

			// Figure out if we're Editing or Creating New
			if ($this->objFlowchartOp->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartOpMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FlowchartOp object creation - defaults to CreateOrEdit
 		 * @return FlowchartOpMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFlowchartOp = FlowchartOp::Load($intId);

				// FlowchartOp was found -- return it!
				if ($objFlowchartOp)
					return new FlowchartOpMetaControl($objParentObject, $objFlowchartOp);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FlowchartOp object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FlowchartOpMetaControl($objParentObject, new FlowchartOp());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartOpMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FlowchartOp object creation - defaults to CreateOrEdit
		 * @return FlowchartOpMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FlowchartOpMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartOpMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FlowchartOp object creation - defaults to CreateOrEdit
		 * @return FlowchartOpMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FlowchartOpMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFlowchartOp->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtProductionOrder
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtProductionOrder_Create($strControlId = null) {
			$this->txtProductionOrder = new QTextBox($this->objParentObject, $strControlId);
			$this->txtProductionOrder->Name = QApplication::Translate('Production Order');
			$this->txtProductionOrder->Text = $this->objFlowchartOp->ProductionOrder;
			$this->txtProductionOrder->Required = true;
			$this->txtProductionOrder->MaxLength = FlowchartOp::ProductionOrderMaxLength;
			return $this->txtProductionOrder;
		}

		/**
		 * Create and setup QLabel lblProductionOrder
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProductionOrder_Create($strControlId = null) {
			$this->lblProductionOrder = new QLabel($this->objParentObject, $strControlId);
			$this->lblProductionOrder->Name = QApplication::Translate('Production Order');
			$this->lblProductionOrder->Text = $this->objFlowchartOp->ProductionOrder;
			$this->lblProductionOrder->Required = true;
			return $this->lblProductionOrder;
		}

		/**
		 * Create and setup QListBox lstPackage
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstPackage_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstPackage = new QListBox($this->objParentObject, $strControlId);
			$this->lstPackage->Name = QApplication::Translate('Package');
			$this->lstPackage->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objPackageCursor = Package::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objPackage = Package::InstantiateCursor($objPackageCursor)) {
				$objListItem = new QListItem($objPackage->__toString(), $objPackage->Id);
				if (($this->objFlowchartOp->Package) && ($this->objFlowchartOp->Package->Id == $objPackage->Id))
					$objListItem->Selected = true;
				$this->lstPackage->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstPackage;
		}

		/**
		 * Create and setup QLabel lblPackageId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPackageId_Create($strControlId = null) {
			$this->lblPackageId = new QLabel($this->objParentObject, $strControlId);
			$this->lblPackageId->Name = QApplication::Translate('Package');
			$this->lblPackageId->Text = ($this->objFlowchartOp->Package) ? $this->objFlowchartOp->Package->__toString() : null;
			return $this->lblPackageId;
		}

		/**
		 * Create and setup QLabel lblDate
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDate_Create($strControlId = null) {
			$this->lblDate = new QLabel($this->objParentObject, $strControlId);
			$this->lblDate->Name = QApplication::Translate('Date');
			if ($this->blnEditMode)
				$this->lblDate->Text = $this->objFlowchartOp->Date;
			else
				$this->lblDate->Text = 'N/A';
			return $this->lblDate;
		}

		/**
		 * Create and setup QListBox lstFlowcharts
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstFlowcharts_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstFlowcharts = new QListBox($this->objParentObject, $strControlId);
			$this->lstFlowcharts->Name = QApplication::Translate('Flowcharts');
			$this->lstFlowcharts->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objFlowchartOp->GetFlowchartArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objFlowchartCursor = Flowchart::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objFlowchart = Flowchart::InstantiateCursor($objFlowchartCursor)) {
				$objListItem = new QListItem($objFlowchart->__toString(), $objFlowchart->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objFlowchart->Id)
						$objListItem->Selected = true;
				}
				$this->lstFlowcharts->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstFlowcharts;
		}

		/**
		 * Create and setup QLabel lblFlowcharts
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblFlowcharts_Create($strControlId = null, $strGlue = ', ') {
			$this->lblFlowcharts = new QLabel($this->objParentObject, $strControlId);
			$this->lstFlowcharts->Name = QApplication::Translate('Flowcharts');
			
			$objAssociatedArray = $this->objFlowchartOp->GetFlowchartArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblFlowcharts->Text = implode($strGlue, $strItems);
			return $this->lblFlowcharts;
		}



		/**
		 * Refresh this MetaControl with Data from the local FlowchartOp object.
		 * @param boolean $blnReload reload FlowchartOp from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFlowchartOp->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFlowchartOp->Id;

			if ($this->txtProductionOrder) $this->txtProductionOrder->Text = $this->objFlowchartOp->ProductionOrder;
			if ($this->lblProductionOrder) $this->lblProductionOrder->Text = $this->objFlowchartOp->ProductionOrder;

			if ($this->lstPackage) {
					$this->lstPackage->RemoveAllItems();
				$this->lstPackage->AddItem(QApplication::Translate('- Select One -'), null);
				$objPackageArray = Package::LoadAll();
				if ($objPackageArray) foreach ($objPackageArray as $objPackage) {
					$objListItem = new QListItem($objPackage->__toString(), $objPackage->Id);
					if (($this->objFlowchartOp->Package) && ($this->objFlowchartOp->Package->Id == $objPackage->Id))
						$objListItem->Selected = true;
					$this->lstPackage->AddItem($objListItem);
				}
			}
			if ($this->lblPackageId) $this->lblPackageId->Text = ($this->objFlowchartOp->Package) ? $this->objFlowchartOp->Package->__toString() : null;

			if ($this->lblDate) if ($this->blnEditMode) $this->lblDate->Text = $this->objFlowchartOp->Date;

			if ($this->lstFlowcharts) {
				$this->lstFlowcharts->RemoveAllItems();
				$objAssociatedArray = $this->objFlowchartOp->GetFlowchartArray();
				$objFlowchartArray = Flowchart::LoadAll();
				if ($objFlowchartArray) foreach ($objFlowchartArray as $objFlowchart) {
					$objListItem = new QListItem($objFlowchart->__toString(), $objFlowchart->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objFlowchart->Id)
							$objListItem->Selected = true;
					}
					$this->lstFlowcharts->AddItem($objListItem);
				}
			}
			if ($this->lblFlowcharts) {
				$objAssociatedArray = $this->objFlowchartOp->GetFlowchartArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblFlowcharts->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstFlowcharts_Update() {
			if ($this->lstFlowcharts) {
				$this->objFlowchartOp->UnassociateAllFlowcharts();
				$objSelectedListItems = $this->lstFlowcharts->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objFlowchartOp->AssociateFlowchart(Flowchart::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC FLOWCHARTOP OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FlowchartOp instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFlowchartOp() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtProductionOrder) $this->objFlowchartOp->ProductionOrder = $this->txtProductionOrder->Text;
				if ($this->lstPackage) $this->objFlowchartOp->PackageId = $this->lstPackage->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FlowchartOp object
				$this->objFlowchartOp->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstFlowcharts_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FlowchartOp instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFlowchartOp() {
			$this->objFlowchartOp->UnassociateAllFlowcharts();
			$this->objFlowchartOp->Delete();
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
				case 'FlowchartOp': return $this->objFlowchartOp;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FlowchartOp fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ProductionOrderControl':
					if (!$this->txtProductionOrder) return $this->txtProductionOrder_Create();
					return $this->txtProductionOrder;
				case 'ProductionOrderLabel':
					if (!$this->lblProductionOrder) return $this->lblProductionOrder_Create();
					return $this->lblProductionOrder;
				case 'PackageIdControl':
					if (!$this->lstPackage) return $this->lstPackage_Create();
					return $this->lstPackage;
				case 'PackageIdLabel':
					if (!$this->lblPackageId) return $this->lblPackageId_Create();
					return $this->lblPackageId;
				case 'DateControl':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
				case 'DateLabel':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
				case 'FlowchartControl':
					if (!$this->lstFlowcharts) return $this->lstFlowcharts_Create();
					return $this->lstFlowcharts;
				case 'FlowchartLabel':
					if (!$this->lblFlowcharts) return $this->lblFlowcharts_Create();
					return $this->lblFlowcharts;
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
					// Controls that point to FlowchartOp fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'ProductionOrderControl':
						return ($this->txtProductionOrder = QType::Cast($mixValue, 'QControl'));
					case 'PackageIdControl':
						return ($this->lstPackage = QType::Cast($mixValue, 'QControl'));
					case 'DateControl':
						return ($this->lblDate = QType::Cast($mixValue, 'QControl'));
					case 'FlowchartControl':
						return ($this->lstFlowcharts = QType::Cast($mixValue, 'QControl'));
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