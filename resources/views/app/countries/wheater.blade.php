@extends('layouts.app')

@section('content')

    <div class="row padder-s3">

        <div class="row">
            @foreach($weather['forecast']['forecastday'] as $val)
                <table>
                    <thead>
                    <tr>
                        @foreach($val['hour'] as $h)
                            <td style="width: 80px;background-color: #282828;padding-left:5px;color: white">{{ date('h:i', strtotime($h['time'])) }}</td>
                        @endforeach
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach($val['hour'] as $h)
                            <td style="width: 80px;padding-left:5px;font-size:12px;"><strong>{{ $h['temp_c'] }}</strong><small>°C</small></td>
                        @endforeach
                    </tr>

                    <tr>
                        @foreach($val['hour'] as $h)
                            <td style="width: 80px;padding-left:5px;">
                                <img style="width: 32px" src="{{ $h['condition']['icon'] }}">
                            </td>
                        @endforeach
                    </tr>
                    </tbody>

                </table>
            @endforeach


        </div>
        <div class="row whpanel">



                    <div class="col-md-3 col-xs-12 col-sm-12" style="padding: 0px;">
                        <div class="col-md-12" style="padding: 0px;min-height: 350px;background: #282828;">
                            <img style="width: 100%;" src="{{ url('/') }}/images/flags/gif/{{ strtolower($weather['location']['country']) }}.gif">

                            <ul class="list-group">
                                <li class="list-group-item"><h3>{{ trans('weather.' . $weather['location']['name']) }}</h3></li>
                                <li class="list-group-item">{{ $weather['location']['country'] }}</li>
                                <li class="list-group-item">{{ $weather['location']['region'] }}</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-12" style="padding: 0px;height: 470px;">
                        <div style="-webkit-filter: grayscale(100%);filter: grayscale(100%);">
                        <iframe style="position: absolute; height: 100%; border: none" width="100%" height="100%" frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBNwBW_6UpbjWtmYn9EwPbVBTKLTS7Y028&q={{ $weather['location']['name'] }}" allowfullscreen>
                        </iframe>


                            <iframe width="425" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $weather['location']['name'] }}&amp;aq=0&amp;oq=madursi&amp;sll=10.782836,78.288503&amp;sspn=5.674603,10.755615&amp;ie=UTF8&amp;hq=&amp;hnear={{ $weather['location']['name'] }}&amp;t=m&amp;z=12&amp;ll=9.925201,78.119775&amp;output=embed"></iframe>
                        </div>
                    </div>



        </div>
    </div>
@stop

    @section('scripts')
        <script>
            function initMap() {
                // Styles a map in night mode.
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 40.674, lng: -73.945},
                    zoom: 12,
                    styles: [
                        {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                        {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                        {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                        {
                            featureType: 'administrative.locality',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#d59563'}]
                        },
                        {
                            featureType: 'poi',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#d59563'}]
                        },
                        {
                            featureType: 'poi.park',
                            elementType: 'geometry',
                            stylers: [{color: '#263c3f'}]
                        },
                        {
                            featureType: 'poi.park',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#6b9a76'}]
                        },
                        {
                            featureType: 'road',
                            elementType: 'geometry',
                            stylers: [{color: '#38414e'}]
                        },
                        {
                            featureType: 'road',
                            elementType: 'geometry.stroke',
                            stylers: [{color: '#212a37'}]
                        },
                        {
                            featureType: 'road',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#9ca5b3'}]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'geometry',
                            stylers: [{color: '#746855'}]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'geometry.stroke',
                            stylers: [{color: '#1f2835'}]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#f3d19c'}]
                        },
                        {
                            featureType: 'transit',
                            elementType: 'geometry',
                            stylers: [{color: '#2f3948'}]
                        },
                        {
                            featureType: 'transit.station',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#d59563'}]
                        },
                        {
                            featureType: 'water',
                            elementType: 'geometry',
                            stylers: [{color: '#17263c'}]
                        },
                        {
                            featureType: 'water',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#515c6d'}]
                        },
                        {
                            featureType: 'water',
                            elementType: 'labels.text.stroke',
                            stylers: [{color: '#17263c'}]
                        }
                    ]
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNwBW_6UpbjWtmYn9EwPbVBTKLTS7Y028&callback=initMap"
                async defer></script>

@endsection