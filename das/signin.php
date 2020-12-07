<?php include('header.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">    <!--favicon-->
<title>Moral</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css">     <!--style.css document-->
  <link href="css/font-awesome.min.css" rel="stylesheet">     <!--font-awesome-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  <!--googleapis jquery-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--font-awesome-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>                          <!--bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>           <!--bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>            <!--bootstrap-->
</head>
<style>
.flex-column { 
       max-width : 260px;
   }
           
.container {
            background: #f9f9f9;
        }
      
.img {
            margin: 5px;
        }

.logo img{
	 width:150px;
	 height:250px;
	margin-top:90px;
	margin-bottom:40px;
}
</style>
<body>
	<div class="container-fluid">
		<!-- <div class="header_top"> -->
			<!-- <a href="index.php"><img src="img/dash2.jpg" alt="logo.png img"></a> -->

			<!-- <span style="font-size:50px;color:#2c2f84;font-weight:bolder;margin-left:15px;">Doctor Appoinment System</span>
		</div> -->

	<!-- 	this is for menu -->
<nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
		<strong><em>Moral</em></strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navi">
                <ul class="navbar-nav mr-auto">
                    
                    
                    <?php
                    //set navigation bar when logged in
                    if(isset($_SESSION['user_id'])){ echo'
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php" >New Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_reservations.php" >View Reservations</a>
                    </li>';
                    
                    //set navigation bar when logged in and role of admin
                    if($_SESSION['role']==2) {   
                    echo'
                    <li class="nav-item">
                        <a class="nav-link" href="schedule.php" >Edit Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tables.php" >Edit Tables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_tables.php" >View Tables</a>
                    </li>';    
                    }
                    }
                    //main page not logged in navigation bar
                    else { echo'
                    <li class="nav-item">
	                 <a class="nav-link" href="#aboutus">About Us</a>
	             </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reservation">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Find Us</a>
                    </li>
                    '; } 
                    ?>
                    
                </ul>
                
                    <?php
                    //log out button when user is logged in
                    if(isset($_SESSION['user_id'])){
                    echo '
                    <form class="navbar-form navbar-right" action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit" class="btn btn-outline-dark">Logout</button>
                    </form>';
                    }
                    else{  
                    echo '
                    <div>
                    <ul class="navbar-nav ml-auto">
			
                    </ul> 
                    </div>
                   
                    ';} 
                    ?>
              
            </div>
        </div>
</nav>

 <div class="container">
   <h3 class="text-center"><br><br>User Login</h3>
   <div class="row">
<!--carousel-->
<div class="col-md-12">
					
					<div class="col-md-4"></div>
					<div class="col-md-4" style="float: right;padding:20px 115px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
						<h4 class="text-center;"><a href="patient_login.php">Patient login</a></h4>
						<h4 class="text-center;"><a href="doctors/doctorlogin.php">Doctor login</a></h4>
					</div>
					<div class="col-md-4"></div>
					
					
				</div>

    
     </div>
    </div><br>
  </div>
</section>


	<!-- this is for donor registraton -->
	<!-- <div class="main_content" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">User Login</h3>
		<div class="formstyles" style="background-color: #101011;color: #0d0623;"> -->
				


		
          
    </div><br><br><br><br>
		
	
	
	

	
 

	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>





	
</body>
</html>