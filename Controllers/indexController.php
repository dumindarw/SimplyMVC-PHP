<?php

class indexController extends baseController
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->loadView('index/index');
	}

}

?>
