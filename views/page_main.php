
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Középiskolai felvételi</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="<?php echo SITE_ROOT?>css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
    <?php 
    if($viewData['selected'] == 'fooldal_main') {
        echo ' <div class="top_container">';
    } else {
       echo '<div class="top_container sub_pages ">';
    }
    ?>
 
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="fooldal">
            <img src="images/logo.png" alt="">
            <span style="text-shadow: 2px 2px 4px #000000;">
              Felvételi Pontszámok
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
             
              <?php echo Menu::getMenu($viewData['selectedItems']); ?>
              </ul>
              <?php if(isset($_SESSION['login'])&&$_SESSION['userid']>0) { ?>Bejelentkezett: <strong><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname']." (".$_SESSION['login'].")" ?></strong><?php } ?> 
            </div>
        </nav>
      </div>
    </header>
    <?php 
    if($viewData['selected'] == 'fooldal_main') {
        echo '   <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Üdvözöllek<br>
            A Közép iskolai felvételi
          </h3>
          <h1>
            oldalon
          </h1>
          <p>
          Ha minél több információt szeretne megtudni a középiskolai felvételiről, akkor a weblapon tudd tájékózodni ezekről!
          </p>
 
        </div>
        <div class="hero_img-container">
          <div>
            <img src="images/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>';
    }
    ?>
    </div>
    
  <!-- end header section -->

  <?php if($viewData['render']) include($viewData['render']); ?>

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; <?= date("Y") ?> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
</body>

</html>
