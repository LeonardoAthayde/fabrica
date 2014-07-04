<?php
	class QComandoSearchPanel extends QPanel {
	
		public $btnNovo;
		public $txtPesquisar;
		
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->strTemplate = __DOCROOT__.'/control/comando/tpl/QComandoSearchPanel.tpl.php';

			$this->btnNovo_Create();
			$this->txtPesquisar_Create();
		}
		
		protected function btnNovo_Create(){
			$this->btnNovo = new QLinkButton($this);
			$this->btnNovo->HtmlEntities = false;
			$this->btnNovo->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnNovo_Click'));
			$this->btnNovo->Text = '
				<button type="button" class="btn btn-default btn-lg width100">
					<span class="glyphicon glyphicon-plus"></span> NOVO COMANDO
				</button>';			
		}
		
		
		public function btnNovo_Click($strFormId, $strControlId, $strParameter){
			$this->Form->CriarComando();
		}		
		
		protected function txtPesquisar_Create(){
			$this->txtPesquisar = new QTextBox($this);
			$this->txtPesquisar->CssClass = 'form-control input-lg';
			$this->txtPesquisar->SetCustomAttribute('placeholder', 'EDITAR COMANDO');
			$this->txtPesquisar->AddAction(new QEnterKeyEvent(), new QServerControlAction($this, 'txtPesquisar_Enter'));
			$this->txtPesquisar_RenderScript();
		}
		
		protected function txtPesquisar_RenderScript(){
			$strJavaScript = '';
			foreach (Comando::LoadAll() as $objComando)
				$strJavaScript.= ", {value:'".$objComando->Numero."', data: '".$objComando->Id."'}";
			$strJavaScript=  substr($strJavaScript, 1);
			QApplication::ExecuteJavaScript("$('#".$this->txtPesquisar->ControlId."').autocomplete( {lookup: [".$strJavaScript."], 	onSelect: function(value, data){ qc.getW('".$this->txtPesquisar->ControlId."').focus();}});");		
		}
		
		public function txtPesquisar_Enter($strFormId, $strControlId, $strParameter){
			$objComando = Comando::LoadByNumero($this->txtPesquisar->Text);
			if($objComando)
				$this->Form->EditarComando($objComando);
			else {
				$this->txtPesquisar->Text = '';
				$this->txtPesquisar_RenderScript();
				QApplication::DisplayAlert ('COMANDO NÃO ENCONTRADO');
				$this->txtPesquisar->Focus();
			}
		}
		
		
		public function Iniciar(){
			$this->txtPesquisar->Text = '';
			$this->txtPesquisar_RenderScript();
			$this->txtPesquisar->Focus();
		}
		
	}
?>