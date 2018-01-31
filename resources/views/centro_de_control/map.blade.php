@extends('layouts.master')

@section('content')

    <div id="main" role="main">

    <!-- MAIN CONTENT -->
    <div id="content">
        <style>
            #map {
                height: 700px;
                width: 100%;
            }
        </style>
        <div id="map"></div>

        <script>

            function initMap() {


                var uluru = {lat: -16.419313, lng: -71.549985};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: uluru
                });

                $.ajax({
                    url: "{{url('tracking_veh')}}",
                    type: 'GET',
                    success: function (data) {
                        //alert(data);
                        for(var i=0; i< data.length;i++){

                            var myLatlng = new google.maps.LatLng(parseFloat(data[i].ptoejec_lat),parseFloat(data[i].ptoejec_lon));

                            //uluru = {lat: data[0].ptoejec_lat, lng: data[0].ptoejec_lon};

                            var marker = new google.maps.Marker({
                                position: myLatlng,
                                icon: '../public/img/veh_trn.png',
                                map: map
                            });

                            //marker.setMap(map);
                        }
                    },
                    error: function (data) {
                        // mostraralertas('* Contactese con el Administrador...');
                    }
                });

            }

        </script>
    </div>
    <!-- END MAIN CONTENT -->

    </div>
@endsection

@section('page-js-script')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM2yhaCb_aapTy9ApRc9YlRvmsjc62b8Y&callback=initMap"></script>


@endsection