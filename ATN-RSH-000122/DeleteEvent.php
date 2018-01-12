<?php require_once("include/DB.php");?>

<?php 
require_once("include/session.php");
require_once("include/Function.php");
?>

<?php 
if(isset($_POST['Delete'])){
   $IDtoedelete=$_GET['delete'];
   $Connection=mysql_connect('localhost:3306','rights4all_admin','123456789');
  $ConnectingDB=mysql_select_db('rights4all_dashboard',$Connection);
             
            	
                      $Query="DELETE FROM events_data  WHERE id='$IDtoedelete'";
        $Execute=mysql_query($Query);
            move_uploaded_file($_FILES["Image"]["tmp_name"],$target);
            
        if($Execute){
             $_SESSION["SuccessMessage"]="Post Deleted successfully";
          Redirect_to("DashBoard.php");}
        else{
             $_SESSION["ErrorMessage"]="Something Went Worng";
            Redirect_to("DashBoard.php");}
            
      
        
   
}
   
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="vrndor/jquery/jquery-3.2.1.min.js"></script>
    
     <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    
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
    
</head>
<body>

<div class="container-fluid">
 <div class="row">
  <div class="row"style=" background-color:  #005E90;">
    <div class="col-sm-2" style=" background-color:  #005E90; ">
        <br><br><br><br>
            <img href="index.html#page-top"  src="img/without%20LAW.jpg" class="img-responsive img-circle imageicon" height="50px" width='50px' style="float:left;">
                <a class="navbar-brand page-scroll" href="index.html#page-top" >RightsForAll</a>
     <br><br><br><br>
        <ul id="Side_Menu" class="nav nav-pills-stacked">
        <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp; Mange Events</a></li><br>
        <li><a href="AddNewPost.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Add New Event</a></li>
 <br>
        <li><a href="MangeAdmins.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Mange Admins</a></li>
     <br>
            <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
        <br>
        
        </ul>
     </div><! --col-sm-2 -->
     <div class="col-sm-10">

         <h1>Delete Post</h1>
         <div> <?php echo Message(); echo SuccessMessage(); ?>     </div>
        <div>
        <?php 
            $deletequeryid=$_GET["delete"];
             
			 
  
			 	$Connection=mysql_connect('localhost:3306','rights4all_admin','123456789');
  $ConnectingDB=mysql_select_db('rights4all_dashboard',$Connection);
             
            
              $ViewQuery="SELECT * FROM events_data where id='$deletequeryid'";
            
			
            
             $Execute=mysql_query($ViewQuery);
            
             while($datarows=mysql_fetch_array($Execute))
             {
                  	$Eventid=$datarows["id"];
					$Eventname=$datarows["title"];
					$Eventdate=$datarows["date"];
					$Eventlocation=$datarows["location"];
					$Eventimage = explode(',', $datarows["image"]);
					$Eventdetails=$datarows["details"];
             }
            
            ?>
            <form action="DeleteEvent.php?delete=<?php echo $_GET["delete"]; ?>" method="post" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group">
                <label for="title"><span class="FieldInfo">Title: </span></label>
                <input disabled class="form-control" type="text" name="Title" id="title"
                       value="<?php echo $Eventname?>" placeholder="Title">
                    <label for="author"><span class="FieldInfo">Date: </span></label>
                <input disabled class="form-control" type="text" name="date" id="date"
                       value="<?php echo $Eventdate?>" >
					   <label for="author"><span class="FieldInfo">Location: </span></label>
                <input disabled class="form-control" type="text" name="locaton" id="location"
                       value="<?php echo $Eventlocation?>" >
                    </div>
          
                 <div class="form-group">
                        <span class="FieldInfo">Existing image:  </span>
						<div class="row">
						
                <?php 
				 $count=0;
				 foreach ($Eventimage as $value) {
					 
					
				 ?>
				 
				 <img class="img-responsive img-rounded hoverimg"src="img/<?php echo $value  ?>" width="100px" height="60px" style="float:left" >
				 
				 <?php } ?> 
				 
				 
				</div>
                    </div>
					<br><br><br>
                <div class="form-group">
                <label for="postarea"><span class="FieldInfo">Eventdetails: </span></label>
             <textarea  class="form-control" name="Post" id="postarea"><?php echo $Eventdetails;?></textarea>
                    </div>
                
                <input class="btn btn-danger  btn-block" type="submit" name="Delete" value="Delete Event">
                <br>
                </fieldset>
            </form>
        </div>
       
             
            
           
            
      
         
     </div> <! --col-sm-10 -->
     
    </div> <! --row-- >
    </div> <! --container-- >
    <div id="Footer">
        <hr><p>Theme By | micky |&copy;2017-2020 --- All right reserved.
</p>
<a style="color: white; text-decoration: none; cursor: pointer; font-weight:bold;" href="http://jazebakram.com/coupons/" target="_blank">
<p>
This site is only used for Study purpose  have all the rights. no one is allow to distribute
copies other then <br>&trade;  &trade;  Udemy ; &trade; Skillshare ; &trade; StackSkills</p><hr>
</a>
    </div>

</body>
</html>