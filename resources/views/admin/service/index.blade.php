@extends('admin.index')
@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ $title }}  </h3>
        </div>
        <div class="box-body">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a href="{{aurl('service/create')}}">
                        <button class="btn btn-info" href="{{aurl('service/create')}}">
                            <i class="fa fa-plus" ></i> {{trans('admin.create_service')}} </button>
                        </a>
                        <p class="card-description">

                        </p>
<hr>

                        @if(!empty($data))

                        <div class="table-responsive ">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>
                                        اسم الخدمة
                                    </th>
                                    <th>
                                        وصف الخدمة

                                    </th>
                                    <th>
                                       نوع الخدمة

                                    </th>
                                    <th>
                                        الصورة
                                    </th>

                                    <th>
                                      تعديل
                                    </th>

                                    <th>
                                       حذف
                                    </th>
                                </tr>
                                </thead>


                                <tbody>


                                      @foreach ( $data as $role)
                                          <tr>
                                              <td>{{$role->name}}     </td>
                                              <td>{{$role->detail}}     </td>
                                              <td>  @foreach(service() as $type=>$value)
                                                      @if($type == $role->type)
                                                          <h5> {{$value}}</h5>
                                                      @endif
                                                  @endforeach

                                              </td>
                                              <td>
                                                 <img src=" {{Storage::url($role->image)}}" class="img-responsivee" style="display:inline ; width: 100px" alt="Bird" >
                                              </td>
                                              <td>
                                                  <a href="{{aurl('service/'.$role->id.'/edit')}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                              </td>

                                              <td>

                                                          <button type="button" class="btn btn-danger "  onclick="JSalert({{$role->id}})" >
                                                              <i class="fa fa-trash"></i>
                                                          </button>




                                          </tr>
                                      @endforeach

                                                                    </tbody>


                            </table>
                        </div>

                        @else
                            <div>
                                <h4 class="text-center">لاتوجد بيانات</h4>
                            </div>


                        @endif
                        <hr>

                    </div>
                </div>
            </div>
        </div>
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
                closeOnCancel: false },
            function(isConfirm){

                if (isConfirm)
                {//صفحة الحذف
window.location.assign('service/'+id+'/destroy')
                }
                else {
                    swal("الغاء", "تم التراجع عن الحذف بنجاح!", "error");
                } });
    }
</script>

@endsection



