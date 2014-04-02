<?php $objCostureitaArray = Costureira::LoadAll(); foreach ($objCostureitaArray as $i => $objCostureira){ ?>
<?=($i%4 == 0)?'<div class="row">':''; ?> 
	<div class="col-lg-3 col-md-3">
		<div class="thumbnail">
			<img src="<?=__VIRTUAL_DIRECTORY__.$objCostureira->ImagemFla; ?>" width="100%"  data-src="holder.js/300x200" alt="...">
			<div class="caption">
				<h3><?=$objCostureira->Nome; ?></h3>
				<p><input type="button" class="btn btn-default width100 btn-lg" value="Confirmar" <?=$this->pxyConfirm->RenderAsEvents($objCostureira->Id, false);?>></p>
			</div>
		</div>
	</div>
<?=(($i+1)%4 == 0 || ($i+1==count($objCostureitaArray)))?'</div>':''; ?> 
<?php } ?>
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<div class="container">
		 <div class="navbar-header">
			 <a class="navbar-brand">
				<?php $this->lblSelected->Render(); ?>
			 </a>
		 </div>
	</div>
</nav>