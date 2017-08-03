@extends('layouts.app')

@section('content')
    <div class="row padder-s2">

        <div class="col-md-12">


            @foreach($posts as $post)
                @foreach($post as $val)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-default panelD">
                            <div class="panel-heading">
                                <ul class="list-inline">
                                    <li>{{ $val['title'] }}</li>
                                    <li class="pull-right" style="padding-right: 0;">1 week</li>
                                </ul>
                            </div>
                            <div class="panel-image">
                                <img src="{{ $val['image'] }}" class="panel-image-preview" />
                            </div>
                            <div class="panel-body" style="display: none;">
                                <blockquote style="font-size: 12px;">
                                    <p>{{ $val['body'] }}</p>
                                </blockquote>
                                <span class="tagz"><a>#ტესტ_სიახლე</a></span>
                            </div>
                            <div class="panel-footer">
                                <ul class="list-inline clearfix">
                                    <li class="col-sm-4 col-md-4 col-lg-4 level-line-up"><span class="fa fa-thumbs-o-up"></span> მოწონება:<span>{{ $val['like'] }}</span></li>
                                    <li class="col-sm-4 col-md-4 col-lg-4 level-line-up"><center><a href=""><span class="fa fa-comments"></span> </a><span></span></center></li>
                                    <li class="col-sm-4 col-md-4 col-lg-4" style="padding-right: 0;"><span class="pull-right">{{ $val['views'] }}</span><span class="fa fa-bomb"></span> ნახვა</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                @endforeach
            @endforeach


        </div>
    </div>

@endsection