<?php

class Velemenyek_Controller
{
	public $baseName = 'velemenyek';  
	public function main(array $vars) 
	{		
		$velemenyekModel = new Velemenyek_Model; 
		$retData = $velemenyekModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			echo "Hiba";
		$view = new View_Loader($this->baseName.'_main');
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>