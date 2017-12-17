<html lang="en">
<head>
	<title>MySafeRx</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- To edit style sheet go to
	https://getbootstrap.com/docs/3.3/customize/?id=8a469dd6b8ab28ffad81e8ef4099ef5b -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="/custom_style.css">
</head>
<body>
	<nav class="navbar navbar-fixed-top" style="position: relative;">
  		<div class="container-fluid">
    		<div class="navbar-header">
	    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="/">MySafeRx</a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="/">Home</a></li>
			    	<li><a href="/construction.html">About</a></li>
			    	<li><a href="/construction.html">Solutions</a></li>
			    	<li><a href="/construction.html">News</a></li>
			    	<li class="active"><a href="/contact.php">Contact</a></li>
		    		<li><a href="/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    			</ul>
  			</div>
  		</div>
	</nav>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading" style="margin-left:10px; margin-right:10px">
				<h2 class="text-center">Contact Us</h2>
				<h4>If you're a healthcare provider, patient, or family member interested in the medication adherence solutions MySafeRx can offer, please fill out the form below and we'll have a representative contact you shortly. You can also contact us directly at <b>support@mysaferx.org.</b></h4>
			</div>
			<hr />
			<div class="modal-body">
			<h5>*Please note that this contact form uses standard email - an inherently insecure communication mechanism - and is not part of our secure, HIPAA-compliant system, so please do not submit any confidential information here.</h5>
				<form action="" role="form" style="margin-left:20px">
					<div class="form-group">
						<div class="input-group">
							<h4>Name</h4>
							<input type="text" class="form-control" placeholder="John Doe" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<h4>Email</h4>
							<input type="text" class="form-control" placeholder="abc@xyz.com" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<h4>I am a:</h4>
							 <input type="radio" name="role" value="provider" checked>  Health Care Provider<br>
 							<input type="radio" name="role" value="patient">  Patient<br>
  							<input type="radio" name="role" value="family">  Family / Friend<br>
  							<input type="radio" name="role" value="other">  Other

						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<h4>Phone Number</h4>
							<input type="text" class="form-control" placeholder="1234567890" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<h4>Message</h4>
							<input type="text" class="form-control" placeholder="Hello..." />
						</div>
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-success btn-md">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- jquery and javascript important for collapsing navbar and icons -->
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/674f0b636a.js"></script>
</body>
</html>
