@extends('layouts.app')
@section('content')

    <div class="container">
        <h4>Welcome To Ishrat Amin Photography</h4>
        <h5>Our Package's Info is given Below</h5>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($packages as $package)
                <tr>
                    <td>{{$package->name}}</td>
                    <td>{{$package->description}}</td>
                    <td>{{$package->price}}</td>
                    <td>
                        <form action="{{route('UserOrders.store')}}" method=
                        "POST">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input type="hidden" name="packageid" value="{!!$package->id!!}">
                            <input type="hidden" name="packagename" value="{!!$package->name!!}">
                            <input type="hidden" name="price" value="{!!$package->price!!}">
                            <input type="hidden" name="description" value="{!!$package->description!!}">
                            <input type="hidden" name="user_id" value="{!!Auth::user()->id!!}">
                            <input type="hidden" name="delivered" value="0">
                            <input type="hidden" name="company_id" value="{!! $package->company_id !!}">
                            <input type="hidden" name="companyname" value="Ishrat Amin Photography">

                            <input class="button btn-success" type ="submit" value="Order">
                        </form>

                    </td>

                </tr>


            </tbody>
            @empty
                <h3>No company</h3>
            @endforelse


        </table>

    </div>

@endsection
