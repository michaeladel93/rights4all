<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration </title>

    <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/submenus.css">
     
	 <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/font-awesome-ie7.css">

          <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

      
      <script src="js/jquery.mobilemenu.js"></script>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
  </script>
 

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
     <div class="menu" style="background-color: black">
      <div class="navbar" >
        <div class="container">
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fw-icon-th-list"></i>
            </button>
          </div>
          <div class="navbar-collapse collapse" >
            <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
              <li class="dropdown " >
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="Consultation.html">Our practice areas</a></li>
        <li><a href="training.html">Legal training</a></li>
        <li><a href="legaltranslation.html">Legal translation</a></li>
     
    </ul>
  </li>

             <li><a href="Community.php">Community</a></li>
              <li><a href="coming%20soon.html">Articles</a></li>
              <li><a href="coming%20soon.html">E-library</a></li>
              <li><a href="index.html#aboutus">About</a></li>
              <li><a href="index.html#contact">Contact</a></li>
                <li ><a  href="#"><i class="fw-icon-linkedin" aria-hidden="true" style="padding-left:100px"></i></a></li>
                <li><a href="https://www.facebook.com/Rightsforalllawfirm/" target="_blank"><i class="fw-icon-facebook" aria-hidden="true" ></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCMAN6tFkDg74jTwvr_AvhrQ" target="_blank"><i class="fw-icon-youtube"  aria-hidden="true" ></i></a></li>
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
      <div class="mini-menu">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
                  <li class="dropdown " >
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="Consultation.html">Our practice areas</a></li>
        <li><a href="training.html">Legal training</a></li>
        <li><a href="legaltranslation.html">Legal translation</a></li>
     
    </ul>
  </li>
                <li><a href="Community.php">Community</a></li>
              <li><a href="coming%20soon.html">Articles</a></li>
              <li><a href="coming%20soon.html">E-library</a></li>
              <li><a href="index.html#aboutus">About</a></li>
              <li><a href="index.html#contact">Contact</a></li>
                 <a  href="#"><i class="fw-icon-linkedin" aria-hidden="true" style="padding:50px"></i></a>
                <a href="https://www.youtube.com/channel/UCMAN6tFkDg74jTwvr_AvhrQ" target="_blank" style="padding:50px"><i class="fw-icon-youtube"  aria-hidden="true" ></i></a>
                <a href="https://www.facebook.com/Rightsforalllawfirm/" target="_blank" style="padding:50px"><i class="fw-icon-facebook" aria-hidden="true" ></i></a>
            </ul>
          </div>
    </div>
      <div class="header-wrapper" style="padding-top:20px;padding-bottom: 15px;">
      <div class="site-name">
          <img src="img/logo.png" height="100px;" width="100px;">
        <h1 style="margin-top:5px; color: RGB(21,123,151)">Registration</h1>
       
      </div>
    </div>
    <div  class="row">
   <div  class="col-sm-8 col-sm-offset-2">
        
            <form action="send.php" method="post"  >
            <fieldset>
                <div class="form-group">
                <label for="title"><span class="FieldInfo">Name :</span></label>
                <input class="form-control" type="text" name="name" id="name" >
                    </div>
                 <div class="form-group">
                <label for="title"><span class="FieldInfo">Phone number : </span></label>
                <input class="form-control" type="text" name="phone" id="phone" >
                    </div>
                 <div class="form-group">
                <label for="title"><span class="FieldInfo">Email : </span></label>
                <input class="form-control" type="text" name="email" id="email" placeholder="eg :example@website.com">
                    </div>
                 <div class="form-group">
                <label for="title"><span class="FieldInfo">Course Name : </span></label><span style="color:black ;font-weight: bold;"><?php echo $_GET["courseid"]?></span>
                <input class="form-control" type="text" name="course" id="course" placeholder="" value="<?php echo $_GET["courseid"]?>" style="display:none">
                    </div>
              
                <div class="form-group">
                <label for="postarea"><span class="FieldInfo">More Information (Optional): </span></label>
             <textarea class="form-control" name="moreInfo" id="moreInfo" placeholder="Insert Text"></textarea>
                    </div>
                
                <input class="btn btn-success " type="submit" name="Submit" value="Submit">
                <br>
                </fieldset>
            </form>
        </div>
       </div>
    
    
   <div class="copy-rights" style="background-color: lightgray">
      <div class="container">
        <div class="row">
          
            <div class="col-md-6">
              Copyright(c) RightsForALL Designed by: NullTeam
            </div>
          
        </div>
      </div>
      </div>
   

   
    
    

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
   <script>
(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
</script>

</body>

</html>
