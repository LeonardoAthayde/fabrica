<?php

	require(dirname(__FILE__) . '/../includes/prepend.inc.php');
	
	foreach (ReferenciaRendimento::LoadAll() as $objReferenciaRendimento){
		$objReferenciaRendimento->AssociateReferenciaAsUniao($objReferenciaRendimento->Referencia);
	}

?>