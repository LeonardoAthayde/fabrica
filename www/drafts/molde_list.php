<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Molde class.  It uses the code-generated
	 * MoldeDataGrid control which has meta-methods to help with
	 * easily creating/defining Molde columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both molde_list.php AND
	 * molde_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class MoldeListForm extends QForm {
	
		protected $objUsuario;
	
		// Local instance of the Meta DataGrid to list Moldes
		protected $dtgMoldes;

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
			$this->dtgMoldes = new MoldeDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMoldes->CssClass = 'table table-bordered table-striped table-hover table-condensed';
			$this->dtgMoldes->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMoldes->Paginator = new QPaginator($this->dtgMoldes);
			$this->dtgMoldes->Paginator->CssClass = 'pagination';
			$this->dtgMoldes->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/molde_edit.php';
			$this->dtgMoldes->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for molde's properties, or you
			// can traverse down QQN::molde() to display fields that are down the hierarchy)
			$this->dtgMoldes->MetaAddColumn('Id');
			$this->dtgMoldes->MetaAddColumn('Nome');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// molde_list.tpl.php as the included HTML template file
	MoldeListForm::Run('MoldeListForm');
?>