
@if(session()->has('flash_message'))

<script>



swal({
    title: "{{session('flash_message.title')}}",
    text: "{{session('flash_message.message')}}",
    type: "{{session('flash_message.level')}}",
//    type:"success",
    icon: "{{session('flash_message.level')}}",
//  buttons: true,

    timer:2000,
//    showConfirmButtons:false,
//    showConfirmText:"ok"
//    confirmButtonText:false,
//    closeOnConfirm: true,
    showConfirmButton: false



})


//swal({
//    title: "Auto close alert!",
//    text: "I will close in 2 seconds.",
//    timer: 2000,
//    showConfirmButton: false
//});




//swal({
//    title: "Deleted!",
//    text: "Your row has been deleted.",
//    type: "success",
//    timer: 3000
//});
//function ff() {
//    location.reload(true);
//    tr.hide();
//};


//swal({
//        title: "Are you sure?",
//        text: "You will not be able to recover this imaginary file!",
//        type: "warning",
//        showCancelButton: true,
//        confirmButtonColor: "#DD6B55",
//        confirmButtonText: "Yes, delete it!",
//        cancelButtonText: "No, cancel plx!",
//        closeOnConfirm: false,
//        closeOnCancel: false
//    },
//    function (isConfirm) {
//        if (isConfirm) {
//            swal({
//                title: "Deleted!",
//                text: "Your row has been deleted.",
//                type: "success",
//                timer: 3000
//            });
//            function ff() {
//                location.reload(true);
//                tr.hide();
//            };
//        }
//        else {
//            swal("Cancelled", "Your imaginary file is safe :)", "error");
//        }
//    });

    {{session()->forget('flash_message')}}

</script>
@endif



@if(session()->has('flash_message_overly'))

<script>



swal({
    title: "{{session('flash_message_overly.title')}}",
    text: "{{session('flash_message_overly.message')}}",
    type: "{{session('flash_message_overly.level')}}",
    icon: "{{session('flash_message_overly.level')}}",
//    type:"success",
//    icon: "success",
//   buttons: true,
//    dangerMode: true,
//    timer:1700,
    showConfirmButtons:false,
    showConfirmText:"ok"
})
    {{session()->forget('flash_message_overly')}}


</script>



    @endif