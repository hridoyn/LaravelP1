@extends('layouts.app')
@section('content')

    <div class="container">
        <h3>Add Packages</h3>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!!Form::open(['route'=>"packages.store",'method'=>'post','files'=>true])!!}

            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name',null,array('class'=>'form-control'))}}
            </div>

            <div class="form-group">
                {{Form::label('description','Description')}}
                {{Form::text('description',null,array('class'=>'form-control'))}}
            </div>


            <div class="form-group">
                {{Form::label('price','Price')}}
                {{Form::text('price',null,array('class'=>'form-control'))}}
            </div>

            <div class="form-group">
                {{Form::label('company_id','Company_id')}}
                {{Form::text('company_id',null,array('class'=>'form-control'))}}
            </div>

            {{Form::submit('Create',array('class'=>'btn btn-default'))}}
            {!!Form::close()!!}

    </div>
    </div>



@endsection