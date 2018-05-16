<?php
/**
 * Created by PhpStorm.
 * User: er
 * Date: 5/14/18
 * Time: 12:27 PM
 */

namespace App\Http\Controllers\Traits;



use App\Banner;
use Illuminate\Http\Request;


trait AuthorizesUser
{

    /**
     * @param $request
     * @return mixed
     */
    protected function userCreateBanner($request)
    {
       return Banner::Where([
            'zip' => $request->zip,
            'street' => $request->street,
            'user_id' => auth()->user()->id
        ])->exists();

    }


    protected function unAuthorized(Request $request)
    {
        if ($request->ajax()) {
            return response(['message' => 'Nope!'], 403);
        }
        flash()->error("403", "Your Banner has been created");
        return back();
    }

}