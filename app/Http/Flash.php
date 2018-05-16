<?php
/**
 * Created by PhpStorm.
 * User: er
 * Date: 4/19/18
 * Time: 10:45 PM
 */

namespace App\Http;


class Flash
{

//    public function info($title,$message,$level){
////        echo "Hi";
////     session(["flash_message"=>"$message"]);
//
//        session(["flash_message"=>[
//            'title'=>$title,
//            'message'=> $message,
//            'level'=>$level
//        ]]);
//
//    }
//



public function create($title,$message,$level,$key='flash_message'){
    session([$key=>[
        'title'=>$title,
        'message'=> $message,
        'level'=>$level
    ]]);

}



    public function info($title,$message){

    return $this->create($title,$message,'info');

    }


    public function success($title,$message){

        return $this->create($title,$message,"success");


    }


    public function error($title,$message){

        return $this->create($title,$message,'error');


    }
   public function warning($title,$message){

        return $this->create($title,$message,'warning');


    }



// public function overlay($title,$message,$level='success'){
 public function overlay($title,$message ){

        return $this->create($title,$message,'success','flash_message_overly');


    }



















//
//    public function info($title,$message){
//
//        session(["flash_message"=>[
//            'title'=>$title,
//            'message'=> $message,
//            'level'=>'info'
//        ]]);
//
//    }






}