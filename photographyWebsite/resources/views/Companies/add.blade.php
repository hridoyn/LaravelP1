@extends('layouts.app')
@section('content')


    <h3>Add Photographer</h3>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    {!!Form::open(['route'=>"Companies.store",'method'=>'post','files'=>true])!!}

                    <div class="form-group">
                        {{Form::label('name','Name')}}
                        {{Form::text('name',null,array('class'=>'form-control'))}}
                    </div>

                    <div class="form-group">
                        {{Form::label('email','Email')}}
                        {{Form::text('email',null,array('class'=>'form-control'))}}
                    </div>


                    <div class="form-group">
                        {{Form::label('phonenumber','Phone Number')}}
                        {{Form::text('phonenumber',null,array('class'=>'form-control'))}}
                    </div>

                    <div>
                        {{ Form::hidden('user_id',$user=Auth::user()->id)}}

                    </div>



                    {{Form::submit('Create',array('class'=>'btn btn-default'))}}
                    {!!Form::close()!!}
                </div>
            </div>


@endsection