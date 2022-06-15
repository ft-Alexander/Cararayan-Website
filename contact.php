
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact</title>
</head>
<body class="d-flex flex-column min-vh-100">
    
<?php
    require_once "config.php";

    $FirstName = $LastName = $Email = $Message = $message="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $param_fname = trim($_POST["name"]);
        $param_lname = trim($_POST["surname"]);
        $param_email = trim($_POST["email"]);
        $param_message = trim($_POST["Message"]);

        $sql = "INSERT INTO contact_information (First_Name,Last_Name,Email,Message) VALUES (?,?,?,?)";
        if($stmt = $mysqli->prepare($sql)){
            $stmt -> bind_param("ssss", $param_fname , $param_lname, $param_email , $param_message);
            if($stmt->execute()){
                // store result
                $stmt->store_result();
            } 
            $stmt->close();
            $message = "Message Successfully Sent";
    }else{
        $message = "Message was not Sent";
    }
}
?>
    <!-- This is for the Navigation Bar -->
    <link href="CSS/Nav-Bar.css" rel="stylesheet">
    <div class="fixed-top">
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="top container">
                <h1 class="barangay">CARARAYAN</h1>
                <ul class="navbar-nav">
                    <li class="nav-right">   
                            <p><strong>EMERGENCY</strong> <br> 0951 005 9145</p></li>
                    </li>
                    <li class="nav-right">
                            <p><strong>WORK HOUR</strong>  <br> 8:00 - 500 PM | Mon-Fri</p>
                    </li>
                    <li class="nav-right">
                            <p> <strong>LOCATION</strong> <br> Cararayan, Naga City Camarines Sur</p>
                    </li>
                </ul>
            </div>
            </nav>
        
            <nav class="navbar navbar-expand-sm bg-light">
                
                <div class="container-fluid below">
                    <ul class="navbar-nav">
                        <li><a class="nav-link navigation " href="index.html">Home</a></li>
                        <li><a class="nav-link navigation" href="aboutus.html">About</a></li>
                        <li><a class="nav-link navigation" href="services.html">Services</a></li>
                        <li><a class="nav-link navigation current" href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
    </div>

    <!-- This is for the Contact Image -->
    <link href="CSS/Contacts.css?v=<?php echo time(); ?>" rel="stylesheet">
    <main class="box-search">
        <div class="Image_holder container-fluid text-center">
            <img class="img-fluid image_left cararayan-background" src="../IMAGE/Contact/Contact_bg.png" alt="Home Page Background">
            <div class="text_block">
                <h3 class="work AboutUs_slogan">Home / Contact</h3>
                <h1 class="yesseva contact_slogan">Our Contact</h1>
            </div>
        </div>
    </main>

    <!-- Contact Information Form -->
    <div class="container">
        <div class="text-center  mt-5 ">
            <h5 class="work" style="color:#1F2B6C;">GET IN TOUCH</h5>
            <h2 class="yesseva" style="color:#1F2B6C;">Message Us</h2>
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form id="contact-form" role="form" method="post">
            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name" class="yesseva" style="font-size: 20px;color:#1F2B6C;">Firstname</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname" class="yesseva" style="font-size: 20px;color: #1F2B6C;">Lastname</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email" class="yesseva" style="font-size: 20px;color:#1F2B6C;">Email</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message" class="yesseva" style="font-size: 20px;color:#1F2B6C;">Message</label>
                            <textarea id="form_message" name="Message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                >
                            </div>

                        </div>


                    <div class="col-md-12 text-center">
                        <br>
                        <p class="work" style="letter-spacing:0px; color:grey; font-size:13px"><?=$message?></p>
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message" name=submit1>
                        
                    
                </div>          
                </div>

        </div>
         </form>
        </div>
            </div>
    </div>
    </div>

</div>
</div>

<br><br><br>

    <!-- Footer -->
    <div class="container-fluid bottomnav mt-auto">
		<div class="container bottomnav">
			<ul class="list-group list-group-horizontal">
				<li class="work">
					<h1 class="barangay bottom">CARARAYAN</h1>
				</li>
				<li class="work">
					<h4 class="header-bottom">Important Links</h4>
					<br>
					<div class="list-group bottom-content">
					  <a class="white-color" href="services.html">Services</a>
					  <a class="white-color" href="aboutus.html">About Us</a>
					</div>
				</li>
				<li class="work">
					<h4 class="header-bottom">Contact Us</h4>
					<br>
					<p class="bottom-content">Call: 0961 005 9145 <br>Email: brgycararayan@gmail.com <br>Address: Cararayan, Naga City Camarines Sur</p>
				</li>
			</ul><br><br>
			<hr>
			<div class="copyright-info">
			  <p>
				  <img class="copyright-logo" src="IMAGE/HomePage/copyright.svg" alt="Copy Right Logo">
				  <p class="work copy-right"><script>document.write(new Date().getFullYear());</script> Barangay Cararayan All Rights Reserved</p>
			  </p>
			</div>
		</div> 
	</div>
    
    
</body>
</html>