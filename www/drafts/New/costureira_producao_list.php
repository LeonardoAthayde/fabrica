<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the CostureiraProducao class.  It uses the code-generated
	 * CostureiraProducaoDataGrid control which has meta-methods to help with
	 * easily creating/defining CostureiraProducao columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both costureira_producao_list.php AND
	 * costureira_producao_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class CostureiraProducaoListForm extends QForm {
		// Local instance of the Meta DataGrid to list CostureiraProducaos
		protected $dtgCostureiraProducaos;

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
			$this->dtgCostureiraProducaos = new CostureiraProducaoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCostureiraProducaos->CssClass = 'datagrid';
			$this->dtgCostureiraProducaos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCostureiraProducaos->Paginator = new QPaginator($this->dtgCostureiraProducaos);
			$this->dtgCostureiraProducaos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/costureira_producao_edit.php';
			$this->dtgCostureiraProducaos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for costureira_producao's properties, or you
			// can traverse down QQN::costureira_producao() to display fields that are down the hierarchy)
			$this->dtgCostureiraProducaos->MetaAddColumn('Id');
			$this->dtgCostureiraProducaos->MetaAddColumn(QQN::CostureiraProducao()->Costureira);
			$this->dtgCostureiraProducaos->MetaAddColumn(QQN::CostureiraProducao()->BalancoAcoes);
			$this->dtgCostureiraProducaos->MetaAddColumn('QuantidadePlanejada');
			$this->dtgCostureiraProducaos->MetaAddColumn('QuantidadeRealizada');
			$this->dtgCostureiraProducaos->MetaAddColumn('TempoPrevisto');
			$this->dtgCostureiraProducaos->MetaAddColumn('Concluido');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// costureira_producao_list.tpl.php as the included HTML template file
	CostureiraProducaoListForm::Run('CostureiraProducaoListForm');
?>