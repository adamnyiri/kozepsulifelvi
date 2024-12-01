<?php

class Velemenyek_Model
{
	public function get_data($vars)
	{
		$retData['lista']=array();
        $retData['eredmeny'] = "";
        $login=$_SESSION['login'];
        $ido=date("Y.m.d H:i:s");
        
		try {
			    $connection = Database::getConnection();                	                			
                $sqlInsert = "insert into velemenyek(velemenyId, idopont, szoveg, login) values(0, :ido, :szoveg, :login)";
                             
                $stmt = $connection->prepare($sqlInsert); 
                $stmt->execute(array(':szoveg' => $vars['szoveg'], ':ido' => $ido, ':login' => $login));
                
				$retData['eredmeny'] = "OK";
				$retData['uzenet'] = "Az üzenet sikeresen rögzítve.";
                
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