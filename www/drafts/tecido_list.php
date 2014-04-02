<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Tecido class.  It uses the code-generated
	 * TecidoDataGrid control which has meta-methods to help with
	 * easily creating/defining Tecido columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both tecido_list.php AND
	 * tecido_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class TecidoListForm extends QForm {
	
		protected $objUsuario;
	
		// Local instance of the Meta DataGrid to list Tecidos
		protected $dtgTecidos;

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
			$this->dtgTecidos = new TecidoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTecidos->CssClass = 'table table-bordered table-striped table-hover table-condensed';
			$this->dtgTecidos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTecidos->Paginator = new QPaginator($this->dtgTecidos);
			$this->dtgTecidos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/tecido_edit.php';
			$this->dtgTecidos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for tecido's properties, or you
			// can traverse down QQN::tecido() to display fields that are down the hierarchy)
			$this->dtgTecidos->MetaAddColumn('Id');
			$this->dtgTecidos->MetaAddColumn('Nome');
			$this->dtgTecidos->MetaAddColumn('Codigo');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// tecido_list.tpl.php as the included HTML template file
	TecidoListForm::Run('TecidoListForm');
?>