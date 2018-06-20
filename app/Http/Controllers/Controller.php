<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Controller constructor.
     */
    protected $user;
    public function __construct()
    {
//    view()->share('signeIn',Auth::check());
//    view()->share('user',auth()->user());
//    view()->share('user',\Auth::user());
//    view()->share('guest',auth()->guest());



//
//        $this->middleware(function ($request, $next) {
//            $this->user = Auth::user();
//            view()->share('user', $this->user);
//            return $next($request);
//        });


        $this->middleware(function ($request, $next) {
            view()->share('user', Auth::user());
            return $next($request);
        });



    }
}
