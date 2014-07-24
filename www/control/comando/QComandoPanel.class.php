<?php
	class QComandoPanel extends QPanel {
	
		public $btnCancel;
		public $txtComando;
		
		public $pnlPeca;
		protected $lstQuantidadePanos;
		protected $lstTecido;
		protected $txtCor;
		protected $btnSavePeca;
		
		public $pnlRisco;
		public $txtReferencia;
		public $pnlItenRiscoPP;
		public $pnlItenRiscoP;
		public $pnlItenRiscoM;
		public $pnlItenRiscoG;
		public $pnlItenRiscoGG;
		public $btnSaveRisco;
		
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->btnCancel_Create();
			$this->txtComando_Create();
			$this->pnlPeca_Create();
			$this->pnlRisco_Create();
		}
		
		protected function btnCancel_Create(){
			$this->btnCancel = new QLinkButton($this);
			$this->btnCancel->HtmlEntities = false;
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));
			$this->btnCancel->Text = '
				<button type="button" class="btn btn-default btn-lg width100">
					<span class="glyphicon glyphicon-arrow-left"></span> VOLTAR
				</button>';			
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter){
			$this->Form->Iniciar();	
		}		
		
		protected function txtComando_Create(){
			$this->txtComando = new QIntegerTextBox($this);
			$this->txtComando->CssClass = 'form-control input-lg';
			$this->txtComando->SetCustomAttribute('placeholder', 'NOVO COMANDO');
			$this->txtComando->Required = true;
			$this->txtComando->AddAction(new QEnterKeyEvent(), new QAjaxControlAction($this, 'txtComando_Enter'));
			$this->txtComando->CausesValidation = $this;
		}
		
		public function txtComando_Enter($strFormId, $strControlId, $strParameter){
			$objComando = Comando::LoadByNumero($this->txtComando->Text);	
			if(!$objComando) {
				$objComando = new Comando();
				$objComando->Numero = $this->txtComando->Text;
				$objComando->Date = QDateTime::Now();
				$objComando->Save();
				$this->Form->EditarComando($objComando);
			} else {
				QApplication::DisplayAlert ('COMANDO JÁ EXISTENTE');
				$this->txtComando->Focus();
			}
		}
		
		protected function pnlPeca_Create(){
			$this->pnlPeca = new QPanel($this);
			$this->pnlPeca->AutoRenderChildren = true;			
			
			$this->lstQuantidadePanos_Create();
			$this->lstTecido_Create();
			$this->txtCor_Create();
			$this->btnSavePeca_Create();
		}
		
		protected function lstQuantidadePanos_Create(){
			$this->lstQuantidadePanos = new QListBox($this->pnlPeca);
			$this->lstQuantidadePanos->CssClass = 'form-control input-lg width100';
			$this->lstQuantidadePanos->Required = true;
			$this->lstQuantidadePanos->AddItem('QUANTIDADE DE PANOS ==>');
			$this->lstQuantidadePanos->RenderMethod = 'RenderWithName';
			$this->lstQuantidadePanos->SetCustomStyle('margin-bottom', '20px');
			for ($i = 1; $i <= 40; $i++)
				$this->lstQuantidadePanos->AddItem($i, $i);			
		}
		
		protected function lstTecido_Create(){
			$this->lstTecido = new QListBox($this->pnlPeca);
			$this->lstTecido->CssClass = 'form-control input-lg width100';
			$this->lstTecido->Required = true;
			$this->lstTecido->AddItem('ESCOLHE UM TECIDO ==>');
			$this->lstTecido->SetCustomStyle('margin-bottom', '20px');
			$this->lstTecido->RenderMethod = 'RenderWithName';
			foreach (Tecido::LoadAll() as $objTecido)
				$this->lstTecido->AddItem($objTecido->Nome, $objTecido->Id);			
		}		
		
		protected function txtCor_Create(){
			$this->txtCor = new QTextBox($this->pnlPeca);
			$this->txtCor->CssClass = 'form-control input-lg width100';
			$this->txtCor->Required = true;
			$this->txtCor->RenderMethod = 'RenderWithName';
			$this->txtCor->SetCustomAttribute('placeholder', 'COR');
			$this->txtCor->SetCustomStyle('margin-bottom', '20px');
		}
		
		protected function txtCor_RenderScript(){
			$strJavaScript = '';
			foreach (Cor::LoadAll() as $objCor)
				$strJavaScript.= ", {value:'".$objCor->Nome."', data: '".$objCor->Id."'}";
			$strJavaScript=  substr($strJavaScript, 1);
			QApplication::ExecuteJavaScript("$('#".$this->txtCor->ControlId."').autocomplete( {lookup: [".$strJavaScript."], 	onSelect: function(value, data){ qc.getW('".$this->txtCor->ControlId."').focus();}});");		
		}		
					
		protected function btnSavePeca_Create(){
			$this->btnSavePeca = new QButton($this->pnlPeca);
			$this->btnSavePeca->Text = 'CONFIRMAR';
			$this->btnSavePeca->CssClass = 'btn btn-lg';
			$this->btnSavePeca->CausesValidation = $this->pnlPeca;
			$this->btnSavePeca->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSavePeca_Click'));
		}
		
		public function btnSavePeca_Click($strFormId, $strControlId, $strParameter){
			$blnReferenciasValida = true;
			$objComando = $this->Form->GetComando();
			$objTecido = Tecido::Load($this->lstTecido->SelectedValue);
			foreach ($objComando->GetComandoRiscoArray() as $objComandoRisco){
				$objReferencia = Referencia::LoadByNome($objComandoRisco->Referencia.$objTecido->Codigo);
				if(!$objReferencia)
					$blnReferenciasValida = false;
				
			}			
			
			$objCor = Cor::LoadByNome($this->txtCor->Text);
			if($objCor && $blnReferenciasValida){
				$objComandoPeca = new ComandoPeca();
				$objComandoPeca->QuantidadePanos = $this->lstQuantidadePanos->SelectedValue;
				$objComandoPeca->ComandoId = $objComando->Id;
				$objComandoPeca->TecidoId = $this->lstTecido->SelectedValue;
				$objComandoPeca->CorId = $objCor->Id;
				$objComandoPeca->Save();
				$this->lstQuantidadePanos->SelectedIndex = 0;
				$this->lstTecido->SelectedIndex = 0;
				$this->txtCor->Text = '';
				$fltTotalPeso = 0;
				foreach ($objComando->GetComandoRiscoArray() as $objComandoRisco){
					$objComandoRiscoPeca = new ComandoRiscoPeca();
					$objComandoRiscoPeca->ComandoPecaId = $objComandoPeca->Id;
					$objComandoRiscoPeca->ComandoRiscoId = $objComandoRisco->Id;
					$fltMeia = 0;
					if($objComandoRisco->MeiaRisco)
						$fltMeia = 0.5;
					$objComandoRiscoPeca->QuantidadeReal = ($objComandoRisco->QuantidadeRisco+$fltMeia)*$objComandoPeca->QuantidadePanos;
					$objReferencia = Referencia::LoadByNome($objComandoRisco->Referencia.$objComandoPeca->Tecido->Codigo);
					foreach ($objReferencia->GetReferenciaRendimentoArray() as $objReferenciaRendimento){
						if($objReferenciaRendimento->TecidoId == $objComandoPeca->TecidoId)
							$objComandoRiscoPeca->Peso = $objReferenciaRendimento->Peso*$objComandoRiscoPeca->QuantidadeReal;
					}
					$objComandoRiscoPeca->Save();
					$fltTotalPeso+=$objComandoRiscoPeca->Peso;
				}
				
				$objComandoPeca->Peso = $fltTotalPeso;
				$objComandoPeca->Save();
				
				//$this->Form->EditarComando($objComando);
				$this->Form->RefreshTables();
				QApplication::ExecuteJavaScript("$('#peca-modal').modal('hide');");
			} else {
				QApplication::DisplayAlert ('COR NÃO EXISTE OU REFERÊNCIA INVÁLIDA');
				$this->txtCor->Text = '';
			}
		}
		
		protected function pnlRisco_Create(){
			$this->pnlRisco = new QPanel($this);

			$this->pnlRisco->Template =  __DOCROOT__.'/control/comando/tpl/pnl_Risco.tpl.php';
			$this->txtReferencia_Create();
			$this->pnlItenRiscoPP_Create();
			$this->pnlItenRiscoP_Create();
			$this->pnlItenRiscoM_Create();
			$this->pnlItenRiscoG_Create();
			$this->pnlItenRiscoGG_Create();
			$this->btnSaveRisco_Create();
		}
		
		protected function txtReferencia_Create(){
			$this->txtReferencia = new QTextBox($this->pnlRisco);
			$this->txtReferencia->CssClass = 'form-control input-lg width100';
			$this->txtReferencia->Required = true;
			$this->txtReferencia->SetCustomAttribute('placeholder', 'REFERÊNCIA');
		}
		
		protected function pnlItenRiscoPP_Create(){
			$this->pnlItenRiscoPP = new QItemRiscoPanel($this->pnlRisco, Tamanho::LoadByValor('PP'), 'pnlItemRisco1');
		}

		protected function pnlItenRiscoP_Create(){
			$this->pnlItenRiscoP = new QItemRiscoPanel($this->pnlRisco, Tamanho::LoadByValor('P'), 'pnlItemRisco2');
		}
		
		protected function pnlItenRiscoM_Create(){
			$this->pnlItenRiscoM = new QItemRiscoPanel($this->pnlRisco, Tamanho::LoadByValor('M'), 'pnlItemRisco3');
		}
		
		protected function pnlItenRiscoG_Create(){
			$this->pnlItenRiscoG = new QItemRiscoPanel($this->pnlRisco, Tamanho::LoadByValor('G'), 'pnlItemRisco4');
		}
		
		protected function pnlItenRiscoGG_Create(){
			$this->pnlItenRiscoGG = new QItemRiscoPanel($this->pnlRisco, Tamanho::LoadByValor('GG'), 'pnlItemRisco5');
		}
		
		protected function btnSaveRisco_Create(){
			$this->btnSaveRisco = new QButton($this->pnlRisco);
			$this->btnSaveRisco->Text = 'CONFIRMAR';
			$this->btnSaveRisco->CssClass = 'btn btn-lg';
			$this->btnSaveRisco->CausesValidation = $this->pnlRisco;
			$this->btnSaveRisco->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSaveRisco_Click'));
		}
		
		public function btnSaveRisco_Click($strFormId, $strControlId, $strParameter){
			$blnReferenciasValida = true;
			$objComando = $this->Form->GetComando();
			foreach ($objComando->GetComandoPecaArray() as $objComandoPeca){
				QApplication::DisplayAlert($this->txtReferencia->Text.$objComandoPeca->Tecido->Codigo);
				$objReferencia = Referencia::LoadByNome($this->txtReferencia->Text.$objComandoPeca->Tecido->Codigo);
				if(!$objReferencia)
					$blnReferenciasValida = false;
				
			}
			
			$objReferenciaCategoria = ReferenciaCategoria::LoadByNome(substr($this->txtReferencia->Text, 0, 3));
			$objArrayReferencia = array();
			if($objReferenciaCategoria)
				$objArrayReferencia = Referencia::LoadArrayByReferenciaCategoriaIdModelo($objReferenciaCategoria->Id, substr($this->txtReferencia->Text, 3, 3));
			if(count($objArrayReferencia) > 0 && $blnReferenciasValida){
				for ($i = 1; $i <= 5; $i++){
					$pnlItemRisco = $this->pnlRisco->GetChildControl('pnlItemRisco'.$i);
					if($pnlItemRisco->chkTamanho->Checked){
						$objComandoRisco = new ComandoRisco();
						$objComandoRisco->ComandoId = $objComando->Id;
						$objComandoRisco->Referencia = $this->txtReferencia->Text;
						$objComandoRisco->TamanhoId = $pnlItemRisco->objTamanho->Id;
						$objComandoRisco->QuantidadeRisco = $pnlItemRisco->lstQuantidadeRisco->SelectedValue;
						$objComandoRisco->MeiaRisco = $pnlItemRisco->chkMeia->Checked;
						$objComandoRisco->Save();
						
						$pnlItemRisco->chkTamanho->Checked = false;
						$pnlItemRisco->lstQuantidadeRisco->SelectedIndex = 0;
						$pnlItemRisco->chkMeia->Checked = false;
						foreach ($objComando->GetComandoPecaArray() as $objComandoPeca){
							$objComandoRiscoPeca = new ComandoRiscoPeca();
							$objComandoRiscoPeca->ComandoRiscoId = $objComandoRisco->Id;
							$objComandoRiscoPeca->ComandoPecaId = $objComandoPeca->Id;
							$fltMeia = 0;
							if($objComandoRisco->MeiaRisco)
								$fltMeia = 0.5;
							$objComandoRiscoPeca->QuantidadeReal = ($objComandoRisco->QuantidadeRisco+$fltMeia)*$objComandoPeca->QuantidadePanos;
							
							$objReferencia = Referencia::LoadByNome($objComandoRisco->Referencia.$objComandoPeca->Tecido->Codigo);
							foreach ($objReferencia->GetReferenciaRendimentoArray() as $objReferenciaRendimento){
								if($objReferenciaRendimento->TecidoId == $objComandoPeca->TecidoId)
									$objComandoRiscoPeca->Peso = $objReferenciaRendimento->Peso*$objComandoRiscoPeca->QuantidadeReal;
							}
							$objComandoRiscoPeca->Save();					
						}
					}
				}
				$this->txtReferencia->Text = '';
				
				foreach ($objComando->GetComandoPecaArray() as $objComandoPeca){
					$fltTotalPeso = 0;
					foreach ($objComandoPeca->GetComandoRiscoPecaArray() as $objComandoRiscoPeca) {
						$fltTotalPeso+=$objComandoRiscoPeca->Peso;
					}
					$objComandoPeca->Peso = $fltTotalPeso;
					$objComandoPeca->Save();
				}

				
				$this->Form->RefreshTables();
				QApplication::ExecuteJavaScript("$('#risco-modal').modal('hide');");
			} else {
				if(count($objArrayReferencia) == 0)
					QApplication::DisplayAlert('REFERÊNCIA INVÁLIDA');
				if(!$blnReferenciasValida)
					QApplication::DisplayAlert('NÃO HÁ TECIDO PARA ESSA REFERÊNCIA');
				$this->txtReferencia->Text = '';
				$this->txtReferencia->Focus();
				$this->txtReferencia_RenderScript();
			}
		}
		
		
		protected function txtReferencia_RenderScript(){
			$strJavaScript = '';
			foreach (Referencia::LoadAll() as $objReferencia)
				$strJavaScript.= ", {value:'".substr($objReferencia->Nome, 0, 6)."', data: '".substr($objReferencia->Nome, 0, 6)."'}";
			$strJavaScript=  substr($strJavaScript, 1);
			QApplication::ExecuteJavaScript("$('#".$this->txtReferencia->ControlId."').autocomplete( {lookup: [".$strJavaScript."], 	onSelect: function(value, data){ qc.getW('".$this->txtReferencia->ControlId."').focus();}});");		
		}
		
		public function Iniciar(){
			$objComando = $this->Form->GetComando();
			if($objComando){				
				$this->txtComando->Text = 'Comando '.$objComando->Numero;
				$this->txtComando->Enabled = false;
				$this->txtCor_RenderScript();
				$this->txtReferencia_RenderScript();
				$this->strTemplate = __DOCROOT__.'/control/comando/tpl/QComandoPanel_edit.tpl.php';
			} else {
				$this->txtComando->Text = '';
				$this->txtComando->Enabled = true;
				$this->strTemplate = __DOCROOT__.'/control/comando/tpl/QComandoPanel_new.tpl.php';
			}
		}
		
	}
?>