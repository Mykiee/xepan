<?php

class page_xCRM_page_owner_page extends page_componentBase_page_owner_main {
	function initMainPage(){
		$this->add('H1')->set('Component Owner Main Page');
	}


	function page_config(){
		$this->add('H1')->set('Default Config Page');
	}
}