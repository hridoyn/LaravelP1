@extends('layouts.app')
@section('content')

    <div class="container">
        <h4>Dear {{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
        <h5>your order has been successful</h5>
        <h5>We Will get back to you as soon as possible</h5>
    </div>





@endsection
