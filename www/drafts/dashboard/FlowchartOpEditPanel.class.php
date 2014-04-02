<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the FlowchartOp class.  It uses the code-generated
	 * FlowchartOpMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a FlowchartOp columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both flowchart_op_edit.php AND
	 * flowchart_op_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FlowchartOpEditPanel extends QPanel {
		// Local instance of the FlowchartOpMetaControl
		protected $mctFlowchartOp;

		// Controls for FlowchartOp's Data Fields
		public $lblId;
		public $txtProductionOrder;
		public $lstPackage;
		public $lblDate;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstFlowcharts;

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'FlowchartOpEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the FlowchartOpMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctFlowchartOp = FlowchartOpMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on FlowchartOp's data fields
			$this->lblId = $this->mctFlowchartOp->lblId_Create();
			$this->txtProductionOrder = $this->mctFlowchartOp->txtProductionOrder_Create();
			$this->lstPackage = $this->mctFlowchartOp->lstPackage_Create();
			$this->lblDate = $this->mctFlowchartOp->lblDate_Create();
			$this->lstFlowcharts = $this->mctFlowchartOp->lstFlowcharts_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('FlowchartOp') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctFlowchartOp->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the FlowchartOpMetaControl
			$this->mctFlowchartOp->SaveFlowchartOp();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the FlowchartOpMetaControl
			$this->mctFlowchartOp->DeleteFlowchartOp();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>