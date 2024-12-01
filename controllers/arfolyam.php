<?php

class Arfolyam_Controller
{
	public $baseName = 'arfolyam';  
	public function main(array $vars)
	{
		$arfolyamModel = new Arfolyam_Model; 
		$retData = $arfolyamModel->get_rates($vars['datum1'],$vars['datum2'], $vars['d1'], $vars['d2']);	
		$view = new View_Loader($this->baseName.'_main');
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
	
}

?>