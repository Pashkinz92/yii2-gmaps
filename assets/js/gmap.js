


var map = null;
var marker = null;

function createMap(id_el, options)
{
    $(LAT_ID).val(options.lat);
    $(LNG_ID).val(options.lng);

    var coord = new google.maps.LatLng( options.lat, options.lng );
    var mapOptions = {
        zoom: 13,
        center: coord,
        streetViewControl:false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById(id_el), mapOptions);
    marker = new google.maps.Marker({
        position: coord,
        map: map,
        draggable: true,
        title: ' ',
        //icon: def_icon
    });

    google.maps.event.addListener(marker, 'dragend', function(e) {
        e = e.latLng;

        $(LAT_ID).val(e.lat());
        $(LNG_ID).val(e.lng());
    });

}

jQuery(function () {

    var p = {lat:59.924776, lng:30.3809753};
    if( lat!='' )
    {
        p.lat = lat;
    }
    if( lng!='' )
    {
        p.lng = lng;
    }

    createMap('google-map-1', p);
});