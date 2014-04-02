<?php require 'header.inc.php'; ?>

<?php foreach ($this->objFLowchartTimeGroupByColorArray as $objFLowchartTimeGroupByColor) { ?>
<div class="panel panel-default">
	<div class="panel-heading"><?=$objFLowchartTimeGroupByColor->Color->Name; ?></div>
	<div class="panel-body">
		<div class="panel-group" id="accordion<?=$objFLowchartTimeGroupByColor->ColorId; ?>">
		<?php foreach (Flowchart::LoadArrayByFlowchartOp($this->objFlowchartOp->Id) as  $i => $objFlowchart){ ?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion<?=$objFLowchartTimeGroupByColor->ColorId; ?>" href="#collapseOne<?=$i.$objFLowchartTimeGroupByColor->ColorId; ?>">
					<?=$objFlowchart->Order; ?>&deg; <?=$objFlowchart->Actions->Name; ?>
				</h4>
			</div>
			<div id="collapseOne<?=$i.$objFLowchartTimeGroupByColor->ColorId; ?>" class="panel-collapse collapse">
				<div class="panel-body">
					fsdf
				</div>
			</div>
		</div>			

		<?php } ?>
		</div>
	</div>	
	
</div>
<?php } ?>

<?php require 'footer.inc.php'; ?>