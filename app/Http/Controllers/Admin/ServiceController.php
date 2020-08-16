<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use  App\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Service::all();
        $title=trans('admin.service');
        return view('admin.service.index',compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='اضافة خدمة جديدة';
        return view('admin.service.create',compact('data','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$this->validate(request(),[
            'name'=>'required',
            'detail'=>'required',
            'type'=>'required|integer|',
            'image'=>v_image(),
        ],[],[
            'name'=>'اسم الخدمة',
            'detail'=>'تفاصيل الخدمة',
            'type'=>'نوع الخدمة',
            'image'=>'صوره الخدمة',
        ]);


        if(\request()->hasFile('image')){
            $data['image']= up()->upload([
                // new_name => '' ,
                'file'=>'image',
                'path'=>'service',
                'upload_type'=>'single',
                'delete_file'=>'',
            ]);
        }

       Service::create($data);
        session()->flash('success',trans('admin.record_added'));
        return redirect(aurl('service'));
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
        $data=Service::find($id);
        $title='تعديل الخدمة ';
        return view('admin.service.edit',compact('data','title'));
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
        $d=Service::where('id',$id)->first();
        $data=$this->validate(request(),[
            'name'=>'required',
            'detail'=>'required',
            'type'=>'required|integer|',
            'image'=>v_image(),
        ],[],[
            'name'=>'اسم الخدمة',
            'detail'=>'تفاصيل الخدمة',
            'type'=>'نوع الخدمة',
            'image'=>'صوره الخدمة',
        ]);
        if(\request()->hasFile('image')){
            $data['image']= up()->upload([
                // new_name => '' ,
                'file'=>'image',
                'path'=>'service',
                'upload_type'=>'single',
                'delete_file'=>$d->image,
            ]);
        }
        Service::where('id',$id)->update($data);
        session()->flash('success',trans('admin.record_updated'));
        return redirect(aurl('service'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d=Service::where('id',$id)->first();
        Service::find($id)->delete();
        Storage::delete($d->image);
        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('service'));
    }


}
