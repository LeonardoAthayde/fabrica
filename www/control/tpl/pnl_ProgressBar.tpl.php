<?php
	$intMeta = 31200;
	QQ::
	$this->objCostureira->Nome;
	$objArrayCostureiraTempoEficiente = CostureiraTempoEficiente::QueryArray(QQ::AndCondition(
		QQ::Equal(QQN::CostureiraTempoEficiente()->CostureiraProducao->CostureiraId, $this->objCostureira->Id),
		QQ::Equal(QQN::CostureiraTempoEficiente()->Date, QDateTime::Now(false))));
	
	$intTempoEficiente = 0;
	foreach ($objArrayCostureiraTempoEficiente as $objCostureiraTempoEficiente)
		$intTempoEficiente+= $objCostureiraTempoEficiente->Tempo;
	
	$intPorcentagem = ($intTempoEficiente*120)/$intMeta;
	
?>
<div class="progress">
	<div class="progress-bar" role="progressbar" aria-valuenow="<?=$intPorcentagem; ?>" aria-valuemin="0" aria-valuemax="<?=$intMeta; ?>" style="width: <?=$intPorcentagem; ?>%;">
		<?=gmdate("H:i:s", $intTempoEficiente*1.2);?>
	</div>
</div>