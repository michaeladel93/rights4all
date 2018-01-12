<?php 
require_once("include/DB.php");
?>
<?php 
require_once("include/session.php");
require_once("include/Function.php");
?>

<?php 
if(isset($_POST['Update'])){
   
    $IDtoedit=$_GET['edit'];
   $Title=($_POST['Title']);
   $Date=($_POST['Date']);
$Location=($_POST['Location']);
   $Image1=$_FILES["Image1"]["name"];
    $Image2=$_FILES["Image2"]["name"];
    $Image3=$_FILES["Image3"]["name"];
    $Image4=$_FILES["Image4"]["name"];
    $Image5=$_FILES["Image5"]["name"];
    $Image6=$_FILES["Image6"]["name"];
    $Image7=$_FILES["Image7"]["name"];
    $Image8=$_FILES["Image8"]["name"];
    $Image9=$_FILES["Image9"]["name"];
    $Image10=$_FILES["Image10"]["name"];
   $Eventdetails=($_POST['Eventdetail']);
    
    

       if(empty($Title))
       {
           $_SESSION["ErrorMessage"]="Title can't be empty";
          
                  
       }elseif(strlen($Title)<2)
       { $_SESSION["ErrorMessage"]="Title should be at least 2 characters";
          
       }
    elseif(empty($Eventdetails)){$_SESSION["ErrorMessage"]="You didn't write the details content ";
          }
        elseif(empty($Image1)&&empty($Image2)&&empty($Image3)&&empty($Image4)&&empty($Image5)&&empty($Image6)
              &&empty($Image7)&&empty($Image8)&&empty($Image9)&&empty($Image10)){
            
        	 	$Connection=mysql_connect('localhost:3306','rights4all_admin','123456789');
  $ConnectingDB=mysql_select_db('rights4all_dashboard',$Connection);
            

            
             $Query="UPDATE events_data SET date='$Date',title='$Title',
        location='$Location',details='$Eventdetails' WHERE id='$IDtoedit'";
        $Execute=mysql_query($Query);                    
        if($Execute){
             $_SESSION["SuccessMessage"]="Event UPDATED successfully";
         // Redirect_to("Dashboard.php");
        }
        else{
             $_SESSION["ErrorMessage"]="Something Went Worng";
           // Redirect_to("Dashboard.php");
        }
            
            
        }else{
            
    $Images=$Image1.','.$Image2.','.$Image3.','.$Image4.','.$Image5.','.$Image6.','.$Image7.','.$Image8.','.$Image9.','.$Image10;
		 	$Connection=mysql_connect('localhost:3306','rights4all_admin','123456789');
  $ConnectingDB=mysql_select_db('rights4all_dashboard',$Connection);
            	
             $Query="UPDATE events_data SET date='$Date',title='$Title',
        location='$Location',details='$Eventdetails',image='$Images' WHERE id='$IDtoedit'";
        $Execute=mysql_query($Query);
            $target1="img/".basename($Image1);move_uploaded_file($_FILES["Image1"]["tmp_name"],$target1);
            $target2="img/".basename($Image2);move_uploaded_file($_FILES["Image2"]["tmp_name"],$target2);
            $target3="img/".basename($Image3);move_uploaded_file($_FILES["Image3"]["tmp_name"],$target3);
            $target4="img/".basename($Image4);move_uploaded_file($_FILES["Image4"]["tmp_name"],$target4);
            $target5="img/".basename($Image5);move_uploaded_file($_FILES["Image5"]["tmp_name"],$target5);
            $target6="img/".basename($Image6);move_uploaded_file($_FILES["Image6"]["tmp_name"],$target6);
            $target7="img/".basename($Image7);move_uploaded_file($_FILES["Image7"]["tmp_name"],$target7);
            $target8="img/".basename($Image8);move_uploaded_file($_FILES["Image8"]["tmp_name"],$target8);
            $target9="img/".basename($Image9);move_uploaded_file($_FILES["Image9"]["tmp_name"],$target9);
            $target10="img/".basename($Image10);move_uploaded_file($_FILES["Image10"]["tmp_name"],$target10);
            
        if($Execute){
             $_SESSION["SuccessMessage"]="Event UPDATED successfully";
          Redirect_to("DashBoard.php");}
        else{
             $_SESSION["ErrorMessage"]="Something Went Worng";
            Redirect_to("DashBoard.php");}
            
        }
        
   
}
   
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Event</title>
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
    
	
    <style>
      .adminname{
            color: darkturquoise;
            margin-left: 35px;
        }
    </style>
</head>
<body>
  
<div class="container-fluid">
 <div class="row" style="background-color:  #005E90; ">
