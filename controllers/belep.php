<?php

class Belep_Controller
{
	public $baseName = 'belep';
	public function main(array $vars) 
	{
		$belepModel = new Belep_Model;  
		
		$retData = $belepModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "belepes";
		
		$view = new View_Loader($this->baseName.'_main');
		
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>