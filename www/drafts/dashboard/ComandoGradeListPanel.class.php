<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the ComandoGrade class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of ComandoGrade objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ComandoGradeListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class ComandoGradeListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list ComandoGrades
		public $dtgComandoGrades;

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
			$this->Template = 'ComandoGradeListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgComandoGrades = new ComandoGradeDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgComandoGrades->CssClass = 'datagrid';
			$this->dtgComandoGrades->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgComandoGrades->Paginator = new QPaginator($this->dtgComandoGrades);
			$this->dtgComandoGrades->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgComandoGrades->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for comando_grade's properties, or you
			// can traverse down QQN::comando_grade() to display fields that are down the hierarchy)
			$this->dtgComandoGrades->MetaAddColumn('Id');
			$this->dtgComandoGrades->MetaAddColumn(QQN::ComandoGrade()->Referencia);
			$this->dtgComandoGrades->MetaAddColumn(QQN::ComandoGrade()->Tamanho);
			$this->dtgComandoGrades->MetaAddColumn(QQN::ComandoGrade()->ComandoTecidoPeca);
			$this->dtgComandoGrades->MetaAddColumn('QuantidadeRisco');
			$this->dtgComandoGrades->MetaAddColumn('MeiaRisco');
			$this->dtgComandoGrades->MetaAddColumn('QuantidadeReal');
			$this->dtgComandoGrades->MetaAddColumn('Peso');
			$this->dtgComandoGrades->MetaAddColumn(QQN::ComandoGrade()->BalancoPecasAsOrdemProducaoGrade);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('ComandoGrade');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ComandoGradeEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ComandoGradeEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>