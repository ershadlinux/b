
@inject('countri','App\Http\utilities\country)

@extends('../layout/master')

@section('title')

@overwrite



@section('head')

@overwrite




@section('content')

  {{--@include('partials.flash')--}}



    <h1>Selling Your Home?</h1>
    <hr>



    <div class="row">
        <form class="form-horizontal " action="{{route('banners.store')}}" method="POST" enctype="multipart/form-data"  role="form">
            {{--<form class="form-horizontal" action="{{url('banners')}}"  method="POST" enctype="multipart/form-data" role="form">--}}

            @include('banners.form')

        </form>


    </div>





@stop

