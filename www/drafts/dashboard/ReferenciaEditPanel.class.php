<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Referencia class.  It uses the code-generated
	 * ReferenciaMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Referencia columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both referencia_edit.php AND
	 * referencia_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ReferenciaEditPanel extends QPanel {
		// Local instance of the ReferenciaMetaControl
		protected $mctReferencia;

		// Controls for Referencia's Data Fields
		public $lblId;
		public $txtNome;
		public $lstReferenciaCategoria;
		public $txtModelo;
		public $lstTecido;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstCors;
		public $lstReferenciaRendimentosAsUniao;
		public $lstTamanhos;

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
			$this->strTemplate = 'ReferenciaEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ReferenciaMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctReferencia = ReferenciaMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on Referencia's data fields
			$this->lblId = $this->mctReferencia->lblId_Create();
			$this->txtNome = $this->mctReferencia->txtNome_Create();
			$this->lstReferenciaCategoria = $this->mctReferencia->lstReferenciaCategoria_Create();
			$this->txtModelo = $this->mctReferencia->txtModelo_Create();
			$this->lstTecido = $this->mctReferencia->lstTecido_Create();
			$this->lstCors = $this->mctReferencia->lstCors_Create();
			$this->lstReferenciaRendimentosAsUniao = $this->mctReferencia->lstReferenciaRendimentosAsUniao_Create();
			$this->lstTamanhos = $this->mctReferencia->lstTamanhos_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Referencia') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctReferencia->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ReferenciaMetaControl
			$this->mctReferencia->SaveReferencia();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ReferenciaMetaControl
			$this->mctReferencia->DeleteReferencia();
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