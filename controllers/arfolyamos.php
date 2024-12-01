<?php

class Arfolyamos_Controller
{
	public $baseName = 'arfolyamos';
	public function main(array $vars)
	{
		$arfolyamosModel = new Arfolyamos_Model;
		$retData = $arfolyamosModel->get_currencies();	
		$view = new View_Loader($this->baseName.'_main');
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
	
}

?>