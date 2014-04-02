<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the FlowchartTime class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of FlowchartTime objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this FlowchartTimeListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class FlowchartTimeListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list FlowchartTimes
		public $dtgFlowchartTimes;

		// Other public QControls in this panel
		public $btnCreateNew;
		public $pxyEdit;

		// Callback Method Names
		protected $strSetEditPanelMethod;
		protected $strCloseEditPanelMethod;
		
		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = 'FlowchartTimeListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgFlowchartTimes = new FlowchartTimeDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFlowchartTimes->CssClass = 'datagrid';
			$this->dtgFlowchartTimes->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFlowchartTimes->Paginator = new QPaginator($this->dtgFlowchartTimes);
			$this->dtgFlowchartTimes->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgFlowchartTimes->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for flowchart_time's properties, or you
			// can traverse down QQN::flowchart_time() to display fields that are down the hierarchy)
			$this->dtgFlowchartTimes->MetaAddColumn('Id');
			$this->dtgFlowchartTimes->MetaAddColumn('Name');
			$this->dtgFlowchartTimes->MetaAddColumn('Time');
			$this->dtgFlowchartTimes->MetaAddColumn(QQN::FlowchartTime()->Color);
			$this->dtgFlowchartTimes->MetaAddColumn('Amount');
			$this->dtgFlowchartTimes->MetaAddColumn('Date');
			$this->dtgFlowchartTimes->MetaAddColumn('FlowchartId');
			$this->dtgFlowchartTimes->MetaAddColumn(QQN::FlowchartTime()->FlowchartOp);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('FlowchartTime');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new FlowchartTimeEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new FlowchartTimeEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>