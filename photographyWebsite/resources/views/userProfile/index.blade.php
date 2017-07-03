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
            @forelse($profiles as $profile)
                <tr>
                    <td>{{$profile->id}}</td>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->email}}</td>
                    <td>
                        {{link_to_route('profile.edit','Edit',$profile->id,['class'=>'btn btn-success'])}}

                    </td>

                </tr>

            </tbody>

            @empty

                <h3>No Users</h3>

            @endforelse
        </table>

    </div>
@endsection
