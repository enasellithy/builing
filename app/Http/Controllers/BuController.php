<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bu;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;

class BuController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin'=>['only'=>['create','']]);
        $this->middleware('auth'=>['only'=>['create','']]);
    }
    public function index()
    {
    	$bus = Bu::orderBy('created_at','asc')->paginate(10);
    	return view('admin.bus.index',compact('bus'));
    }

    public function create()
    {
    	return view('admin.bus.create');
    }

    public function store(Request $request)
    {
    	$this->Validate($request,[ 
            'bu_name'       => 'required|min:5|max:100',
            'bu_price'      => 'required', 
            'bu_rent'       => 'required|integer', 
            'bu_rooms'      => 'required', 
            'bu_square'     => 'required', 
            'bu_type'       => 'required|integer', 
            'bu_small_dis'  => 'required|min:5|max:160', 
            'bu_meta'       => 'required|min:5|max:200', 
            'bu_langtuide'  => 'required', 
            'bu_place'      => 'required', 
            'bu_large_dis'  => 'required',   
            'bu_status'     => 'required',
            'image'         => 'mimes:png,jpg,gif'
            ]);
    	$bus = new Bu();
        $bus->bu_name = $request->bu_name;
        $bus->bu_price = $request->bu_price;
        $bus->bu_rent = $request->bu_rent;
        $bus->bu_rooms = $request->bu_rooms;
        $bus->bu_square = $request->bu_square;
        $bus->bu_type = $request->bu_type;
        $bus->bu_small_dis = $request->bu_small_dis;
        $bus->bu_meta = $request->bu_meta;
        $bus->bu_langtuide = $request->bu_langtuide;
        $bus->bu_place = $request->bu_place;
        $bus->bu_large_dis = $request->bu_large_dis;
        $bus->bu_status = $request->bu_status;
        $bus->user_id = Auth::id();
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(400,400)->save($location);
            Image::make($image)->save($location);
            $bus->image = $filename;
        }
    	$bus->save();
    	Session::flash('success','Building Add');
    	return redirect()->back();
    }

    public function edit($id)
    {
    	$bus = Bu::find($id);
    	return view('admin.bus.edit')->withBus($bus);
    }

    public function update(Request $request, $id)
    {
    	$this->Validate($request,[ 
            'bu_name'       => 'required|min:5|max:100',
            'bu_price'      => 'required', 
            'bu_rent'       => 'required|integer', 
            'bu_rooms'      => 'required', 
            'bu_square'     => 'required', 
            'bu_type'       => 'required|integer', 
            'bu_small_dis'  => 'required|min:5|max:160', 
            'bu_meta'       => 'required|min:5|max:200', 
            'bu_langtuide'  => 'required', 
            'bu_place'      => 'required', 
            'bu_large_dis'  => 'required',   
            'bu_status'     => 'required',
            'image'         => 'mimes:png,jpg,gif'
            ]);
    	$bus = Bu::find($id);
    	$bus->bu_name = $request->bu_name;
        $bus->bu_price = $request->bu_price;
        $bus->bu_rent = $request->bu_rent;
        $bus->bu_rooms = $request->bu_rooms;
        $bus->bu_square = $request->bu_square;
        $bus->bu_type = $request->bu_type;
        $bus->bu_small_dis = $request->bu_small_dis;
        $bus->bu_meta = $request->bu_meta;
        $bus->bu_langtuide = $request->bu_langtuide;
        $bus->bu_place = $request->bu_place;
        $bus->bu_large_dis = $request->bu_large_dis;
        $bus->bu_status = $request->bu_status;
        $bus->user_id = Auth::id();
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(400,400)->save($location);
            Image::make($image)->save($location);
            $bus->image = $filename;
        }
    	$bus->save();
    	Session::flash('success','Building Update');
    	return redirect()->back();
    }

    public function destory($id)
    {
    	$bus = Bu::find($id);
    	$bus->delete();
    	Session::flash('success','Building Delete');
    	return redirect()->back();
    }
}
