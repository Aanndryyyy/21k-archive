<?php //include 'header.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body style="background-color: #fafafa;">

    <!-- Navigation -->
    <nav style="box-shadow: 0 2px 2px -2px rgba(0,0,0,.15);">
      <div class="nav-wrapper">
        <div class="shadow">
          <div class="container" style="box-shadow: 0 2px 2px -2px rgba(0,0,0,.15);">
            <img class="hide-on-med-and-down" src="img/21k-logo.svg" height="40" style="padding: 0 15px; display: inline-block; position: absolute; margin-top: 4px;">
            <a href="#" class="brand-logo" style="margin-left: 80px">TALLINNA XXI KOOLI ARHIIV</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse" style="margin-left: 0; color: rgba(0,0,0,.8);"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a class="active" href="#">Avaleht</a></li>
              <li><a href="#">Arhiivid</a></li>
              <li><a href="#">Koolist</a></li>
              <li><a href="#">koostööpartnerid</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a class="active" href="#">Avaleht</a></li>
              <li><a href="#">Arhiivid</a></li>
              <li><a href="#">Koolist</a></li>
              <li><a href="#">koostööpartnerid</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- Search -->
    <div class="container">
      <div class="otsing">
        <h1 class="center-align" style="font-weight: 200;margin-top:100px; margin-bottom: 60px; font-size: 5rem;">OTSING</h1>
        <form autocomplete="off">
          <input placeholder="Sisesta märksõna, viide, vms…" id="otsi" type="text" class="center-align autocomplete" style="font-weight: 300; font-size: 1.25rem;" autocomplete="off">
        </form>
      </div>

      <div class="row" style="margin-top: 150px;">
        <div class="col m3 s12"><div class="stat"><h1 style="font-size: 1.25rem; width: 50%; margin: 0 auto; text-align: center; text-transform: uppercase; font-weight: 300; padding-top: 14px;">Statistika<br><small style="font-size: 1.25rem; font-weight: 600; line-height: 30px;">0000</small></h1></div></div>
        <div class="col m3 s12"><div class="stat"><h1 style="font-size: 1.25rem; width: 50%; margin: 0 auto; text-align: center; text-transform: uppercase; font-weight: 300; padding-top: 14px;">Statistika<br><small style="font-size: 1.25rem; font-weight: 600; line-height: 30px;">0000</small></h1></div></div>
        <div class="col m3 s12"><div class="stat"><h1 style="font-size: 1.25rem; width: 50%; margin: 0 auto; text-align: center; text-transform: uppercase; font-weight: 300; padding-top: 14px;">Statistika<br><small style="font-size: 1.25rem; font-weight: 600; line-height: 30px;">0000</small></h1></div></div>
        <div class="col m3 s12"><div class="stat"><h1 style="font-size: 1.25rem; width: 50%; margin: 0 auto; text-align: center; text-transform: uppercase; font-weight: 300; padding-top: 14px;">Statistika<br><small style="font-size: 1.25rem; font-weight: 600; line-height: 30px;">0000</small></h1></div></div>
      </div>

      <!-- Slides -->
      <div class="gallery-hero">
        <img src="img/p1.jpg" width="192">
        <img src="img/p2.png" width="192">
        <img src="img/p3.jpg" width="192">
        <img src="img/p4.gif" width="192">
        <img src="img/p5.jpg" width="192">
      </div>
      <div class="gallery-hero">
        <img src="img/p1.jpg" width="192">
        <img src="img/p2.png" width="192">
        <img src="img/p3.jpg" width="192">
        <img src="img/p4.gif" width="192">
        <img src="img/p5.jpg" width="192">
      </div>
      <div class="gallery-hero">
        <img src="img/p1.jpg" width="192">
        <img src="img/p2.png" width="192">
        <img src="img/p3.jpg" width="192">
        <img src="img/p4.gif" width="192">
        <img src="img/p5.jpg" width="192">
      </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer" style="padding-top:0;">
      <div class="footer-copyright white" style="padding: 0 15px;">
        <div class="container" style="color: rgba(0,0,0,.44); font-size: .875rem;">
        <a href="http://21k.ee/" class="footer-nav-item">TALLINNA XXI KOOL</a> © 2017
        <div class="right" style="text-transform: uppercase;">
          <a href="#" class="footer-nav-item" style="margin-right: 15px;">Kontakt</a>
          <a href="#" class="footer-nav-item">Veateade</a>
        </div>
        </div>
      </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>

    <script type="text/javascript">
    	$(document).ready(function(){
        $(".button-collapse").sideNav();
        $('input.autocomplete').autocomplete({
          data: {
            "Apple": null,
            "Microsoft": null,
            "Google": 'http://placehold.it/250x250'
          },
          limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
        });
			  $('.gallery-hero').slick({
			    slidesToShow: 3,
          autoplay: true,
          autoplaySpeed: 5000,
          dots: false,
          prevArrow: false,
          nextArrow: false,
          variableWidth: true,
          centerMode: true,
          slidesToScroll: 1
			  });
			});
    </script>
  </body>
</html>

<?php //include 'footer.php'; ?>