@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Company
                </div>
                <div class="panel-body">
                    <form action="/admin/Companies/{{$company->id}}" method="POST">

                        {{method_field('PUT')}}
                        {{csrf_field()}}

                        <input type="hidden" name="user_id" value="{!!Auth::user()->id!!}">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <textarea name="name" class="form-control">{{$company->name}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <textarea name="email" class="form-control">{{$company->email}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Phone Number</label>
                            <textarea name="phonenumber" class="form-control">{{$company->phonenumber}}</textarea>
                        </div>



                        <input type= "submit" class="btn btn-success pull-right">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection