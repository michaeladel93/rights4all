<?php 
require_once("include/session.php");
require_once("include/Function.php");
?>
<?php confirm_login(); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DashBoard</title>
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
 <div class="row"style=" background-color:  #005E90;" >
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
     </div>
     <br><! --side area -->
     <div class="col-sm-10"> <! --main area -->
<div> <?php echo Message(); echo SuccessMessage(); ?>     </div>
         <h1>Admin Dashboard</h1>
       <div class="table-responsive">
         <table class="table table-striped table-hover">
           <tr>
               <th  style="wdith:5%" >id</th>
               <th style="wdith:5%" >title</th>
               <th style="wdith:5%">date</th>
               <th style="wdith:5%">location</th>   
               <th style="wdith:30%">Image</th>
               <th style="wdith:25%">Action</th>
               <th style="wdith:25%; max-width:50px;">Details</th>
             </tr>
             <?php
            

			 	$Connection=mysql_connect('localhost:3306','rights4all_admin','123456789');
  $ConnectingDB=mysql_select_db('rights4all_dashboard',$Connection);
              
            
              $ViewQuery="SELECT * FROM events_data ORDER BY id DESC";
            
			$Execute=mysql_query($ViewQuery);
             $Eventno=0;
             While($datarows=mysql_fetch_array($Execute)){
				$Eventid=$datarows["id"];
			 $Eventname=$datarows["title"];
                  $Eventdate=$datarows["date"];
				  $Eventlocation=$datarows["location"];
                $Eventimage = explode(',', $datarows["image"]);
				  $Eventdetails=$datarows["details"];
                 $Eventno++;
                 
                  
             ?>
             <tr>
                 <td> <?php echo $Eventno ;?></td>
                 <td style="color:#5e5eff"><?php  if(strlen($Eventname)>20){$Eventname=substr($Eventname,0,20)."...";} echo $Eventname; ?></td>
                 <td> <?php if(strlen($Eventdate)>10){$Eventdate=substr($Eventdate,0,9);} echo $Eventdate ;?></td>
                 
                 <td><?php echo $Eventlocation ; ?></td>
                 <td style="wdith:25%; max-width:100px;" >
				 <?php 
				 $count=0;
				 foreach ($Eventimage as $value) {
					 
				
				 ?>
				 
				 <img class="img-responsive img-rounded hoverimg"src="img/<?php echo $value  ?>" width="50px" height="20px" style="float:left;" >
				 
				 <?php } ?>
			 </td>
          
                 <td style="wdith:25%; max-width:100px;"> 
                     <a href="EditEvent.php?edit=<?php echo $Eventid; ?>"><span class="btn btn-warning">Edit</span></a> 
                 <a href="DeleteEvent.php?delete=<?php echo $Eventid; ?>"><span class="btn btn-danger">Delete</span></a>    
                 </td>
                 <td style="wdith:25%; max-width:200px;"><?php  if(strlen($Eventdetails)>200){$Eventdetails=substr($Eventdetails,0,100)."...";} echo $Eventdetails; ?></td>
                 
             </tr>
             <?php
                 
             }
             
             ?>
           </table>
         </div>
         
     </div> <! --main area -->
     
    </div> <! --row-- >
    </div> <! --container-- >
   
     <footer style="background-color: lightgray">
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
