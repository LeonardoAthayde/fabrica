<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Color class.  It uses the code-generated
	 * ColorDataGrid control which has meta-methods to help with
	 * easily creating/defining Color columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both color_list.php AND
	 * color_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ColorListForm extends QForm {
		// Local instance of the Meta DataGrid to list Colors
		protected $dtgColors;

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
			$this->dtgColors = new ColorDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgColors->CssClass = 'datagrid';
			$this->dtgColors->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgColors->Paginator = new QPaginator($this->dtgColors);
			$this->dtgColors->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/color_edit.php';
			$this->dtgColors->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for color's properties, or you
			// can traverse down QQN::color() to display fields that are down the hierarchy)
			$this->dtgColors->MetaAddColumn('Id');
			$this->dtgColors->MetaAddColumn('Name');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// color_list.tpl.php as the included HTML template file
	ColorListForm::Run('ColorListForm');
?>