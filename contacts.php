<?php
  $path_to_style="contacts/style.css";
  $path_to_layout="contacts/layout.css";
  include('templates/header_with_login.php');  
?>
    <section>
        <header>
            <h1>HIPEC</h1>
            <h2>For the expected, unexpected and everything in between</h2>
          </header>
          <header id=contact_info>    
              <p><b> HIPEControl</b> <br> Rua Dr.Roberto Frias <br> 4200-465, Porto</p> <br>
              <p><b>Telefone: </b>  <br> +351 234 909 727</p>
              <p><b>E-mail: </b> <br>info@hipecontrol.pt </p> 
          </header>
          <div id=map>
          <!--inserir imagem de mapa-->
          <script>
            // Initialize and add the map
            function initMap() {
              // The location of Uluru
              var uluru = {lat: 41.178838, lng:-8.594618};
              map = new google.maps.Map(document.getElementById('map'), {
              center: uluru,
                zoom: 14
        });
              var marker = new google.maps.Marker({position: uluru, map: map});
            }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxZDMnFrdAY8qvNUcRly30f_-2wv-rNp8&callback=initMap">
                </script>
                </div>
          
              </section>
  </body>
</html>
