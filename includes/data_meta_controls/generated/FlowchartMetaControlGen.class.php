<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Flowchart class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Flowchart object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FlowchartMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Flowchart $Flowchart the actual Flowchart data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $ReferenceIdControl
	 * property-read QLabel $ReferenceIdLabel
	 * property QIntegerTextBox $OrderControl
	 * property-read QLabel $OrderLabel
	 * property QListBox $ActionsIdControl
	 * property-read QLabel $ActionsIdLabel
	 * property QListBox $MachineIdControl
	 * property-read QLabel $MachineIdLabel
	 * property QIntegerTextBox $TimeControl
	 * property-read QLabel $TimeLabel
	 * property QListBox $FlowchartOpControl
	 * property-read QLabel $FlowchartOpLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FlowchartMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Flowchart objFlowchart
		 * @access protected
		 */
		protected $objFlowchart;

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

		// Controls that allow the editing of Flowchart's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstReference;
         * @access protected
         */
		protected $lstReference;

        /**
         * @var QIntegerTextBox txtOrder;
         * @access protected
         */
		protected $txtOrder;

        /**
         * @var QListBox lstActions;
         * @access protected
         */
		protected $lstActions;

        /**
         * @var QListBox lstMachine;
         * @access protected
         */
		protected $lstMachine;

        /**
         * @var QIntegerTextBox txtTime;
         * @access protected
         */
		protected $txtTime;


		// Controls that allow the viewing of Flowchart's individual data fields
        /**
         * @var QLabel lblReferenceId
         * @access protected
         */
		protected $lblReferenceId;

        /**
         * @var QLabel lblOrder
         * @access protected
         */
		protected $lblOrder;

        /**
         * @var QLabel lblActionsId
         * @access protected
         */
		protected $lblActionsId;

        /**
         * @var QLabel lblMachineId
         * @access protected
         */
		protected $lblMachineId;

        /**
         * @var QLabel lblTime
         * @access protected
         */
		protected $lblTime;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstFlowchartOps;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblFlowchartOps;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FlowchartMetaControl to edit a single Flowchart object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Flowchart object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartMetaControl
		 * @param Flowchart $objFlowchart new or existing Flowchart object
		 */
		 public function __construct($objParentObject, Flowchart $objFlowchart) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FlowchartMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Flowchart object
			$this->objFlowchart = $objFlowchart;

			// Figure out if we're Editing or Creating New
			if ($this->objFlowchart->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Flowchart object creation - defaults to CreateOrEdit
 		 * @return FlowchartMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFlowchart = Flowchart::Load($intId);

				// Flowchart was found -- return it!
				if ($objFlowchart)
					return new FlowchartMetaControl($objParentObject, $objFlowchart);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Flowchart object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FlowchartMetaControl($objParentObject, new Flowchart());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Flowchart object creation - defaults to CreateOrEdit
		 * @return FlowchartMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FlowchartMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FlowchartMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Flowchart object creation - defaults to CreateOrEdit
		 * @return FlowchartMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FlowchartMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFlowchart->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstReference
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReference_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReference = new QListBox($this->objParentObject, $strControlId);
			$this->lstReference->Name = QApplication::Translate('Reference');
			$this->lstReference->Required = true;
			if (!$this->blnEditMode)
				$this->lstReference->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenceCursor = Reference::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objReference = Reference::InstantiateCursor($objReferenceCursor)) {
				$objListItem = new QListItem($objReference->__toString(), $objReference->Id);
				if (($this->objFlowchart->Reference) && ($this->objFlowchart->Reference->Id == $objReference->Id))
					$objListItem->Selected = true;
				$this->lstReference->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstReference;
		}

		/**
		 * Create and setup QLabel lblReferenceId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReferenceId_Create($strControlId = null) {
			$this->lblReferenceId = new QLabel($this->objParentObject, $strControlId);
			$this->lblReferenceId->Name = QApplication::Translate('Reference');
			$this->lblReferenceId->Text = ($this->objFlowchart->Reference) ? $this->objFlowchart->Reference->__toString() : null;
			$this->lblReferenceId->Required = true;
			return $this->lblReferenceId;
		}

		/**
		 * Create and setup QIntegerTextBox txtOrder
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtOrder_Create($strControlId = null) {
			$this->txtOrder = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtOrder->Name = QApplication::Translate('Order');
			$this->txtOrder->Text = $this->objFlowchart->Order;
			$this->txtOrder->Required = true;
			return $this->txtOrder;
		}

		/**
		 * Create and setup QLabel lblOrder
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblOrder_Create($strControlId = null, $strFormat = null) {
			$this->lblOrder = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrder->Name = QApplication::Translate('Order');
			$this->lblOrder->Text = $this->objFlowchart->Order;
			$this->lblOrder->Required = true;
			$this->lblOrder->Format = $strFormat;
			return $this->lblOrder;
		}

		/**
		 * Create and setup QListBox lstActions
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstActions_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstActions = new QListBox($this->objParentObject, $strControlId);
			$this->lstActions->Name = QApplication::Translate('Actions');
			$this->lstActions->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objActionsCursor = Actions::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objActions = Actions::InstantiateCursor($objActionsCursor)) {
				$objListItem = new QListItem($objActions->__toString(), $objActions->Id);
				if (($this->objFlowchart->Actions) && ($this->objFlowchart->Actions->Id == $objActions->Id))
					$objListItem->Selected = true;
				$this->lstActions->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstActions;
		}

		/**
		 * Create and setup QLabel lblActionsId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblActionsId_Create($strControlId = null) {
			$this->lblActionsId = new QLabel($this->objParentObject, $strControlId);
			$this->lblActionsId->Name = QApplication::Translate('Actions');
			$this->lblActionsId->Text = ($this->objFlowchart->Actions) ? $this->objFlowchart->Actions->__toString() : null;
			return $this->lblActionsId;
		}

		/**
		 * Create and setup QListBox lstMachine
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstMachine_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstMachine = new QListBox($this->objParentObject, $strControlId);
			$this->lstMachine->Name = QApplication::Translate('Machine');
			$this->lstMachine->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objMachineCursor = Machine::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objMachine = Machine::InstantiateCursor($objMachineCursor)) {
				$objListItem = new QListItem($objMachine->__toString(), $objMachine->Id);
				if (($this->objFlowchart->Machine) && ($this->objFlowchart->Machine->Id == $objMachine->Id))
					$objListItem->Selected = true;
				$this->lstMachine->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstMachine;
		}

		/**
		 * Create and setup QLabel lblMachineId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMachineId_Create($strControlId = null) {
			$this->lblMachineId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMachineId->Name = QApplication::Translate('Machine');
			$this->lblMachineId->Text = ($this->objFlowchart->Machine) ? $this->objFlowchart->Machine->__toString() : null;
			return $this->lblMachineId;
		}

		/**
		 * Create and setup QIntegerTextBox txtTime
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTime_Create($strControlId = null) {
			$this->txtTime = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTime->Name = QApplication::Translate('Time');
			$this->txtTime->Text = $this->objFlowchart->Time;
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
			$this->lblTime->Text = $this->objFlowchart->Time;
			$this->lblTime->Format = $strFormat;
			return $this->lblTime;
		}

		/**
		 * Create and setup QListBox lstFlowchartOps
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstFlowchartOps_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstFlowchartOps = new QListBox($this->objParentObject, $strControlId);
			$this->lstFlowchartOps->Name = QApplication::Translate('Flowchart Ops');
			$this->lstFlowchartOps->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objFlowchart->GetFlowchartOpArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objFlowchartOpCursor = FlowchartOp::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objFlowchartOp = FlowchartOp::InstantiateCursor($objFlowchartOpCursor)) {
				$objListItem = new QListItem($objFlowchartOp->__toString(), $objFlowchartOp->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objFlowchartOp->Id)
						$objListItem->Selected = true;
				}
				$this->lstFlowchartOps->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstFlowchartOps;
		}

		/**
		 * Create and setup QLabel lblFlowchartOps
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblFlowchartOps_Create($strControlId = null, $strGlue = ', ') {
			$this->lblFlowchartOps = new QLabel($this->objParentObject, $strControlId);
			$this->lstFlowchartOps->Name = QApplication::Translate('Flowchart Ops');
			
			$objAssociatedArray = $this->objFlowchart->GetFlowchartOpArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblFlowchartOps->Text = implode($strGlue, $strItems);
			return $this->lblFlowchartOps;
		}



		/**
		 * Refresh this MetaControl with Data from the local Flowchart object.
		 * @param boolean $blnReload reload Flowchart from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFlowchart->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFlowchart->Id;

			if ($this->lstReference) {
					$this->lstReference->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstReference->AddItem(QApplication::Translate('- Select One -'), null);
				$objReferenceArray = Reference::LoadAll();
				if ($objReferenceArray) foreach ($objReferenceArray as $objReference) {
					$objListItem = new QListItem($objReference->__toString(), $objReference->Id);
					if (($this->objFlowchart->Reference) && ($this->objFlowchart->Reference->Id == $objReference->Id))
						$objListItem->Selected = true;
					$this->lstReference->AddItem($objListItem);
				}
			}
			if ($this->lblReferenceId) $this->lblReferenceId->Text = ($this->objFlowchart->Reference) ? $this->objFlowchart->Reference->__toString() : null;

			if ($this->txtOrder) $this->txtOrder->Text = $this->objFlowchart->Order;
			if ($this->lblOrder) $this->lblOrder->Text = $this->objFlowchart->Order;

			if ($this->lstActions) {
					$this->lstActions->RemoveAllItems();
				$this->lstActions->AddItem(QApplication::Translate('- Select One -'), null);
				$objActionsArray = Actions::LoadAll();
				if ($objActionsArray) foreach ($objActionsArray as $objActions) {
					$objListItem = new QListItem($objActions->__toString(), $objActions->Id);
					if (($this->objFlowchart->Actions) && ($this->objFlowchart->Actions->Id == $objActions->Id))
						$objListItem->Selected = true;
					$this->lstActions->AddItem($objListItem);
				}
			}
			if ($this->lblActionsId) $this->lblActionsId->Text = ($this->objFlowchart->Actions) ? $this->objFlowchart->Actions->__toString() : null;

			if ($this->lstMachine) {
					$this->lstMachine->RemoveAllItems();
				$this->lstMachine->AddItem(QApplication::Translate('- Select One -'), null);
				$objMachineArray = Machine::LoadAll();
				if ($objMachineArray) foreach ($objMachineArray as $objMachine) {
					$objListItem = new QListItem($objMachine->__toString(), $objMachine->Id);
					if (($this->objFlowchart->Machine) && ($this->objFlowchart->Machine->Id == $objMachine->Id))
						$objListItem->Selected = true;
					$this->lstMachine->AddItem($objListItem);
				}
			}
			if ($this->lblMachineId) $this->lblMachineId->Text = ($this->objFlowchart->Machine) ? $this->objFlowchart->Machine->__toString() : null;

			if ($this->txtTime) $this->txtTime->Text = $this->objFlowchart->Time;
			if ($this->lblTime) $this->lblTime->Text = $this->objFlowchart->Time;

			if ($this->lstFlowchartOps) {
				$this->lstFlowchartOps->RemoveAllItems();
				$objAssociatedArray = $this->objFlowchart->GetFlowchartOpArray();
				$objFlowchartOpArray = FlowchartOp::LoadAll();
				if ($objFlowchartOpArray) foreach ($objFlowchartOpArray as $objFlowchartOp) {
					$objListItem = new QListItem($objFlowchartOp->__toString(), $objFlowchartOp->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objFlowchartOp->Id)
							$objListItem->Selected = true;
					}
					$this->lstFlowchartOps->AddItem($objListItem);
				}
			}
			if ($this->lblFlowchartOps) {
				$objAssociatedArray = $this->objFlowchart->GetFlowchartOpArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblFlowchartOps->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstFlowchartOps_Update() {
			if ($this->lstFlowchartOps) {
				$this->objFlowchart->UnassociateAllFlowchartOps();
				$objSelectedListItems = $this->lstFlowchartOps->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objFlowchart->AssociateFlowchartOp(FlowchartOp::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC FLOWCHART OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Flowchart instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFlowchart() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstReference) $this->objFlowchart->ReferenceId = $this->lstReference->SelectedValue;
				if ($this->txtOrder) $this->objFlowchart->Order = $this->txtOrder->Text;
				if ($this->lstActions) $this->objFlowchart->ActionsId = $this->lstActions->SelectedValue;
				if ($this->lstMachine) $this->objFlowchart->MachineId = $this->lstMachine->SelectedValue;
				if ($this->txtTime) $this->objFlowchart->Time = $this->txtTime->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Flowchart object
				$this->objFlowchart->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstFlowchartOps_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Flowchart instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFlowchart() {
			$this->objFlowchart->UnassociateAllFlowchartOps();
			$this->objFlowchart->Delete();
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
				case 'Flowchart': return $this->objFlowchart;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Flowchart fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ReferenceIdControl':
					if (!$this->lstReference) return $this->lstReference_Create();
					return $this->lstReference;
				case 'ReferenceIdLabel':
					if (!$this->lblReferenceId) return $this->lblReferenceId_Create();
					return $this->lblReferenceId;
				case 'OrderControl':
					if (!$this->txtOrder) return $this->txtOrder_Create();
					return $this->txtOrder;
				case 'OrderLabel':
					if (!$this->lblOrder) return $this->lblOrder_Create();
					return $this->lblOrder;
				case 'ActionsIdControl':
					if (!$this->lstActions) return $this->lstActions_Create();
					return $this->lstActions;
				case 'ActionsIdLabel':
					if (!$this->lblActionsId) return $this->lblActionsId_Create();
					return $this->lblActionsId;
				case 'MachineIdControl':
					if (!$this->lstMachine) return $this->lstMachine_Create();
					return $this->lstMachine;
				case 'MachineIdLabel':
					if (!$this->lblMachineId) return $this->lblMachineId_Create();
					return $this->lblMachineId;
				case 'TimeControl':
					if (!$this->txtTime) return $this->txtTime_Create();
					return $this->txtTime;
				case 'TimeLabel':
					if (!$this->lblTime) return $this->lblTime_Create();
					return $this->lblTime;
				case 'FlowchartOpControl':
					if (!$this->lstFlowchartOps) return $this->lstFlowchartOps_Create();
					return $this->lstFlowchartOps;
				case 'FlowchartOpLabel':
					if (!$this->lblFlowchartOps) return $this->lblFlowchartOps_Create();
					return $this->lblFlowchartOps;
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
					// Controls that point to Flowchart fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'ReferenceIdControl':
						return ($this->lstReference = QType::Cast($mixValue, 'QControl'));
					case 'OrderControl':
						return ($this->txtOrder = QType::Cast($mixValue, 'QControl'));
					case 'ActionsIdControl':
						return ($this->lstActions = QType::Cast($mixValue, 'QControl'));
					case 'MachineIdControl':
						return ($this->lstMachine = QType::Cast($mixValue, 'QControl'));
					case 'TimeControl':
						return ($this->txtTime = QType::Cast($mixValue, 'QControl'));
					case 'FlowchartOpControl':
						return ($this->lstFlowchartOps = QType::Cast($mixValue, 'QControl'));
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