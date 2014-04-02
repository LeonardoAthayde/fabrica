<div class="row">
	<div class="col-lg-6">
		<ul class="list-group">
			<?php $objBalancoAcoesArrayNew = BalancoAcoes::QueryArray(QQ::AndCondition(
					QQ::NotEqual(QQN::BalancoAcoes()->QuantidadeDisponivel, 0),
					QQ::Equal(QQN::BalancoAcoes()->FluxogramaItem->Ordenacao, 1),
					QQ::Equal(QQN::BalancoAcoes()->OrdemProducaoGrade->BalancoPecas->Concluido, false)));
				foreach ($objBalancoAcoesArrayNew as $objBalancoAcoes) { ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-9">
						<?= $this->Create_CheckBox($objBalancoAcoes);	?>	
					</div>
					<div class="col-lg-3">
						<?= $this->Create_SelectBox($objBalancoAcoes); ?>			
					</div>
				</div>
			</li>
			<?php } ?>	
		</ul>
	</div>
	<div class="col-lg-6">
		<ul class="list-group">
			<?php foreach (BalancoAcoes::QueryArray(QQ::AndCondition(
					QQ::NotEqual(QQN::BalancoAcoes()->QuantidadeDisponivel, 0),
					QQ::NotEqual(QQN::BalancoAcoes()->FluxogramaItem->Ordenacao, 1),
					QQ::Equal(QQN::BalancoAcoes()->OrdemProducaoGrade->BalancoPecas->Concluido, false))) as $objBalancoAcoes) {  ?>
			
			
			
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-9">
						<?= $this->Create_CheckBox($objBalancoAcoes);	?>	
					</div>
					<div class="col-lg-3">
						<?= $this->Create_SelectBox($objBalancoAcoes); ?>			
					</div>
				</div>
			</li>			
			<?php } ?>	
		</ul>
	</div>
</div>
