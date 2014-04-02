<?php

	require(dirname(__FILE__) . '/../includes/prepend.inc.php');
	
	class BaseForm extends QForm {
		
		protected $objUsuario;
		
		protected function Form_Create() {
			parent::Form_Create();
		}
		
		protected function Form_Run() {
			parent::Form_Run();
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

?>