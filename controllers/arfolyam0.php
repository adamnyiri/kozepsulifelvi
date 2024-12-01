<?php

class Arfolyam0_Controller
{
	public $baseName = 'arfolyam0';  
	public function main(array $vars)
	{
		$view = new View_Loader($this->baseName."_main");
	}
}

?>