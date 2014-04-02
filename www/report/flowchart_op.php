<?php

//	require_once(__DOCROOT__.'/assets/tcpdf/examples/tcpdf_include.php');
	require_once(__DOCROOT__.'/assets/tcpdf/tcpdf.php');

	
function FlowchartOpPrint(QForm $objForm, FlowchartOp $objFlowchartOp)	{

	$objFlowchartGridArrayColor = FlowchartGrid::LoadArrayByFlowchartOpId($objFlowchartOp->Id, QQ::Clause(QQ::GroupBy(QQN::FlowchartGrid()->ColorId)));
	
	$strTableHtml = '<table cellspacing="0" cellpadding="1" border="1">'
		. '<tr>'
			. '<th colspan="5">FLUXOGRAMA DA '.strtoupper($objForm->GetReference($objFlowchartOp)).'</th>'
			. '<th>ORDEM DE PRODUÇÃO</th>'
			. '<th>QUANTIDADE</th>'
			. '<th rowspan="2" colspan="'.count($objFlowchartGridArrayColor).'">POSIÇÃO NO PROCESSO PRODUTIVO</th>'
		. '</tr>'
		. '<tr>'
			. '<th colspan="5">PACOTE '.(($objFlowchartOp->Package)?$objFlowchartOp->Package->Name:'').'</th>'
			. '<th>'.$objFlowchartOp->ProductionOrder.'</th>'
			. '<th>'.$objForm->GetTotal($objFlowchartOp).'</th>'
		. '</tr>'
		. '<tr>'
			. '<th></th>'
			. '<th>AÇÕES</th>'
			. '<th>MAQ</th>'
			. '<th>N. MAQ</th>'
			. '<th>TEMPO</th>'
			. '<th colspan="2">HORAS</th>';
	
	foreach (FlowchartGrid::LoadArrayByFlowchartOpId($objFlowchartOp->Id, QQ::Clause(QQ::GroupBy(QQN::FlowchartGrid()->ColorId))) as $objFlowchartGrid){
		$strTableHtml.=  '<th>'.$objFlowchartGrid->Color->Name.'<br>';
		foreach (FlowchartGrid::LoadArrayByColorIdFlowchartOpId($objFlowchartGrid->ColorId, $objFlowchartOp->Id) as $objFlowchartGridSize){
			$strTableHtml.= $objFlowchartGridSize->Amount.'('.$objFlowchartGridSize->Size->Value.')<br>';
		}
		$strTableHtml.='</th>';
	}
		
	$strTableHtml.='</tr>';
	
	$intSumActions = 0;
	$intSumTotal = 0;
	foreach ($objFlowchartOp->GetFlowchartArray() as $objFlowchart) {
		$strTableHtml.=  '<tr>'
			. '<td>'.$objFlowchart->Order.'</td>'
			. '<td>'.(($objFlowchart->Actions)?$objFlowchart->Actions->Name:'').'</td>'
			. '<td>'.(($objFlowchart->Machine)?$objFlowchart->Machine->MachineKind->Name:'').'</td>'
			. '<td>'.(($objFlowchart->Machine)?$objFlowchart->Machine->Name:'').'</td>'
			. '<td>'.gmdate("H:i:s", $objFlowchart->Time).'</td>'
			. '<td colspan="2">'.gmdate("H:i:s", $objFlowchart->Time*$objForm->GetTotal($objFlowchartOp)).'</td>';
		foreach ($objFlowchartGridArrayColor as $objFlowchartColor){
			$objFlowchartTime = FlowchartTime::LoadByColorIdFlowchartIdFlowchartOpId($objFlowchartColor->ColorId, $objFlowchart->Id, $objFlowchartOp->Id);
			$strTableHtml.='<td>'.(($objFlowchartTime->Time)?gmdate("H:i:s", $objFlowchartTime->Time):'').'</td>';
		}
		$strTableHtml.='</tr>';
		
		$intSumActions+=$objFlowchart->Time;
		$intSumTotal+=$objFlowchart->Time*$objForm->GetTotal($objFlowchartOp);
	}

	
	
	$strTableHtml.= '<tr>'
			. '<td colspan="4" >TEMPO TOTAL</td>'
			. '<td>'.gmdate("H:i:s", $intSumActions).'</td>'
			. '<td colspan="2">'.gmdate("H:i:s", $intSumTotal).'</td>'
		. '</tr>';	
	$strTableHtml.='</table>';
	
	
	
	$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Nicola Asuni');
	$pdf->SetTitle('TCPDF Example 048');
	$pdf->SetSubject('TCPDF Tutorial');
	$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

	// set default header data
	//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);

	// set header and footer fonts
	//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	// set some language-dependent strings (optional)
	//if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	//    require_once(dirname(__FILE__).'/lang/eng.php');
	//    $pdf->setLanguageArray($l);
	//}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 10);

// -----------------------------------------------------------------------------


$pdf->writeHTML($strTableHtml, true, false, false, false, '');


$pdf->SetFillColor(255, 255, 255);

// set color for text
$pdf->SetTextColor(0, 0, 0);
$y = $pdf->getY();

$left_column = '';
$right_column = '';


foreach (FlowchartTime::LoadArrayByFlowchartOpId($objFlowchartOp->Id, QQ::Clause(QQ::GroupBy(QQN::FlowchartTime()->ColorId))) as $objFlowchartTimeColor){
	$pdf->AddPage();
	foreach (FlowchartTime::LoadArrayByColorIdFlowchartOpId($objFlowchartTimeColor->Id, $objFlowchartOp->Id) as $i => $objFlowchartTime) {
		if($i%8==0 && $i != 0)$pdf->AddPage();
		if($i%2==0){
			$left_column='<table cellspacing="0" cellpadding="1" border="1">';
				$left_column.='<tr nobr="true"><td>DATA</td><td>'.$objFlowchartTime->Date.'</td></tr>';
				$left_column.='<tr nobr="true"><td>REFERÊNCIA</td><td>'.Flowchart::Load($objFlowchartTime->FlowchartId)->Reference->Name.'</td></tr>';
				$left_column.='<tr nobr="true"><td>VARIAÇÃO</td><td>'.$objFlowchartTime->Color->Name.'</td></tr>';
				$left_column.='<tr nobr="true"><td>COSTUREIRA</td><td></td></tr>';
				$left_column.='<tr nobr="true"><td>'.Flowchart::Load($objFlowchartTime->FlowchartId)->Order.'&deg; OPERAÇÃO </td><td>'.Flowchart::Load($objFlowchartTime->FlowchartId)->Actions->Name.'</td></tr>';
				$left_column.='<tr nobr="true"><td>TEMPO</td><td>'.gmdate("H:i:s", Flowchart::Load($objFlowchartTime->FlowchartId)->Time).'</td></tr>';
				$left_column.='<tr nobr="true"><td>QUANTIDADE DE PEÇA</td><td>'.$objForm->GetTotalByColor($objFlowchartTime).'</td></tr>';
				$left_column.='<tr nobr="true"><td>TEMPO TOTAL</td><td></td></tr>';
			$left_column.='</table>';
			$pdf->writeHTMLCell(135, '', '', '', $left_column, 1, 0, 1, true, 'J', true);
		} else {
			$right_column='<table cellspacing="0" cellpadding="1" border="1">';
				$right_column.='<tr nobr="true"><td>DATA</td><td>'.$objFlowchartTime->Date.'</td></tr>';
				$right_column.='<tr nobr="true"><td>REFERÊNCIA</td><td>'.Flowchart::Load($objFlowchartTime->FlowchartId)->Reference->Name.'</td></tr>';
				$right_column.='<tr nobr="true"><td>VARIAÇÃO</td><td>'.$objFlowchartTime->Color->Name.'</td></tr>';
				$right_column.='<tr nobr="true"><td>COSTUREIRA</td><td></td></tr>';
				$right_column.='<tr nobr="true"><td>'.Flowchart::Load($objFlowchartTime->FlowchartId)->Order.'&deg; OPERAÇÃO </td><td>'.Flowchart::Load($objFlowchartTime->FlowchartId)->Actions->Name.'</td></tr>';
				$right_column.='<tr nobr="true"><td>TEMPO</td><td>'.gmdate("H:i:s",Flowchart::Load($objFlowchartTime->FlowchartId)->Time).'</td></tr>';
				$right_column.='<tr nobr="true"><td>QUANTIDADE DE PEÇA</td><td>'.$objForm->GetTotalByColor($objFlowchartTime).'</td></tr>';
				$right_column.='<tr nobr="true"><td>TEMPO TOTAL</td><td></td></tr>';
			$right_column.='</table>';
			$pdf->writeHTMLCell(135, '', '', '', $right_column, 1, 1, 1, true, 'J', true);
		}
	}
}



$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+	
	
}

?>