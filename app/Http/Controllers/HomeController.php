<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Bu;
use Auth;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showMyBuild($id)
    {
        $buAll = Bu::orderBy('created_at','asc')->paginate(10);
        return view('front.build.index',compact('buAll'));
    }

    public function create()
    {
        return view('front.build.create');
    }
}
