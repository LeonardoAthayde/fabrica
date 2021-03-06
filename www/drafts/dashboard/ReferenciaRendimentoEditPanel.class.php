<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the ReferenciaRendimento class.  It uses the code-generated
	 * ReferenciaRendimentoMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a ReferenciaRendimento columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both referencia_rendimento_edit.php AND
	 * referencia_rendimento_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ReferenciaRendimentoEditPanel extends QPanel {
		// Local instance of the ReferenciaRendimentoMetaControl
		protected $mctReferenciaRendimento;

		// Controls for ReferenciaRendimento's Data Fields
		public $lblId;
		public $lstMolde;
		public $txtComprimento;
		public $txtPecas;
		public $txtPeso;
		public $txtPreco;
		public $lstTecido;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstReferenciasAsUniao;

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
			$this->strTemplate = 'ReferenciaRendimentoEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ReferenciaRendimentoMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctReferenciaRendimento = ReferenciaRendimentoMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on ReferenciaRendimento's data fields
			$this->lblId = $this->mctReferenciaRendimento->lblId_Create();
			$this->lstMolde = $this->mctReferenciaRendimento->lstMolde_Create();
			$this->txtComprimento = $this->mctReferenciaRendimento->txtComprimento_Create();
			$this->txtPecas = $this->mctReferenciaRendimento->txtPecas_Create();
			$this->txtPeso = $this->mctReferenciaRendimento->txtPeso_Create();
			$this->txtPreco = $this->mctReferenciaRendimento->txtPreco_Create();
			$this->lstTecido = $this->mctReferenciaRendimento->lstTecido_Create();
			$this->lstReferenciasAsUniao = $this->mctReferenciaRendimento->lstReferenciasAsUniao_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('ReferenciaRendimento') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctReferenciaRendimento->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ReferenciaRendimentoMetaControl
			$this->mctReferenciaRendimento->SaveReferenciaRendimento();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ReferenciaRendimentoMetaControl
			$this->mctReferenciaRendimento->DeleteReferenciaRendimento();
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