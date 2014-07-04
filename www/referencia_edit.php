<?php
	require(dirname(__FILE__) . '/../includes/prepend.inc.php');


	class ReferenciaEditForm extends QForm {
	
		protected $objUsuario;
		public $objArrayReferenciaRendimento = array();
		public $objArrayReferenciaRendimentoDelete = array();
	
		// Local instance of the ReferenciaMetaControl
		protected $mctReferencia;

		// Controls for Referencia's Data Fields
		protected $lblId;
		protected $txtNome;
		protected $lstReferenciaCategoria;
		protected $txtModelo;
		protected $lstTecido;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		protected $lstReferenciaRendimento;
		protected $lstCors;
		protected $lstTamanhos;
		
		protected $btnAddReferenciaRendimento;
		protected $dtrReferenciaRendimento;

		// Other Controls
		protected $btnSave;
		protected $btnDelete;
		protected $btnCancel;
		

		protected function Form_Create() {
			$this->DefaultWaitIcon_Create();
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the ReferenciaMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctReferencia = ReferenciaMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on Referencia's data fields
			$this->lblId = $this->mctReferencia->lblId_Create();
			$this->txtNome = $this->mctReferencia->txtNome_Create();
			$this->lstReferenciaCategoria = $this->mctReferencia->lstReferenciaCategoria_Create();
			$this->lstReferenciaCategoria->CssClass = 'form-control input-lg';
			$this->txtModelo = $this->mctReferencia->txtModelo_Create();
			$this->txtModelo->CssClass = 'form-control input-lg';
			$this->lstTecido = $this->mctReferencia->lstTecido_Create();
			$this->lstTecido->CssClass = 'form-control input-lg';
			//$this->lstReferenciaRendimento = $this->mctReferencia->lstReferenciaRendimento_Create();
			$this->lstCors = $this->mctReferencia->lstCors_Create();
			$this->lstCors->CssClass = 'form-control';
			$this->lstCors->FontSize = 18;
			$this->lstTamanhos = $this->mctReferencia->lstTamanhos_Create();
			$this->lstTamanhos->CssClass = 'form-control';
			$this->lstTamanhos->FontSize = 18;
			
			$this->btnAddReferenciaRendimento_Create();
			$this->dtrReferenciaRendimento_Create();
			
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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Referencia') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctReferencia->EditMode;
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
		
		protected function btnAddReferenciaRendimento_Create(){
			$this->btnAddReferenciaRendimento = new QButton($this);
			$this->btnAddReferenciaRendimento->CssClass = 'btn btn-default btn-lg width100';
			$this->btnAddReferenciaRendimento->Text = 'NOVO REFERENCIA RENDIMENTO';
			$this->btnAddReferenciaRendimento->AddAction(new QClickEvent(), new QAjaxAction('btnAddReferenciaRendimento_Click'));
		}
		
		protected function btnAddReferenciaRendimento_Click($strFormId, $strControlId, $strParameter){
			foreach ($this->objArrayReferenciaRendimento as $i => $objReferenciaRendimento)
				$this->objArrayReferenciaRendimento[$i+1] = $objReferenciaRendimento;
			$this->objArrayReferenciaRendimento[0] = new ReferenciaRendimento();
			
			foreach ($this->dtrReferenciaRendimento->GetChildControls() as $objControl)
				$objControl->UpdateObjectFromControl();
			$this->dtrReferenciaRendimento->RemoveChildControls(true);
			$this->dtrReferenciaRendimento->Refresh();
		}
		
		
		protected function dtrReferenciaRendimento_Create(){
			$this->dtrReferenciaRendimento = new QDataRepeater($this);			
			$this->dtrReferenciaRendimento->SetDataBinder('dtrReferenciaRendimento_Bind');
			$this->dtrReferenciaRendimento->Template = __DOCROOT__.'/control/referencia_edit/tpl/dtr_ReferenciaRendimento.tpl.php';
			
			if($this->mctReferencia->EditMode)
				foreach ($this->mctReferencia->Referencia->GetReferenciaRendimentoArray() as $objReferenciaRendimento)
					array_push ($this->objArrayReferenciaRendimento, $objReferenciaRendimento);
		}
		
		protected function dtrReferenciaRendimento_Bind(){
			$this->dtrReferenciaRendimento->DataSource = $this->objArrayReferenciaRendimento;
		}
		
		protected function RenderReferenciaRendimentoPanel(ReferenciaRendimento $objReferenciaRendimento){
			$pnlReferenciaRendimento = new QReferenciaRendimentoPanel($this->dtrReferenciaRendimento, null, $objReferenciaRendimento);
			return $pnlReferenciaRendimento->Render(false);
		}
		
		public function RemoveReferenciaRendimento($objReferenciaRendimento){
			foreach ($this->objArrayReferenciaRendimento as $i => $objReferenciaRendimentoItem)
				if($objReferenciaRendimento->Id == $objReferenciaRendimentoItem->Id)
					unset($this->objArrayReferenciaRendimento[$i]);
			$this->dtrReferenciaRendimento->Refresh();	
			array_push($this->objArrayReferenciaRendimentoDelete, $objReferenciaRendimento);
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
			// Delegate "Save" processing to the ReferenciaMetaControl
			$this->mctReferencia->SaveReferencia();
			
			foreach($this->dtrReferenciaRendimento->GetChildControls() as $objChildControl)
				$objChildControl->SaveReferenciaRendimento($this->mctReferencia->Referencia);
			foreach ($this->objArrayReferenciaRendimentoDelete as$objReferenciaRendimentoDelete)
				if($objReferenciaRendimentoDelete->Id)
					$objReferenciaRendimentoDelete->Delete();
			
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ReferenciaMetaControl
			$this->mctReferencia->DeleteReferencia();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods
		
		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ .  '/referencia_list.php');
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
	// referencia_edit.tpl.php as the included HTML template file
	ReferenciaEditForm::Run('ReferenciaEditForm', 'tpl/referencia_edit.tpl.php');
?>