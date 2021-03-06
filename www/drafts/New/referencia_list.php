<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Referencia class.  It uses the code-generated
	 * ReferenciaDataGrid control which has meta-methods to help with
	 * easily creating/defining Referencia columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both referencia_list.php AND
	 * referencia_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ReferenciaListForm extends QForm {
		// Local instance of the Meta DataGrid to list Referencias
		protected $dtgReferencias;

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
			$this->dtgReferencias = new ReferenciaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgReferencias->CssClass = 'datagrid';
			$this->dtgReferencias->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgReferencias->Paginator = new QPaginator($this->dtgReferencias);
			$this->dtgReferencias->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/referencia_edit.php';
			$this->dtgReferencias->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for referencia's properties, or you
			// can traverse down QQN::referencia() to display fields that are down the hierarchy)
			$this->dtgReferencias->MetaAddColumn('Id');
			$this->dtgReferencias->MetaAddColumn('Nome');
			$this->dtgReferencias->MetaAddColumn(QQN::Referencia()->ReferenciaCategoria);
			$this->dtgReferencias->MetaAddColumn('Modelo');
			$this->dtgReferencias->MetaAddColumn(QQN::Referencia()->Tecido);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// referencia_list.tpl.php as the included HTML template file
	ReferenciaListForm::Run('ReferenciaListForm');
?>