<?php

class Belepo_Controller
{
	public $baseName = 'belepo'; 
	public function main(array $vars) 
	{
		$view = new View_Loader($this->baseName."_main");
	}
}

?>