<h2>Árfolyamok lekérdezése:</h2> 

<?php $devizak=$viewData;
$db=count($devizak)-2; 
?><br>
<p> Lekérdezhető időszak:
<?php
$date1=$devizak[0];
$date2=$devizak[1];
echo $date1." - ".$date2;
?><br><br></p>

 
<form action="<?= SITE_ROOT ?>arfolyam" method="post">
    <fieldset>
        <br>                 
        <label for="d1">1. árfolyam:</label><select name="d1" id="d1">
        <?php for ($i=3;$i<$db-1;$i++){?>
            <option value="<?php echo $devizak[$i]?>"> <?php echo $devizak[$i]?> </option>
        <?php }?>
        </select>
        <br><br>
        <label for="d2">2. árfolyam: </label><select name="d2" id="d2">
        <?php for ($i=3;$i<$db-1;$i++){?>
            <option value="<?php echo $devizak[$i]?>"> <?php echo $devizak[$i]?> </option>
        <?php }?>
        </select>
        <br>
        <label for="datum1">Kezdő dátum</label><input type="date" name="datum1" id="datum1"  required><br>
        <label for="datum2">Befejező dátum</label><input type="date" name="datum2" id="datum2"  required><br>    
        <input type="submit" value="Lekérdező">
    </fieldset>
</form>




   
