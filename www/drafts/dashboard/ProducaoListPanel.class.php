<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Producao class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Producao objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ProducaoListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class ProducaoListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Producaos
		public $dtgProducaos;

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
			$this->Template = 'ProducaoListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgProducaos = new ProducaoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgProducaos->CssClass = 'datagrid';
			$this->dtgProducaos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgProducaos->Paginator = new QPaginator($this->dtgProducaos);
			$this->dtgProducaos->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgProducaos->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for producao's properties, or you
			// can traverse down QQN::producao() to display fields that are down the hierarchy)
			$this->dtgProducaos->MetaAddColumn('Id');
			$this->dtgProducaos->MetaAddColumn(QQN::Producao()->Costureira);
			$this->dtgProducaos->MetaAddColumn(QQN::Producao()->OrdemProducaoGrade);
			$this->dtgProducaos->MetaAddColumn('Quantidade');
			$this->dtgProducaos->MetaAddColumn('TempoPrevisto');
			$this->dtgProducaos->MetaAddColumn('TempoExecutado');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Producao');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ProducaoEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ProducaoEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>