<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the ReferenciaCategoria class.  It uses the code-generated
	 * ReferenciaCategoriaDataGrid control which has meta-methods to help with
	 * easily creating/defining ReferenciaCategoria columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both referencia_categoria_list.php AND
	 * referencia_categoria_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ReferenciaCategoriaListForm extends QForm {
	
		protected $objUsuario;
	
		// Local instance of the Meta DataGrid to list ReferenciaCategorias
		protected $dtgReferenciaCategorias;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
			if(!$this->CheckPermissions())
				QApplication::Redirect (__VIRTUAL_DIRECTORY__.'/login.php');			
		}

		protected function CheckPermissions(){
			if(isset($_SESSION['login_id'])){
				$this->objUsuario = Usuario::Load($_SESSION['login_id']);
				if(!$this->objUsuario)
					return false;
				else 
					return true;
			} else 
				return false;
			
			
		}		
		
		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgReferenciaCategorias = new ReferenciaCategoriaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgReferenciaCategorias->CssClass = 'table table-bordered table-striped table-hover table-condensed';
			$this->dtgReferenciaCategorias->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgReferenciaCategorias->Paginator = new QPaginator($this->dtgReferenciaCategorias);
			$this->dtgReferenciaCategorias->Paginator->CssClass = 'pagination';
			$this->dtgReferenciaCategorias->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/referencia_categoria_edit.php';
			$this->dtgReferenciaCategorias->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for referencia_categoria's properties, or you
			// can traverse down QQN::referencia_categoria() to display fields that are down the hierarchy)
			$this->dtgReferenciaCategorias->MetaAddColumn('Id');
			$this->dtgReferenciaCategorias->MetaAddColumn('Nome');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// referencia_categoria_list.tpl.php as the included HTML template file
	ReferenciaCategoriaListForm::Run('ReferenciaCategoriaListForm');
?>