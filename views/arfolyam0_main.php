
<pre>
<?php

    try {
        $kliens = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
        echo "<br>Aktuális árfolyamok<br>";       
        $response_stdclass = $kliens->GetCurrentExchangeRates();
        $xml = $response_stdclass->GetCurrentExchangeRatesResult;        
        $parser=xml_parser_create();        
        xml_parse_into_struct($parser, $xml, $ertekek);?>
        <table>
        <tr>
                <th>Deviza</th>
                <th>Egység</th>
                <th>Árfolyam (HUF)</th>
        <?php for($i=0; $i<count($ertekek); $i++){
            if($ertekek[$i]['tag'] == 'RATE'){?>            
            <tr>
                <td><?php echo ($ertekek[$i]['attributes']['CURR']);?></td>
                <td><?php echo ($ertekek[$i]['attributes']['UNIT']);?></td>
                <td><?php echo ($ertekek[$i]['value'])."<br>";?></td>
            </tr> <?php                      
            }
        }?>
        </table>        
        <?php                   

    } catch (SoapFault $e) {
        var_dump($e);
    }
?>
</pre>
