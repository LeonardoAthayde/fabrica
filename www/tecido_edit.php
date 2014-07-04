<?php
	require(dirname(__FILE__) . '/../includes/prepend.inc.php');

	class TecidoEditForm extends QForm {
	
		protected $objUsuario;
	
		// Local instance of the TecidoMetaControl
		protected $mctTecido;

		// Controls for Tecido's Data Fields
		protected $lblId;
		protected $txtNome;
		protected $txtCodigo;
		protected $txtMetro;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		protected $btnSave;
		protected $btnDelete;
		protected $btnCancel;


		protected function Form_Create() {
			$this->DefaultWaitIcon_Create();
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the TecidoMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctTecido = TecidoMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on Tecido's data fields
			$this->lblId = $this->mctTecido->lblId_Create();
			$this->txtNome = $this->mctTecido->txtNome_Create();
			$this->txtNome->CssClass = 'form-control input-lg';
			$this->txtCodigo = $this->mctTecido->txtCodigo_Create();
			$this->txtCodigo->CssClass = 'form-control input-lg';
			$this->txtMetro = $this->mctTecido->txtMetro_Create();
			$this->txtMetro->CssClass = 'form-control input-lg';

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;
			$this->btnSave->CssClass = 'btn btn-default btn-lg width100';
			
			
			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));
			$this->btnCancel->CssClass = 'btn btn-default btn-lg width100';

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Tecido') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctTecido->EditMode;
			$this->btnDelete->CssClass = 'btn btn-default btn-lg width100';
		}
		
		
		protected function DefaultWaitIcon_Create(){
			$this->objDefaultWaitIcon = new QWaitIcon($this);
			$this->objDefaultWaitIcon->Text = '
				<div class="progress progress-striped active">
					<div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						<span class="sr-only">100% Complete</span>
					</div>
				</div>';			
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
			$blnMetro = false;
			if($this->mctTecido->Tecido->Metro != $this->txtMetro->Text && $this->mctTecido->EditMode)
				$blnMetro = true;
			// Delegate "Save" processing to the TecidoMetaControl
			$this->mctTecido->SaveTecido();
			
			if($blnMetro){
				$objTecido = $this->mctTecido->Tecido;
				foreach ($objTecido->GetReferenciaRendimentoArray() as $objReferenciaRendimento){
					$objReferenciaRendimento->Peso = (($objReferenciaRendimento->Comprimento/$objReferenciaRendimento->Tecido->Metro)/$objReferenciaRendimento->Pecas);
					$objReferenciaRendimento->Save();
				}
			}
			
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the TecidoMetaControl
			$this->mctTecido->DeleteTecido();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods
		
		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . '/tecido_list.php');
		}
	

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
	
	}
	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// tecido_edit.tpl.php as the included HTML template file
	TecidoEditForm::Run('TecidoEditForm', 'tpl/tecido_edit.tpl.php');
?>