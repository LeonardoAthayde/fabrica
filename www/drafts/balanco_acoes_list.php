<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the BalancoAcoes class.  It uses the code-generated
	 * BalancoAcoesDataGrid control which has meta-methods to help with
	 * easily creating/defining BalancoAcoes columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both balanco_acoes_list.php AND
	 * balanco_acoes_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class BalancoAcoesListForm extends QForm {
	
		protected $objUsuario;
	
		// Local instance of the Meta DataGrid to list BalancoAcoeses
		protected $dtgBalancoAcoeses;

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
			$this->dtgBalancoAcoeses = new BalancoAcoesDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgBalancoAcoeses->CssClass = 'table table-bordered table-striped table-hover table-condensed';
			$this->dtgBalancoAcoeses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgBalancoAcoeses->Paginator = new QPaginator($this->dtgBalancoAcoeses);
			$this->dtgBalancoAcoeses->Paginator->CssClass = 'pagination';
			$this->dtgBalancoAcoeses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/balanco_acoes_edit.php';
			$this->dtgBalancoAcoeses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for balanco_acoes's properties, or you
			// can traverse down QQN::balanco_acoes() to display fields that are down the hierarchy)
			$this->dtgBalancoAcoeses->MetaAddColumn('Id');
			$this->dtgBalancoAcoeses->MetaAddColumn(QQN::BalancoAcoes()->OrdemProducaoGrade);
			$this->dtgBalancoAcoeses->MetaAddColumn(QQN::BalancoAcoes()->FluxogramaItemReal);
			$this->dtgBalancoAcoeses->MetaAddColumn('QuantidadeDisponivel');
			$this->dtgBalancoAcoeses->MetaAddColumn('QuantidadeRemetida');
			$this->dtgBalancoAcoeses->MetaAddColumn('QuantidadeProduzida');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// balanco_acoes_list.tpl.php as the included HTML template file
	BalancoAcoesListForm::Run('BalancoAcoesListForm');
?>