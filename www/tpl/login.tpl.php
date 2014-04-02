<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
		<title><?php QApplication::Translate('Login'); ?></title>
	</head>
	<?php $this->RenderBegin(); ?>
	<div id="wrap">
		<div class="container content login" style="width:300px;">	
			<h2><?php _t('Form Login') ?></h2>
			<?php $this->txtUser->Render(); ?>
			<?php $this->txtPassword->Render(); ?>
			<?php $this->btnConfirm->Render(); ?>
			<?php $this->objDefaultWaitIcon->Render(); ?>
		</div>
	
	
	
		<div id="push"></div>	
	</div>
<?php $this->RenderEnd(); ?>
</html>	
