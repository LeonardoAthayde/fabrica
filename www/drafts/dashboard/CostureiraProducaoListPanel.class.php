<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the CostureiraProducao class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of CostureiraProducao objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this CostureiraProducaoListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class CostureiraProducaoListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list CostureiraProducaos
		public $dtgCostureiraProducaos;

		// Other public QControls in this panel
		public $btnCreateNew;
		public $pxyEdit;

		// Callback Method Names
		protected $strSetEditPanelMethod;
		protected $strCloseEditPanelMethod;
		
		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = 'CostureiraProducaoListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgCostureiraProducaos = new CostureiraProducaoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCostureiraProducaos->CssClass = 'datagrid';
			$this->dtgCostureiraProducaos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCostureiraProducaos->Paginator = new QPaginator($this->dtgCostureiraProducaos);
			$this->dtgCostureiraProducaos->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgCostureiraProducaos->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for costureira_producao's properties, or you
			// can traverse down QQN::costureira_producao() to display fields that are down the hierarchy)
			$this->dtgCostureiraProducaos->MetaAddColumn('Id');
			$this->dtgCostureiraProducaos->MetaAddColumn(QQN::CostureiraProducao()->Costureira);
			$this->dtgCostureiraProducaos->MetaAddColumn(QQN::CostureiraProducao()->BalancoAcoes);
			$this->dtgCostureiraProducaos->MetaAddColumn('QuantidadePlanejada');
			$this->dtgCostureiraProducaos->MetaAddColumn('QuantidadeRealizada');
			$this->dtgCostureiraProducaos->MetaAddColumn('QuantidadeEstocado');
			$this->dtgCostureiraProducaos->MetaAddColumn('TempoPrevisto');
			$this->dtgCostureiraProducaos->MetaAddColumn('Concluido');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('CostureiraProducao');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new CostureiraProducaoEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new CostureiraProducaoEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>