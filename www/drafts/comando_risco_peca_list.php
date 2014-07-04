<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the ComandoRiscoPeca class.  It uses the code-generated
	 * ComandoRiscoPecaDataGrid control which has meta-methods to help with
	 * easily creating/defining ComandoRiscoPeca columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both comando_risco_peca_list.php AND
	 * comando_risco_peca_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ComandoRiscoPecaListForm extends QForm {
	
		protected $objUsuario;
	
		// Local instance of the Meta DataGrid to list ComandoRiscoPecas
		protected $dtgComandoRiscoPecas;

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
			$this->dtgComandoRiscoPecas = new ComandoRiscoPecaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgComandoRiscoPecas->CssClass = 'table table-bordered table-striped table-hover table-condensed';
			$this->dtgComandoRiscoPecas->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgComandoRiscoPecas->Paginator = new QPaginator($this->dtgComandoRiscoPecas);
			$this->dtgComandoRiscoPecas->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/comando_risco_peca_edit.php';
			$this->dtgComandoRiscoPecas->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for comando_risco_peca's properties, or you
			// can traverse down QQN::comando_risco_peca() to display fields that are down the hierarchy)
			$this->dtgComandoRiscoPecas->MetaAddColumn('Id');
			$this->dtgComandoRiscoPecas->MetaAddColumn('QuantidadeReal');
			$this->dtgComandoRiscoPecas->MetaAddColumn('Peso');
			$this->dtgComandoRiscoPecas->MetaAddColumn(QQN::ComandoRiscoPeca()->ComandoRisco);
			$this->dtgComandoRiscoPecas->MetaAddColumn(QQN::ComandoRiscoPeca()->ComandoPeca);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// comando_risco_peca_list.tpl.php as the included HTML template file
	ComandoRiscoPecaListForm::Run('ComandoRiscoPecaListForm');
?>