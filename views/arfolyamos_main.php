<?php $devizak=$viewData;
$db=count($devizak)-2; 
$date1=$devizak[0];
$date2=$devizak[1];
?>
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">

      <h2 class="main-heading">
        Árfolyam lekérdezése

      </h2>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">
                <form action="<?= SITE_ROOT ?>arfolyam" method="post">
                  <div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">1. árfolyam:</label>
                    </div>
                  <select class="custom-select" id="inputGroupSelect01" name="d1">
                        <?php for ($i=3;$i<$db-1;$i++){?>
                            <option value="<?php echo $devizak[$i]?>"> <?php echo $devizak[$i]?> </option>
                        <?php }?>
        </select></div>
                  </div>
                  <div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">2. árfolyam:</label>
                    </div>
                  <select class="custom-select" id="inputGroupSelect01" name="d2">
                        <?php for ($i=3;$i<$db-1;$i++){?>
                            <option value="<?php echo $devizak[$i]?>"> <?php echo $devizak[$i]?> </option>
                        <?php }?>
        </select></div>
                  </div>
                  <div>
                  <label for="datum1">Kezdő dátum</label><input type="date" name="datum1" id="datum1"  required>
                  </div>
                  <div>
                  <label for="datum2">Befejező dátum</label><input type="date" name="datum2" id="datum2"  required>
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      Lekérdezés
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


  <!-- end contact section -->





   
