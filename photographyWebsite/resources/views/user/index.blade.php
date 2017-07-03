@extends('layouts.app')
@section('content')

    <div class="container">
        <h4>Users</h4>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        {{link_to_route('user.edit','Edit',$user->id,['class'=>'btn btn-success'])}}
                        |
                        <form action="{{route('user.destroy',$user->id)}}" method=
                        "POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="button btn-success" type ="submit" value="Delete">
                        </form>
                    </td>

                </tr>

            </tbody>

            @empty

                <h3>No Users</h3>

            @endforelse
        </table>

    </div>
    <div class="container">
        <a href="{{url('admin/user/create')}}" class="btn btn-success" role="button">Add User</a>
        <a href="{{url('/admin')}}" class="btn btn-success" role="button">ADMIN</a>
    </div>
@endsection
