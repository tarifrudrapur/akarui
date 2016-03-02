<!DOCTYPE html>
<html lang="en">
	<head>
    	
		<meta charset="utf-8">
		<title>AkaruiLabs India</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link href="css/1.css" media="screen" rel="stylesheet">	
		
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="css/templatemo-style.css">

	</head>
	<body>
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div class="overlay" style="padding-bottom: 200px;">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper wow bounceInUp"><a href="index.php"><img src="images/logonew.png" width="400px" style="margin-top: 0px;"></a></h1>
							


<div class="signin-container" style="background-color: transparent;">
	<div class="signin-section" style="float: none; background-color: transparent;padding: initial;">
		<div class="signin-form">
			<form name="myForm" action="form.php" method="post" onsubmit="return validateForm();" style="width: 100%;margin: 0 auto;"><div>
				<div class="form-group">
					<div class="row text">
						<label class="lbl" for="user_email">EMAIL ADDRESS</label>
						<input autofocus="autofocus" class="form-control fields" id="email" name="email" type="email" value="">
					</div>
					
						<div class="row text">
						<label class="lbl" for="subject">SUBJECT</label>
						<input autofocus="autofocus" class="form-control fields" id="subject" name="subject" type="text" value="">
					</div>
					
						<div class="row text">
						
						<textarea rows="6"  name="comment" id="comment" style="width:100%;resize: none;"></textarea>  
					</div>
					
					
					
		            <div class="row">
		            	<input class="btn submitBtn btn-green"  type="submit" value="Send Message">
		            
		            </div>
		          
		           
				</div>
</form>		</div>
	</div>
	</div>
		<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>				
		
		
							
							
							
							
									
							
							
							
							
							

                        


                            <!---- clients area end here --->

							<!-- <img src="images/software-img.png" class="img-responsive" alt="home img"> -->
						</div>
						
					</div>
				</div>
				   <a href="https://in.linkedin.com/in/abhijeetmisra"target="_blank"><i style="margin-top: 89px;" id="social-tw" class="fa fa-linkedin-square fa-3x social"></i></a>
			</div>
		
					
					
          
	         
	           
	          

			
		</section>
		<!-- end home -->
		<!-- start divider -->
		

		
		<!-- start footer -->
		
		<!-- end footer -->
        
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		
		<script src="js/custom.js"></script>
	</body>
</html>