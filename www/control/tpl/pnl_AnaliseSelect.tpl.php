<?php $objCostureitaArray = Costureira::LoadAll(); foreach ($objCostureitaArray as $i => $objCostureira){ ?>
<?=($i%4 == 0)?'<div class="row">':''; ?> 
	<div class="col-lg-3 col-md-3">
		<div class="thumbnail" <?=$this->pxyAnaliseSelect->RenderAsEvents($objCostureira->Id, false);?>>
			<img src="<?=__VIRTUAL_DIRECTORY__.$objCostureira->ImagemFla; ?>" width="100%"  data-src="holder.js/300x200" alt="...">
			<div class="caption">
				<h3><?=$objCostureira->Nome; ?></h3>
			</div>
		</div>
	</div>
<?=(($i+1)%4 == 0 || ($i+1==count($objCostureitaArray)))?'</div>':''; ?> 
<?php } ?>