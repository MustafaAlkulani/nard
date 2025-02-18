<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\ContactUsDatatable;
use  App\Contact_us;
class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ContactUsDatatable $admin)
    {

        return $admin->render('admin.contact.index',['title'=>'رسائل التواصل ']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'email'=>'required|email:admins',
            'password'=>'required|min:6',
        ],[],[
            'name'=>trans('admin.name'),
            'email'=>trans('admin.email'),
            'password'=>trans('admin.password'),
        ]);
        $data['password']=bcrypt(request('password'));

        Admin::create($data);
        session()->flash('success',trans('admin.record_added'));
        return redirect(aurl('admin'));
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
        $admin=Admin::find($id);
        $title=trans('admin.edit');
        return view('admin.admins.edit',compact('admin','title'));
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
        $data=$this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email:admins,email,'.$id,
            'password'=>'sometimes|nullable|min:6',
        ],[],[
            'name'=>trans('admin.name'),
            'email'=>trans('admin.email'),
            'password'=>trans('admin.password'),
        ]);
        if($request->has('password')){
            $data['password']=bcrypt(request('password'));
        }
        Admin::where('id',$id)->update($data);
        session()->flash('success',trans('admin.record_updated'));
        return redirect(aurl('admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::find($id)->delete();
        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('admin'));
    }


    public  function  multe_delete(){
        if(is_array(\request('item'))){
            Admin::destroy(\request('item'));
        }else{
            Admin::find(\request('item'))->delete();
            session()->flash('success',trans('admin.record_deleted'));
            return redirect(aurl('admin'));
        }
    }
}
