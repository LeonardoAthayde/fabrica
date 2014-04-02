<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the OrdemProducaoGrade class.  It uses the code-generated
	 * OrdemProducaoGradeMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a OrdemProducaoGrade columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both ordem_producao_grade_edit.php AND
	 * ordem_producao_grade_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class OrdemProducaoGradeEditPanel extends QPanel {
		// Local instance of the OrdemProducaoGradeMetaControl
		protected $mctOrdemProducaoGrade;

		// Controls for OrdemProducaoGrade's Data Fields
		public $lblId;
		public $lstCor;
		public $lstTamanho;
		public $txtQuantidade;
		public $lblDate;
		public $lstOrdemProducao;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstBalancoPecas;

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'OrdemProducaoGradeEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the OrdemProducaoGradeMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctOrdemProducaoGrade = OrdemProducaoGradeMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on OrdemProducaoGrade's data fields
			$this->lblId = $this->mctOrdemProducaoGrade->lblId_Create();
			$this->lstCor = $this->mctOrdemProducaoGrade->lstCor_Create();
			$this->lstTamanho = $this->mctOrdemProducaoGrade->lstTamanho_Create();
			$this->txtQuantidade = $this->mctOrdemProducaoGrade->txtQuantidade_Create();
			$this->lblDate = $this->mctOrdemProducaoGrade->lblDate_Create();
			$this->lstOrdemProducao = $this->mctOrdemProducaoGrade->lstOrdemProducao_Create();
			$this->lstBalancoPecas = $this->mctOrdemProducaoGrade->lstBalancoPecas_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('OrdemProducaoGrade') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctOrdemProducaoGrade->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the OrdemProducaoGradeMetaControl
			$this->mctOrdemProducaoGrade->SaveOrdemProducaoGrade();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the OrdemProducaoGradeMetaControl
			$this->mctOrdemProducaoGrade->DeleteOrdemProducaoGrade();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>