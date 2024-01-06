<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    /* Add background design to the body */
    body {
      /* background: url('assets/doctor.jpg') no-repeat center center fixed; */
      background-size: cover;
      color: #fff; /* Set text color to be visible on the background */
    }

    /* Style for the jumbotron */
    .jumbotron {
      background-color: #DDDDDD;
      color: #333; /* Dark grey color */
        font-family: 'Sans-serif', sans-serif; /* Make jumbotron background transparent */
    }

    /* Style for the container-fluid sections */
    .container-fluid {
      background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
      padding: 20px; /* Add padding to the sections */
      border-radius: 10px; /* Add rounded corners */
      margin-top: 20px;
      color: #333;  /* Add top margin to separate sections */
    }

    .topic {
        color: #333; /* Dark grey color */
        font-family: 'Sans-serif', sans-serif; /* Use sans-serif font */
    }



    /* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.footer-content {
    max-width: 960px;
    margin: 0 auto;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin-top: 10px;
}

.footer-links li {
    display: inline-block;
    margin-right: 10px;
}

.footer-links a {
    color: #fff;
    text-decoration: none;
}


  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Appointment</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="{{ url('/doctordata') }}">Staff</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<div class="jumbotron">
  <div class="container text-center">
    <h1 class="topic"><b>Clinic Care Centre</b></h1>
    <p>   Care that Clicks - Clinic Booking Made Easy.!</p><br>

    <button type="button" class="btn btn-primary">
        <a href="{{ route('appointment.createForm') }}" style="color: white; text-decoration: none;">Book Appointment Now!</a>
    </button>

  </div>



</div>

<div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-sm-3">
      <p>Covid Screening</p>
      <img src="assets/covid.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Counselling Session</p>
      <img src="assets/mentalhealth.jpeg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Primary Care</p>
      <img src="assets/primarycare.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Urgent Care</p>
      <img src="assets/urgentcare.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<footer>
    <div class="container">
        <div class="footer-content">
            <p>&copy; 2024 Clinic Care Centre. All rights reserved.</p>
            <ul class="footer-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>






