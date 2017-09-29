<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Golf's controller 
class Golf extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->show(6);
	}

}
