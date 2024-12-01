<?php

class Fooldal_Controller
{
	public $baseName = 'fooldal';  
	public function main(array $vars)
	{
		$view = new View_Loader($this->baseName."_main");
	}
}

?>