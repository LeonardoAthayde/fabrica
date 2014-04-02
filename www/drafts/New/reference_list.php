<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Reference class.  It uses the code-generated
	 * ReferenceDataGrid control which has meta-methods to help with
	 * easily creating/defining Reference columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both reference_list.php AND
	 * reference_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ReferenceListForm extends QForm {
		// Local instance of the Meta DataGrid to list References
		protected $dtgReferences;

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
			$this->dtgReferences = new ReferenceDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgReferences->CssClass = 'datagrid';
			$this->dtgReferences->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgReferences->Paginator = new QPaginator($this->dtgReferences);
			$this->dtgReferences->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/reference_edit.php';
			$this->dtgReferences->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for reference's properties, or you
			// can traverse down QQN::reference() to display fields that are down the hierarchy)
			$this->dtgReferences->MetaAddColumn('Id');
			$this->dtgReferences->MetaAddColumn('Name');
			$this->dtgReferences->MetaAddColumn(QQN::Reference()->ReferenceCategory);
			$this->dtgReferences->MetaAddColumn('Model');
			$this->dtgReferences->MetaAddColumn(QQN::Reference()->Tissue);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// reference_list.tpl.php as the included HTML template file
	ReferenceListForm::Run('ReferenceListForm');
?>