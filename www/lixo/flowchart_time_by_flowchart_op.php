<?php

	require 'base.php';
	
	class FlowchartTimeByFlowchartOpForm extends BaseForm {
		
		protected $objFLowchartTimeGroupByColorArray = array();
		protected $objFlowchartOp;
		
		protected function Form_Create() {
			$this->objFlowchartOp = Flowchart::Load($_GET['flowchart_op_id']);
			$this->objFLowchartTimeGroupByColorArray = FlowchartTime::LoadArrayByFlowchartOpId($this->objFlowchartOp->Id, QQ::Clause(QQ::GroupBy(QQN::FlowchartTime()->ColorId)));
		}


		protected function RenderBegin($blnDisplayOutput = true) {
			parent::RenderBegin($blnDisplayOutput);
			print(sprintf('<link rel="stylesheet" href="%s%s/%s">', __VIRTUAL_DIRECTORY__,__CSS_ASSETS__, 'flowchart_time_by_flowchart_op.css'));
			//print(sprintf('<script src="%s/%s"></script>', __VIRTUAL_DIRECTORY__ . __JS_ASSETS__, 'flowchart_op_create.js'));
		}		
		
	}
	
	FlowchartTimeByFlowchartOpForm::Run('FlowchartTimeByFlowchartOpForm', 'tpl/flowchart_time_by_flowchart_op.tpl.php');

?>