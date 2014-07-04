<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the ComandoGrade class.  It uses the code-generated
	 * ComandoGradeMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a ComandoGrade columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both comando_grade_edit.php AND
	 * comando_grade_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ComandoGradeEditPanel extends QPanel {
		// Local instance of the ComandoGradeMetaControl
		protected $mctComandoGrade;

		// Controls for ComandoGrade's Data Fields
		public $lblId;
		public $lstReferencia;
		public $lstTamanho;
		public $lstComandoTecidoPeca;
		public $txtQuantidadeRisco;
		public $chkMeiaRisco;
		public $txtQuantidadeReal;
		public $txtPeso;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstBalancoPecasAsOrdemProducaoGrade;

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
			$this->strTemplate = 'ComandoGradeEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ComandoGradeMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctComandoGrade = ComandoGradeMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on ComandoGrade's data fields
			$this->lblId = $this->mctComandoGrade->lblId_Create();
			$this->lstReferencia = $this->mctComandoGrade->lstReferencia_Create();
			$this->lstTamanho = $this->mctComandoGrade->lstTamanho_Create();
			$this->lstComandoTecidoPeca = $this->mctComandoGrade->lstComandoTecidoPeca_Create();
			$this->txtQuantidadeRisco = $this->mctComandoGrade->txtQuantidadeRisco_Create();
			$this->chkMeiaRisco = $this->mctComandoGrade->chkMeiaRisco_Create();
			$this->txtQuantidadeReal = $this->mctComandoGrade->txtQuantidadeReal_Create();
			$this->txtPeso = $this->mctComandoGrade->txtPeso_Create();
			$this->lstBalancoPecasAsOrdemProducaoGrade = $this->mctComandoGrade->lstBalancoPecasAsOrdemProducaoGrade_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('ComandoGrade') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctComandoGrade->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ComandoGradeMetaControl
			$this->mctComandoGrade->SaveComandoGrade();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ComandoGradeMetaControl
			$this->mctComandoGrade->DeleteComandoGrade();
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