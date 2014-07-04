<?php

	require(dirname(__FILE__) . '/../includes/prepend.inc.php');
	
	class LoginForm extends QForm {
		
		protected $txtUser;
		protected $txtPassword;
		protected $btnConfirm;
				
		public function Form_Create() {
			parent::Form_Create();
			$_SESSION['admin_user_id'] = 0;
			$this->txtUser_Create();
			$this->txtPassword_Create();
			$this->btnConfirm_Create();
			$this->objDefaultWaitIcon = new QWaitIcon($this);
		}
		
		protected function txtUser_Create(){
			$this->txtUser = new QTextBox($this);
			$this->txtUser->Name = QApplication::Translate('User');
			$this->txtUser->SetCustomAttribute('placeholder', QApplication::Translate('User'));
			$this->txtUser->CssClass = 'input-block-level form-control input-lg';
			$this->txtUser->Required = true;
		}
		
		protected function txtPassword_Create(){
			$this->txtPassword = new QTextBox($this);
			$this->txtPassword->CssClass = 'input-block-level form-control input-lg';
			$this->txtPassword->SetCustomAttribute('placeholder', QApplication::Translate('Password'));
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->TextMode = QTextMode::Password;
		} 
		
		protected function btnConfirm_Create(){
			$this->btnConfirm = new QButton($this);
			$this->btnConfirm->Text = QApplication::Translate('Confirm');
			$this->btnConfirm->CausesValidation = true;
			$this->btnConfirm->CssClass = "btn btn-large btn-default btn-lg";
			$this->btnConfirm->AddAction(new QClickEvent(), new QAjaxAction('btnConfirm_Click'));
		}
		
		protected function btnConfirm_Click($strFormId, $strControlId, $strParameter){
			$objUser = Usuario::LoadByNomeSenha($this->txtUser->Text, $this->txtPassword->Text);
			if($objUser) {
				$_SESSION['login_id'] = $objUser->Id; 
				QApplication::Redirect(__VIRTUAL_DIRECTORY__.'/index.php');
			} else {
				QApplication::DisplayAlert('Login inválido');
				$this->txtUser->Text = '';
				$this->txtPassword->Text = '';
			}
		}
		
		
	}
	
	LoginForm::Run('LoginForm', 'tpl/login.tpl.php');
	
?>