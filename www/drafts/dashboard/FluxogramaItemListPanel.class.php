<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the FluxogramaItem class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of FluxogramaItem objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this FluxogramaItemListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class FluxogramaItemListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list FluxogramaItems
		public $dtgFluxogramaItems;

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
			$this->Template = 'FluxogramaItemListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgFluxogramaItems = new FluxogramaItemDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFluxogramaItems->CssClass = 'datagrid';
			$this->dtgFluxogramaItems->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFluxogramaItems->Paginator = new QPaginator($this->dtgFluxogramaItems);
			$this->dtgFluxogramaItems->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgFluxogramaItems->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for fluxograma_item's properties, or you
			// can traverse down QQN::fluxograma_item() to display fields that are down the hierarchy)
			$this->dtgFluxogramaItems->MetaAddColumn('Id');
			$this->dtgFluxogramaItems->MetaAddColumn(QQN::FluxogramaItem()->Referencia);
			$this->dtgFluxogramaItems->MetaAddColumn(QQN::FluxogramaItem()->Cor);
			$this->dtgFluxogramaItems->MetaAddColumn(QQN::FluxogramaItem()->FluxogramaAcoes);
			$this->dtgFluxogramaItems->MetaAddColumn(QQN::FluxogramaItem()->FluxogramaAcoesTempo);
			$this->dtgFluxogramaItems->MetaAddColumn('Profundidade');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('FluxogramaItem');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new FluxogramaItemEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new FluxogramaItemEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>