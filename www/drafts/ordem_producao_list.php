<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the OrdemProducao class.  It uses the code-generated
	 * OrdemProducaoDataGrid control which has meta-methods to help with
	 * easily creating/defining OrdemProducao columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both ordem_producao_list.php AND
	 * ordem_producao_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class OrdemProducaoListForm extends QForm {
	
		protected $objUsuario;
	
		// Local instance of the Meta DataGrid to list OrdemProducaos
		protected $dtgOrdemProducaos;

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
			$this->dtgOrdemProducaos = new OrdemProducaoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgOrdemProducaos->CssClass = 'table table-bordered table-striped table-hover table-condensed';
			$this->dtgOrdemProducaos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgOrdemProducaos->Paginator = new QPaginator($this->dtgOrdemProducaos);
			$this->dtgOrdemProducaos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/ordem_producao_edit.php';
			$this->dtgOrdemProducaos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for ordem_producao's properties, or you
			// can traverse down QQN::ordem_producao() to display fields that are down the hierarchy)
			$this->dtgOrdemProducaos->MetaAddColumn('Id');
			$this->dtgOrdemProducaos->MetaAddColumn('Numero');
			$this->dtgOrdemProducaos->MetaAddColumn(QQN::OrdemProducao()->Referencia);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// ordem_producao_list.tpl.php as the included HTML template file
	OrdemProducaoListForm::Run('OrdemProducaoListForm');
?>