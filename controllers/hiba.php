<?php

class Hiba_Controller
{
	public $baseName = 'hiba';  
	public function main(array $vars)
	{
		$view = new View_Loader($this->baseName.'_main');
	}
}

?>