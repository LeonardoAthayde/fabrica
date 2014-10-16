<?php

	function RelatorioComando(Comando $objComando){
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		$pdf->SetPrintHeader(false);
		$pdf->SetPrintFooter(false);

		$pdf->SetMargins(PDF_MARGIN_LEFT, 10, PDF_MARGIN_RIGHT);

		$pdf->SetFont('dejavusans', '', 9);

		$strDia = QDateTime::Now()->format('d');
		$strMes = QDateTime::Now()->format('m');
		$strAno = QDateTime::Now()->format('Y');
		
		$html = ' <div style="border:1px solid #000; line-height:20px;">'
			.'&nbsp;CORTADEIRA: _______________________ &nbsp;&nbsp;&nbsp;&nbsp;INICIO: '.$strDia.'/'.$strMes.'/'.$strAno.' &nbsp;&nbsp;&nbsp;&nbsp;FIM: ____/____/_______ CC/OPN: '.$objComando->Numero.'<br>'
			.'&nbsp;LARGURA DOS ENFESTOS: _________ &nbsp;&nbsp;&nbsp;COMP. DO RISCOS: __________ &nbsp;&nbsp;&nbsp;PRAZO DE ENTREGA: ____/____/_______<br>'
			.'&nbsp;APROVADO: _______________________ &nbsp;&nbsp;&nbsp;APROVEITAMENTO: _____________% &nbsp;&nbsp;&nbsp;PEÇAS: _______________<br>'
			. '&nbsp;PESO FOLHA: ___________________ Kg'
			.'&nbsp;</div><br>';

		$html.='<table border="1" cellspacing="0" cellpadding="4">'
			.'<tr><th width="4%">ID</th><th width="20%">TECIDO</th><th width="20%">COR</th><th width="10%">PED.</th><th width="10%">REAL</th><th width="18%">PREVISÃO</th><th width="18%">GASTO REAL</th></tr>';
		foreach ($objComando->GetComandoPecaArray() as $i => $objComandoPeca)
			$html.= '<tr><td>'.($i+1).'</td><td>'.$objComandoPeca->Tecido->Nome.'</td><td>'.$objComandoPeca->Cor->Nome.'</td><td>'.$objComandoPeca->QuantidadePanos.'</td><td></td><td>'.number_format($objComandoPeca->Peso, 3).' Kg</td><td></td></tr>';			
		
		$html.='</table><br>';
			
		$html.='<br><table border="1" cellspacing="0" cellpadding="4">'
			.'<tr><th width="4%">ID</th><th width="4%">PÇ</th><th width="23%">ANTES</th><th width="23%">DEPOIS</th><th width="23%">CAN.</th><th width="23%">GASTOS</th></tr>';
		for($i = 0; $i < 6; $i++)
			$html.= '<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
		
		$html.='</table><br>';

		$objArrayComandoRiscoGrupamentoReferencia = ComandoRisco::QueryArray(QQ::AndCondition(
			QQ::Equal(QQN::ComandoRisco()->ComandoId, $objComando->Id)), 
			QQ::Clause(QQ::GroupBy(QQN::ComandoRisco()->Referencia)));
		
		//$objArrayReferencias = 
		
		$html.='<br><table border="1" cellspacing="0" cellpadding="4">'
			.'<tr><th colspan="2" width="58%"></th><th colspan="7" width="42%">TAMANHOS</th></tr>'
			.'<tr><th width="15%">REF.</th><th width="28%">MOLDES</th><th width="15%">TEC.</th><th width="6%">PP</th><th width="6%">P</th><th width="6%">M</th><th width="6%">G</th><th width="6%">GG</th><th width="6%">EG</th><th width="6%">U</th></tr>';
		//for($i = 0; $i < 6; $i++)
		foreach ($objArrayComandoRiscoGrupamentoReferencia as $objComandoRiscoGrupamentoReferencia){
			$objArrayComandoRiscoGrupamentoMolde = ComandoRisco::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::ComandoRisco()->ComandoId, $objComando->Id),
					QQ::Equal(QQN::ComandoRisco()->Referencia, $objComandoRiscoGrupamentoReferencia->Referencia)),
				QQ::Clause(
					QQ::GroupBy(QQN::ComandoRisco()->MoldeId)));
			
			$strMoldes = '';
			foreach ($objArrayComandoRiscoGrupamentoMolde as $objComandoRiscoGrupamentoMolde)
				$strMoldes.= '(<small>'.$objComandoRiscoGrupamentoMolde->Molde->Nome.'</small>) ';
				
			$objArrayComandoRiscoGrupamentoSize = $objArrayComandoRiscoGrupamentoSize = ComandoRisco::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::ComandoRisco()->ComandoId, $objComando->Id),
					QQ::Equal(QQN::ComandoRisco()->Referencia, $objComandoRiscoGrupamentoReferencia->Referencia)),

				QQ::Clause(
					QQ::GroupBy(QQN::ComandoRisco()->TamanhoId)));
			$intPP = '';
			$intP = '';
			$intM = '';
			$intG = '';
			$intGG = '';
			$intEG = '';
			foreach ($objArrayComandoRiscoGrupamentoSize as $objComandoRiscoGrupamentoSize){
				if($objComandoRiscoGrupamentoSize->Tamanho->Valor == 'PP')
					$intPP = $objComandoRiscoGrupamentoSize->QuantidadeRisco;
				if($objComandoRiscoGrupamentoSize->Tamanho->Valor == 'P')
					$intP = $objComandoRiscoGrupamentoSize->QuantidadeRisco;
				if($objComandoRiscoGrupamentoSize->Tamanho->Valor == 'M')
					$intM = $objComandoRiscoGrupamentoSize->QuantidadeRisco;
				if($objComandoRiscoGrupamentoSize->Tamanho->Valor == 'G')
					$intG = $objComandoRiscoGrupamentoSize->QuantidadeRisco;
				if($objComandoRiscoGrupamentoSize->Tamanho->Valor == 'GG')
					$intGG = $objComandoRiscoGrupamentoSize->QuantidadeRisco;
				if($objComandoRiscoGrupamentoSize->Tamanho->Valor == 'EG')
					$intEG = $objComandoRiscoGrupamentoSize->QuantidadeRisco;
			}
			
			$html.= '<tr><td>'.$objComandoRiscoGrupamentoReferencia->Referencia.'</td><td>'.$strMoldes.'</td><td></td><td>'.$intPP.'</td><td>'.$intP.'</td><td>'.$intM.'</td><td>'.$intG.'</td><td>'.$intGG.'</td><td>'.$intEG.'</td><td></td></tr>';
		
			
		}
		$html.='</table><br>';

		$html.= '<div style="border:1px solid #000; line-height: 15px;">'
			. 'OBSERVAÇÃO CORTADEIRA:<br> '
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'		
			. '________________________________________________________________'		
			.'</div>';

		$html.= '<div style="border:1px solid #000; line-height: 15px;">'
			. 'OBSERVAÇÃO PCP:<br>'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'		
			. '________________________________________________________________'			
			.'</div><br>';

		$html.='<br><table border="1" cellspacing="0" cellpadding="4">'
			.'<tr><th colspan="9">COR/REF</th></tr>'
			.'<tr><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>';
			foreach ($objComando->GetComandoPecaArray() as $i => $objComandoPeca)
				$html.= '<tr><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>';

		$html.= '<tr><th>TOTAL</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>';
		$html.='</table><br>';


		$html.= '<div style="border:1px solid #000; line-height: 15px;">'
			. 'AVALIAÇÂO:<br> _______________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'
			. '______________________________________________________________________________________________________'	
			.'</div><br>';

		$pdf->AddPage();

		$pdf->writeHTML($html, true, false, true, false, '');

		$pdf->Output('example_006.pdf', 'I');
	}
	
	
	
?>