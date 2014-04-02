<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the BalancoItem class.  It uses the code-generated
	 * BalancoItemDataGrid control which has meta-methods to help with
	 * easily creating/defining BalancoItem columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both balanco_item_list.php AND
	 * balanco_item_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class BalancoItemListForm extends QForm {
		// Local instance of the Meta DataGrid to list BalancoItems
		protected $dtgBalancoItems;

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
			$this->dtgBalancoItems = new BalancoItemDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgBalancoItems->CssClass = 'datagrid';
			$this->dtgBalancoItems->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgBalancoItems->Paginator = new QPaginator($this->dtgBalancoItems);
			$this->dtgBalancoItems->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/balanco_item_edit.php';
			$this->dtgBalancoItems->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for balanco_item's properties, or you
			// can traverse down QQN::balanco_item() to display fields that are down the hierarchy)
			$this->dtgBalancoItems->MetaAddColumn('Id');
			$this->dtgBalancoItems->MetaAddColumn('Quantidade');
			$this->dtgBalancoItems->MetaAddColumn('Balanco');
			$this->dtgBalancoItems->MetaAddColumn(QQN::BalancoItem()->OrdemProducaoGrade);
			$this->dtgBalancoItems->MetaAddColumn(QQN::BalancoItem()->FluxogramaItem);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// balanco_item_list.tpl.php as the included HTML template file
	BalancoItemListForm::Run('BalancoItemListForm');
?>