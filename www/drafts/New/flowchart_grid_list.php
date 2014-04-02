<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the FlowchartGrid class.  It uses the code-generated
	 * FlowchartGridDataGrid control which has meta-methods to help with
	 * easily creating/defining FlowchartGrid columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both flowchart_grid_list.php AND
	 * flowchart_grid_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FlowchartGridListForm extends QForm {
		// Local instance of the Meta DataGrid to list FlowchartGrids
		protected $dtgFlowchartGrids;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgFlowchartGrids = new FlowchartGridDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFlowchartGrids->CssClass = 'datagrid';
			$this->dtgFlowchartGrids->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFlowchartGrids->Paginator = new QPaginator($this->dtgFlowchartGrids);
			$this->dtgFlowchartGrids->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/flowchart_grid_edit.php';
			$this->dtgFlowchartGrids->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for flowchart_grid's properties, or you
			// can traverse down QQN::flowchart_grid() to display fields that are down the hierarchy)
			$this->dtgFlowchartGrids->MetaAddColumn('Id');
			$this->dtgFlowchartGrids->MetaAddColumn(QQN::FlowchartGrid()->Color);
			$this->dtgFlowchartGrids->MetaAddColumn(QQN::FlowchartGrid()->Size);
			$this->dtgFlowchartGrids->MetaAddColumn('Amount');
			$this->dtgFlowchartGrids->MetaAddColumn(QQN::FlowchartGrid()->FlowchartOp);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// flowchart_grid_list.tpl.php as the included HTML template file
	FlowchartGridListForm::Run('FlowchartGridListForm');
?>