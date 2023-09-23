<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<div class="video-container">
	<video autoplay muted loop>
            <source src="Images/techvideo.mp4" type="video/mp4">
            <!-- Add additional source tags for different video formats -->
            Your browser does not support the video tag.
        </video>


    </div>

	
    <div class="signup-container">

	
			<!--<div class="row justify-content-center">-->
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sign Up </h2>
				</div>
			</div>
			<div class="row justify-content-center" >
				<div class="col-md-7 col-lg-5"> 
					
					<div class="login-wrap p-4 p-md-5">
		      	<div class="img" style="background-image: url(Images/demon-tanjiro.webp);"></div>
		      	<h3 class="text-center mb-4">Create Your Account</h3>
						<form action="mail.php" method="POST" class="signup-form">
		      		<div class="form-group mb-3">
		      			<label class="label" for="name">Full Name</label>
		      			<input type="text" name="name" class="form-control" placeholder="name">
		      		</div>
		      		<div class="form-group mb-3">
		      			<label class="label" for="email">Email Address</label>
		      			<input type="email" name="email" class="form-control" placeholder="abc....@gmail.com">
		      		</div>
	            <!-- <div class="form-group mb-3">
	            	<label class="label" for="password">Password</label>
	              /<input id="password-field" type="password" class="form-control" placeholder="Password">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>/div>-->
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            
	          </form>
	          <p>I'm already a member! <a data-toggle="tab" href="#signin">Sign In</a></p>
	        </div>
				</div>
			</div>
		
	

	

	</body>
</html>
