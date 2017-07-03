@extends('layouts.app')
@section('content')

<div class="container">
    <h4>Companies</h4>
</div>

<div class="container">
<table class="table table-hover">
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Action</th>
    </tr>
    </thead>
<tbody>
@forelse($companies as $company)
    <tr>
        <td>{{$company->id}}</td>
        <td>{{$company->name}}</td>
        <td>{{$company->email}}</td>
        <td>{{$company->phonenumber}}</td>
        <td>
            {{link_to_route('Companies.edit','Edit',$company->id,['class'=>'btn btn-success'])}}
            |
            <form action="{{route('Companies.destroy',$company->id)}}" method=
            "POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input class="button btn-success" type ="submit" value="Delete">
            </form>
        </td>

    </tr>

</tbody>

    @empty

        <h3>No Company</h3>

    @endforelse
</table>

</div>
<div class="container">
    <a href="{{url('admin/Companies/create')}}" class="btn btn-success" role="button">Add Company</a>
    <a href="{{url('/admin')}}" class="btn btn-success" role="button">ADMIN</a>
</div>
    @endsection
