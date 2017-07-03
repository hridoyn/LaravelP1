<!DOCTYPE html>
<html>
<head>

    <title>Seek Wedding Photographer </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<link rel="stylesheet" href="{{asset('/css/app.css')}}"/>
</head>

<body>

<h1>Seek Wedding Photographer</h1>

<nav class="abc">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#Wedding Photographers">Wedding Photographers</a>

            <ul class="sub-menu">
                <li><a href="">Dream Weaver</a></li>
                <li><a href="">Ishrat Amin Photography</a></li>
                <li><a href="">Wedding Diary</a></li>


            </ul>
        </li>
        <li><a href="#pictures">Pictures</a>
            <ul class="sub-menu2">
                <li><a href="">Explore Pictures</a></li>
            </ul>
        </li>
        <li style="float:right"><a href="#Login">Contact</a></li>

        <li style="float:right"><a href=#login>Login</a>
        </li>

    </ul>
</nav>
</body>

<script src="{{asset('/js/main.js')}}"></script>


</head>
<body>
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





<!-- Container (Services Section) -->
<div class="container-fluid text-center">
    <h2>Seek Wedding Photographer</h2>

    <br>
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-user"></span>
            <h4>About Us</h4>
            <p></p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-phone"></span>
            <h4>Contact</h4>
            <p></p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-search"></span>
            <h4>Find Us</h4>
            <p></p>
        </div>
    </div>

</div>


</body>


</html>
