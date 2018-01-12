<?php 
require_once("include/DB.php");
?>
<?php 
require_once("include/session.php");
require_once("include/Function.php");
?>
<?php 
if(isset($_POST['Submit'])){
   $Username=$_POST['Username'];
   $Password=$_POST['Password'];
echo $Username;
echo $Password;

       if(empty($Username)||empty($Password))
       {
           $_SESSION["ErrorMessage"]="Please fill all fields";
          Redirect_to("Login.php");
                  
       }
        else{
          $Found_user=login_fn($Username,$Password);
            if($Found_user)
            {   $_SESSION["User_id"]=$Found_user["id"];
                $_SESSION["SuccessMessage"]="welcome back ".$Username;
               Redirect_to("DashBoard.php");}
            else{ $_SESSION["ErrorMessage"]="Invalid Username/Password ";
          Redirect_to("Login.php");}
 
        }
        
   
}
   
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/adminstyles.css">
	<!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
<link href="css/submenus.css" rel="stylesheet">
    
  <style>
      body{
          background-color: aliceblue;
      }
    </style>  
</head>
<body>

<div class="container-fluid">
 <div class="row">
  
     <div class="col-sm-offset-4 col-sm-4">
 <div> <?php echo Message(); echo SuccessMessage(); ?>     </div>
         <br><br><br><br>
         <h1>Welcome back</h1>
        
        <div>
        
            <form action="Login.php" method="post">
            <fieldset>
                <div class="form-group">
                <label for="username"><span class="FieldInfo">User Name : </span></label>
                    <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user text-primary"></span></span>
                    
                <input class="form-control" type="text" name="Username" id="username" placeholder="User name"></div>
                    </div>
                  <div class="form-group">
                <label for="Password"><span class="FieldInfo">Password : </span></label>
                       <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock text-primary"></span></span>
                <input class="form-control" type="Password" name="Password" id="Password" placeholder="Password">
                      </div></div>
                
                <input class="btn btn-info  btn-block" type="submit" name="Submit" value="Login">
                <br>
                </fieldset>
            </form>
        </div>
       
         
     </div> <! --col-sm-10 -->
     
    </div> <! --row-- >
    </div> <! --container-- >
    

</body>
</html>