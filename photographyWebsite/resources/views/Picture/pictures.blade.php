@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Picture Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <div class="row">

        <div class="col-md-4">
            <div class="thumbnail">
                    <img src="{{asset('/images/gallery1.jpg')}}" alt="Lights" style="width:100%">
                    <div class="caption">
                        @if(\Illuminate\Support\Facades\Auth::check())
                        <a href="{{url('/dreamWeaver')}}" target="_blank">Click Here To Order
                        @endif
                        </a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery2.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/dreamWeaver')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery3.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/dreamWeaver')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>


    </div><!--firstrow ends-->

    <div class="row">

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery4.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/dreamWeaver')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery6.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/iap')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery7.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/iap')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>

    </div>  <!--second row ends-->

    <div class="row">  <!--3rd row starts-->

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery8.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/iap')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery9.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/iap')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery10.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/iap')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>

    </div>   <!--3rd row ends-->


    <div class="row"> <!--4th row starts-->

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery11.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/weddingDiary')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery12.jpg')}}" alt="Lights" style="width:80%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/weddingDiary')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery13.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/weddingDiary')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>


    </div>      <!--4th row ends-->

    <div class="row">  <!--5th row starts-->


        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery14.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/weddingDiary')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery15.jpg')}}" alt="Lights" style="width:80%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/weddingDiary')}}" target="_blank">Click Here To Order
                    @endif
                    </a>

                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/images/gallery16.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/weddingDiary')}}" target="_blank">Click Here To Order
                    @endif
                    </a>
                </div>
            </div>
        </div>



    </div><!--5th row ends-->



</div>   <!--container ends-->
</body>
</html>

@endsection



