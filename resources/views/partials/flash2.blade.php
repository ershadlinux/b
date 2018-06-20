
{{--//1.for store banner in database--}}
@if (session()->has('flash_message_add_banner'))
    <div class="alert alert-success  alert-dismissible fade in ">
        <a class="close" data-dismiss="alert" href="#">&times;</a>
        <strong>{{session('flash_message_add_banner')}}</strong>
        {{session()->forget('flash_message_add_banner')}}
    </div>
@endif

{{--//////////////////////////////////////////////////////////////////////////////////--}}



{{--@if (session()->has('flash_message'))--}}
{{--<div class="alert alert-{{session('flash_message_level')}} alert-dismissable fade in">--}}
{{--<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>--}}
{{--{{Session::get('flash_message')}}--}}
{{--{{Session()->get('flash_message')}}--}}
{{--{{Session('flash_message')}}--}}


{{--</div>--}}
{{--@endif--}}


{{--@if (Session::has('panier'))--}}
{{--{--}}
{{--{{ \Session::get('panier')}}--}}
{{--}--}}
{{--@endif--}}


{{--<script>--}}
    {{--$('div.alert').delay(3000).slideUp(500);--}}
{{--</script>--}}

{{--////////////////////////////////////////////////////////////////////////////////--}}