<?php 
$tomb=$viewData['lista'];
?>

<h2> Jelentkezések</h2>
<table>
<tr>
    <th>Jelentkező neve</th>
    <th>Képzés neve</th>
    <th>Sorrend</th>					
    <th>Szerzett pontszám</th>																			
</tr>
		
<?php 

for($i=0;$i<count($tomb);$i++){   ?> 
    
<tr>
    <td><?php echo($tomb[$i]['nev'])?></td>
    <td><?php echo($tomb[$i]['kepzes'])?></td>
    <td><?php echo($tomb[$i]['sorrend'])?></td>
    <td><?php echo($tomb[$i]['szerzett'])?></td>										
</tr>               
<?php } ?>
</table>