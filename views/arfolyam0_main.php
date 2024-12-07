<?php

    try {
        $kliens = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");    
        $response_stdclass = $kliens->GetCurrentExchangeRates();
        $xml = $response_stdclass->GetCurrentExchangeRatesResult;        
        $parser=xml_parser_create();        
        xml_parse_into_struct($parser, $xml, $ertekek);?>

<section class="about_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
      Aktuális árfolyamok!
      </h2>
      
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Deviza</th>
      <th scope="col">Egység</th>
      <th scope="col">Árfolyam (HUF)</th>
    </tr>
  </thead>
  <tbody>
  <?php for($i=0; $i<count($ertekek); $i++){
            if($ertekek[$i]['tag'] == 'RATE'){?>            
            <tr>
                <td><?php echo ($i-1);?></td>
                <td><?php echo ($ertekek[$i]['attributes']['CURR']);?></td>
                <td><?php echo ($ertekek[$i]['attributes']['UNIT']);?></td>
                <td><?php echo ($ertekek[$i]['value'])."<br>";?></td>
            </tr> <?php                      
            }
        }?>
  </tbody>
</table>
    </div>
  </section>
</table>
<?php                   

} catch (SoapFault $e) {
    var_dump($e);
}
?>