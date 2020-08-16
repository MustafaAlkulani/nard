@extends('admin.index')
@section('content')

    <div class="box">
        <section class="content">
            <div class="row">
                <div class="box-header">
                    <h3 class="box-title">{{ $title }}  </h3>
                </div>
                <div class="box-footer">

                    <div class="text-center">
                        <a  class="btn btn-primary btn-block" href="{{aurl('postVideo/create')}}"  name='submit' >اضافةفيديو جديد</a>
                    </div>
                </div>

                <div class="box-body">
                    <table id="example3" class="table table-bordered table-striped">
                        <thead>
                        <tr>

                            <th>عنوان الفديو </th>
                            <th>النوع</th>
                            <th>التفاصيل </th>
                            <th>الفيديو </th>

                            <th> تعديل </th>

                            <th>حذف</th>




                        </tr>
                        </thead>
                        <tbody>


                        @foreach($data as $role)

                        <tr>

                            <td>{{$role->title}}</td>
                            <td>
                                @foreach(typeNews() as $type=>$value)
                                    @if($type == $role->type)
                                        <h5> {{$value}}</h5>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                            {{$role->detail}}
                            <td >

                                <video width="320" height="240" controls>
                                    <source src="{{Storage::url($role->path)}}" type="video/mp4">

                                    Your browser does not support the video
                                </video></td>

                            <td> <a class='btn btn-info'  href="{{aurl('postVideo/'.$role->id.'/edit')}}"  > تعديل </a>      </td>


                            <td onclick='JSalert({{$role->id}})'  >  حذف   <i style="color: red" class="icon ion-android-delete"></i>   </td>

                        </tr>

@endforeach

                        </tbody>

                    </table>
                </div>


            </div>

        </section>
    </div>


<script>

    function JSalert(id){
        swal({   title: "هل تريد الحذف فعلا",
                text: "سيتم الحذف نهايا",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f60f05",
                confirmButtonText: "حذف!",
            confirmButtonValue:'service/'+id+'/destroy',
                cancelButtonText: "الغاء!",
                closeOnConfirm: false,
                closeOnCancel: true },
            function(isConfirm){

                if (isConfirm)
                {//صفحة الحذف
window.location.assign('postVideo/'+id+'/destroy')
                }
                else {
                    swal("الغاء", "تم التراجع عن الحذف بنجاح!", "error");
                } });
    }
</script>

@endsection



