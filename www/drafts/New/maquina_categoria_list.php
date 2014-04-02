<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the MaquinaCategoria class.  It uses the code-generated
	 * MaquinaCategoriaDataGrid control which has meta-methods to help with
	 * easily creating/defining MaquinaCategoria columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both maquina_categoria_list.php AND
	 * maquina_categoria_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class MaquinaCategoriaListForm extends QForm {
		// Local instance of the Meta DataGrid to list MaquinaCategorias
		protected $dtgMaquinaCategorias;

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
			$this->dtgMaquinaCategorias = new MaquinaCategoriaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMaquinaCategorias->CssClass = 'datagrid';
			$this->dtgMaquinaCategorias->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMaquinaCategorias->Paginator = new QPaginator($this->dtgMaquinaCategorias);
			$this->dtgMaquinaCategorias->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/maquina_categoria_edit.php';
			$this->dtgMaquinaCategorias->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for maquina_categoria's properties, or you
			// can traverse down QQN::maquina_categoria() to display fields that are down the hierarchy)
			$this->dtgMaquinaCategorias->MetaAddColumn('Id');
			$this->dtgMaquinaCategorias->MetaAddColumn('Nome');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// maquina_categoria_list.tpl.php as the included HTML template file
	MaquinaCategoriaListForm::Run('MaquinaCategoriaListForm');
?>