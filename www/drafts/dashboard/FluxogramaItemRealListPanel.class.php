<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the FluxogramaItemReal class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of FluxogramaItemReal objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this FluxogramaItemRealListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class FluxogramaItemRealListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list FluxogramaItemReals
		public $dtgFluxogramaItemReals;

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
			$this->Template = 'FluxogramaItemRealListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgFluxogramaItemReals = new FluxogramaItemRealDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFluxogramaItemReals->CssClass = 'datagrid';
			$this->dtgFluxogramaItemReals->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFluxogramaItemReals->Paginator = new QPaginator($this->dtgFluxogramaItemReals);
			$this->dtgFluxogramaItemReals->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgFluxogramaItemReals->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for fluxograma_item_real's properties, or you
			// can traverse down QQN::fluxograma_item_real() to display fields that are down the hierarchy)
			$this->dtgFluxogramaItemReals->MetaAddColumn('Id');
			$this->dtgFluxogramaItemReals->MetaAddColumn('Referencia');
			$this->dtgFluxogramaItemReals->MetaAddColumn('Acao');
			$this->dtgFluxogramaItemReals->MetaAddColumn('Maquina');
			$this->dtgFluxogramaItemReals->MetaAddColumn('Tempo');
			$this->dtgFluxogramaItemReals->MetaAddColumn('Profundidade');
			$this->dtgFluxogramaItemReals->MetaAddColumn('FluxogramaItemModeloId');
			$this->dtgFluxogramaItemReals->MetaAddColumn(QQN::FluxogramaItemReal()->BalancoAcoes);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('FluxogramaItemReal');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new FluxogramaItemRealEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new FluxogramaItemRealEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>