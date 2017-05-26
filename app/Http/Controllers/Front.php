<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bu;
use DB;

class Front extends Controller
{
    public function index()
    {
    	$buAll = DB::table('bus')->where('bu_status', 1)->orderBy('id','desc')->paginate(10);
    	return view('build.index',compact('buAll'));
    }

    public function show($id)
    {
        $bu = Bu::find($id);
        if($bu->satuts == 0){
            return view('build.index',compact('bu','search','array'));
        }
        $same_type = DB::table('bus')->where('bu_type',$bu->bu_type)
                        ->orderBy(DB::raw('RAND()'))->take(3)->get();
        $same_rent = DB::table('bus')->where('bu_rent',$bu->bu_rent)
                        ->orderBy(DB::raw('RAND()'))->take(3)->get();
        return view('build.show',compact('same_type','same_rent'))->withBu($bu);
    }

    public function search(Request $request)
    {
        $max = $request->bu_price_to = '' ? '1000000' : $request->bu_price_to;
        $min = $request->bu_price_from = '' ? '1000' : $request->bu_price_from;
        $requestAll = array_except($request->toArray(),['submit','_token','page']);
        $query = DB::table('bus')->select('*');
        $array = [];
        $count = count($requestAll);
        $i = 0;
        foreach($requestAll as $key => $req){
            if($req != ''){
                if($key == 'bu_price_from' && $request->bu_price_to == ''){
                    $query->where('bu_price', '>=', $req);
                }elseif($key == 'bu_price_to' && $request->bu_price_from == ''){
                    $query->where('bu_price', '<=', $req);
                }else {
                    if($key != 'bu_price_to' && $key != 'bu_price_from'){
                        $query->where($key, $req);
                    }
                }
                $array[$key] = $req;
            }elseif($count == $i && $request->bu_price_to != '' && $request->bu_price_from){
                $query->whereBetween('bu_price',[$request->bu_price_from,$request->bu_price_to]);
            }
        }
        $buAll = $query->paginate(1);
        return view('build.index',compact('buAll','search','array'));
    }

    public function forrent()
    {
        $buAll = DB::table('bus')->where('bu_status', 1)
                                 ->where('bu_rent',1)
                                 ->orderBy('id','desc')
                                 ->paginate(10);
        return view('build.index',compact('buAll'));                     
    }

    public function forbuy()
    {
        $buAll = DB::table('bus')->where('bu_status', 1)
                                 ->where('bu_rent',0)
                                 ->orderBy('id','desc')
                                 ->paginate(10);
        return view('build.index',compact('buAll'));
    }

    public function house()
    {
        $buAll = DB::table('bus')->where('bu_status', 1)
                                 ->where('bu_type',0)
                                 ->orderBy('id','desc')
                                 ->paginate(10);
        return view('build.index',compact('buAll'));
    }

    public function villa()
    {
        $buAll = DB::table('bus')->where('bu_status', 1)
                                 ->where('bu_type',1)
                                 ->orderBy('id','desc')
                                 ->paginate(10);
        return view('build.index',compact('buAll'));
    }

    public function summar()
    {
        $buAll = DB::table('bus')->where('bu_status', 1)
                                 ->where('bu_type',2)
                                 ->orderBy('id','desc')
                                 ->paginate(10);
        return view('build.index',compact('buAll'));
    }
}
