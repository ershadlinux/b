@extends('../layout/master')

@section('title')

@overwrite



@section('head')

@overwrite




@section('content')
    {{--<example-component></example-component>--}}

    <div class="row">
        <div class="col-md-4">
            <h1>{{$banner->street}}</h1>
            <h2>$ {{ $banner->price }} </h2>
            <div class="description">{!! $banner->description !!}</div>
        </div>

        <div class="col-md-8 gallery">
            @foreach($banner->photos->chunk(4) as $set)
                <div class="row">
                    @foreach($set as $photo)
                        <div  class="col-md-3 col-sm-3 col-xs-6 gallery-img">
                            <a  target="_blank" href="/{{$photo->path}}">
                                <img  style="border-radius: 7px" src="/{{$photo->thumbnail_path}}" alt="" title="Click For Full Size">
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach


{{--{{ $userauth()->user()->id)}}--}}
{{--{{dd($user)}}--}}
                @if(Auth::check() && $user->owns($banner))
{{--                @if(Auth::check() && auth()->user()->id==$banner->user_id)--}}
                    {{--@if(auth()->check())--}}
{{--                    @if(auth()->user()->id==$banner->user_id)--}}
                    <h5>Add Your Photo</h5>

                    {{--<form class="dropzone" action="/{{$banner->zip}}/{{$banner->street}}/photos" method="POST">--}}
                    <form class="dropzone" id="addPhotosForm" action="{{route('store_photo_path',[$banner->zip,$banner->street])}}"
                          method="POST">
                        {{csrf_field()}}

                    </form>
                @endif



        </div>


        {{--<div class="col-md-8">--}}
        {{--@foreach($banner->photos as $photo)--}}
        {{--<img src="/{{$photo->thumbnail_path}}" alt="">--}}
        {{--@endforeach--}}

        {{--</div>--}}


    </div>
    <br>
    <br>


    {{--<hr>--}}









    {{--<form class="dropzone" action="/{{$banner->zip}}/{{$banner->street}}/photos" method="POST">--}}
    {{--{{csrf_field()}}--}}

    {{--</form>--}}







    {{--<form method="POST"  name='dropzone' action="/{{$banner->zip}}/{{$banner->street}}/photos" class='dropzone'>--}}
    {{--<div class='fallback'>--}}
    {{--<input name='file' type='file' multiple />--}}
    {{--</div>--}}
    {{--<input id='refCampaignID' name='refCampaignID' type='hidden' value= "s" />--}}
    {{--</form>--}}
    {{----}}
    {{----}}
    {{----}}











    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone-amd-module.min.js" type="text/javascript"></script>--}}




    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" type="text/javascript"></script>
    <script>


        Dropzone.options.addPhotosForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 3, // MB
            acceptedFiles: ".jpg,.jpge,.png,.bmp"
        };

    </script>



@stop

