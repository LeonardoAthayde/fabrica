<?php require 'header.inc.php'; ?>
<?php $this->flaOrdemProducao->RenderWithName(); ?>
<?php $this->pnlGrade->Render(); ?>
<?php $this->lstPackage->Render(); ?>
<?php $this->btnConfirm->Render(); ?>
<?php require 'footer.inc.php'; ?>