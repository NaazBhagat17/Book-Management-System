<!DOCTYPE html>
<html>

<head>
    <title>Blog Page</title>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/custom.css">


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.actual.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div id="wrapper">
        <div id="">
            <section id="navigation">
                <nav class="navbar navbar-default navbar-fixed-top bg-dark" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                                <span class="ion-navicon"></span>
                            </button>
                            <a class="navbar-brand" href="#">BMS</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li id="icon"><a href="{{url('/')}}">Home</a></li>
                                <li id="icon"><a href="{{url('/bookli')}}">Books</a></li>
                                <li id="icon"><a href="{{url('/authorli')}}">Authors</a></li>
                                <li id="icon"><a href="{{url('/storeli')}}">Stores</a></li>
                                <li id="icon"><a href="{{url('/about')}}">About Us</a></li>
                                <li id="icon"><a href="{{url('/contactus')}}">Contact us</a></li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </section>

        </div>
    </div>





    <div class="container">



        <div class="main_content">
            <div class="container ">
                <div class="mt-5">
                    <br><br>

                    <h1 style="text-align: center" class="">{{$cms->title}}</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4"><img src="../assets/img/book1.jpg" width=100%; height=auto alt=""></div>
                    <div class="col-md-8  mt-3 " style="text-align: justify">
                        <p>{!! $cms->content!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8  mt-3" style="text-align: justify">
                        <p>{!! $cms2->content!!}</p>
                    </div>
                    <div class="col-md-4"><img src="../assets/img/book2.jpg" width=100%; height=auto alt=""></div>
                </div>
            </div>



        </div>

    </div>


    <section id="footer" class="main-footer">
        {{-- <div class= "row">
				<div class= "logo text-center">
					<h1>BMS</h1>
				</div>
			</div> --}}
        <div class="row">
            <div class="copyright text-center">
                <p> © 2023 Technext. Designed and Developed by PHP Team</p>
            </div>
        </div>
    </section>

</body>

</html>