<!DOCTYPE html>
<html>
	<head>
		<title>Books List</title>

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
		      						
                                  <li id="icon" ><a href="{{url('/')}}">Home</a></li>
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
			


		<!-- Books -->
		<section id="books">
			<div class="container">
				<div class="row text-center" id= "heading">
	        		<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
	        			<h3>Books</h3>
	                	<p>Keep reading. It's one of the most marvelous adventures anyone can have.</p>
	                	<hr class= "full">
	                	<br/>
	        		</div>
		        </div>
<!-- Filter Application using author and stores -->
				
			    <div class="main_content">
				
				<div class="col-md-3 ">
					<h2>Filters</h2>
				<div style="">
				<h4>Select Author</h4>
				
					<ul>
					@foreach($authors as $da)
  					<li ><a href="{{Request::url(). '?' . http_build_query(['author_id' => $da->id])}}
">{{$da->name}}</a></li><br>
  					@endforeach
					</ul>
					
				
				</div>
				<div style="">
				<h4>Select Store</h4>
				
					<ul>
					@foreach($stores as $st)
					@if($st->status==1)
  					<li ><a href="{{Request::url(). '?' . http_build_query(['store_id' => $st->id])}}">{{$st->name}}</a></li><br>
  					@endif
					@endforeach

					</ul>
					
				
				</div>
				
				</div>
				<div class="col-md-9">
				<div class="row">
					
					@foreach($books as $book)
					<div class="col-md-6  text-center">
						<div class="row wow animated zoomIn" data-wow-delay="0.1s">
							<div class="col-md-8 col-md-offset-2">
								<img class="img-circle img-responsive center-block"  src="uploads/books/{{$book->image}}" style="height: 200px;width:200px" alt="Books">
								<a href="viewbook/{{$book->id}}"><h4>{{$book->name}}</h4></a>
								
							</div>
						</div>
						</div>
						@endforeach
				</div>
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
