@extends('layouts.app')

@section('content')

        <div class="row padder-s2">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        @foreach($users as $user)
                            @foreach($user as $val)
                                <ul>
                                    <li>{{ $val['name'] }} - {{ $val['email'] }}</li>
                                </ul>
                            @endforeach
                        @endforeach



                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-3">
                    <div class="panel panel-default panelD">
                        <div class="panel-heading">
                            <ul class="list-inline">
                                <li>Fred</li>
                                <li class="pull-right" style="padding-right: 0;">1 week</li>
                            </ul>
                        </div>
                        <div class="panel-image">
                            <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52d09387ae003_1.JPG" class="panel-image-preview" />
                        </div>
                        <div class="panel-body" style="display: none;">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            </blockquote>
                            <span class="tagz">Tags: <a>#faking</a></span>
                        </div>
                        <div class="panel-footer">
                            <ul class="list-inline clearfix">
                                <li class="col-sm-4 col-md-4 col-lg-4 level-line-up"><a href=""><span class="fa fa-thumbs-o-up"></span> Like</a><span>10</span></li>
                                <li class="col-sm-4 col-md-4 col-lg-4 level-line-up"><center><a href=""><span class="fa fa-comments"></span> </a><span>10</span></center></li>
                                <li class="col-sm-4 col-md-4 col-lg-4" style="padding-right: 0;"><span class="pull-right">10</span><a class="pull-right" href=""><span class="fa fa-bomb"></span> Nutty</a></li>
                            </ul>
                        </div>
                    </div>

                    </div>
            </div>
        </div>

@endsection