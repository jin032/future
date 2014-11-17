<?php	    		
if ($_POST["submit"]) {					
	if (!$_POST['name']) {
		$error="<br />Please enter your name";
	}
	if (!$_POST['email']) {
		$error.="<br />Please enter your email address";
	}
	if (!$_POST['comment']) {
		$error.="<br />Please enter a comment";
	}				
		if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$error.="<br />Please enter a valid email address";
		}
		if ($error) {
			$result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
		} else {
			if (mail("jin032@yahoo.com", "Comment from website!", "Name: ". $_POST['name']."
				Email: ".$_POST['email']."
				Comment: ".$_POST['comment'])) {
				$result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch.</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
		}	
        }
    }
    ?>

<!doctype html>
<html>
<head>
<title> Contact</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<style>
.emailform{

	border: 1px solid green;
	border-radius: 10px;
	margin-top: 20px;
}

	form{

		padding-bottom: 20px;
	}

	body{

		background-image: url("style/back.jpg");
		color: white;
	}

	.footer{

		background-image: url("style/footer.jpg");
		color: black;
	}
	.nav{
      float: right;
    }

	.slider{

    width: 100%;
    height: 400px;
    margin: 40px auto;
}

.slider img{

    width: 100%;
    height: 400px;
}
#footer{

  background-image: url("style/footer1.jpg");
  width: 100%;
  height: 255px;
  color: white;
  margin-top: 50px;
  padding-bottom: 5px;
}
.name img{

  width: 100%;
  height: 300px;
}
.ghakhar{

  width: 200px;
  height: 100px;
  margin-top: 5px;
}

.facebook{

  width: 20px;
  height: 20px;
  
}

.center{
  text-align: center;
}
.title{

  margin-top: 50px;
}

</style>
</head>
<body>

	    <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">Saddam Akram-Portfolio</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>
      </div>
      <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="comment.php">About Us</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="check.html">Check Reaction</a></li>
            <li><a href="about.php">About</a></li>                       
          </ul>
        </li>

          </ul>
      </div>



    </div>
  </div>

    <div class="slider">

    <img id="1" src="style/contact.jpg" border="0" alt="web" />

</div>

<div class="container">
      <div class="row" class="center">

        <h1 class="center title">General Information</h1>
        <p class="lead center">I am not currently looking for new design work, but i am available fo speaking gigs and similar engagement. if you have any question, please do not hesitate to contact me!</p>

<p class="center">Please only use phone contact for urgent inquiries. Otherwise mail is best way to reach me.</p>
      </div>
      <hr />

      <h2>Contact Details</h2>

      <div class="row">
        <div class="col-md-4">
          <h2 class="glyphicon glyphicon-phone"> Phone #</h2>
          <br>
          <p><a href="tel:03007446216">(+92) 300-7446216</a></p>
        </div>

        <div class="col-md-4">
          <h2 class="glyphicon glyphicon-envelope"> Email</h2>
          <br>
          <p><a href="mailto:jin032@yahoo.com">jin032@yahoo.com</a></p>
          <p><a href="mailto:aram.saddam@yahoo.com">akram.saddam@yahoo.com</a></p>
          <p><a href="mailto:saddamakram54@gmail.com">saddamakram54@gmail.com</a></p>
        </div>

        <div class="col-md-4">
          <h2 class="glyphicon glyphicon-heart-empty"> FaceBook&Twitter</h2>
          <p><a href="http://facebook.com/babbi07"><img class="facebook" src="pic/facebook.png" alt="">Like me on facebook</a></p>
          <p><a href="http://twitter.com/@jinjin032"><img class="facebook" src="pic/twitter1.png" alt="">Tweet me</a></p>
        </div>

      </div>
    </div>
    <br><br>
    <hr />
	
	<div class="container" id="footer">

      <div class="row">
        <div class="row">
        <div class="col-md-4">
          <h2> Information</h2>
          <p><a href="about.php">About</a></p>
          <p><a href="sitemap.php">Site Map</a></p>
          
          <hr />
          <a  href="http://facebook.com/babbi07"><img class="facebook" src="pic/facebook.png" alt=""></a>

        </div>

        <div class="col-md-4">
          <h2> Header</h2>
          <p>Breif description of the features of my web site.</p>
          <hr />

          <a href="http://twitter.com/@jinjin032"><img class="facebook" src="pic/twitter.png" alt=""></a>
        </div>

        <div class="col-md-4">
          <img class="ghakhar" src="pic/ghakhar.jpg" border="0" alt="" />
          <p>Ghakhar Mandi Distt. Gujranwala.</p>
          <p class="glyphicon glyphicon-envelope"> jin032@yahoo.com</p>
          <br>
          <p class="glyphicon glyphicon-phone"> (+92) 300-7446216</p>

        <div>
      </div>

      <hr />
      <p>Copyright &copy; 2014 saddam akram</p>

    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>

$(".contantContainer").css("min-height", $(window).height());</script>
</body>

</html>