<!DOCTYPE html>
<html>
<head>
		<title>Authors List</title>

		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
	    <link rel="stylesheet" href="css/animate.css">
	    <link rel="stylesheet" href="css/custom.css">

	    <!-- js -->
	    <script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/owl.carousel.min.js"></script>
	    <script src="js/isotope.pkgd.min.js"></script>
		<script src="js/script.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.actual.min.js"></script>
	</head>

	<body>
		<div id="wrapper">
			<div id="">
				<section id= "navigation">
					<nav class="navbar navbar-default navbar-fixed-top bg-dark" role="navigation">
	  					<div class="container-fluid">
	    					<div class="navbar-header">
	      						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        		<span class="ion-navicon"></span>
					      		</button>
					      		<a class="navbar-brand" href="#">BMS</a>
					    	</div>
	    					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      					<ul class="nav navbar-nav navbar-right">
		      					<li id="icon"><a href="{{url('/')}}">Home</a></li>
		      						<li id="icon" class=""><a href="{{url('/bookli')}}">Books</a></li>
		        					<li id="icon"><a href="{{url('/authorli')}}">Authors</a></li>
		        					<li id="icon"><a href="{{url('/storeli')}}">Stores</a></li>
									<li id="icon"><a href="{{url('/about')}}">About Us</a></li>
		        					<li id="icon"><a href="{{url('/contactus')}}">Contact us</a></li>
							    </ul>
	    					</div>	<!-- collapse navbar-collapse -->
	  					</div>	<!-- container-fluid -->
					</nav>	<!-- navbar -->
				</section>	<!-- #navigation -->
				
				<!-- <section id="starting">
					<div class="text-center starting-text">
						<h1 class="rene">Book Management System</h1>
						<h2>Books are a uniquely portable magic.</h2>
					</div>
				</section>
				<div id="bottom" class="bottom text-center">
			        <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
			    </div> -->
			</div><!-- overlay-1 -->
            </div><!--  wrapper  -->
			

		<!-- Authors -->
		<section id="author">
			<div class="container">
				<div class="row text-center" id= "heading">
	        		<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
	        			<h3>Authors</h3>
	                	<p>The historian records, but the novelist creates. ~E. M. Forsters</p>
	                	<hr class= "full">
	                	<br/>
	        		</div>
		        </div>

			    	<div class="row main_content">
				    	<!-- Author Data from Database -->
						<div class="row">
							@foreach($authors as $author)
							<div class="col-md-4  text-center">
								<div class="row wow animated zoomIn" data-wow-delay="0.1s">
									<div class="col-md-8 col-md-offset-2">
										<img class="img-circle img-responsive center-block"  src="uploads/author/{{$author->image}}" style="height: 250px;width:200px" alt="Books">
										<a href="viewau/{{$author->id}}"><h4>{{$author->name}}</h4></a>
										
									</div>
								</div>
								</div>
								@endforeach
						</div>
				
					
							
							

							
				</div>	<!-- main_content -->
			</div>	<!-- container -->
		</section>	<!-- Books -->

        <section id= "footer" class= "main-footer">
			{{-- <div class= "row">
				<div class= "logo text-center">
					<h1>BMS</h1>
				</div>
			</div> --}}
			<div class= "row">
				<div class= "copyright text-center">
					<p> © 2023 Technext. Designed and Developed by PHP Team</p>
				</div>
			</div>
		</section>


			
		
	
		
	</body>
</html>
