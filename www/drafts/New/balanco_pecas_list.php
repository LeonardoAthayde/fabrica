<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the BalancoPecas class.  It uses the code-generated
	 * BalancoPecasDataGrid control which has meta-methods to help with
	 * easily creating/defining BalancoPecas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both balanco_pecas_list.php AND
	 * balanco_pecas_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class BalancoPecasListForm extends QForm {
		// Local instance of the Meta DataGrid to list BalancoPecases
		protected $dtgBalancoPecases;

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
			$this->dtgBalancoPecases = new BalancoPecasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgBalancoPecases->CssClass = 'datagrid';
			$this->dtgBalancoPecases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgBalancoPecases->Paginator = new QPaginator($this->dtgBalancoPecases);
			$this->dtgBalancoPecases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/balanco_pecas_edit.php';
			$this->dtgBalancoPecases->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for balanco_pecas's properties, or you
			// can traverse down QQN::balanco_pecas() to display fields that are down the hierarchy)
			$this->dtgBalancoPecases->MetaAddColumn('Id');
			$this->dtgBalancoPecases->MetaAddColumn(QQN::BalancoPecas()->OrdemProducaoGrade);
			$this->dtgBalancoPecases->MetaAddColumn('Balanco');
			$this->dtgBalancoPecases->MetaAddColumn('QuantidadeProduzida');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// balanco_pecas_list.tpl.php as the included HTML template file
	BalancoPecasListForm::Run('BalancoPecasListForm');
?>