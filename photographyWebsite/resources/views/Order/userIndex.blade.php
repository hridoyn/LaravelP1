@extends('layouts.app')
@section('content')

    <div class="container">
        <h4>Dear,{!!\Illuminate\Support\Facades\Auth::user()->name !!}</h4>
        <h5>Your Approved Orders are mentioned below</h5>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>

                <th>Company Name</th>
                <th>Package Name</th>
                <th>Description</th>
                <th>Price</th>
                <!--<th>Action</th>-->
            </tr>
            </thead>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{$order->companyName}}</td>
                    <td>{{$order->packageName}}</td>
                    <td>{{$order->description}}</td>
                    <td>{{$order->price}}</td>
                    <!--<td>
                        <form action="{{route('UserOrders.destroy',$order->id)}}" method=
                        "POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="button btn-success" type ="submit" value="Delete">
                        </form>

                    </td>-->



                </tr>

            </tbody>

            @empty

                <h3>No Approved Orders Available</h3>
                <h3>You will see your approved orders as soon as they get verified </h3>

            @endforelse
        </table>

    </div>

@endsection
