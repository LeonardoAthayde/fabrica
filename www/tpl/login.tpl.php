<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
		<title><?php QApplication::Translate('Login'); ?></title>
		
		<link rel="stylesheet" href="<?=__VIRTUAL_DIRECTORY__?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=__VIRTUAL_DIRECTORY__?>/assets/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="<?=__VIRTUAL_DIRECTORY__?>/assets/css/base.css">
	</head>
	<?php $this->RenderBegin(); ?>
	<div id="wrap">
		<div class="container content login" style="width:300px;">	
				<h2><?php _t('Form Login') ?></h2>
				<div class="marginBottom20">
				<?php $this->txtUser->Render(); ?>
				</div><div class="marginBottom20">
				<?php $this->txtPassword->Render(); ?>
				</div><div class="marginBottom20">
				<?php $this->btnConfirm->Render(); ?>
				<?php $this->objDefaultWaitIcon->Render(); ?>
				</div>
			</div>
		
	
		<div id="push"></div>	
	</div>
<?php $this->RenderEnd(); ?>
</html>	
