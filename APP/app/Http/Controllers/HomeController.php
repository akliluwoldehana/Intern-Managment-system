<?php

namespace Techin\Http\Controllers;

use Illuminate\Http\Request;
use Techin\ApplicantsList;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list= ApplicantsList::all();
        return view('home')->with('Alist',$list);;
    }
    public function displayImage($filename)

{

    $path = storage_public('images/' . $filename);

  

    if (!File::exists($path)) {

        abort(404);

    }

   

    $file = File::get($path);

    $type = File::mimeType($path);

  

    $response = Response::make($file, 200);

    $response->header("Content-Type", $type);

  

    return $response;

}
}
