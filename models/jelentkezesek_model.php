<?php

class Jelentkezesek_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		$retData['uzenet']="";
		$retData['lista']=array();
		try {
			$connection = Database::getConnection();
			$sql = "SELECT jelentkezo.nev, kepzes.nev as 'kepzes', jelentkezes.sorrend, jelentkezes.szerzett from jelentkezes inner join jelentkezo on jelentkezes.jelentkezoid=jelentkezo.id inner join kepzes on kepzes.id = jelentkezes.kepzesid";
			$stmt = $connection->query($sql);
			$retData['lista'] = $stmt->fetchAll(PDO::FETCH_ASSOC);			
			}
		
		catch (PDOException $e) {
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
		
	}
}

?>