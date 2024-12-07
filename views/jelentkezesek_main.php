

<section class="about_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
      Pontszámok!
      </h2>
      <div class="d-flex justify-content-center mt-5">
        <a href="pdf/pdf.php" class="call_to-btn  ">

          <span>
            Pdf Generálása
          </span>
          <img src="images/right-arrow.png" alt="">
        </a>
      </div>
      <br>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Jelentkező neve</th>
      <th scope="col">Képzés neve</th>
      <th scope="col">Sorrend</th>
      <th scope="col">Szerzett pontszám</th>
    </tr>
  </thead>
  <tbody>
  <?php 
$tomb=$viewData['lista'];
for($i=0;$i<count($tomb);$i++){   ?> 
    
<tr>
    <td><?php echo($tomb[$i]['nev'])?></td>
    <td><?php echo($tomb[$i]['kepzes'])?></td>
    <td><?php echo($tomb[$i]['sorrend'])?></td>
    <td><?php echo($tomb[$i]['szerzett'])?></td>										
</tr>               
<?php } ?>
  </tbody>
</table>
    </div>
  </section>
</table>