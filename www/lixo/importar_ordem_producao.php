<?php

	require 'base.php';

	class ImportarOrdemProducaoForm extends BaseForm {
				
		protected $flaOrdemProducao;
		protected $pnlGrade;
		protected $lstPackage;
		protected $btnConfirm;
		
		protected function Form_Create() {
			parent::Form_Create();
			$this->flaOrdemProducao_Create();
			$this->pnlGrade_Create();
			$this->lstPackage_Create();
			$this->btnConfirm_Create();
		}
		
		protected function flaOrdemProducao_Create(){
			$this->flaOrdemProducao =  new QFileAsset($this);
			$this->flaOrdemProducao->Name = 'Importar Ordem de Produção';
			$this->flaOrdemProducao->CssClass = 'marginBottom20';
			$this->flaOrdemProducao->Required = true;
			//$this->flaOrdemProducao->TemporaryUploadPath = __DOCROOT__;
		}
		
		protected function pnlGrade_Create(){
			$this->pnlGrade = new Qpanel($this);
			$this->pnlGrade->AutoRenderChildren = true;
		}
		
		protected function lstPackage_Create(){
			$this->lstPackage = new QListBox($this);
			$this->lstPackage->CssClass = 'form-control marginBottom20';
			$this->lstPackage->AddItem('Selecione Um Pacote');
			foreach (Pacote::LoadAll(QQ::Clause(QQ::OrderBy(QQN::Pacote()->Nome, false))) as $objPacote)
				$this->lstPackage->AddItem('Pacote '.$objPacote->Nome, $objPacote->Id);
			$this->lstPackage->Display = false;
			
		}
		
		protected function btnConfirm_Create(){
			$this->btnConfirm = new QButton($this);
			$this->btnConfirm->Text = 'Confirmar';
			$this->btnConfirm->CssClass = 'btn btn-default';
			$this->btnConfirm->AddAction(new QClickEvent(), new QServerAction('btnConfirm_Click'));
			$this->btnConfirm->Display = false;
			$this->btnConfirm->CausesValidation = true;
		}
		
		protected function btnConfirm_Click($strFormId, $strControlId, $strParameter){
			require_once __DOCROOT__.'/assets/php/PHPExcel-develop/Classes/PHPExcel/IOFactory.php';
			$objReader = new PHPExcel_Reader_Excel5();
			$objPHPExcel = $objReader->load($this->flaOrdemProducao->File);
			$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
			
			foreach ($sheetData as $i => $row){
				if($i != 1){
					$objOrdemProducao = OrdemProducao::LoadByNumero($row["A"]);
					if(!$objOrdemProducao)
						$objOrdemProducao = $this->NewOrdemProducao($row);										
					$this->NewOrdemProducaoGrade($row["I"], $row["B"], $row["J"], $objOrdemProducao);
					
				}
			}
			// observação importante!!!!!!!!!!!!  a linha começa de 1 e não de 0, e coluna é A a Q
			QApplication::DisplayAlert('Atualizado com sucesso!!!');
			$this->flaOrdemProducao->File = null;
			$this->pnlGrade->Text = '';
			$this->btnConfirm->Display = false;
			$this->lstPackage->Display = false;

			//$excel->parser->loadFile($this->flaOrdemProducao->File);
		}
		
		protected function NewOrdemProducao($row){
			$objReferencia = Referencia::LoadByNome($row["F"]);
			if(!$objReferencia){
				$objReferenciaCategoria = ReferenciaCategoria::LoadByNome(substr($row["F"],0 , 3));
				if(!$objReferenciaCategoria){
					$objReferenciaCategoria = new ReferenciaCategoria();
					$objReferenciaCategoria->Nome = substr($row["F"],0 , 3);
					$objReferenciaCategoria->Save();
				}
						
				$objReferencia = new Referencia();
				$objReferencia->Nome = $row["F"];
				$objReferencia->ReferenciaCategoriaId = $objReferenciaCategoria->Id;
				$objReferencia->Modelo = substr($row["F"],3 , 3);
				$objReferencia->Save();
			}
				
			$objOrdemProducao = new OrdemProducao();
			$objOrdemProducao->Numero = $row["A"];
			$objOrdemProducao->PacoteId = $this->lstPackage->SelectedValue;
			$objOrdemProducao->ReferenciaId = $objReferencia->Id;
			$objOrdemProducao->Save();
			
			return $objOrdemProducao;
		}
		
		protected function NewOrdemProducaoGrade($strColor, $strSize, $intAmount, $objOrdemProducao){
			$objCor = Cor::LoadByNome($strColor);
			if(!$objCor){
				$objCor = new Cor();
				$objCor->Nome = $strColor;
				$objCor->Save();
			}
						
			$objTamanho = Tamanho::LoadByValor($strSize);
			if(!$objTamanho){
				$objTamanho = new Tamanho();
				$objTamanho->Valor = $strSize;
				$objTamanho->Save();
			}
						
			$objOrdemProducaoGrade = new OrdemProducaoGrade();
			$objOrdemProducaoGrade->CorId = $objCor->Id;
			$objOrdemProducaoGrade->TamanhoId = $objTamanho->Id;
			$objOrdemProducaoGrade->OrdemProducaoId = $objOrdemProducao->Id;
			$objOrdemProducaoGrade->Quantidade = $intAmount;
			$objOrdemProducaoGrade->Save();	
			
			$objBalancoPecas = new BalancoPecas();
			$objBalancoPecas->OrdemProducaoGradeId = $objOrdemProducaoGrade->Id;
			$objBalancoPecas->QuantidadeProduzida = 0;
			$objBalancoPecas->Balanco = $intAmount;
			$objBalancoPecas->Save();
			
			$objBalancoAcoes = new BalancoAcoes();
			$objFluxogramaItem = FluxogramaItem::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::FluxogramaItem()->Ativo, true),
				QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $objOrdemProducao->ReferenciaId)),
				QQ::Clause(QQ::OrderBy(QQN::FluxogramaItem()->Ordenacao)));
			if($objFluxogramaItem) {
				$objBalancoAcoes->FluxogramaItemId = $objFluxogramaItem->Id;
				$objBalancoAcoes->OrdemProducaoGradeId = $objOrdemProducaoGrade->Id;
				$objBalancoAcoes->QuantidadeDisponivel = $intAmount;
				$objBalancoAcoes->QuantidadeProduzida = 0;
				$objBalancoAcoes->QuantidadeRemetida = 0;
				$objBalancoAcoes->Save();
			}
		}
		
		protected function Form_PreRender() {
			if($this->flaOrdemProducao->File){
				require_once __DOCROOT__.'/assets/php/PHPExcel-develop/Classes/PHPExcel/IOFactory.php';
				$objReader = new PHPExcel_Reader_Excel5();
				$objPHPExcel = $objReader->load($this->flaOrdemProducao->File);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				
				$objOrdemProducao = OrdemProducao::LoadByNumero($sheetData[2]["A"]);
				if(!$objOrdemProducao) {
					$this->lstPackage->Display = true;
					$this->lstPackage->Required = true;
				} else {
					$this->lstPackage->Display = false;
					$this->lstPackage->Required = false;
				}
				
				
				
				$strMatrix = array();

				
				for($i = 2; $i <= (count($sheetData)); $i++){
					if($i != 1){
						$strColor = $sheetData[$i]["I"];
						$strSize = $sheetData[$i]["B"];
						$intAmount = $sheetData[$i]["J"];
						$intAdd = 0;
						
						/*for($j = $i+1; $j <= (count($sheetData)); $j++){
							if($sheetData[$i]["I"] == $sheetData[$j]["I"] && $sheetData[$i]["B"] == $sheetData[$j]["B"]){
								$intAdd+= $sheetData[$j]["J"];
								$sheetData[$j]["J"] = 0;
							}
						} 
						if($intAmount != 0){
							$objOrdemProducao = OrdemProducao::LoadByNumero($sheetData[$i]["A"]);
							$objOrdemProducaoGrade = null;
							if($objOrdemProducao)
								$objOrdemProducaoGrade = $objOrdemProducaoGrade = OrdemProducaoGrade::QuerySingle(QQ::AndCondition(
									QQ::Equal(QQN::OrdemProducaoGrade()->Cor->Nome, $sheetData[$i]["I"]),
									QQ::Equal(QQN::OrdemProducaoGrade()->Tamanho->Valor, $sheetData[$i]["B"]),
									QQ::Equal(QQN::OrdemProducaoGrade()->OrdemProducaoId, $objOrdemProducao->Id)));

							$row = array();
							$row[0] = $sheetData[$i]["B"];
							$row[1] = $sheetData[$i]["I"];
							$row[2] = ($intAmount+$intAdd).' | '.(($objOrdemProducaoGrade)?$objOrdemProducaoGrade->Quantidade:'N/A');
							array_push($strMatrix, $row);
						}*/

					}
				}
				$strHtml = '<table class="table table-striped table-bordered table-hover table-responsive" >';
				$strHtml.= '<tr><th>Referência</th><th>Tamanho</th><th>Cor</th><th>Quantidade</th></tr>';
				for ($i = 2; $i <= (count($sheetData)); $i++){
					$strHtml.= "<tr>";
					/*foreach ($strRow as $strCell)
						$strHtml.= "<td>".$strCell."</rd>"*/
					$strHtml.= '<td>'.$sheetData[$i]["F"].'</td>'; 
					$strHtml.= '<td>'.$sheetData[$i]["B"].'</td>';
					$strHtml.= '<td>'.$sheetData[$i]["I"].'</td>'; 
					$strHtml.= '<td>'.$sheetData[$i]["J"].'</td>'; 
					$strHtml.= "</tr>";
				}
				$strHtml.= "</table>";
				$this->pnlGrade->Text = $strHtml;
				
				$this->btnConfirm->Display = true;
			}
			
		}
		
		
	}
	
	ImportarOrdemProducaoForm::Run('ImportarOrdemProducaoForm', 'tpl/importar_ordem_producao.tpl.php');
	
?>