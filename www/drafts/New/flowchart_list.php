<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Flowchart class.  It uses the code-generated
	 * FlowchartDataGrid control which has meta-methods to help with
	 * easily creating/defining Flowchart columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both flowchart_list.php AND
	 * flowchart_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FlowchartListForm extends QForm {
		// Local instance of the Meta DataGrid to list Flowcharts
		protected $dtgFlowcharts;

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
			$this->dtgFlowcharts = new FlowchartDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFlowcharts->CssClass = 'datagrid';
			$this->dtgFlowcharts->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFlowcharts->Paginator = new QPaginator($this->dtgFlowcharts);
			$this->dtgFlowcharts->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/flowchart_edit.php';
			$this->dtgFlowcharts->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for flowchart's properties, or you
			// can traverse down QQN::flowchart() to display fields that are down the hierarchy)
			$this->dtgFlowcharts->MetaAddColumn('Id');
			$this->dtgFlowcharts->MetaAddColumn(QQN::Flowchart()->Reference);
			$this->dtgFlowcharts->MetaAddColumn('Order');
			$this->dtgFlowcharts->MetaAddColumn(QQN::Flowchart()->Actions);
			$this->dtgFlowcharts->MetaAddColumn(QQN::Flowchart()->Machine);
			$this->dtgFlowcharts->MetaAddColumn('Time');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// flowchart_list.tpl.php as the included HTML template file
	FlowchartListForm::Run('FlowchartListForm');
?>