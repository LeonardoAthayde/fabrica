<?php require 'header.inc.php'; ?>
<ol class="breadcrumb">
	<li class="active">Escolher Costureira</li>
</ol>
<?php $objCostureitaArray = Costureira::LoadAll(); foreach ($objCostureitaArray as $i => $objCostureira){ ?>
<?=($i%4 == 0)?'<div class="row">':''; ?> 
	<a href="<?=__VIRTUAL_DIRECTORY__.'/gerenciamento_producao.php?id='.$objCostureira->Id; ?>">
		<div class="col-lg-3 col-md-3">
			<div class="thumbnail">
				<img src="<?=__VIRTUAL_DIRECTORY__.$objCostureira->ImagemFla; ?>" width="100%"  data-src="holder.js/300x200" alt="...">
				<div class="caption">
					<h3><?=$objCostureira->Nome; ?></h3>
				</div>
			</div>
		</div>
	</a>
<?=(($i+1)%4 == 0 || ($i+1==count($objCostureitaArray)))?'</div>':''; ?> 
<?php } ?>
<?php require 'footer.inc.php'; ?>