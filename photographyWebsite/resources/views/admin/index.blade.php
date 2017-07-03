@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}"/>

</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{url('admin/Companies')}}">Company</a>
    <a href="{{url('admin/user')}}">User</a>
    <a href="{{url('admin/packages')}}">Company Packages</a>
    <a href="{{url('admin/Orders/{type?}')}}">Orders</a>
    <a href="{{url('admin/Orders/pending')}}">Pending Orders</a>
    <a href="{{url('admin/Orders/delivered')}}">Delivered Orders</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; ADMIN</span>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>

</body>
</html>
@endsection
