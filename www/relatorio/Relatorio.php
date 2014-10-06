<?php

	require_once('assets/tcpdf/examples/tcpdf_include.php');
	require_once 'assets/tcpdf/tcpdf.php';
	
	require_once 'relatorio/comando.php';

	class Relatorio {
		
		public static function PrintComando(Comando $objComando){
			RelatorioComando($objComando);
		}
		
	}

?>