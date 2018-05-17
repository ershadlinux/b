<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\AuthorizesUsers;
use Auth;


use App\Banner;
use App\Http\Flash;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\ChangeBannerRequset;
//use Faker\Provider\Image;
use App\Photo;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Http\Controllers\Traits\AuthorizesUser;


class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//this is my trait
//    use AuthorizesUser;


//
//    public function index(\App\Http\Flash $flash)
//    {
//        //1.this is with class
//      $flash->info('harchi1');
//
//      echo"</br>";
//
////2.this is with helper function
//        flash("harchi2");
//

//3.helper function
//flash('info',"in");
//flash("success","suc");
//
//    }


    public function __construct()
    {

//        parent::__construct();


//        $this->middleware('auth', ['only' => ['create']]);
//        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
        // Alternativly
//        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('auth', ['except' => 'show']);
    }


    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//      $countri=  \App\Http\utilities\country::countries();
//          return view('banners.create',compact(countri));
        return view('banners.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    /**
     * @param BannerRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BannerRequest $request)
    {
//        return $request->all();


        //1.validate
//        $request->validate([
//            'street' => 'required|unique:posts|max:255',
//        ]);


        //2.store in db
        auth()->id();
        \App\Banner::create($request->all());//
        flash()->success("Title", "Your Banner has been created");

//        flash()->overlay("Hello World","Wellcome To Bongah" );
//        flash("Hello World","Wellcome To Bongah" );


//        session(['flash_message_add_banner'=>'success store data in database']);
//        session(['flash_message'=>'success store data in database']);
//        session('flash_message','success store data in database');
//        flash("Hello World");


        //3.redirect
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
    public function show($zip, $street)
    {

//         $banner= Banner::where(compact('zip','street'))->first();
//                return Banner::where(compact('zip','street'))->get();
//
//
//        $banner = Banner::LocatedAt($zip, $street)->first();
//      return  $banner = Banner::LocatedAt($zip, $street)->photos;


        $banner = Banner::LocatedAt($zip, $street);
        return view('banners.show', compact('banner'));
    }


//add Photos to zip and street


//    public function addPhotos($zip, $street, Request $request)
//    {
//        $request->validate([
//            'file' => 'required|mimes:jpg,jpeg,png,bmp'
//        ]);
//
////        $this->validate($request,[
////            'file' => 'required|mimes:jpg,jpeg,png,bmp'
////        ]);
//
//        $file = $request->file('file');
//        $name = time() . '-' . $file->getClientOriginalName();
//
//        $image_resize = Image::make($file->getRealPath());
//        $image_resize->resize(750, 450);
//        $image_resize->save('banners/photos/' . $name);
////        $file->move('banners/photos', $name);
//
//        $banner = Banner::LocatedAt($zip, $street)->first();
//        $banner->photos()->create(["path" => "/banners/photos/{$name}"]);
//        return 'Done...';
//
//
//    }


//    public function addPhotos($zip, $street, Request $request)
//    {
//        $this->validate($request,[
//            'file' => 'required|mimes:jpg,jpeg,png,bmp'
//        ]);
//
//        $file = $request->file('file');
//        $name = time() . '-' . $file->getClientOriginalName();
//        $file->move('banners/photos', $name);
//        $banner = Banner::locatedAt($zip, $street);
//        $banner->photos()->create(['path'=>"banners/photos/{$name}"]);
//
//
//    }


//--------------------189
    public function addPhotos($zip, $street, ChangeBannerRequset $request)
    {
//        $request->validate([
//            'file' => 'required|mimes:jpg,jpeg,png,bmp'
//        ]);




//        $banner = Banner::locatedAt($zip, $street);


//Guard
//    1.             if ($banner->user_id !== auth()->id()) {
//    2. in model     if (!$banner->ownerBy(auth()->user()))
//    3.trait
//        if (! $this->userCreateBanner($request)) {
//            return $this->unAuthorized($request);
//        }

        //4.with ChangeBannerRequest
        $photo = $this->makePhoto($request->file('file'));
        $banner = Banner::locatedAt($zip, $street);
        $banner->addPhoto($photo);



    }


    protected function makePhoto(UploadedFile $file)
    {
//         return Photo::formFrom($file)->store($file);
        return Photo::named($file->getClientOriginalName())->move($file);

    }




//    public function addPhotos($zip, $street, Request $request)
//    {
//        $request->validate([
//            'file' => 'required|mimes:jpg,jpeg,png,bmp'
//        ]);
//
//
//
//
////        $photo = new Photo();
////        $photo::formFrom($request->file('file'));//
////
////        $photo = new Photo();
////        $photo->fromForm($request->file('file'));
//
//        $photo = Photo::formFrom($request->file('file'));
//        Banner::locatedAt($zip, $street)->addPhoto($photo);
//
//
//
//
////        $file = $request->file('file');
////        $name = time() . '-' . $file->getClientOriginalName();
////        $image_resize = Image::make($file->getRealPath());
////        $image_resize->resize(750, 450);
////        $image_resize->save('banners/photos/' . $name);
////        $image_resize->save($photo->$baseDir . '/' . $name);
//
//
//
////          Banner::locatedAt($zip, $street)->first()->addPhoto($name);
////          Banner::locatedAt($zip, $street)->addPhoto($name);
//
////         $banner=Banner::locatedAt($zip, $street) ;
////         $banner->addPhoto($photo);
////        $banner->addPhoto($name);
//
//
////        $image_resize = Image::make($file->getRealPath());
////        $image_resize->resize(750, 450);
////        $image_resize->save('banners/photos/' . $name);
////
////return "Done...";
//
////
////        $banner->photos()->create(["path" => "/banners/photos/{$name}"]);
//
//    }

//-------------------------------------
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */


//    public function project2( )
//    {
//        if (Auth::attempt(['email' => 'mohamadamirkhani67@yahoo.com', 'password' => '123456']))
//    {
//        return view("banners.project");
//    }
//
//    }
}
