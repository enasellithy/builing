<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;
use Redirect;
use Intervention\Image\ImageManagerStatic as Image;

class SettingController extends Controller
{
    public function index(Setting $setting)
    {
    	$settings = Setting::all();
    	return view('admin.setting.index',compact('settings'));
    }

    /*public function store(Request $request, Setting $setting)
    {
        foreach(array_except($request->toArray(), ['_token','submit']) as $key => $req){
        $settingUpdate = $setting->where('setting',$key)->get()[0];
        if($settingUpdate->type != 3){
            $settingUpdate->fill(['value'=>$req])->save();
        }else{
            $filename = uploadImage($req, '/public/images/slider/','1500','500',$settingUpdate->value);
            if($filename){
                $settingUpdate->fill(['value'=>$filename])->save();
            }
        }
        //$settingUpdate->fill(['value'=>$req])->save();
       }
       dd($settingUpdate);
       return Redirect::back()->withFlashMessage('Done');
    }*/

    public function store(Request $request, Setting $setting)
    {
        foreach(array_except($request->toArray(), ['_token','submit']) as $key => $req){
        $settingUpdate = $setting->where('setting',$key)->get()[0];
        $settingUpdate->fill(['value'=>$req])->save();
       }
       return Redirect::back()->withFlashMessage('Done');
    }
}
