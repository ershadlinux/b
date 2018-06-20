@extends('../layout/master')

@section('title')
    Home page
@overwrite



@section('head')

@overwrite




@section('content')
  <h1>  This Is Home</h1>
  <div class="jumbotron">
      <h1>Bongah</h1>
      <p>Lorem ipsum dolor sit amet, vix no clita eligendi. No gloriatur intellegat nec. Ne qui melius nostrum, aliquando elaboraret sed id. Quaeque graecis reprehendunt sea ei, vim sale dicta detraxit ne. Propriae senserit vix in, id malis necessitatibus mel.</p>
{{--  <a href="{{route('banners.create')}}" class="btn  btn-lg btn-primary" role="button">Sign up</a>--}}
      @if(auth()->check())
  <a href="{{url('/banners/create')}}" class="btn  btn-lg btn-primary" role="button">create banner</a>
      @else

  <a href="{{url('/login')}}" class="btn  btn-lg btn-primary" role="button">Sign up</a>
          @endif
  </div>



@stop

