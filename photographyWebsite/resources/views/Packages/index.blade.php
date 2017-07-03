@extends('layouts.app')
@section('content')

    <div class="container">
        <h4>Packages</h4>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($packages as $package)
                <tr>
                    <td>{{$package->id}}</td>
                    <td>{{$package->name}}</td>
                    <td>{{$package->description}}</td>
                    <td>${{$package->price}}</td>
                    <td>
                        {{link_to_route('packages.edit','Edit',$package->id,['class'=>'btn btn-success'])}}
                        |
                        <form action="{{route('packages.destroy',$package->id)}}" method=
                        "POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="button btn-success" type ="submit" value="Delete">
                        </form>
                    </td>

                </tr>

            </tbody>

            @empty

                <h3>No Packages Available</h3>

            @endforelse
        </table>

    </div>
    <div class="container">
       <a href="{{url('admin/packages/create')}}" class="btn btn-success" role="button">Add Packages</a>
        <a href="{{url('/admin')}}" class="btn btn-success" role="button">ADMIN</a>
    </div>
@endsection
