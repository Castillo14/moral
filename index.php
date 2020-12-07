<?php include('header.php'); ?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/logo1.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make an Appointment Now!</em></button>
        </div>
    </div>
</header>

	<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>About Us</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/3.jpeg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/4.jpeg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/5.jpeg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Moral</h4>
	<p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus tortor justo, et feugiat purus ullamcorper at. Mauris lacinia rhoncus eleifend. Phasellus maximus, mauris id hendrerit commodo, leo ipsum volutpat ante, rhoncus lobortis lectus sem sit amet est. Pellentesque feugiat, magna a luctus efficitur, magna orci suscipit sapien, sit amet vulputate augue est a ligula. Mauris ac dui mollis, placerat nunc non, imperdiet ex. Aenean suscipit commodo arcu a pharetra. <br><br>Praesent pharetra, nisi sit amet rhoncus pharetra, libero odio facilisis nulla, nec volutpat diam lorem eget sapien. Fusce a sagittis tellus. Integer ac ligula augue. Vivamus aliquet, lacus sit amet molestie tristique, felis ligula aliquam metus, quis sodales libero justo sed odio. Aenean nec justo dictum, dapibus est sed, dignissim libero.<br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<!-- <div class="header2">
</div> -->

<!----gallery -->
<!-- <div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/1.jpg" class="img-fluid">
              <img src="img/2.png" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/3.jpeg" class="img-fluid">
              <img src="img/4.jpeg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/5.jpeg" class="img-fluid">
               <img src="img/6.jpeg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/7.jpeg" class="img-fluid">
               <img src="img/8.jpeg" class="img-fluid">
           </div>
        </div>
    </div>
</div><br><br> -->
<!----end of gallery -->

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
   <!--  <img  src="img/16.jpg" class="img-fluid rounded"> -->
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make an appointment Now!</button>
        
</div><br><br>

<!-- <div class="header2">
</div> -->

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Find us!</h3><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14950917.643677495!2d36.04780450236896!3d23.814104686216396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2sph!4v1607333559944!5m2!1sen!2sph" aria-hidden="false" tabindex="0" style= "width:100%;  height:250px; border:0;" allowfullscreen></iframe>
    
        <div class="row staff">
            <div class="col">
            <h4><strong>Opening Hours</strong></h4>
                       
                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button>
                        </div>
                    </form>
                    
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }
         
   //close connection
   mysqli_close($conn);
}
?>
                        
                </div><br>
            </div>

          <!--   <div class="col">
            <h4 class="text-right"><strong>Visit Us</strong></h4>
            <p class="text-right">Chocolate & Moer<br><i class="fa fa-map-marker"></i>&nbsp; Leof. Posidonos 109, <br>Glyfada <br><br>email: info@domain.com<br>phone: +00 (123) 456 7890</p>
            </div>
 -->
	</div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>