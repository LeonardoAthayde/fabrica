<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the FluxogramaItemReal class.  It uses the code-generated
	 * FluxogramaItemRealMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a FluxogramaItemReal columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fluxograma_item_real_edit.php AND
	 * fluxograma_item_real_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FluxogramaItemRealEditPanel extends QPanel {
		// Local instance of the FluxogramaItemRealMetaControl
		protected $mctFluxogramaItemReal;

		// Controls for FluxogramaItemReal's Data Fields
		public $lblId;
		public $txtReferencia;
		public $txtAcao;
		public $txtMaquina;
		public $txtTempo;
		public $txtProfundidade;
		public $txtFluxogramaItemModeloId;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstBalancoAcoes;
		public $lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal;
		public $lstFluxogramaItemRealsAsFluxogramaDepedenciaReal;

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
			$this->strTemplate = 'FluxogramaItemRealEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the FluxogramaItemRealMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctFluxogramaItemReal = FluxogramaItemRealMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on FluxogramaItemReal's data fields
			$this->lblId = $this->mctFluxogramaItemReal->lblId_Create();
			$this->txtReferencia = $this->mctFluxogramaItemReal->txtReferencia_Create();
			$this->txtAcao = $this->mctFluxogramaItemReal->txtAcao_Create();
			$this->txtMaquina = $this->mctFluxogramaItemReal->txtMaquina_Create();
			$this->txtTempo = $this->mctFluxogramaItemReal->txtTempo_Create();
			$this->txtProfundidade = $this->mctFluxogramaItemReal->txtProfundidade_Create();
			$this->txtFluxogramaItemModeloId = $this->mctFluxogramaItemReal->txtFluxogramaItemModeloId_Create();
			$this->lstBalancoAcoes = $this->mctFluxogramaItemReal->lstBalancoAcoes_Create();
			$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal = $this->mctFluxogramaItemReal->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create();
			$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal = $this->mctFluxogramaItemReal->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('FluxogramaItemReal') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctFluxogramaItemReal->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the FluxogramaItemRealMetaControl
			$this->mctFluxogramaItemReal->SaveFluxogramaItemReal();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the FluxogramaItemRealMetaControl
			$this->mctFluxogramaItemReal->DeleteFluxogramaItemReal();
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