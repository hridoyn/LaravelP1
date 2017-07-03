<!DOCTYPE html>
<html lang="en">
<head>
    <title>Seek Wedding Photographer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/homepage.css')}}"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Seek Wedding Photographer</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{url('/home')}}">Home</a></li>
            @if(\Illuminate\Support\Facades\Auth::check())
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Wedding Photographers<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/dreamWeaver')}}">Dream Weaver</a></li>
                    <li><a href="{{url('/iap')}}">Ishrat Amin Photography</a></li>
                    <li><a href="{{url('/weddingDiary')}}">Wedding Diary</a></li>
                </ul>
               @else
                <li><a href="{{url('/login')}}">Wedding Photographers</a></li>
            @endif
            </li>
            <li><a href="{{url('/pictures')}}">Pictures</a></li>
            <li><a href="{{url('/UserOrders')}}">Orders</a></li>
            @if(Auth::check() && Auth::user()->isAdmin())
            <li ><a href={{'/admin'}}>Admin Panel</a>
                @endif
            </li>
             @if(\Illuminate\Support\Facades\Auth::check())
                <li><a href="{{url('/profile')}}">Edit Profile</a>
                @endif
                </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>Contact</a></li>
            @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li>

                            <a href="{{ url('/') }}">
                                Wedding Photography
                            </a>


                        </li>
                        <li>
                            <a href="{{ url('/Password') }}">
                                Change Password
                            </a>
                        </li>


                    </ul>
                </li>

            @else
                <li><a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    @endif
                </li>
        </ul>
    </div>
</nav>
<script src="{{asset('/js/main.js')}}"></script>


</head>
<img src="1.jpg" name="slide" width="1350" height="650">
<script type="text/javascript">
    var step=1;
    function slideIt(){
        document.images.slide.src=eval("image"+step+".src")
        if(step<8){
            step++;
        }else{
            step=1;
        }
        setTimeout("slideIt()",2500)
    }
    slideIt();
</script>

<div class="w3-container">

    <div class="jumbotron">
        <h2>Seek Wedding Photographer</h2>
        <div class="thumbnail">
            <img src="{{asset('/images/aboutus.jpg')}}" alt="Lights" style="width:50%">
            <div class="caption">
                <p>Seek Wedding Photographer provides user with the top rated photographers of Bangladesh.User can seek photographers and order their desired packages through us.</p>
            </div>

            </div>
        </div>

    </div>
</div>

<!--contact us-->
<div class="w3-container">

    <div class="jumbotron"><!--jumbotron class starts-->
        <h2><span class="glyphicon glyphicon-envelope"></span>Contact Us</h2>
        <div class="thumbnail">
            <img src="{{asset('/images/contact-us.jpg')}}" alt="Lights" style="width:50%">
            <div class="caption">
                <p>For any query.Please,feel free to contact us</p>
            </div>

            <div class="row"><!--row starts for contact pictures-->

                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('/images/email.jpg')}}" alt="Lights" style="width:50%">
                        <div class="caption">
                            <a href="{{url('#')}}" target="_blank">hridoyn@live.com</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('/images/facebook.png')}}" alt="Lights" style="width:50%">
                        <div class="caption">
                            <a href="{{url('')}}" target="_blank">Facebook</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('/images/instagram.png')}}" alt="Lights" style="width:50%">
                        <div class="caption">
                            <a href="{{url('/')}}" target="_blank">Instagram</a>
                        </div>
                    </div>
                </div>


            </div><!--firstrow ends-->


        </div>
    </div><!--jumbotron ends-->

</div><!--container ends-->

    </div>
</div>



<!-- Footer -->

<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="{{url('/')}}" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Seek Wedding Photographers Developers</a></p>

</footer>
</body>
</html>
