@extends('layouts.app')
@section('content')

    <div class="container">
        <h4>Orders By Users</h4>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>User_id</th>
                <th>Company Name</th>
                <th>Package Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->companyName}}</td>
                    <td>{{$order->packageName}}</td>
                    <td>{{$order->description}}</td>
                    <td>{{$order->price}}</td>
                    <td>
                        <form action="{{route('toggle.deliver', $order->id)}}" method="POST" class="pull-right">
                            {{csrf_field()}}
                            <label for="delivered">Delivered</label>
                            <input type="checkbox" value="1" name="delivered" {{$order->delivered==1?"checked":""}}>
                            <input type="submit" value="Submt">
                        </form>

                    </td>



                </tr>

            </tbody>

            @empty

                <h3>No Order Available</h3>

            @endforelse
        </table>

    </div>
    <div class="container">
        <a href="{{url('/admin')}}" class="btn btn-success" role="button">ADMIN</a>
    </div>
@endsection
