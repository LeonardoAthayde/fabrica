<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the ComandoRisco class.  It uses the code-generated
	 * ComandoRiscoMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a ComandoRisco columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both comando_risco_edit.php AND
	 * comando_risco_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ComandoRiscoEditPanel extends QPanel {
		// Local instance of the ComandoRiscoMetaControl
		protected $mctComandoRisco;

		// Controls for ComandoRisco's Data Fields
		public $lblId;
		public $lstComando;
		public $txtReferencia;
		public $lstTamanho;
		public $txtQuantidadeRisco;
		public $chkMeiaRisco;

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
			$this->strTemplate = 'ComandoRiscoEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ComandoRiscoMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctComandoRisco = ComandoRiscoMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on ComandoRisco's data fields
			$this->lblId = $this->mctComandoRisco->lblId_Create();
			$this->lstComando = $this->mctComandoRisco->lstComando_Create();
			$this->txtReferencia = $this->mctComandoRisco->txtReferencia_Create();
			$this->lstTamanho = $this->mctComandoRisco->lstTamanho_Create();
			$this->txtQuantidadeRisco = $this->mctComandoRisco->txtQuantidadeRisco_Create();
			$this->chkMeiaRisco = $this->mctComandoRisco->chkMeiaRisco_Create();
			$this->lstBalancoPecasAsOrdemProducaoGrade = $this->mctComandoRisco->lstBalancoPecasAsOrdemProducaoGrade_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('ComandoRisco') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctComandoRisco->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ComandoRiscoMetaControl
			$this->mctComandoRisco->SaveComandoRisco();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ComandoRiscoMetaControl
			$this->mctComandoRisco->DeleteComandoRisco();
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