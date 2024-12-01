<?php

class Jelentkezesek_Controller
{
	public $baseName = 'jelentkezesek';
	public function main($vars)
	{		
		$jelentkezesekModel = new Jelentkezesek_Model;
		$retData = $jelentkezesekModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			echo "Hiba";
		$view = new View_Loader($this->baseName.'_main');
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>