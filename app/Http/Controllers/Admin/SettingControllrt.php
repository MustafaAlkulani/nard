<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Support\Facades\Storage;

class SettingControllrt extends Controller
{
    public  function setting(){
    return view('admin.setting',['title'=>'اعدادات  بيانات الموقع ']);
}

public function setting_save(Request $request){

    foreach (array_except( $request->toArray(),['_token','submit']) as $key=>$rq){
        $siteSettingUpdate=Setting::where('name',$key)->get()[0];

        //
        if($siteSettingUpdate->type !=4) {
            $siteSettingUpdate->fill(['value'=>$rq])->save();
            // $siteSettingUpdate->fill(['only' => ['value' => $rq]])->save();
        }
        else{

            $fildName= up()->upload([
                    // new_name => '' ,
                    'file'=>$key,
                    'path'=>'setting',
                    'upload_type'=>'single',
                    'delete_file'=>'',
                ]);
            if($fildName){
                $siteSettingUpdate->fill(['value' =>$fildName])->save();
            }
        }
    }

     session()->flash('success','تم التعديل بنجاح');
     return redirect(aurl('setting'));
    }
}
