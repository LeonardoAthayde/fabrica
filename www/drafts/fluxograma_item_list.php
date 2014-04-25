<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the FluxogramaItem class.  It uses the code-generated
	 * FluxogramaItemDataGrid control which has meta-methods to help with
	 * easily creating/defining FluxogramaItem columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fluxograma_item_list.php AND
	 * fluxograma_item_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FluxogramaItemListForm extends QForm {
	
		protected $objUsuario;
	
		// Local instance of the Meta DataGrid to list FluxogramaItems
		protected $dtgFluxogramaItems;

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
			$this->dtgFluxogramaItems = new FluxogramaItemDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFluxogramaItems->CssClass = 'table table-bordered table-striped table-hover table-condensed';
			$this->dtgFluxogramaItems->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFluxogramaItems->Paginator = new QPaginator($this->dtgFluxogramaItems);
			$this->dtgFluxogramaItems->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fluxograma_item_edit.php';
			$this->dtgFluxogramaItems->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for fluxograma_item's properties, or you
			// can traverse down QQN::fluxograma_item() to display fields that are down the hierarchy)
			$this->dtgFluxogramaItems->MetaAddColumn('Id');
			$this->dtgFluxogramaItems->MetaAddColumn(QQN::FluxogramaItem()->Referencia);
			$this->dtgFluxogramaItems->MetaAddColumn(QQN::FluxogramaItem()->FluxogramaAcoes);
			$this->dtgFluxogramaItems->MetaAddColumn(QQN::FluxogramaItem()->Maquina);
			$this->dtgFluxogramaItems->MetaAddColumn('Tempo');
			$this->dtgFluxogramaItems->MetaAddColumn('Profundidade');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// fluxograma_item_list.tpl.php as the included HTML template file
	FluxogramaItemListForm::Run('FluxogramaItemListForm');
?>