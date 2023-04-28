<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyProject</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="projectStyle.css">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
  <div class="container">
    <a class="navbar-brand" href="#"><span class="text-warning">RentN</span>Ride</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#FindUs">FindUs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</head>


<body>

<section id="home" class="home section-padding">
<div class="container">
      <div class="row">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <form name = "dev" method="POST" action="Project.php" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Honda.jpg" class="d-block w-100" alt=" First Image" >
      <div class="carousel-caption">
        <h5> Bikes </h5>
        <p> </p>
        <a  name="more" herf="project_02.php" class="btn btn-warning mt-3">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="escooty.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption">
        <h5> e-scooties </h5>
        <p> </p>
        <a name="more" herf="project_02.php" class="btn btn-warning mt-3">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="activa.png" class="d-block w-100" alt="..." >
      <div class="carousel-caption ">
        <h5> Scooties </h5>
        <p> </p>
        <p><a  name="more" herf="project_02.php" class="btn btn-warning mt-3">Learn More</a><p>
      </div>
    </div>
</form>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
</div>
</section>

<!-- about Section --> 
<section id="about" class="about section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
        <div class="about-img">
          <img src="Bike.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="about=text">
          <h2> We Provide Only Best <br> Wheels On The Way </h2> 
          <p> Renting a bike everyday might seem like a task for many.
             So, we introduced a monthly subscription package which allows you to be flexible and rent a bike for a month or maybe more.
              You can rent a two wheeler online on monthly, quarterly, half yearly or yearly basis. 
              From an hour to a year, motorbike rental was never so flexible.</p>
          <button class="btn btn-warning text-dark">learn More</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- services Section --> 
<section id="services" class="services section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Our Services</h2>
            <p>We simplified bike rentals, so you can focus on what's important to you.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
             <div class="card-body">
                <i class="bi bi-front"></i>
                <h3 class="card-title"> Safe Ride </h3>
                <p>Your safety is our priority. From sanitizing all bikes before every use,
                   to extensive on-ground safety measures, your rides with ONN will always be safe and reliable. 
                   We also offer helmets on-demand.</p>
                <button class="btn btn-warning text-dark">Read More</button>
             </div>
          </div>
         </div>

         <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
             <div class="card-body">
                <i class="bi bi-front"></i>
                <h3 class="card-title"> Flexibale Ownership </h3>
                <p>Enjoy the freedom of owning a two-wheeler without the hefty down-payments, EMIs and paperwork.
                   Now choose from rent-to-own, monthly/quarterly bookings, and even daily plans.</p>
                <button class="btn btn-warning text-dark">Read More</button>
             </div>
          </div>
         </div>

         <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
             <div class="card-body">
                <i class="bi bi-front"></i>
                <h3 class="card-title"> Smart Mobality </h3>
                <p>With your trusty RentNRide app, you can choose any bike, make instant payments, get offers, 
                  and manage all aspect of your ONN experience right from the comfort and ease of your mobile app.</p>
                <button class="btn btn-warning text-dark">Read More</button>
             </div>
          </div>
         </div>

         <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
             <div class="card-body">
                <i class="bi bi-front"></i>
                <h3 class="card-title"> RentNRide station </h3>
                <p>Your local RentNRide Station is here to make ensure your two-wheeler experience is flawless.
                   At your neighborhood station, you get to pick any bike, get maintenance, sanitized, and a lot more.</p>
                <button class="btn btn-warning text-dark">Read More</button>
             </div>
          </div>
         </div> 

        </div>
      </div>
    </div>
</section>   

<!-- Team  section -->

<section id="team" class="team section-padding">
  <div class ="container">
  <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2> Our Trusted Menmbers </h2>
          <p> From Which You Can Start Your Drive </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="akansha.jpeg" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2"> Akansha Hattale </h3>
            <p class="card-text"> Head of Solapur City </p>

            <p class="socials">   
              <i class ="bi bi-twitter text-dark mx-1"></i>
              <i class ="bi bi-facebook text-dark mx-1"></i>
              <i class ="bi bi-linkedin text-dark mx-1"></i>
              <i class ="bi bi-instagram text-dark mx-1"></i>
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="aishu.jpeg" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2"> Aishqwarya Patil </h3>
            <p class="card-text"> Head of Dhule </p>

            <p class="socials">   
              <i class ="bi bi-twitter text-dark mx-1"></i>
              <i class ="bi bi-facebook text-dark mx-1"></i>
              <i class ="bi bi-linkedin text-dark mx-1"></i>
              <i class ="bi bi-instagram text-dark mx-1"></i>
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="prapti.jpeg" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2"> Prapti shukl </h3>
            <p class="card-text"> Head of pune </p>

            <p class="socials">   
              <i class ="bi bi-twitter text-dark mx-1"></i>
              <i class ="bi bi-facebook text-dark mx-1"></i>
              <i class ="bi bi-linkedin text-dark mx-1"></i>
              <i class ="bi bi-instagram text-dark mx-1"></i>
            </p>
          </div>
        </div>
      </div> 

      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="vaishu.jpeg" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2"> vaishnavi patil </h3>
            <p class="card-text"> Head of Nashik </p>

            <p class="socials">   
              <i class ="bi bi-twitter text-dark mx-1"></i>
              <i class ="bi bi-facebook text-dark mx-1"></i>
              <i class ="bi bi-linkedin text-dark mx-1"></i>
              <i class ="bi bi-instagram text-dark mx-1"></i>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Map Section-->
