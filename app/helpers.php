<?php
/**
 * Created by PhpStorm.
 * User: er
 * Date: 4/19/18
 * Time: 3:18 PM
 */


//
//function flash($fuc,$message){
//
////echo  "Bye";
//
//// $f= new \App\Http\Flash();
////echo $f->info("khj");
//
//
//
////$flash= app('App\Http\Flash');
////return $flash->info($message);
//
//
//
////    طبق ورودی که میگیره متد از کلاس انتخاب میکنه //خودم
//$flash= app('App\Http\Flash');
//return $flash->$fuc($message);
//
//
//
//
//
////    if ($fuc=='success'){
////        session(['flash_message_success',"$message"])
////    }
//
//
//
//}




//
//function flash($title,$message,$level="info"){
////function flash($message){
//
//$flash= app('App\Http\Flash');
//return $flash->info($title,$message,$level);
//
////    session(["flash_message"=>[
////        'title'=>$title,
////        'message'=> $message
////    ]]);
////
////
//// session(["flash_message"=>"hi"]);
////    session('flash_message', 'default');
//
//}




function flash($title=NULL,$message=NULL){


$flash= app('App\Http\Flash');

if(func_num_args()==0){
    return $flash;

}

return $flash->info($title,$message);


}






?>