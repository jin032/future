<?php	    		
?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saddam-Portfolio</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <style type="text/css">
    	form {	    
    		padding-bottom:20px;			
    	}

    .nav{
      float: right;
    }
.slider{

    width: 100%;
    height: 400px;
    overflow: hidden;
    margin: 40px auto;
    background-image: url("pic/saddam2.jpg");
}

.slider img{

    width: 100%;
    height: 400px;
    display: none;
}

#pic{

  width: 400px;
  height: 450px;
}
#modelpic{

  float: right;
}

.center{
  text-align: center;
}
.title{

  margin-top: 50px;
}
#footer{

  background-image: url("style/footer1.jpg");
  width: 100%;
  height: 240px;
  color: white;
  margin-top: 50px;
}
.name img{

  width: 100%;
  height: 300px;
}
.ghakhar{

  width: 200px;
  height: 100px;
}

.facebook{

  width: 30px;
  height: 30px;
  margin-left: 170px;
}


</style>


  </head>
  <body onload="Slider();">

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

    <img id="1" src="pic/1.png" border="0" alt="" />
    <img id="2" src="pic/2.png" border="0" alt="technical" />
    <img id="3" src="pic/3.jpg" border="0" alt="loud" />
    <img id="4" src="pic/4.png" border="0" alt="smile" />
    <img id="5" src="pic/5.jpg" border="0" alt="see" />
    <img id="6" src="pic/6.jpg" border="0" alt="hiring" />
    <img id="6" src="pic/7.jpg" border="0" alt="design" />

</div>

    <div class="container">

      <button id="modelpic" class="btn btn-success" data-toggle="modal" data-target="#myModal">My Photo</button>
      <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">My pic!</h4>

              </div>
              <div class="modal-body">
                  <img id="pic" src="pic/8.jpg" />
              </div>
              <div class="footer">Saddam Akram</div>


            </div>
          </div>
      </div>


    </div>

    <div class="name">
      <img src="pic/saddam.jpg" />
    </div>
    <hr />

    <div class="container contantContainer">
      <div class="row" class="center">

        <h1 class="center title">My Awesome Site</h1>
        <p class="lead center">This is my first portfolio site.</p>
      </div>
      <hr />

      <div class="row">
        <div class="col-md-4">
          <h2 class="glyphicon glyphicon-pencil"> Header</h2>
          <p>Breif description of the features of my web site.</p>
        </div>

        <div class="col-md-4">
          <h2 class="glyphicon glyphicon-hand-right"> Header</h2>
          <p>Breif description of the features of my web site.</p>
        </div>

        <div class="col-md-4">
          <h2 class="glyphicon glyphicon-heart-empty"> Header</h2>
          <p>Breif description of the features of my web site.</p>
        </div>

      </div>
    </div>

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

          <a href="http://twitter.com/@jinjin032"><img class="facebook" src="pic/twitter1.png" alt=""></a>
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
<script type="text/javascript">

function Slider(){

    $(".slider #1").show("fade",500);
    $(".slider #1").delay(6000).hide("slide",{direction:'left'}, 1000);
    var sc= $(".slider img").size();

    var count=6;
    setInterval(function(){

        $(".slider #"+count).show("slide",{direction:'right'}, 500);
        $(".slider #"+count).delay(6000).hide("slide",{direction:'left'}, 1000);

        if (count==sc){
            count=1;
        }else{

            count =count+1;
        }
    },7500);

}
$(".contantContainer").css("min-height", $(window).height());

</script>
  </body>
</html>