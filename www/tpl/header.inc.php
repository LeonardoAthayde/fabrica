<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?=__VIRTUAL_DIRECTORY__?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=__VIRTUAL_DIRECTORY__?>/assets/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="<?=__VIRTUAL_DIRECTORY__?>/assets/css/base.css">
		
		<script src="<?=__VIRTUAL_DIRECTORY__?>/assets/js/jquery-2.1.0.min.js" ></script>
		<script src="<?=__VIRTUAL_DIRECTORY__?>/assets/js/bootstrap.min.js" ></script>
	</head>
	<?php $this->RenderBegin(); ?>

	
	
	
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<?php foreach (Menu::QueryArray(QQ::AndCondition(QQ::Equal(QQN::Menu()->MenuId, null), QQ::Equal(QQN::Menu()->Usuario->UsuarioId, $this->objUsuario->Id)), QQ::Clause(QQ::OrderBy(QQN::Menu()->Ordenacao))) as $objMenu) { ?>
						<?php if(Menu::CountByMenuId($objMenu->Id) > 0) { ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span <?=($objMenu->Icon!='')?'class="'.$objMenu->Icon.'"':''?>></span> <?=$objMenu->Nome; ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php foreach (Menu::QueryArray(QQ::AndCondition(QQ::Equal(QQN::Menu()->MenuId, $objMenu->Id), QQ::Equal(QQN::Menu()->Usuario->UsuarioId, $this->objUsuario->Id)), QQ::Clause(QQ::OrderBy(QQN::Menu()->Ordenacao))) as $objMenu) { ?>
								<li><a href="<?=__VIRTUAL_DIRECTORY__.$objMenu->Link ?>"><?=$objMenu->Nome; ?></a></li>
								<?php } ?>
							</ul>
						</li>
						<?php } else { ?>
						<li><a href="<?=__VIRTUAL_DIRECTORY__.$objMenu->Link; ?>"><span <?=($objMenu->Icon!='')?'class="'.$objMenu->Icon.'"':''?>></span> <?=$objMenu->Nome; ?></a></li>
						<?php } ?>
					<?php } ?>
					<!--<li><a href="<?=__VIRTUAL_DIRECTORY__ ?>"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUÇÃO <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?=__VIRTUAL_DIRECTORY__ ?>/importar_ordem_producao.php">IMPORTAR GRADE</a></li>
							<li><a href="<?=__VIRTUAL_DIRECTORY__ ?>/ordem_execucao.php">ORDEM DE EXECUÇÃO</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">COSTUREIRA <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?=__VIRTUAL_DIRECTORY__ ?>/gerenciar_costureira.php">GERENCIAR TEMPO DE COSTUREIRA</a></li>
							<li><a href="<?=__VIRTUAL_DIRECTORY__ ?>/analise_costureira.php">ANÁLISE DA COSTUREIRA</a></li>
						</ul>
					</li>
					<li><a href="<?=__VIRTUAL_DIRECTORY__ ?>/flowcharts.php">FLUXOGRAMA</a></li>-->
				</ul>
				
			</div>
		</div>
	</nav>	
	<div class="container">