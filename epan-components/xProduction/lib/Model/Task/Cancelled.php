<?php
namespace xProduction;

class Model_Task_Cancelled extends Model_Task{
	function init(){
		parent::init();

		$this->addCondition('status','cancel');
	}
}