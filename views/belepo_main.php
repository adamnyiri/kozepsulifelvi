
 
   <!-- contact section -->

   <section class="contact_section layout_padding">
    <div class="container">

      <h2 class="main-heading">
        Bejelentkezés

      </h2>
      <p class="text-center">
        A Bejelentkezéshez adja meg adatait
    
      </p>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">
                <form action="<?= SITE_ROOT ?>belep" method="post">
                  <div>
                  <input type="text" name="login" id="login" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+" placeholder="Felhasználónév">
                  </div>
                  <div>
                  <input type="password" name="password" id="password" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+" placeholder="Jelszó">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      Bejelentkezés
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

 <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">

      <h2 class="main-heading">
        Regisztráció

      </h2>
      <p class="text-center">
        A regisztrációhoz adja meg adatait
        <br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br>
      </p>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">
                <form action = "<?= SITE_ROOT ?>regisztral" method="post">
                  <div>
                  <input type="text" name="csaladi_nev" required>
                  </div>
                  <div>
                  <input type="text" name="utonev" required>
                  </div>
                  <div>
                  <input type="text" name="login" required>
                  </div>
                  <div>
                  <input type="password" name="password"  required>
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      Regisztráció
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
