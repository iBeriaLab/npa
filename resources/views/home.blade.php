@extends('layouts.app')

@section('content')




    <div class="row padder-s1-5">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img style="width: 100%;" src="http://placehold.it/1200x400/0aa699/ffffff&text=About Us">
                    <div class="carousel-caption">
                        <h3>
                            Headline</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                            ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img style="width: 100%;" src="http://placehold.it/1200x400/87a60a/ffffff&text=Projects">
                    <div class="carousel-caption">
                        <h3>
                            Headline</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                            ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img style="width: 100%;" src="http://placehold.it/1200x400/0a66a6/ffffff&text=Portfolio">
                    <div class="carousel-caption">
                        <h3>
                            Headline</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                            ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img style="width: 100%;" src="http://placehold.it/1200x400/8e44ad/ffffff&text=Services">
                    <div class="carousel-caption">
                        <h3>
                            Headline</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                            ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Carousel Inner -->
            <ul class="carousel nav nav-pills nav-justified">
                <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#"><strong>About</strong><small>Lorem
                            ipsum dolor sit</small></a></li>
                <li data-target="#myCarousel" data-slide-to="1"><a href="#"><strong>Projects</strong><small>Lorem ipsum
                            dolor sit</small></a></li>
                <li data-target="#myCarousel" data-slide-to="2"><a href="#"><strong>Portfolio</strong><small>Lorem ipsum
                            dolor sit</small></a></li>
                <li data-target="#myCarousel" data-slide-to="3"><a href="#"><strong>Services</strong><small>Lorem ipsum
                            dolor sit</small></a></li>
            </ul>
        </div>
        <!-- End Carousel -->




        <div class="no-m padder-s2">
            <div class="row">
                <ul class="breadcrumb">
                    <li class="completed"><a href="javascript:void(0);">მთავარი</a></li>
                    <li class="active"><a href="javascript:void(0);">კატეგორია</a></li>
                    <li><a href="javascript:void(0);">სტატიის სათაური</a></li>
                </ul>
            </div>
        </div>

    <div class="col-md-12">


            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>



@endsection
