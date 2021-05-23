<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
<body>
    
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
    
     <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      let map;

      function initMap() {
          const uluru = { lat: -25.344, lng: 131.036 };
          const uluru1 = { lat: -27.344, lng: 133.036 };
          const uluru2 = {lat: -30.344, lng: 140.036};
          const uluru3 = { lat: -34.344, lng: 145.036 };
          const uluru4 = { lat: -23.344, lng: 131.036 };
          const uluru5 = { lat: -20.344, lng: 131.036 };
          const uluru6 = { lat: -19.344, lng: 131.036 };
          const uluru7 = { lat: -18.344, lng: 131.036 };
          const uluru8 = { lat: -17.344, lng: 131.036 };
          const uluru9 = { lat: -16.344,  lng: 131.036 };
          const uluru10 = { lat: -15.344, lng: 131.036 };
          const uluru11 = { lat: -14.344, lng: 133.036 };
          const uluru12 = { lat: -13.344, lng: 133.036 };
          const uluru13 = { lat: -12.344, lng: 133.036 };
          const uluru14 = { lat: -11.344, lng: 133.036 };
          const uluru15 = { lat: -10.344, lng: 133.036 };
          const uluru16 = { lat: -31.344, lng: 133.036 };
          const uluru17 = { lat: -32.344, lng: 133.036 };
          const uluru18 = { lat: -33.344, lng: 133.036 };
          const uluru19 = { lat: -20.245, lng: 133.036 };
          const uluru20 = { lat: -21.555, lng: 133.036 };
          const uluru21 = { lat: -25.584, lng: 133.036 };
          const uluru22 = { lat: -26.999, lng: 133.036 };
          const uluru23 = { lat: -17.220, lng: 133.036 };
          const uluru24 = { lat: -15.666, lng: 133.036 };
          const uluru25 = { lat: -19.123, lng: 133.036 };
          const uluru26 = { lat: -19.543, lng: 133.036 };
          const uluru27 = { lat: -28.678, lng: 133.036 };
          const uluru28 = { lat: -21.890, lng: 133.036 };
          const uluru29 = { lat: -32.378, lng: 133.036 };
          const uluru30 = { lat: -22.578, lng: 133.036 };
        const map = new google.maps.Map(document.getElementById("map"), {
          center: uluru,
          zoom: 4,
        });
          const marker = new google.maps.Marker({
              position: uluru,
              map: map,
  });
          const marker1 = new google.maps.Marker({
              position: uluru1,
              map: map,
  });
          const marker2 = new google.maps.Marker({
              position: uluru2,
              map: map,
  });
          const marker3 = new google.maps.Marker({
              position: uluru3,
              map: map,
  });
          const marker4 = new google.maps.Marker({
              position: uluru4,
              map: map,
  });
          const marker5 = new google.maps.Marker({
              position: uluru5,
              map: map,
  });
          const marker6 = new google.maps.Marker({
              position: uluru6,
              map: map,
  });
          const marker7 = new google.maps.Marker({
              position: uluru7,
              map: map,
  });
          const marker8 = new google.maps.Marker({
              position: uluru8,
              map: map,
  });
          const marker9 = new google.maps.Marker({
              position: uluru9,
              map: map,
  });
          const marker10 = new google.maps.Marker({
              position: uluru10,
              map: map,
  });
          const marker11 = new google.maps.Marker({
              position: uluru11,
              map: map,
  });
          const marker12 = new google.maps.Marker({
              position: uluru12,
              map: map,
  });
          const marker13 = new google.maps.Marker({
              position: uluru13,
              map: map,
  });
          const marker14 = new google.maps.Marker({
              position: uluru14,
              map: map,
  });
          const marker15 = new google.maps.Marker({
              position: uluru15,
              map: map,
  });
          const marker16 = new google.maps.Marker({
              position: uluru16,
              map: map,
  });
          const marker17 = new google.maps.Marker({
              position: uluru17,
              map: map,
  });
          const marker18 = new google.maps.Marker({
              position: uluru18,
              map: map,
  });
          const marker19 = new google.maps.Marker({
              position: uluru19,
              map: map,
  });
          const marker20 = new google.maps.Marker({
              position: uluru20,
              map: map,
  });
          const marker21 = new google.maps.Marker({
              position: uluru21,
              map: map,
  });
          const marker22 = new google.maps.Marker({
              position: uluru22,
              map: map,
  });
          const marker23 = new google.maps.Marker({
              position: uluru23,
              map: map,
  });
          const marker24 = new google.maps.Marker({
              position: uluru24,
              map: map,
  });
          const marker25 = new google.maps.Marker({
              position: uluru25,
              map: map,
  });
          const marker26 = new google.maps.Marker({
              position: uluru26,
              map: map,
  });
          const marker27 = new google.maps.Marker({
              position: uluru27,
              map: map,
  });
          const marker28 = new google.maps.Marker({
              position: uluru28,
              map: map,
  });
          const marker29 = new google.maps.Marker({
              position: uluru29,
              map: map,
  });
          const marker30 = new google.maps.Marker({
              position: uluru30,
              map: map,
  });
      }
    </script>
  
          
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByKEo-eVV5YXXbbpGUsL7_Leuxb8c543U&callback=initMap&libraries=&v=weekly"
      async
            
            
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia', '131.036', '-25.344', 'rosu', '');
        
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia2', '131.036', '-30.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia3', '131.036', '-34.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia4', '131.036', '-23.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia5', '131.036', '-20.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia6', '131.036', '-19.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia7', '131.036', '-18.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia8', '131.036', '17.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia9', '131.036', '-16.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia10', '131.036', '-15.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia11', '131.036', '-14.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia12', '131.036', '-13.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia13', '131.036', '-12.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia14', '131.036', '-11.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia15', '131.036', '-10.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia16', '131.036', '-31.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia17', '131.036', '-32.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia18', '131.036', '-33.344', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia19', '131.036', '-20.245', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia20', '131.036', '-21.555', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia21', '131.036', '-21.555', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia22', '131.036', '-26.999', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia23', '131.036', '-17.220', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia24', '131.036', '-15.666', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia25', '131.036', '-19.123', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia26', '131.036', '-19.543', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia27', '131.036', '-28.678', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia28', '131.036', '-21.890', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia29', '131.036', '-32.378', 'rosu', '');
        $sql= INSERT INTO `table` (`id`, `nume`, `longitudine`, `latitudine`, `culoare`, `dimensiune`) VALUES (NULL, 'australia30', '133.036', '-22.578', 'rosu', '');
    ></script>
    
    <table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Longitudine</th> 
    <th>Latitudie</th>
    <th>Culoare</th>
  </tr>
  <tr>
    <td>Australia</td>
    <td>131.036</td>
    <td>-25.344</td>
    <td>rosu</td>
  </tr>
  <tr>
    <td>Australia1</td>
    <td>131.036</td>
    <td>-30.344</td>
    <td>rosu</td>
  </tr>
  <tr>
    <td>Australia2</td>
    <td>131.036</td>
    <td>-34.344</td>
    <td>rosu</td>
  </tr>
    <tr>
    <td>Australia3</td>
    <td>131.036</td>
    <td>-34.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia4</td>
    <td>131.036</td>
    <td>-23.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia5</td>
    <td>131.036</td>
    <td>-20.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia6</td>
    <td>131.036</td>
    <td>-19.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia7</td>
    <td>131.036</td>
    <td>-18.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia8</td>
    <td>131.036</td>
    <td>-17.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia9</td>
    <td>131.036</td>
    <td>-16.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia10</td>
    <td>131.036</td>
    <td>-15.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia11</td>
    <td>131.036</td>
    <td>-14.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia12</td>
    <td>131.036</td>
    <td>-13.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia13</td>
    <td>131.036</td>
    <td>-12.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia14</td>
    <td>131.036</td>
    <td>-11.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia15</td>
    <td>131.036</td>
    <td>-10.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia16</td>
    <td>131.036</td>
    <td>-31.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia17</td>
    <td>131.036</td>
    <td>-32.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia18</td>
    <td>131.036</td>
    <td>-33.344</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia19</td>
    <td>131.036</td>
    <td>-20.245</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia20</td>
    <td>131.036</td>
    <td>-21.5554</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia21</td>
    <td>131.036</td>
    <td>-21.555</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia22</td>
    <td>131.036</td>
    <td>-26.999</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia23</td>
    <td>131.036</td>
    <td>-17.220</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia24</td>
    <td>131.036</td>
    <td>-15.666</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia25</td>
    <td>131.036</td>
    <td>-19.123</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia26</td>
    <td>131.036</td>
    <td>-19.543</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia27</td>
    <td>131.036</td>
    <td>-28.678</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia28</td>
    <td>131.036</td>
    <td>-21.890</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia29</td>
    <td>131.036</td>
    <td>-32.378</td>
    <td>rosu</td>
  </tr>
        <tr>
    <td>Australia30</td>
    <td>131.036</td>
    <td>-22.578</td>
    <td>rosu</td>
  </tr>
</table>

    
</body>
    </head>
</html>