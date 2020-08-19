<?php
session_start();

if($_SESSION['email']=='')
{
	header('location:index.php');
}
else{
	
	include 'nav.php';
	include 'head.php';
	?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- maps -->
				
				<div class="map-heading">
					<h2>Maps</h2>
				</div>
				
				<div class="agile-map-grids">
					<div class="col-md-6 map-grid">
						<div class="span11">
							<div id="map3"></div>
						</div>
						<script type="text/javascript">
							var map;
							$(document).ready(function(){
							  map = new GMaps({
								el: '#map3',
								lat: -12.043333,
								lng: -77.028333,
								mapTypeControlOptions: {
								  mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm", "cloudmade"]
								}
							  });
							  map.addMapType("osm", {
								getTileUrl: function(coord, zoom) {
								  return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
								},
								tileSize: new google.maps.Size(256, 256),
								name: "OpenStreetMap",
								maxZoom: 18
							  });
							  map.addMapType("cloudmade", {
								getTileUrl: function(coord, zoom) {
								  return "http://b.tile.cloudmade.com/8ee2a50541944fb9bcedded5165f09d9/1/256/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
								},
								tileSize: new google.maps.Size(256, 256),
								name: "CloudMade",
								maxZoom: 18
							  });
							  map.setMapTypeId("osm");
							});
						</script>
					</div>
					<div class="col-md-6 map-grid">
						<!-- v-map -->
						<div class="map-bg">
							<div id="vmap" style="width: 600px; height: 400px;"></div>
						</div>
							<script>
							  jQuery(document).ready(function () {
								jQuery('#vmap').vectorMap({
								  map: 'world_en',
								  backgroundColor: '#333333',
								  color: '#ffffff',
								  hoverOpacity: 0.7,
								  selectedColor: '#666666',
								  enableZoom: true,
								  showTooltip: true,
								  scaleColors: ['#C8EEFF', '#006491'],
								  values: sample_data,
								  normalizeFunction: 'polynomial'
								});
							  });
							</script>
							<!-- //v-map -->
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<div class="agile-bottom-maps">
					<div class="col-md-6 map-grid">
						<div class="map-bg">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1561659.212548834!2d-75.85228750854475!3d40.1397075563189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew+Jersey%2C+USA!5e0!3m2!1sen!2sin!4v1469783585045" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-6 map-grid">
						<div class="span11 gray-map">
							<div id="map1"></div>
						</div>
						<script>
							$(function () {
							  var map = new GMaps({
							  el: "#map1",
							  lat: 41.895465,
							  lng: 12.482324,
							  zoom: 5, 
							  zoomControl : true,
							  zoomControlOpt: {
								style : "SMALL",
								position: "TOP_LEFT"
							  },
							  panControl : true,
							  streetViewControl : false,
							  mapTypeControl: false,
							  overviewMapControl: false
							});
							
							var styles = [
								{
								  stylers: [
									{ hue: "#00ffe6" },
									{ saturation: -20 }
								  ]
								}, {
									featureType: "road",
									elementType: "geometry",
									stylers: [
										{ lightness: 100 },
										{ visibility: "simplified" }
								  ]
								}, {
									featureType: "road",
									elementType: "labels",
									stylers: [
										{ visibility: "off" }
								  ]
								}
							];
							
							map.addStyle({
								styledMapName:"Styled Map",
								styles: styles,
								mapTypeId: "map_style"  
							});
							
							map.setStyle("map_style");
						  });
						</script>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //maps -->
			</div>
			
		</div>
		<!-- footer -->
		<div class="footer">
				<p>© 2020 Test website developed By Abhishek kumar</a></p>
			</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>
<?php
}?>
