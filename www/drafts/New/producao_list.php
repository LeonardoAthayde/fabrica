<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Producao class.  It uses the code-generated
	 * ProducaoDataGrid control which has meta-methods to help with
	 * easily creating/defining Producao columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both producao_list.php AND
	 * producao_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ProducaoListForm extends QForm {
		// Local instance of the Meta DataGrid to list Producaos
		protected $dtgProducaos;

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
			$this->dtgProducaos = new ProducaoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgProducaos->CssClass = 'datagrid';
			$this->dtgProducaos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgProducaos->Paginator = new QPaginator($this->dtgProducaos);
			$this->dtgProducaos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/producao_edit.php';
			$this->dtgProducaos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for producao's properties, or you
			// can traverse down QQN::producao() to display fields that are down the hierarchy)
			$this->dtgProducaos->MetaAddColumn('Id');
			$this->dtgProducaos->MetaAddColumn(QQN::Producao()->Costureira);
			$this->dtgProducaos->MetaAddColumn(QQN::Producao()->OrdemProducaoGrade);
			$this->dtgProducaos->MetaAddColumn('Quantidade');
			$this->dtgProducaos->MetaAddColumn('TempoPrevisto');
			$this->dtgProducaos->MetaAddColumn('TempoExecutado');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// producao_list.tpl.php as the included HTML template file
	ProducaoListForm::Run('ProducaoListForm');
?>