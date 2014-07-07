<?php

	require(dirname(__FILE__) . '/../includes/prepend.inc.php');


	class TecidoListForm extends QForm {
	
		protected $objUsuario;
	
		protected $txtPesquisar;
		protected $dtgTecidos;
		
		protected function Form_Create() {
			$this->DefaultWaitIcon_Create();
			$this->txtPesquisar_Create();
			
			// Instantiate the Meta DataGrid
			$this->dtgTecidos = new TecidoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTecidos->CssClass = 'table table-bordered table-striped table-hover table-condensed';
			$this->dtgTecidos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTecidos->Paginator = new QPaginator($this->dtgTecidos);
			$this->dtgTecidos->ItemsPerPage = 20;
			$this->dtgTecidos->Paginator->CssClass = 'pagination';
			
			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . '/tecido_edit.php';
			

			// Create the Other Columns (note that you can use strings for tecido's properties, or you
			// can traverse down QQN::tecido() to display fields that are down the hierarchy)
			//$this->dtgTecidos->MetaAddColumn('Id');
			$this->dtgTecidos->MetaAddColumn('Nome');
			$this->dtgTecidos->MetaAddColumn('Codigo');
			$this->dtgTecidos->MetaAddColumn('Metro');
			$this->dtgTecidos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');
			
			$this->dtgTecidos->SetDataBinder('dtgTecidos_Bind');
		}
		
		protected function dtgTecidos_Bind(){
			if(isset($_SESSION['tecido_list']))
				$this->dtgTecidos->MetaDataBinder(QQ::Like(QQN::Tecido()->Nome, '%'.$_SESSION['tecido_list'].'%'), null);
			else
				$this->dtgTecidos->MetaDataBinder(QQ::Like(QQN::Tecido()->Nome, '%%'), null);
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
		
		protected function txtPesquisar_Create(){
			$this->txtPesquisar = new QTextBox($this);
			$this->txtPesquisar->CssClass = 'form-control input-lg';
			$this->txtPesquisar->SetCustomAttribute('placeholder', 'PESQUISAR TECIDO');
			$this->txtPesquisar->AddAction(new QEnterKeyEvent(), new QServerAction('txtPesquisar_Enter'));
			if(isset($_SESSION['tecido_list'])) $this->txtPesquisar->Text = $_SESSION['tecido_list'];
			$this->txtPesquisar_RenderScript();
		}
		
		protected function txtPesquisar_Enter($strFormId, $strControlId, $strParameter){
			$_SESSION['tecido_list'] = $this->txtPesquisar->Text;
			$this->txtPesquisar_RenderScript();
		}
		
		protected function txtPesquisar_RenderScript(){
			$strJavaScript = '';
			foreach (Tecido::LoadAll() as $objTecido)
				$strJavaScript.= ", {value:'".$objTecido->Nome."', data: '".$objTecido->Id."'}";
			$strJavaScript=  substr($strJavaScript, 1);
			QApplication::ExecuteJavaScript("$('#".$this->txtPesquisar->ControlId."').autocomplete( {lookup: [".$strJavaScript."], 	onSelect: function(value, data){ qc.getW('".$this->txtPesquisar->ControlId."').focus();}});");		
		}

		protected function Form_Run() {
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
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'tecido_list.css'));
			//print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'comandojs'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'jquery.autocomplete.min.js'));
		}		
		
		
	}

	TecidoListForm::Run('TecidoListForm', 'tpl/tecido_list.tpl.php');
	
	
?>