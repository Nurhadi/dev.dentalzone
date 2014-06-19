    <footer class="page-footer">
      <div class="container text-center">
        Dental Zone &copy; 2014. Developed by Invinity Technologies
      </div>
    </footer><!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="<?php echo base_url('assets/scripts/jquery.min.js'); ?>"></script>
    <!--Include all compiled plugins (below), or include individual files as needed-->
    <script src="<?php echo base_url('assets/scripts/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/scripts/script.js'); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        // active header menu
        $(".main-header-nav li").each(function(){
          url_menu = $(this).children().attr("href");
          if(url_menu === document.URL){
            $(this).addClass("active");
          }
        });

        // google maps in about us page
        function initialize() {
          var myLatlng = new google.maps.LatLng(-6.90920, 107.62008);
          var mapOptions = {
            zoom: 19,
            center: myLatlng
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Hello World!'
          });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
      });
    </script>
  </body>
</html>