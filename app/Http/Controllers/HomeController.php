<?php

namespace App\Http\Controllers;
use App\Contact_us;
use App\News;
use App\News_video;
use App\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contactSend(){
        $data=$this->validate(request(),[
            'contact_name'=>'required',
            'email'=>'required|email',
            'type'=>'required|integer',
            'message'=>'required',
            'subject'=>'required',
        ],[],[
            'contact_name'=>trans('admin.name'),
            'email'=>trans('admin.email'),
            'type'=>trans('admin.type'),
            'subject'=>trans('admin.subject'),
            'message'=>trans('admin.message'),
        ]);


        Contact_us::create($data);
        session()->flash('success',trans('all.send_success'));
        return redirect()->back();
    }

    public function homeView(){
        $news=News::orderBy('id','asc')->paginate(9);
       // $video=News_video::orderBy('id','asc')->paginate(9);

        return view('style.home3',compact('news'));
    }

 public function newsView(){
        $news;
        $type=0;
     if(request()->has('type')){
         $type=request('type');
        $news=News::where('type',$type)->get();
     }else{
         $news=News::all();
     }
     return view('style.profile',compact('news','type'));
 }

    public function detailView($id){
        $news=News::orderBy('id','asc')->paginate(9);
        $detail=News::find($id);
        return view('style.details',compact('news','detail'));
    }

    public function service(){
        $data1=Service::where('type',1)->get();
        $data2=Service::where('type',2)->get();

        return view('style.service',compact('data1','data2'));
    }
    


    public function video()
    {
        $video=News_video::orderBy('id','asc')->paginate(9);

        return view('style.video',compact('video'));
    }




}
