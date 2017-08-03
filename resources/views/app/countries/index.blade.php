@extends('layouts.app')

@section('content')
        <div class="row padder-s2">
            <div class="col-md-12">


                <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p>...</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>



                        <div class="row">
                            <div class="col-md-9 col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Dashboard</div>

                                    <div class="panel-body">

                                        <ul style="list-style: none; float: left;">
                                            <li><a href=""> ჟინვალი</a></li>

                                            <li><a href="">ზესტაფონი</a></li>

                                            <li><a href="">სარფი</a></li>

                                            <li><a href="">ადიგენი</a></li>

                                            <li><a href="">ფასანაური</a></li>

                                            <li><a href="">ოზურგეთი</a></li>

                                            <li><a href="">ახალქალაქი</a></li>

                                            <li><a href="">შეკვეთილი</a></li>

                                            <li><a href="">მარტვილი</a></li>

                                            <li><a href="">ბაზალეთი</a></li>

                                            <li><a href="">საგურამო</a></li>

                                            <li><a href="">ნიჩბისი</a></li>

                                            <li><a href="">ქედა</a></li>

                                            <li><a href="">მარტყოფი</a></li>

                                            <li><a href="">მისაქციელი</a></li>

                                            <li><a href="">საგარეჯო</a></li>

                                            <li><a href="">საჩხერე</a></li>

                                            <li><a href="">ახმეტა</a></li>

                                            <li><a href="">შატილი</a></li>

                                            <li><a href="">მუხრანი</a></li>

                                            <li><a href="">ბახმარო</a></li>

                                            <li><a href="">რუსთავი</a></li>

                                            <li><a href="">თეთრიწყარო</a></li>

                                            <li><a href="">ახალციხე</a></li>

                                            <li><a href="">ბოლნისი</a></li>

                                            <li><a href="">ზუგდიდი</a></li>

                                            <li><a href="">ტყვარჩელი</a></li>

                                            <li><a href="">ცაგერი</a></li>

                                            <li><a href="">პანკისი</a></li>

                                            <li><a href="">შუახევი</a></li>

                                            <li><a href="">ლაგოდეხი</a></li>

                                            <li><a href="">სოხუმი</a></li>

                                            <li><a href="">წოდორეთი</a></li>

                                            <li><a href="">ასპინძა</a></li>

                                            <li><a href="">ახალდაბა</a></li>

                                            <li><a href="">მახინჯაური</a></li>

                                            <li><a href="">ნატახტარი</a></li>

                                            <li><a href="">ვანი</a></li>

                                            <li><a href="">წაღვერი</a></li>

                                            <li><a href="">წეროვანი</a></li>

                                            <li><a href="">აბასთუმანი</a></li>

                                            <li><a href="">წიწამური</a></li>

                                            <li><a href="">ხობი</a></li>

                                            <li><a href="">აბაშა</a></li>

                                            <li><a href="">დუშეთი</a></li>

                                            <li><a href="">გალი</a></li>

                                            <li><a href="">ხელვაჩაური</a></li>

                                            <li><a href="">წინანდალი</a></li>

                                            <li><a href="">დმანისი</a></li>

                                            <li><a href="">წალკა</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-12">
                                <div class="panel panel-default">
                                    <ul class="list-group">
                                        @foreach($countries as $country)
                                            @foreach($country as $val)
                                                <li class="list-group-item">
                                                    <span class="badge"><small>{{ $val['countrycode'] }}</small></span>
                                                    <a href="{{ url('/') }}/capital/{{ $val['capitalname'] }}">
                                                        <img style="width: 26px;" src="{{ url('/') }}/images/flags/svg/{{ strtolower($val['countrycode']) }}.svg" alt="{{ $val['countryname'] }}">
                                                        <small><sub>{{ $val['countryname'] }}</sub></small>
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>



@endsection