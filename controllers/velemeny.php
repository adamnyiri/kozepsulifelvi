<?php

class Velemeny_Controller
{
	public $baseName = 'velemeny';
	public function main()
	{
		$velemenyModel = new Velemeny_Model;
		$retData = $velemenyModel->get_data();
		if($retData['eredmeny'] == "ERROR")
			echo "Hiba";
		$view = new View_Loader($this->baseName.'_main');
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>