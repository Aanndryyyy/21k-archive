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