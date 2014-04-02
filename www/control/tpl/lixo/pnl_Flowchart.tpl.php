referência: <?=$this->txtSearchFlowchart->Text; ?>
<?php $this->dtgFlowchart->Render(); ?>
tempo total: 
<?php
	$dttTotalTime =	new QDateTime();
	$dttTotalTime->setDate(null, null, null);
	foreach ($this->objFlowchartArray as $objFlowchartArray) {
		if($objFlowchartArray->Time) {
			$dttTotalTime->AddSeconds($objFlowchartArray->Time->format('s'));
			//$dttTotalTime->AddMinutes($objFlowchartArray->Time->format('i'));
		}
	}
	//echo $dttTotalTime;
?>
