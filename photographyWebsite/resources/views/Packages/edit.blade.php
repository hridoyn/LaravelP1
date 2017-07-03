@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Packages
                </div>
                <div class="panel-body">
                    <form action="/admin/packages/{{$package->id}}" method="POST">

                        {{method_field('PUT')}}
                        {{csrf_field()}}


                        <div class="form-group">
                            <label for="name">Name</label>
                            <textarea name="name" class="form-control">{{$package->name}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control">{{$package->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <textarea name="price" class="form-control">{{$package->price}}</textarea>
                        </div>



                        <input type= "submit" class="btn btn-success pull-right">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection