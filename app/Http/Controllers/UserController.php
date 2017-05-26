<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use App\Bu;
use Auth;

class UserController extends Controller
{
    public function index()
    {
    	//$users = User::latest()->get();
    	$users = User::orderBy('created_at','asc')->paginate(10);
    	return view('admin.users.index',compact('users'));
    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	$this->Validate($request,[ 
            'name' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
            ]);
    	$users = new User();
    	$users->name = $request->name;
    	$users->email = $request->email;
    	$users->password = bcrypt('password');
    	$users->save();
    	Session::flash('success','User Add');
    	return redirect()->back();
    }

    public function destory($id)
    {
    	$users = User::find($id);
    	$users->delete();
    	Session::flash('success','User Delete');
    	return redirect()->back();
    }

    public function pageUser(Bu $buAll)
    {
        $user = Auth::user();
        $buAll = $buAll->where('user_id',$user->id)->paginate(10);
        //$buAll = Bu::orderBy('created_at','desc')->paginate(10);
        return view('auth.userpages',compact('buAll'));
    }
}
