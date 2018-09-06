<?php

class Controller {

	public $message;
	
	function __construct($message=false)
	{
		$this->message = $message;
	}
}
