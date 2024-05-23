<?php
$bagian = [
    "shp_administrasi"=>"#ff0000",
    "shp_boalemo"=>"#009900"
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Data Spasial Kabupaten Boalemo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <link rel="stylesheet" href="leaflet-panel-layers-master/src/leaflet-panel-layers.css" />

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="leaflet.ajax.js"> </script>

    <script src="leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
    <style>
        #map { height: 100vh; }
    </style>

</head>
<body>
    <div id="map">

    </div> 
</body>
<script>
    var map = L.map('map').setView([0.6455238941994681, 122.33097259560547], 11);

    
    var LayerKita = new L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
        
    });
    map.addLayer(LayerKita);

    var myStyle = {
        "color": "#ff0000",
        "weight":5,
        "opacity": 5
    };

    var myStyle2 = {
        "color": "#0000ff",
        "weight":2,
        "opacity": 0.9
    };

    var myStyle3 = {
        "color": "#008000",
        "weight":2,
        "opacity": 0.9
    };

    var myStyle4 = {
        "color": "#00008B",
        "weight":2,
        "opacity": 0.9
    };

    var myStyle5 = {
        "color": "#d5b43c",
        "weight":3,
        "opacity": 3
    };

function popUp(f,l){
    var out = [];
    if (f.properties){
        for(key in f.properties){
            out.push(key+": "+f.properties[key]);
        }
        l.bindPopup(out.join("<br />"));
    }
}


//legend//
 
function iconByName(name) {
	return '<i class="icon icon-'+name+'"></i>';
}

function featureToMarker(feature, latlng) {
	return L.marker(latlng, {
		icon: L.divIcon({
			className: 'marker-'+feature.properties.amenity,
			html: iconByName(feature.properties.amenity),
			iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
			iconSize: [25, 41],
			iconAnchor: [12, 41],
			popupAnchor: [1, -34],
			shadowSize: [41, 41]
		})
	});
}

var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
});

var googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
});

var baseLayers = [
	{
		name: "Peta Jalan",
		layer: LayerKita
	},
    {
		name: "Citra Satelit",
		layer: googleHybrid
	},
	{
		name: "Topografi",
		layer: googleTerrain
	}
	
	
];


var overLayers = [
    {
		name: "Peta Wilayah Administrasi",
		layer: new L.GeoJSON.AJAX(["shp_administrasi.geojson"],{onEachFeature:popUp,style:myStyle ,pointToLayer: featureToMarker}).addTo(map)
	},
	{
		name: "Irigasi",
		layer: new L.GeoJSON.AJAX(["shp_boalemo.geojson"],{onEachFeature:popUp,style:myStyle2 ,pointToLayer: featureToMarker}).addTo(map)
	},
    {
		name: "Lahan Sawah",
		layer: new L.GeoJSON.AJAX(["shp_sawah.geojson"],{onEachFeature:popUp,style:myStyle3 ,pointToLayer: featureToMarker}).addTo(map)
	},
    {
		name: "Sungai",
		layer: new L.GeoJSON.AJAX(["shp_sungai.geojson"],{onEachFeature:popUp,style:myStyle4 ,pointToLayer: featureToMarker}).addTo(map)
	},
    {
		name: "Ladang",
		layer: new L.GeoJSON.AJAX(["shp_ladang.geojson"],{onEachFeature:popUp,style:myStyle5 ,pointToLayer: featureToMarker}).addTo(map)
	},

    
	
];

var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers);
 
map.addControl(panelLayers);

</script>
</html>