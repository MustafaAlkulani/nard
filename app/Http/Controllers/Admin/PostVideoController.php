<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use  App\News_video;
class PostVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=News_video::all();
        $title='الفديوهات ';
        return view('admin.postVideo.index',compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='اضافة فيديو جديد';
        return view('admin.postVideo.create',compact('data','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //dd($request->path);
        $data=$this->validate(request(),[
            'title'=>'required',
            'detail'=>'required',
            'type'=>'required',
            'path'=>'required|mimes:mp4,mov,MP4,3gb',
        ],[],[
            'title'=>'العنوان',
            'type'=>'نوع الفيديو',
            'detail'=>'التفاصيل',
            'video'=>'الفيديو',
        ]);


        if(\request()->hasFile('path')){
            $data['path']= up()->upload([
                // new_name => '' ,
                'file'=>'path',
                'path'=>'videos',
                'upload_type'=>'single',
                'delete_file'=>'',
            ]);
        }

        News_video::create($data);
        session()->flash('success',trans('admin.record_added'));
        return redirect(aurl('postVideo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=News_video::find($id);
        $title='تعديل الفديو ';
        return view('admin.postVideo.edit',compact('data','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d=News_video::where('id',$id)->first();
        $data=$this->validate(request(),[
            'title'=>'required',
            'detail'=>'required',
            'type'=>'required|integer',
            'path'=>'sometimes|mimes:mp4,mov| max:111024',
        ],[],[
            'title'=>'العنوان',
            'type'=>'نوع الفيديو',
            'detail'=>'التفاصيل',
            'path'=>'الفيديو',
        ]);
        if(\request()->hasFile('path')){
            $data['path']= up()->upload([
                // new_name => '' ,
                'file'=>'path',
                'path'=>'video',
                'upload_type'=>'single',
                'delete_file'=>$d->path,
            ]);
        }
        News_video::where('id',$id)->update($data);
        session()->flash('success',trans('admin.record_updated'));
        return redirect(aurl('postVideo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {

        $d=News_video::where('id',$id)->first();
        News_video::find($id)->delete();
        Storage::delete($d->path);
        
        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('postVideo'));
    }


}
