<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the BalancoItem class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of BalancoItem objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this BalancoItemListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class BalancoItemListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list BalancoItems
		public $dtgBalancoItems;

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
			$this->Template = 'BalancoItemListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgBalancoItems = new BalancoItemDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgBalancoItems->CssClass = 'datagrid';
			$this->dtgBalancoItems->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgBalancoItems->Paginator = new QPaginator($this->dtgBalancoItems);
			$this->dtgBalancoItems->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgBalancoItems->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for balanco_item's properties, or you
			// can traverse down QQN::balanco_item() to display fields that are down the hierarchy)
			$this->dtgBalancoItems->MetaAddColumn('Id');
			$this->dtgBalancoItems->MetaAddColumn('Quantidade');
			$this->dtgBalancoItems->MetaAddColumn('Balanco');
			$this->dtgBalancoItems->MetaAddColumn(QQN::BalancoItem()->OrdemProducaoGrade);
			$this->dtgBalancoItems->MetaAddColumn(QQN::BalancoItem()->FluxogramaItem);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('BalancoItem');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new BalancoItemEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new BalancoItemEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>