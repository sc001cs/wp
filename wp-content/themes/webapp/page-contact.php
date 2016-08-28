<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<!-- Breadcrumps -->
<div class="breadcrumbs">
    <div class="row">
        <div class="col-sm-6">
            <h1>Contact</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li>You are here:</li>
                <li><a href="<?php echo site_url(); ?>">Home</a>
                </li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
</div>
<!-- End of Breadcrumps -->

<!-- Contact Map -->
<div id="map_wrapper">
    <div id="map_canvas" class="mapping"></div>
</div>

<section class="contact">
    <div class="row">
        <div class="col-sm-8">
            <h3>Contact us</h3>
            <div id="sendstatus"></div>
            <div id="contactform">

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>

            </div>
        </div>

        <div class="col-sm-3 col-sm-offset-1">
            <h4 class="badge">E-mail</h4>
            <p><a>info@webapp.al</a></p>
            <h4 class="badge">Phone</h4>
            <p>XXX-XXX-XXX</p>
            <h4 class="badge">On the Web</h4>
            <ul>
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Linked In</a></li>
                <li><a href="">Github</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End of Contact  -->


<?php
get_footer(); ?>

<script>
    jQuery(function ($) {
        // Asynchronously Load the map API
        var script = document.createElement('script');
        script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
        document.body.appendChild(script);
    });

    function initialize() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap',
            scrollwheel: false,
            draggable: false,
            styles: [{
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#444444"}]
            }, {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{"color": "#f2f2f2"}]
            }, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {
                "featureType": "road",
                "elementType": "all",
                "stylers": [{"saturation": -100}, {"lightness": 45}]
            }, {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [{"visibility": "simplified"}]
            }, {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [{"visibility": "off"}]
            }, {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{"visibility": "off"}]
            }, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#c6eee7"}, {"visibility": "on"}]}]
        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        map.setTilt(45);

        // Multiple Markers
        var markers = [
            ['Rruga "Qemal Stafa", Tirane, Shqiperi', 41.3333543, 19.8298717],
        ];

        // Info Window Content
        var infoWindowContent = [
            ['<div class="info_content">' +
            '<h5>WebApp.al, Studio web design, krijim faqesh interneti dhe programe kompjuterike</h5>' +
            '<p>Ndertojme faqe interneti dhe programe te ndryshme kompjuterike sipas nevojave tuaja</p>' + '</div>']
        ];

        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(), marker, i;

        // Loop through our array of markers & place each one on the map
        for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });

            // Allow each marker to have an info window
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
            this.setZoom(14);
            google.maps.event.removeListener(boundsListener);
        });

    }
</script>