<section id="FindUs" class ="FindUs section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2> Here You Find Us </h2>
          </div>
      </div>

           <!-- slide frame start  -->
           <div class="col-lg-4 col-md-12 col-12">
        <div class="about-img">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.04711150355!2d73.78056561855189!3d18.524598599583417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1681620309321!5m2!1sen!2sin"
           width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="about=text">
          <h2> Pune  </h2> 
          <p> Renting a bike everyday might seem like a task for many.
             So, we introduced a monthly subscription package which allows you to be flexible and rent a bike for a month or maybe more.
              You can rent a two wheeler online on monthly, quarterly, half yearly or yearly basis. 
              From an hour to a year, motorbike rental was never so flexible.</p>
          
        </div>
      </div>
  

      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="about-text">
        <h2> Solapur </h2> 
          <p> Renting a bike everyday might seem like a task for many.
             So, we introduced a monthly subscription package which allows you to be flexible and rent a bike for a month or maybe more.
              You can rent a two wheeler online on monthly, quarterly, half yearly or yearly basis. 
              From an hour to a year, motorbike rental was never so flexible.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-12 ">
        <div class="about-img">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121656.36753471327!2d75.83621549657147!3d17.661452170010868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5d082b54ac5d5%3A0x3c719de6c83710d0!2sSolapur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1681463461135!5m2!1sen!2sin"
         width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
        </div>
      </div>


      <div class="col-lg-4 col-md-12 col-12">
        <div class="about-img">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119285.15551957658!2d74.68145908380626!3d20.885705463550437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdec5f2c571bb47%3A0x5827ae11b9d7cb1c!2sDhule%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1681620509135!5m2!1sen!2sin" 
          width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="about=text">
          <h2> Dhule </h2> 
          <p> Renting a bike everyday might seem like a task for many.
             So, we introduced a monthly subscription package which allows you to be flexible and rent a bike for a month or maybe more.
              You can rent a two wheeler online on monthly, quarterly, half yearly or yearly basis. 
              From an hour to a year, motorbike rental was never so flexible.</p>
        </div>
      </div>


      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="about-text">
        <h2> Nashik </h2> 
          <p> Renting a bike everyday might seem like a task for many.
             So, we introduced a monthly subscription package which allows you to be flexible and rent a bike for a month or maybe more.
              You can rent a two wheeler online on monthly, quarterly, half yearly or yearly basis. 
              From an hour to a year, motorbike rental was never so flexible.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-12 ">
        <div class="about-img">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.3910746595!2d73.72107910819848!3d19.99094401318391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddd290b09914b3%3A0xcb07845d9d28215c!2sNashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1681620969097!5m2!1sen!2sin" 
          width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

  
                  
           <!-- end -->


        </div>
      </div>
</section>




<!-- Contact section -->
<section id="contact" class="contact section-padding">
<div class ="container">
  <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2> Contact Us </h2>
          <p>ONN BIKES IS HERE TO REDEFINE THE WAY YOU TRAVEL!
              RENT A BIKE ON AN HOURLY, DAILY, WEEKLY OR EVEN MONTHLY BASIS.
              WE ALSO HAVE LONG TERM LEASING SOLUTIONS FOR BUSINESSES WHO ARE 
              INTO LAST MILE DELIVERY THROUGH TWO WHEELERS. </p>
        </div>
      </div>
    </div>

    <div class="row m-0">
      <div class="col-md-12 p-0 pt-4 p-4 m-auto">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <input type="text" class="form-control" required placeholder="Enter your Name">
            </div>
          </div>

          <div class="col-md-12">
            <div class="mb-3">
              <input type="email" class="form-control" required placeholder="Enter your Email">
            </div>
          </div>

          <div class="col-md-12">
            <div class="mb-3">
              <textarea rows="3" required class="form-control" placeholder="your query here"></textarea>
            </div>
          </div>

          <button class="btn btn-warning btn-lg btn-block mt-3">Send Now</button>

          
        </div>
      </div>
    </div>
</div>
</section>

<!-- foote -->

<footer class="bg-dark p-2 text-center ">
  <div class="container">
    <p class="text-white"> All right Resrved @devikaMADE</p>
</footer>



</body>
</html>

<?php

if (isset($_POST['more']))
{
  echo "<script> window.location.href='project_02.php'; </script> ";
  exit; 
}

?>