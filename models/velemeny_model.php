<?php

class Velemeny_Model
{
	public function get_data()
	{		
        $retData['eredmeny'] = "";
        $login=$_SESSION['login'];
        $ido=date("Y.m.d H:i:s");
        
		try {		                    
            $connection = Database::getConnection();    
            $sql = "SELECT * from velemenyek order by velemenyId desc";
			$stmt = $connection->query($sql);
			$retData['lista'] = $stmt->fetchAll(PDO::FETCH_ASSOC);		                
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
        echo $retData;
	}
}
?>