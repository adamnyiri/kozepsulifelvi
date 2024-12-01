<?php

class Kilepo_Controller
{
	public $baseName = 'kilepo';  
	public function main(array $vars)
    {
		$kilepoModel = new Kilepo_Model;  
		
		$retData = $kilepoModel->get_data(); 
		
		$view = new View_Loader($this->baseName.'_main');
		
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>