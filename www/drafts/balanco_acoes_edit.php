<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the BalancoAcoes class.  It uses the code-generated
	 * BalancoAcoesMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a BalancoAcoes columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both balanco_acoes_edit.php AND
	 * balanco_acoes_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class BalancoAcoesEditForm extends QForm {
	
		protected $objUsuario;
	
		// Local instance of the BalancoAcoesMetaControl
		protected $mctBalancoAcoes;

		// Controls for BalancoAcoes's Data Fields
		protected $lblId;
		protected $lstOrdemProducaoGrade;
		protected $lstFluxogramaItemReal;
		protected $txtQuantidadeDisponivel;
		protected $txtQuantidadeRemetida;
		protected $txtQuantidadeProduzida;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		protected $btnSave;
		protected $btnDelete;
		protected $btnCancel;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
			if(!$this->CheckPermissions())
				QApplication::Redirect (__VIRTUAL_DIRECTORY__.'/login.php');
		}
		
		protected function CheckPermissions(){
			if(isset($_SESSION['login_id'])){
				$this->objUsuario = Usuario::Load($_SESSION['login_id']);
				if(!$this->objUsuario)
					return false;
				else 
					return true;
			} else 
				return false;
			
			
		}		

		protected function Form_Create() {
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the BalancoAcoesMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctBalancoAcoes = BalancoAcoesMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on BalancoAcoes's data fields
			$this->lblId = $this->mctBalancoAcoes->lblId_Create();
			$this->lstOrdemProducaoGrade = $this->mctBalancoAcoes->lstOrdemProducaoGrade_Create();
			$this->lstFluxogramaItemReal = $this->mctBalancoAcoes->lstFluxogramaItemReal_Create();
			$this->txtQuantidadeDisponivel = $this->mctBalancoAcoes->txtQuantidadeDisponivel_Create();
			$this->txtQuantidadeRemetida = $this->mctBalancoAcoes->txtQuantidadeRemetida_Create();
			$this->txtQuantidadeProduzida = $this->mctBalancoAcoes->txtQuantidadeProduzida_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('BalancoAcoes') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctBalancoAcoes->EditMode;
		}

		/**
		 * This Form_Validate event handler allows you to specify any custom Form Validation rules.
		 * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
		 */
		protected function Form_Validate() {
			// By default, we report that Custom Validations passed
			$blnToReturn = true;

			// Custom validation rules goes here 
			// Be sure to set $blnToReturn to false if any custom validation fails!

			$blnFocused = false;
			foreach ($this->GetErrorControls() as $objControl) {
				// Set Focus to the top-most invalid control
				if (!$blnFocused) {
					$objControl->Focus();
					$blnFocused = true;
				}

				// Blink on ALL invalid controls
				$objControl->Blink();
			}

			return $blnToReturn;
		}

		// Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the BalancoAcoesMetaControl
			$this->mctBalancoAcoes->SaveBalancoAcoes();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the BalancoAcoesMetaControl
			$this->mctBalancoAcoes->DeleteBalancoAcoes();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods
		
		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/balanco_acoes_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// balanco_acoes_edit.tpl.php as the included HTML template file
	BalancoAcoesEditForm::Run('BalancoAcoesEditForm');
?>