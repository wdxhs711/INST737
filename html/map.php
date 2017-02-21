<html>
<head>
<title>INST737 Pokémon Team</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.0-beta.2/leaflet.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.0-beta.2/leaflet.js"></script>

<link rel="stylesheet" href="js/MarkerCluster.css" />
<link rel="stylesheet" href="js/MarkerCluster.Default.css" />
<script src="js/leaflet.markercluster-src.js"></script>
<script src="js/test2.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />


<script>
$(document).ready(function(){
	

  // load a tile layer
  var tiles =L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    {
     maxZoom: 17,
	minZoom: 3,
    }),
	latlng = L.latLng(20.525745,-97.460829);
	
	var map = L.map('map', { center: latlng, zoom: 5, layers: [tiles] });
	
	
	
	

	var progress = document.getElementById('progress');
	var progressBar = document.getElementById('progress-bar');

		function updateProgressBar(processed, total, elapsed, layersArray) {
			if (elapsed > 1000) {
				// if it takes more than a second to load, display the progress bar:
				progress.style.display = 'block';
				progressBar.style.width = Math.round(processed/total*100) + '%';
			}

			if (processed === total) {
				// all markers processed - hide the progress bar:
				progress.style.display = 'none';
			}
		}

		var markers = L.markerClusterGroup({ chunkedLoading: true, chunkProgress: updateProgressBar });

		var markerList = [];

		for (var i = 0; i < addressPoints.length; i++) {
			var a = addressPoints[i];
			var marker = L.marker(L.latLng(a[0], a[1]));
			var title="Coordinates:"+a[0]+","+a[1];
			marker.bindPopup(title);
			markerList.push(marker);
		}
		


		markers.addLayers(markerList);
		map.addLayer(markers);
	
   
})
</script>

</head>
<body>

	<div id="site">
		<div id="header">																																	
			<div id="menu">
				<ul>
					<li><a href="index.php" class="but1 "><img src="images/spacer.gif" alt="" width="106" height="42" /></a></li>
					<li><a href="about.php" class="but2"><img src="images/spacer.gif" alt="" width="118" height="42" /></a></li>
					<li><a href="map.php" class="but4"><img src="images/spacer.gif" alt="" width="118" height="42" /></a></li>
					<li><a href="ct.php" class="but3"><img src="images/spacer.gif" alt="" width="118" height="42" /></a></li>
				</ul>
				
			</div>
			
		</div>
		
		
		
		<div id="progress"><div id="progress-bar"></div></div>
		<div id="map"></div>
			
			
		
			
		
		


		<div id="footer">
			<div>
				<span>Copyright &copy;. All rights reserved. Design from INST737 Pokémon Team</span>
			
			</div>
		</div>
	</div>
</body>
</html>
