<div class="">
<style>
    .mapcontainer {
        border: darkgoldenrod solid 3px;
        height: 100%;
    }
    .map {

        height: 300px;
        width: 100%;
    }
</style>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mapcontainer">
                <div class="map" id="mymap2"></div>
            </div>
        </div>
    </div>
</div>





<script src="http://maps.google.com/maps/api/js?key=AIzaSyDd6Ji4n9fpIJrVLDuge30ua0Cg8vpR25A" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js" ></script>



{{--MAP NO 2--}}
<script type="text/javascript">

    var ayman_php_to_js = '{{ json_encode($contact) }}'; // the issue that this way the content will not be array will be as string
    console.log('ayman_php_to_js');
    console.log(ayman_php_to_js);
    console.log('ayman_php_to_js');


    /* var locations = < ?php print_r(json_encode($contact)) ?>;*/
    var locations ={!! json_encode($contact) !!}  ; //  this is ok to be the one is fine

    console.log(locations);
    console.log('*******************************');
    /*console.log(locations[0]['latitude']);*///ok

    var mymap2 = new GMaps({
        el: '#mymap2',
        lat: -21.170240,
        lng: 72.831061,
        zoom: 2
    });


    $.each(locations, function (index, value) {
        /* console.log('+++++++++++++value.latitude)++++++++++++++++++');
         console.log(value.longitude);
         console.log('+++++++++++++value.latitude)++++++++++++++++++');
 */
        mymap2.addMarker({
            lat: value.latitude,
            lng: value.longitude,
            title: value.name,
            click: function (e) {
                /* alert('This is '+value.name+', .');*/
            },
            infoWindow: {
                content: `<p>NAME : <strong>${value.name}</strong></p> / <p>Phone: <strong>${value.phone}</strong></p> `
            },
            details: {
                content: '<p>ddddddddddddddd</p>'
            }
        });
    });


</script>

{{--MAP NO 2--}}

</div>
