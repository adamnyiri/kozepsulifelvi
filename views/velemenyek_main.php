<?php 
$tomb=$viewData['lista'];
?>
<section class="about_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
      Vélemények!
      </h2>
      
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Vélemény</th>
      <th scope="col">Felhasználó</th>
      <th scope="col">Dátum</th>
    </tr>
  </thead>
  <tbody>	
  <?php 
for($i=0;$i<count($tomb);$i++){    
    ?>
<tr>
    <td><?php echo($tomb[$i]['szoveg'])?></td>
    <td><?php echo($tomb[$i]['login'])?></td>
    <td><?php echo($tomb[$i]['idopont'])?></td>    										
</tr>               
<?php } ?>
  </tbody>
</table>
    </div>
    <div class="container">
<p class="text-center">
  Vélemény írása<br>
  <?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?>
</p>
<div class="">
  <div class="contact_section-container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="contact-form">
          <form action = "<?= SITE_ROOT ?>velemenyek" method="post">
            <div>
            <input type="textarea" name="szoveg" required placeholder="Vélemény">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn_on-hover">
                Küldés
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
  </section>
</table>



