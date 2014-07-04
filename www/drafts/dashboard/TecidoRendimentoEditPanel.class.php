<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the TecidoRendimento class.  It uses the code-generated
	 * TecidoRendimentoMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a TecidoRendimento columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both tecido_rendimento_edit.php AND
	 * tecido_rendimento_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class TecidoRendimentoEditPanel extends QPanel {
		// Local instance of the TecidoRendimentoMetaControl
		protected $mctTecidoRendimento;

		// Controls for TecidoRendimento's Data Fields
		public $lblId;
		public $txtTecidoId;
		public $txtComprimento;
		public $txtLargura;
		public $txtPeso;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

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
			$this->strTemplate = 'TecidoRendimentoEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the TecidoRendimentoMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctTecidoRendimento = TecidoRendimentoMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on TecidoRendimento's data fields
			$this->lblId = $this->mctTecidoRendimento->lblId_Create();
			$this->txtTecidoId = $this->mctTecidoRendimento->txtTecidoId_Create();
			$this->txtComprimento = $this->mctTecidoRendimento->txtComprimento_Create();
			$this->txtLargura = $this->mctTecidoRendimento->txtLargura_Create();
			$this->txtPeso = $this->mctTecidoRendimento->txtPeso_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('TecidoRendimento') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctTecidoRendimento->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the TecidoRendimentoMetaControl
			$this->mctTecidoRendimento->SaveTecidoRendimento();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the TecidoRendimentoMetaControl
			$this->mctTecidoRendimento->DeleteTecidoRendimento();
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