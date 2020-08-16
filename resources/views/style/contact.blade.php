
@extends('style.index')
@section('content')
	<section id="contact-page">
        <div class="container">
            <div class="center">
                <div class="title"> <h1 class="text-center" > للتواصل معنا</h1></div>

            </div> 
            <div class="row contact-wrap" >
                <!--<div class="status alert alert-success" style="display: none"></div> -->

                    {!! Form::open(['url'=>url('contactSend'),'method'=>'post','class'=>"contact-form"]) !!}
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label >الاسم *</label>
                            <input type="text" name="contact_name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>الايميل *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                      <div class="form-group">
                <label>النوع</label>
                <select class="form-control select2" name="type" style="width: 100%;">
                    @foreach(contact() as $key => $cont)
                        <option value="{{$key}}" selected="">{{$cont}}</option>
                    @endforeach
                </select>
              </div>
                                       
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>الموضوع *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>الرسالة *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">

                            {!! Form::submit('ارسال الرسالة ' ,['class'=>'btn btn-primary fa fa-send ']) !!}


                        </div>
                    </div>
                      {!! Form::close() !!}

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
@endsection