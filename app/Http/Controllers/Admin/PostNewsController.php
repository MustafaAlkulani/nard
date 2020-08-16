<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Image_new;
use  App\News;
class PostNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=News::all();
        $title='الاخبار ';
        return view('admin.post.index',compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='اضافة منشور جديد';
        return view('admin.post.create',compact('data','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nicename=[];
        $i=0;
        foreach (\request()->file('file') as $file){
            $nicename['file.'.$i]='The file('. $i.' )';
            $i++;
        }
        $files=$this->validate(request(),[
            'file.*'=>v_image(),
        ],[],[             $nicename        ]);

        $data=$this->validate(request(),[
            'title'=>'required',
            'type'=>'required|integer',
            'detail'=>'required',
            'file.*'=>v_image(),
        ],[],[
            'title'=>'عنوان الخبر ',
            'detail'=>'تفاصيل الخبر',
            'type'=>'نوع الخبر',
            $nicename
        ]);

      $d= News::create($data);
       $id=$d->id;
        if(\request()->hasFile('file')) {
                    $dataM = up()->upload([
                        //  'new_name' => '' ,
                        'file' => 'file',
                        'path' => 'news',
                        'upload_type' => 'multiple',
                        'delete_file' => '',
                    ]);

            foreach ($dataM as $file) {
                $im['id_new']=$id;
                $im['path']=$file;
                Image_new::create($im);
            }
        }
        session()->flash('success','تم اضافة المنشور بنجاح');
        return redirect(aurl('postNews'));
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
        $data=News::find($id);
        $dataM=Image_new::where('id_new',$id);

        $title='تعديل المنشور ';
        return view('admin.post.edit',compact('data','title'));
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
        $nicename = [];
        if(\request()->hasFile('file')) {
            $nicename = [];
            $i = 0;
            foreach (\request()->file('file') as $file) {
                $nicename['file.' . $i] = 'The file(' . $i . ' )';
                $i++;
            }
        }

        $data=$this->validate(request(),[
            'title'=>'required',
            'type'=>'required|integer',
            'detail'=>'required',
            'file.*'=>v_image(),
        ],[],[
            'title'=>'عنوان الخبر ',
            'detail'=>'تفاصيل الخبر',
            'type'=>'نوع الخبر',
            $nicename
        ]);

         News::where('id',$id)->update(['title'=>$data['title'],'type'=>$data['type'],'detail'=>$data['detail']]);
        $id=News::where('id',$id)->first()->id;
        if(\request()->hasFile('file')) {
            $dataM = up()->upload([
                //  'new_name' => '' ,
                'file' => 'file',
                'path' => 'news',
                'upload_type' => 'multiple',
                'delete_file' => '',
            ]);

            foreach ($dataM as $file) {
                $im['id_new']=$id;
                $im['path']=$file;
                Image_new::create($im);
            }
        }
        session()->flash('success',trans('admin.record_updated'));
        return redirect(aurl('postNews'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        News::where('id',$id)->delete();
        $d=Image_new::where('id_new',$id)->get();

           foreach ($d as $value){
            Storage::delete($value->path);
        }
        foreach ($d as $value){
            Image_new::where('id',$value->id)->delete();
        }
       

        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('postNews'));
    }


}
