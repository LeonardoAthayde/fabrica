<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the CostureiraTempoEficiente class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of CostureiraTempoEficiente objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this CostureiraTempoEficienteListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class CostureiraTempoEficienteListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list CostureiraTempoEficientes
		public $dtgCostureiraTempoEficientes;

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
			$this->Template = 'CostureiraTempoEficienteListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgCostureiraTempoEficientes = new CostureiraTempoEficienteDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCostureiraTempoEficientes->CssClass = 'datagrid';
			$this->dtgCostureiraTempoEficientes->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCostureiraTempoEficientes->Paginator = new QPaginator($this->dtgCostureiraTempoEficientes);
			$this->dtgCostureiraTempoEficientes->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgCostureiraTempoEficientes->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for costureira_tempo_eficiente's properties, or you
			// can traverse down QQN::costureira_tempo_eficiente() to display fields that are down the hierarchy)
			$this->dtgCostureiraTempoEficientes->MetaAddColumn('Id');
			$this->dtgCostureiraTempoEficientes->MetaAddColumn(QQN::CostureiraTempoEficiente()->CostureiraProducao);
			$this->dtgCostureiraTempoEficientes->MetaAddColumn('Date');
			$this->dtgCostureiraTempoEficientes->MetaAddColumn('Tempo');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('CostureiraTempoEficiente');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new CostureiraTempoEficienteEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new CostureiraTempoEficienteEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>