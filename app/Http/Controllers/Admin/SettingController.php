<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    // General Settings
    public function general(Request $request){
        if($request->isMethod('POST')){
            // dd($request->all());
            foreach($request->types as $key => $type){

                $settingsExist = Setting::where('type', $type)->first();

                if(!empty($settingsExist)){
                    if(gettype($request[$type]) == 'array'){
                        $settingsExist->value = json_encode($request[$type]);
                    }
                    else {
                        $settingsExist->value = $request[$type];
                    }
                    $settingsExist->save();
                }else{
                    $settings = new Setting();
                
                    $settings->type = $type;
                    if(gettype($request[$type]) == 'array'){
                        $settings->value = json_encode($request[$type]);
                    }else{
                        $settings->value = $request[$type];
                    }
                    $settings->save();
                }
            }
            
            toastr()->success('Settings updated successfully!');
            return redirect()->back();
        }
        return view('admin.setting.general');
    }

    // Social Settings
    public function social(Request $request){
        if($request->isMethod('POST')){
            // dd($request->all());
            foreach($request->types as $key => $type){

                $settingsExist = Setting::where('type', $type)->first();

                if(!empty($settingsExist)){
                    if(gettype($request[$type]) == 'array'){
                        $settingsExist->value = json_encode($request[$type]);
                    }
                    else {
                        $settingsExist->value = $request[$type];
                    }
                    $settingsExist->save();
                }else{
                    $settings = new Setting();
                
                    $settings->type = $type;
                    if(gettype($request[$type]) == 'array'){
                        $settings->value = json_encode($request[$type]);
                    }else{
                        $settings->value = $request[$type];
                    }
                    $settings->save();
                }
            }
            
            toastr()->success('Settings updated successfully!');
            return redirect()->back();
        }
        return view('admin.setting.social');
    }

    // Social Settings
    public function website(Request $request){
        return view('admin.setting.website');
    }

    // Social Settings
    public function footer(Request $request){
        return view('admin.setting.footer');
    }
}
