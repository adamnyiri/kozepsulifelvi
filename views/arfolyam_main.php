<?php
$ertekek = $viewData;
$tomb=array();
$j=0;
for($i=1; $i+4<count($ertekek); $i=$i+4){
    $tomb[$j]['date']=$ertekek[$i]['attributes']['DATE'];    
    $tomb[$j]['deviza1']=$ertekek[$i+1]['value'];      
    $tomb[$j]['deviza2']=$ertekek[$i+2]['value'];    
    $j++;
}
$jsonTable=json_encode($tomb);?>
<html>
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
    <?php echo "const javascript_array = " . $jsonTable . ";\n";?>
    
 google.charts.load('current', {'packages':['corechart']});
 google.charts.setOnLoadCallback(drawChart);
 
 
 function drawChart(){    
    
    var dataSet = [['Dátum', '<?php echo $ertekek[2]['attributes']['CURR']?>', '<?php echo $ertekek[3]['attributes']['CURR']?>'],
    <?php for ($i=0;$i<count($tomb)-1;$i++){?>
    [new Date('<?php echo $tomb[$i]['date']?>'), Number(<?php echo $tomb[$i]['deviza1']?>),Number(<?php echo $tomb[$i]['deviza2']?>)],
    <?php }?>
    [new Date('<?php echo $tomb[count($tomb)-1]['date']?>'), Number(<?php echo $tomb[count($tomb)-1]['deviza1']?>),Number(<?php echo $tomb[count($tomb)-1]['deviza2']?>)]];         
console.log(dataSet);
    var data = new google.visualization.arrayToDataTable(dataSet);
    var options = {
        title:'Értékek',
        legend:{position:'bottom'},
        chartArea:{width:'95%', height:'65%'}
    };
    var chart = new google.visualization.LineChart(document.getElementById('line_chart'));
    chart.draw(data, options);
 };
</script>
<style>
.page-wrapper
{
 width:1000px;
 margin:0 auto;
}
</style>
</head>  

<body>
    <table>
        <tr>
            <th>Dátum</th>
            <th>Deviza</th>
            <th>Egység</th>
            <th>Árfolyam (HUF)</th>
            <th>Deviza</th>
            <th>Egység</th>
            <th>Árfolyam (HUF)</th>
        </tr>
        <pre>
        <?php                
        for($i=1; $i+4<count($ertekek); $i=$i+4){     ?>           
            <tr>
                <td><?php echo ($ertekek[$i]['attributes']['DATE']);?></td>
                <td><?php echo ($ertekek[$i+1]['attributes']['CURR']);?></td>
                <td><?php echo ($ertekek[$i+1]['attributes']['UNIT']);?></td>
                <td><?php echo ($ertekek[$i+1]['value'])."<br>";?></td>
                <td><?php echo ($ertekek[$i+2]['attributes']['CURR']);?></td>
                <td><?php echo ($ertekek[$i+2]['attributes']['UNIT']);?></td>
                <td><?php echo ($ertekek[$i+2]['value'])."<br>";?></td>
            </tr>
        <?php
        }                     
        ?>
        </pre>
    </table>    
    <div class="page-wrapper">
    <br />
   
    [['Dátum', 'Érték1', 'Érték2'],
    <?php for ($i=0;$i<count($tomb)-1;$i++){?>
    ['<?php echo $tomb[$i]['date']?>', '<?php echo $tomb[$i]['deviza1']?>','<?php echo $tomb[$i]['deviza2']?>'],
    <?php }?>
    ['<?php echo $tomb[count($tomb)-1]['date']?>', '<?php echo $tomb[count($tomb)-1]['deviza1']?>','<?php echo $tomb[count($tomb)-1]['deviza2']?>']]
    <div id="line_chart" style="width: 100%; height: 500px"></div>
    </div>    

</body>   
</html>     







