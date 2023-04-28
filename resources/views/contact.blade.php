<!DOCTYPE html>
<html>
	<head>
		<title>Contact Page</title>

		
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
	    					</div>
	  					</div>
					</nav>	
				</section>	
				
			</div>
            </div>
			

<br>
	
		<section id="">
			<div class="container">
				

				
			    <div class="main_content">
				
				
				<div class="container mt-0">
		<div class="row mt-0">
			<div class="col-md-6 mt-5">
				<br>
				<h1>Contact Information</h1>
				
				<div class=" p-3">
                    <table>
                        <tr>
							
                            <th ><i class="fas fa-map-marker-alt p-2"></i> Address:</th>
                            <td>{{$address->content}}</td>
                        </tr>
                        <tr>
                            <th><a style="color: black;" href="tel:{{$phone->content}}"><i class="fas fa-phone p-2"></i> </a>Phone:</th>
                            <td>{{$phone->content}}</td>
						</tr>
                        <tr>
                            <th><a style="color: black;" href = "mailto:{{$email->content}}?subject = Feedback&body = Message"><i class="fas fa-envelope p-2"></i> </a>Email id:</th>
                            <td>{{$email->content}}</td>
                        </tr>
					
                    </table>
				</div>
			</div>
			<div class="col-md-6 mt-5">
				<br>
				<h1>{{$cms->title}}</h1>
                <div style="color:red;">{!! $cms->content!!}</div>
				<form action="{{route('contact.store')}}" method="post">
                    @csrf
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name.." required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email.." required>
					</div>
                    <div class="form-group">
						<label for="subject">Message:</label>
						<input type="text" class="form-control" id="subject" name="subject"  placeholder="Enter Subject.." required>
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message.." required></textarea>
					</div>
					<button type="submit" class="btn btn-primary mb-3">Submit</button>
				</form>
			</div>
		</div>
		
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
		
	</body>
</html>