<div class="col-sm-2" style=" background-color:  #005E90; ">
        <br><br><br><br>
            <img href="index.html#page-top"  src="img/without%20LAW.jpg" class="img-responsive img-circle imageicon" height="50px" width='50px' style="float:left;">
                <a class="navbar-brand page-scroll" href="index.html#page-top" >RightsForAll</a>
     <br><br><br><br>
        <ul id="Side_Menu" class="nav nav-pills-stacked">
        <li class="active"><a href="DashBoard.php"><span class="glyphicon glyphicon-th"></span>&nbsp; Mange Events</a></li><br>
        <li><a href="AddNewEvent.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Add New Event</a></li>
 <br>
        
     <br>
            <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
        <br>
        
        </ul>
     </div><! --col-sm-2 -->
     <div class="col-sm-10">

         <h1>Edit Event</h1>
         <div> <?php echo Message(); echo SuccessMessage(); ?>     </div>
        <div>
        <?php 
            $updatequeryid=$_GET["edit"];
			
			 	$Connection=mysql_connect('localhost:3306','rights4all_admin','123456789');
  $ConnectingDB=mysql_select_db('rights4all_dashboard',$Connection);
             
              $ViewQuery="SELECT * FROM events_data where id='$updatequeryid'";
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
<form action="EditEvent.php?edit=<?php echo $_GET["edit"]; ?>" method="post" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group">
                <label for="title"><span class="FieldInfo">Title: </span></label>
                <input  class="form-control" type="text" name="Title" id="title"
                       value="<?php echo $Eventname?>" >
                    <label for="author"><span class="FieldInfo">Date: </span></label>
                <input  class="form-control" type="text" name="Date" id="date"
                       value="<?php echo $Eventdate?>" >
					   <label for="author"><span class="FieldInfo">Location: </span></label>
                <input  class="form-control" type="text" name="Location" id="location"
                       value="<?php echo $Eventlocation?>" >
                    </div>
          
                 <div class="form-group">
                        <span class="FieldInfo">Existing image:  </span><a  class="btn btn-success" onclick="startAdding()">Edit Image</a>
						<div class="row">
						
                <?php 
				
				 foreach ($Eventimage as $value) {
					 
					
				 ?>
				 
				 <img class="img-responsive img-rounded hoverimg"src="img/<?php echo $value  ?>" width="100px" height="60px" style="float:left" >
				 
				 <?php } ?> 
				 
				 
				</div>
                    </div>
					<div class="from-group" id="EditImg" style="display:none">
					<span class="FieldInfo" >New images:  </span><a id="addNImg" class="btn btn-success" onclick="plus()">+</a>
					<div class="row">
					<input type="file" class="form-control" name="Image1" id="image_select">
					</div>
					<div class="row" style="display:none" id="row2">
					<input type="file" class="form-control" name="Image2" id="image_select">
					</div>
					<div class="row" style="display:none" id="row3">
					<input type="file" class="form-control" name="Image3" id="image_select">
					</div>
					<div class="row" style="display:none" id="row4">
					<input type="file" class="form-control" name="Image4" id="image_select">
					</div>
					<div class="row" style="display:none" id="row5">
					<input type="file" class="form-control" name="Image5" id="image_select">
					</div>
					<div class="row" style="display:none" id="row6">
					<input type="file" class="form-control" name="Image6" id="image_select">
					</div>
					<div class="row" style="display:none" id="row7">
					<input type="file" class="form-control" name="Image7" id="image_select">
					</div>
					<div class="row" style="display:none" id="row8">
					<input type="file" class="form-control" name="Image8" id="image_select">
					</div>
					<div class="row" style="display:none" id="row9">
					<input type="file" class="form-control" name="Image9" id="image_select">
					</div>
					<div class="row" style="display:none" id="row10">
					<input type="file" class="form-control" name="Image10" id="image_select">
					</div>
					</div>
					<script>
					var index=2;
					function plus(){
                        if(index<=10){
                        document.getElementById("row"+index).style.display = "block";
                        index++;
                        }
                        else 
                            document.getElementById("addNImg").style.display="none";
                    }
                        function startAdding(){
                            document.getElementById("EditImg").style.display="block";
                        }
					</script>
					<br><br><br>
                <div class="form-group">
                <label for="postarea"><span class="FieldInfo">Eventdetails: </span></label>
             <textarea  class="form-control" name="Eventdetail" id="postarea"><?php echo $Eventdetails;?></textarea>
                    </div>
                
                <input class="btn btn-danger  btn-block" type="submit" name="Update" value="Update Event">
                <br>
                </fieldset>
            </form>
        </div>
       
             
            
           
            
      
         
     </div> <! --col-sm-10 -->
     
    </div> <! --row-- >
    </div> <! --container-- >
 <footer style="background-color: lightgray" >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#"><p style="color: black">Copyright 2018 RightsForALL</p>
                            
                            <p style="color: black;font-size: 10px" >Designed and constructed by NullTeam </p>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#"><p style="color: black">Privacy Policy</p></a>
                        </li>
                        <li><a href="#"><p style="color: black">Terms of Use</p></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>