var map;

$(document).ready(function(){
    map = new GMaps({
        div: '#map',
        lat: 50.6997696,
        lng: -103.9538025,
        scrollwheel: false,
        zoom: 4,
        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
    });

    map.addMarker({
		lat: 61.3008186,
		lng: -158.7750198,
		title: 'E.U.A - Alaska',
		icon: 'images/iclocal.png',
        click: function(e) {
            $(".destinationPage").hide();
            $("#3").toggle("slowDown");
            $(".goBack").show();
        },
        infoWindow: {
          content: '<p class="map-tooltip">Alaska</p>'
        }
	});

    map.addMarker({
		lat: 54.1552156,
		lng: -126.5556456,
		title: 'Canada, British - Columbia',
		icon: 'images/iclocal.png',
        click: function(e) {
            $(".destinationPage").hide();
            $("#7").toggle("slowDown");
            $(".goBack").show();
        },
        infoWindow: {
          content: '<p class="map-tooltip">Columbia</p>'
        }
	});

    map.addMarker({
		lat: 54.4983693,
		lng: -115.0001885,
		title: 'Canada, Alberta',
		icon: 'images/iclocal.png',
        click: function(e) {
            $(".destinationPage").hide();
            $("#8").toggle("slowDown");
            $(".goBack").show();
        },
        infoWindow: {
          content: '<p class="map-tooltip">Alberta</p>'
        }
	});

    map.addMarker({
		lat: 37.2718745,
		lng: -119.273188,
		title: 'EUA, LAKE TAHOE',
		icon: 'images/iclocal.png',
        click: function(e) {
            $(".destinationPage").hide();
            $("#6").toggle("slowDown");
            $(".goBack").show();
        },
        infoWindow: {
          content: '<p class="map-tooltip">Lake Tahoe</p>'
        }
	});

    map.addMarker({
		lat: 38.9471783,
		lng: -107.7200386,
		title: 'EUA, COLORADO',
		icon: 'images/iclocal.png',
		click: function(e) {
            $(".destinationPage").hide();
    		$("#1").toggle("slowDown");
    		$(".goBack").show();
  		},
        infoWindow: {
          content: '<p class="map-tooltip">Colorado</p>'
        }
	});

    map.addMarker({
		lat: 43.000325,
		lng: -107.5545669,
		title: 'EUA, WYOMING',
		icon: 'images/iclocal.png',
        click: function(e) {
            $(".destinationPage").hide();
            $("#2").toggle("slowDown");
            $(".goBack").show();
        },
        infoWindow: {
          content: '<p class="map-tooltip">Wyoming</p>'
        }
	});

    map.addMarker({
		lat: 39.4997605,
		lng: -111.547028,
		title: 'EUA, UTAH',
		icon: 'images/iclocal.png',
        click: function(e) {
            $(".destinationPage").hide();
            $("#10").toggle("slowDown");
            $(".goBack").show();
        },
        infoWindow: {
          content: '<p class="map-tooltip">Utah</p>'
        }
	});

    map.addMarker({
		lat: 42.3667541,
		lng: -71.1074368,
		title: 'EUA, EAST COAST',
		icon: 'images/iclocal.png',
        click: function(e) {
            $(".destinationPage").hide();
            $("#5").toggle("slowDown");
            $(".goBack").show();
        },
        infoWindow: {
          content: '<p class="map-tooltip">East Coast</p>'
        }
	}); 

    map.addMarker({
        lat: 34.1662325,
        lng: -106.0260685,
        title: 'EUA, NEW MEXICO',
        icon: 'images/iclocal.png',
        click: function(e) {
            $(".destinationPage").hide();
            $("#4").toggle("slowDown");
            $(".goBack").show();
        },
        infoWindow: {
          content: '<p class="map-tooltip">New Mexico</p>'
        }
    });

	map.addMarker({
		lat: 46.8580074,
		lng: -71.3460728,
		title: 'QUEBEC',
		icon: 'images/iclocal.png',
        click: function(e) {
            $(".destinationPage").hide();
            $("#9").toggle("slowDown");
            $(".goBack").show();
        },
        infoWindow: {
          content: '<p class="map-tooltip">QUEBEC</p>'
        }
	});


});