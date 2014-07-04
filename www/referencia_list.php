<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../includes/prepend.inc.php');

	class ReferenciaListForm extends QForm {

		
		protected $objUsuario;
	
		// Local instance of the Meta DataGrid to list Referencias
		protected $txtPesquisar;
		protected $dtgReferencias;
	
		
		protected function Form_Create() {
			$this->DefaultWaitIcon_Create();
			$this->txtPesquisar_Create();

			// Instantiate the Meta DataGrid
			$this->dtgReferencias = new ReferenciaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgReferencias->CssClass = 'table table-bordered table-striped table-hover table-condensed';
			$this->dtgReferencias->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgReferencias->Paginator = new QPaginator($this->dtgReferencias);
			$this->dtgReferencias->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . '/referencia_edit.php';

			// Create the Other Columns (note that you can use strings for referencia's properties, or you
			// can traverse down QQN::referencia() to display fields that are down the hierarchy)
			//$this->dtgReferencias->MetaAddColumn('Id');
			$this->dtgReferencias->MetaAddColumn('Nome');
			$this->dtgReferencias->MetaAddColumn(QQN::Referencia()->ReferenciaCategoria);
			$this->dtgReferencias->MetaAddColumn('Modelo');
			$this->dtgReferencias->MetaAddColumn(QQN::Referencia()->Tecido);
			$this->dtgReferencias->AddColumn(new QDataGridColumn('RENDIMENTO', '<?=$_FORM->RenderFeferenciaRendimentos($_ITEM); ?>'));
			//$this->dtgReferencias->MetaAddColumn(QQN::Referencia()->ReferenciaRendimento);
			
			$this->dtgReferencias->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');
			
			$this->dtgReferencias->SetDataBinder('dtgReferencias_Bind');
		}
		
		protected function dtgReferencias_Bind(){
			$this->dtgReferencias->MetaDataBinder(QQ::Like(QQN::Referencia()->Nome, '%'.$this->txtPesquisar->Text.'%'), null);
		}
		
		public function RenderFeferenciaRendimentos(Referencia $objReferencia){
			$strToReturn = '';
			foreach ($objReferencia->GetReferenciaRendimentoArray() as $objReferenciaRendimento)
				$strToReturn.= $objReferenciaRendimento->Tecido->Nome.' ('.number_format ($objReferenciaRendimento->Peso, 3).' Kg), ';
			return substr($strToReturn, 0, strlen($strToReturn)-2);
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
			$this->txtPesquisar->SetCustomAttribute('placeholder', 'PESQUISAR REFERÊNCIA');
			$this->txtPesquisar->AddAction(new QEnterKeyEvent(), new QServerAction('txtPesquisar_Enter'));
			$this->txtPesquisar_RenderScript();
		}
		
		protected function txtPesquisar_Enter($strFormId, $strControlId, $strParameter){
			$this->txtPesquisar_RenderScript();
		}
		
		protected function txtPesquisar_RenderScript(){
			$strJavaScript = '';
			foreach (Referencia::LoadAll() as $objReferencia)
				$strJavaScript.= ", {value:'".$objReferencia->Nome."', data: '".$objReferencia->Id."'}";
			$strJavaScript=  substr($strJavaScript, 1);
			QApplication::ExecuteJavaScript("$('#".$this->txtPesquisar->ControlId."').autocomplete( {lookup: [".$strJavaScript."], 	onSelect: function(value, data){ qc.getW('".$this->txtPesquisar->ControlId."').focus();}});");		
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
		
		
		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			//print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'comando.css'));
			//print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'comandojs'));
			print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'jquery.autocomplete.min.js'));
		}		
		
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// referencia_list.tpl.php as the included HTML template file
	ReferenciaListForm::Run('ReferenciaListForm', 'tpl/referencia_list.tpl.php');
	
	//foreach (ReferenciaRendimento::LoadAll() as $objReferenciaRendimento){
	//	$objReferenciaRendimento->Peso = (($objReferenciaRendimento->Comprimento/$objReferenciaRendimento->Tecido->Metro)/$objReferenciaRendimento->Pecas);
	//	$objReferenciaRendimento->Save();	
	//}
	
?>