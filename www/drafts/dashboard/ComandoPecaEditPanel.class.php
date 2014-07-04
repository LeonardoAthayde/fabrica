<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the ComandoPeca class.  It uses the code-generated
	 * ComandoPecaMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a ComandoPeca columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both comando_peca_edit.php AND
	 * comando_peca_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ComandoPecaEditPanel extends QPanel {
		// Local instance of the ComandoPecaMetaControl
		protected $mctComandoPeca;

		// Controls for ComandoPeca's Data Fields
		public $lblId;
		public $txtPeso;
		public $txtQuantidadePanos;
		public $lstComando;
		public $lstTecido;
		public $lstCor;

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
			$this->strTemplate = 'ComandoPecaEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ComandoPecaMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctComandoPeca = ComandoPecaMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on ComandoPeca's data fields
			$this->lblId = $this->mctComandoPeca->lblId_Create();
			$this->txtPeso = $this->mctComandoPeca->txtPeso_Create();
			$this->txtQuantidadePanos = $this->mctComandoPeca->txtQuantidadePanos_Create();
			$this->lstComando = $this->mctComandoPeca->lstComando_Create();
			$this->lstTecido = $this->mctComandoPeca->lstTecido_Create();
			$this->lstCor = $this->mctComandoPeca->lstCor_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('ComandoPeca') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctComandoPeca->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ComandoPecaMetaControl
			$this->mctComandoPeca->SaveComandoPeca();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ComandoPecaMetaControl
			$this->mctComandoPeca->DeleteComandoPeca();
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