<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the OrdemProducaoGrade class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of OrdemProducaoGrade objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this OrdemProducaoGradeListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class OrdemProducaoGradeListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list OrdemProducaoGrades
		public $dtgOrdemProducaoGrades;

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
			$this->Template = 'OrdemProducaoGradeListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgOrdemProducaoGrades = new OrdemProducaoGradeDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgOrdemProducaoGrades->CssClass = 'datagrid';
			$this->dtgOrdemProducaoGrades->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgOrdemProducaoGrades->Paginator = new QPaginator($this->dtgOrdemProducaoGrades);
			$this->dtgOrdemProducaoGrades->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgOrdemProducaoGrades->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for ordem_producao_grade's properties, or you
			// can traverse down QQN::ordem_producao_grade() to display fields that are down the hierarchy)
			$this->dtgOrdemProducaoGrades->MetaAddColumn('Id');
			$this->dtgOrdemProducaoGrades->MetaAddColumn(QQN::OrdemProducaoGrade()->Cor);
			$this->dtgOrdemProducaoGrades->MetaAddColumn(QQN::OrdemProducaoGrade()->Tamanho);
			$this->dtgOrdemProducaoGrades->MetaAddColumn('Quantidade');
			$this->dtgOrdemProducaoGrades->MetaAddColumn('Date');
			$this->dtgOrdemProducaoGrades->MetaAddColumn(QQN::OrdemProducaoGrade()->OrdemProducao);
			$this->dtgOrdemProducaoGrades->MetaAddColumn(QQN::OrdemProducaoGrade()->BalancoPecas);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('OrdemProducaoGrade');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new OrdemProducaoGradeEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new OrdemProducaoGradeEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>