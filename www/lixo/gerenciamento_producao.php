<?php 

	require 'base.php';

	class GerenciamentoProducaoForm extends QForm {
		
		protected $txtBarCode;
		protected $pxyBarCode;
		public $pnlSeamstress;
		protected $btnDeliverProduction;
		protected $pxyTimeProduction;
		protected $pxyFinishProduction;
		protected $pnlCreateCostureiraProdução;
		
		public $objCostureira;
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->objCostureira = Costureira::Load($_GET['id']);
			$this->txtBarCode_Create();
			$this->pxyBarCode_Create();
			$this->pnlSeamstress_Create();
			$this->btnDeliverProduction_Create();
			$this->pxyTimeProduction_Create();
			$this->pxyFinishProduction_Create();
			$this->pnlCreateCostureiraProdução_Create();
		}
		

		
		protected function txtBarCode_Create(){
			$this->txtBarCode = new QTextBox($this);
			$this->txtBarCode->CssClass = 'form-control input-lg';
			$this->txtBarCode->Select();
		}
		
		protected function pxyBarCode_Create(){
			$this->pxyBarCode = new QControlProxy($this);
			$this->pxyBarCode->AddAction(new QClickEvent(), new QAjaxAction('pxyBarCode_Click'));
		}
		
		protected function pxyBarCode_Click(){
			$this->objCostureira = Costureira::LoadByBarcode($this->txtBarCode->Text);
			if(!$this->objCostureira){
				$this->pnlCreateCostureiraProdução->Display = false;
				QApplication::DisplayAlert ('Costureira não encontrada');
			}
			$this->pnlSeamstress->Refresh();
		}		
		
		protected function pnlSeamstress_Create(){
			$this->pnlSeamstress = new QPanel($this);
			$this->pnlSeamstress->CssClass = 'panel panel-default';
			$this->pnlSeamstress->Template = __DOCROOT__.'/control/tpl/pnl_Seamstress.tpl.php';
		}
		
		protected function btnDeliverProduction_Create(){
			$this->btnDeliverProduction = new QButton($this->pnlSeamstress);
			$this->btnDeliverProduction->Text = 'Remeter Produção';
			$this->btnDeliverProduction->CssClass = 'btn btn-default width100 marginBottom20 input-lg';
			$this->btnDeliverProduction->AddAction(new QClickEvent(), new QAjaxAction('btnDeliverProduction_Click'));
		}
		
		protected function btnDeliverProduction_Click(){
			$this->pnlCreateCostureiraProdução->Display = true;
		}
		
		protected function pxyTimeProduction_Create(){
			$this->pxyTimeProduction = new QControlProxy($this);
			$this->pxyTimeProduction->AddAction(new QClickEvent(), new QAjaxAction('pxyTimeProduction_Click'));
		}
		
		
		protected function pxyTimeProduction_Click($strFormId, $strControlId, $strParameter){
			$objCostureiraTempo = CostureiraTempo::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::CostureiraTempo()->CostureiraProducao, $strParameter),
				QQ::Equal(QQN::CostureiraTempo()->Fim, null)));
			if($objCostureiraTempo){
				$objCostureiraTempo->Fim = QDateTime::Now();
				$objDateTimeSpanDifference = $objCostureiraTempo->Fim->Difference(new QDateTime($objCostureiraTempo->Inicio));
				$objCostureiraTempo->Tempo = $objDateTimeSpanDifference->Seconds;
				$objCostureiraTempo->Save();
			} else {
				$objCostureiraTempo = new CostureiraTempo();
				$objCostureiraTempo->CostureiraProducaoId = $strParameter;
				$objCostureiraTempo->Inicio = QDateTime::Now();
				$objCostureiraTempo->Save();
			}
			$this->pnlSeamstress->Refresh();
		}
		
		protected function pxyFinishProduction_Create(){
			$this->pxyFinishProduction = new QControlProxy($this);
			$this->pxyFinishProduction->AddAction(new QClickEvent(), new QAjaxAction('pxyFinishProduction_Click'));			
		}
		
		protected function pxyFinishProduction_Click($strFormId, $strControlId, $strParameter){
			$arr = explode("#", $strParameter);
			$txtControl = $this->pnlSeamstress->GetChildControl($arr[1]);
			$objCostureiraProducao = CostureiraProducao::Load($arr[0]);
			
			if($objCostureiraProducao) {
				$intMinimum = 0;
				$intMaximum = $objCostureiraProducao->QuantidadePlanejada;
				if(is_numeric($txtControl->Text) && $txtControl->Text >= $intMinimum && $txtControl->Text <= $intMaximum) {
							
					$objCostureiraProducao->Concluido = true;
					$objCostureiraProducao->QuantidadeRealizada = $txtControl->Text;
					$objCostureiraProducao->Save();
				
					$objBalancoAcoes = $objCostureiraProducao->BalancoAcoes;
					$objBalancoAcoes->QuantidadeProduzida+= $txtControl->Text;
					$objBalancoAcoes->Save();
				
					if($arr[3] == 'lancar') {
						$objBalancoPecas = BalancoPecas::LoadByOrdemProducaoGradeId($objBalancoAcoes->OrdemProducaoGradeId);
						$objBalancoPecas->Balanco-=$txtControl->Text;
						$objBalancoPecas->QuantidadeProduzida+=$txtControl->Text;
					}
					
					$this->pnlSeamstress->Refresh();
				
				} else
					QApplication::DisplayAlert ('Quantidade inválida mínimo é '.$intMinimum.' e máximo é '.$intMaximum);
			}
		}
		
		protected function pnlCreateCostureiraProdução_Create(){
			$this->pnlCreateCostureiraProdução = new QCreateCostureiraProducaoPanel($this);
		}
		

		
		protected function RenderBegin($blnDisplayOutput = true) {
			// Ensure that RenderBegin() has not yet been called
			switch ($this->intFormStatus) {
				case QFormBase::FormStatusUnrendered:
					break;
				case QFormBase::FormStatusRenderBegun:
				case QFormBase::FormStatusRenderEnded:
					throw new QCallerException('$this->RenderBegin() has already been called');
					break;
				default:
					throw new QCallerException('FormStatus is in an unknown status');
			}

			// Update FormStatus and Clear Included JS/CSS list
			$this->intFormStatus = QFormBase::FormStatusRenderBegun;
			$this->strIncludedJavaScriptFileArray = array();
			$this->strIncludedStyleSheetFileArray = array();

			// Figure out initial list of JavaScriptIncludes
			$strJavaScriptArray = $this->ProcessJavaScriptList('_core/qcodo.js, _core/logger.js, _core/event.js, _core/post.js, _core/control.js');
			if (!$strJavaScriptArray)
				$strJavaScriptArray = array();

			// Figure out initial list of StyleSheet includes
			$strStyleSheetArray = array();

			// Iterate through the form's ControlArray to Define FormAttributes and additional JavaScriptIncludes

			foreach ($this->GetAllControls() as $objControl) {
				// Include any JavaScripts?  The control would have a
				// comma-delimited list of javascript files to include (if applicable)
				if ($strScriptArray = $this->ProcessJavaScriptList($objControl->JavaScripts))
					$strJavaScriptArray = array_merge($strJavaScriptArray, $strScriptArray);

				// Include any StyleSheets?  The control would have a
				// comma-delimited list of stylesheet files to include (if applicable)
				if ($strScriptArray = $this->ProcessStyleSheetList($objControl->StyleSheets))
					$strStyleSheetArray = array_merge($strStyleSheetArray, $strScriptArray);

				// Form Attributes?
				if ($objControl->FormAttributes) {
					$this->strFormAttributeArray = array_merge($this->strFormAttributeArray, $objControl->FormAttributes);
				}
			}

			// Create $strFormAttributes
			$strFormAttributes = '';
			foreach ($this->strFormAttributeArray as $strKey=>$strValue) {
				$strFormAttributes .= sprintf(' %s="%s"', $strKey, $strValue);
			}

			QApplicationBase::$ProcessOutput = false;
			$strOutputtedText = strtolower(trim(ob_get_contents()));
			if (strpos($strOutputtedText, '<body') === false) {
				$strToReturn = '<body>';
				$this->blnRenderedBodyTag = true;
			} else
				$strToReturn = '';
			QApplicationBase::$ProcessOutput = true;

			if ($this->strCssClass)
				$strFormAttributes .= ' class="' . $this->strCssClass . '"';

			// Setup Rendered HTML
			$strToReturn .= sprintf('<form onsubmit="'.$this->pxyBarCode->RenderAsString(null, false).'return false;" method="post" id="%s" action="%s"%s>', $this->strFormId, QApplication::HtmlEntities(QApplication::$RequestUri), $strFormAttributes);
			$strToReturn .= "\r\n";

			// Include javascripts that need to be included
			foreach ($strJavaScriptArray as $strScript) {
				$strToReturn .= sprintf('<script type="text/javascript" src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, $strScript);
				$strToReturn .= "\r\n";
			}

			// Include styles that need to be included
			foreach ($strStyleSheetArray as $strScript) {
				$strToReturn .= sprintf('<style type="text/css" media="all">@import "%s/%s";</style>', __VIRTUAL_DIRECTORY__ . __CSS_ASSETS__, $strScript);
				$strToReturn .= "\r\n";
			}

			// Perhaps a strFormModifiers as an array to
			// allow controls to update other parts of the form, like enctype, onsubmit, etc.

			// Return or Display
			if ($blnDisplayOutput) {
				print($strToReturn);
				return null;
			} else
				return $strToReturn;
		}
		
		
	}
	
	GerenciamentoProducaoForm::Run('GerenciamentoProducaoForm', 'tpl/gerenciamento_producao.tpl.php');
	
?>