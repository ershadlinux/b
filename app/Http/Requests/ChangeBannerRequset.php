<?php

namespace App\Http\Requests;

use App\Banner;
use Illuminate\Foundation\Http\FormRequest;

class ChangeBannerRequset extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return false;

//        return Banner::Where([
//            'zip' => $request->zip,
//            'street' => $request->street,
//            'user_id' => auth()->user()->id
//        ])->exists();

        return Banner::Where([
            'zip' => $this->zip,
            'street' => $this->street,
            'user_id' => auth()->user()->id
        ])->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'file' => 'required|mimes:jpg,jpeg,png,bmp'
        ];
    }
}
