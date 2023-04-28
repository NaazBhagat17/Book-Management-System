<!DOCTYPE html>
<html>
	<head>
		<title>BMS</title>

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
			<div id="overlay-1">
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
		      					<ul  class="nav navbar-nav navbar-right">
		      						
								  <!-- <li><a href="{{url('/')}}">Home</a></li> -->
		      						<li id="icon" class=""><a href="{{url('/bookli')}}">Books</a></li>
		        					<li id="icon" ><a href="{{url('/authorli')}}">Authors</a></li>
		        					<li id="icon" ><a href="{{url('/storeli')}}">Stores</a></li>
									<li id="icon" ><a href="{{url('/about')}}">About Us</a></li>
		        					<li id="icon" ><a href="{{url('/contactus')}}">Contact us</a></li>
									
							    </ul>
	    					</div>	<!-- collapse navbar-collapse -->
	  					</div>	<!-- container-fluid -->
					</nav>	<!-- navbar -->
				</section>	<!-- #navigation -->
				
				<section id="starting">
					<div class="text-center starting-text">
						<h1 class="rene">Book Management System</h1>
						<h2>Books are a uniquely portable magic.</h2>
					</div>
				</section>
				<div id="bottom" class="bottom text-center">
			        <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
			    </div>
			</div><!-- overlay-1 -->
		</div>	<!-- wrapper -->		
			
		<!-- About Us -->
		<section id="about">
			<div class="container">
				<div class="row text-center" id="heading">
					<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
						<h3>About Us</h3>
	                	<p>We are here, Nothing to fear</p>
	                	<hr class="full">
	                	<br/>
					</div>
				</div>	<!-- row -->
				<div class="row about-us-text">
					<div class="col-md-8 col-md-offset-2 text-center">
						<p class="text-center" style="text-align: justify">Welcome to the Book Management System, a platform designed to simplify the process of managing books. Our system provides an easy way to organize and track your book inventory, as well as manage borrowing and lending of books.<br>
							As developers, it was our fantasy to create a book app that comprehended workmanship and showed books enough to commit a whole space to the class, to make an environment as excellent, tricking, and smooth as the books it would house. After two weeks, we believe we have succeeded.
							<br>
							Furthermore, that is why we have ventured to the far corners of the planet and tapped our assets to convey to you the best distributors.<br>
As we came and saw your eagerness for the books we were loading, we were urged to extend our vision, including author description.<br>
BMS is synonymous with a specific tasteful and has solidly settled itself as the home of workmanship and shown books around the world.

						</p>
					</div>
				</div>	<!-- row -->
				
			</div>	<!-- container -->
		</section>	<!-- about us -->

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
				
			   
				<div class="row">
					
					@foreach($data2 as $book)
					<div class="col-md-4  text-center">
						<div class="row wow animated zoomIn" data-wow-delay="0.1s">
							<div class="col-md-8 col-md-offset-2">
								<img class="img-circle img-responsive center-block"  src="uploads/books/{{$book->image}}" style="height: 200px;width:200px" alt="Books">
								<a href="viewbook/{{$book->id}}"><h4>{{$book->name}}</h4></a>
								
							</div>
						</div>
						</div>
						@endforeach
				</div>
					
							
							

							
				</div>	<!-- main_content -->
			</div>	<!-- container -->
		</section>	<!-- Books -->

		<!-- Authors -->
	    <section id="authors">
	    	<div class="container">
		    	<div class="team-members">
		    		<div class="row text-center" id="heading">
		    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
		        			<h3>Authors</h3>
		                	<p>The historian records, but the novelist creates. ~E. M. Forsters</p>
		                	<hr class="full">
		                	<br/>
		        		</div>
		    		</div>
			    	<div class="row main_content">
				    	<!-- Author Data from Database -->
						<div class="row">
							@foreach($data1 as $author)
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
						<!-- Author Data from Database -->
			    	</div> <!-- row main_content -->
			    </div>	<!-- team-members -->
			</div>	<!-- container -->
	    </section>	<!-- team -->

		<!-- Stores -->
	    <section id="stores">
	    	<div class="container">
	    		<div class="row text-center" id="heading">
	    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
	        			<h3>Stores</h3>
	                	<p>Take a look, to the nearby book stores</p>
	                	<hr class= "full">
	                	<br/>
	        		</div>
	    		</div>
	    		<div class="main_content">
		    		<div class="row">
							@foreach($data3 as $store)
							@if($store->status==1)
							<div class="col-md-4  text-center">
				    		<div class="row wow animated zoomIn" data-wow-delay="0.1s">
				    			<div class="col-md-8 col-md-offset-2">
				    				<!-- <img class="img-circle img-responsive center-block" src="uploads/author/{{$author->image}}" alt="Store"> -->
				    				<a href="view/{{$store->id}}"><h4>{{$store->name}}</h4></a>
									<p>{{$store->address}}</p>
								</div>
							</div>
							@endif
				        	</div>

							@endforeach
					</div>
						
	    		</div>	
	    	</div>	
	    </section>	
		
	    <section id= "contact">
	    	<div class= "container">
				<div class="row text-center" id= "heading">
					<div class= "bg-image">
						<div class= "col-lg-6 col-lg-offset-3 share-text wow animated zoomInDown" id= "heading-text">
							<h3 class= "text-center">Stay Connected</h3>
		                	<p>We want to connect people like you.</p>
		                	<hr class= "full">
		                	<br/>
						</div>
					</div>
				</div>
				
				<div class= "row">
					<div class= "col-md-6 col-md-offset-3 text-center">
						<ul class="socials-icons">
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Twitter" class="twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Google +" class="google-plus"><i class="fa fa-google-plus"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Instagram" class="instagram"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Connect with Skype" class="skype"><i class="fa fa-skype"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
	    </section>
			
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

		
		<script>
			$(document).ready(function() {
  				$("#client-speech").owlCarousel({
  					autoPlay: 3000,
      				navigation : false, // Show next and prev buttons
      				slideSpeed : 700,
      				paginationSpeed : 1000,
      				singleItem:true
  				});
			});
		</script>
		<script>
 			new WOW().init();
		</script>
		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>
        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="js/dashboard.js"></script>
    
	</body>
</html>
