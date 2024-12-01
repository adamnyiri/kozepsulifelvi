<?php 
$tomb=$viewData['lista'];
?>
<h2> Vélemények </h2>
<table>
<tr>
    <th>Vélemény</th>
    <th>Felhasználó</th>
    <th>Dátum</th>		    																			
</tr>
		
<?php 
for($i=0;$i<count($tomb);$i++){    
    ?>
<tr>
    <td><?php echo($tomb[$i]['szoveg'])?></td>
    <td><?php echo($tomb[$i]['login'])?></td>
    <td><?php echo($tomb[$i]['idopont'])?></td>    										
</tr>               
<?php } ?>
</table>
