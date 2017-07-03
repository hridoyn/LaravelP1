@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit User
                </div>
                <div class="panel-body">
                    <form action="/profile/{{$profile->id}}" method="POST">

                        {{method_field('PUT')}}
                        {{csrf_field()}}


                        <div class="form-group">
                            <label for="name">Name</label>
                            <textarea name="name" class="form-control">{{$profile->name}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <textarea name="email" class="form-control">{{$profile->email}}</textarea>
                        </div>

                        <input type= "submit" class="btn btn-success pull-right">

                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection