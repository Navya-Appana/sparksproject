<!DOCTYPE html>
<html lang="en">
<head>
   <title>SparksBank</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">

</head>
<body>

<!-- Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sparks Bank  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customers.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transactions.php">Transfer History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="createuser.php">Create User</a>
        </li>
         
        
</div>


      </ul>
      
    </div>
  </div>
</nav>

<!-- Caraousel-->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="welcome2.png" alt="Easy Transfer" width="1100" height="500">
      <div class="carousel-caption">
    <h3 >Welcome to Sparks Bank</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="transfer.jpg" alt="Quick Deposit" width="1100" height="500">
      <div class="carousel-caption  d-none d-md-block">
    <h3>Easy Money Transfer</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/6.jpg" alt="Low interests" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Customer Satisfaction</h3>
    </div>
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--About us-->

<section class= "my-5">
<div class="py-5">
 <h3 class="text-center" >About Us</h3>
 </div>

<div class="container-fluid">
 <div class ="row">
<div  class="col-lg-6 col-md-6 col-12">
      <img src="about.jpg" class="img-fluid">
      </div>
      <div  class="col-lg-6 col-md-6 col-12">
      <h1>Sparks Bank</h1>
      <p1> Sparks is one of nations's leading private banks and was among the first to receive approval from the Central bank of nation to set up a private sector bank in 992 ZY.
          Today, Sparks Bank has a banking network of 5,608 branches and 16,087 ATM's in 2,902 cities/towns.Money Transfer is very easy. sparks Bank offers a diverse range of financial products and banking services to customers  through a growing branch and ATM network and digital channels such as Netbanking, Phonebanking and MobileBanking.
        
        </div>  
         

 </div>
 </div>
 

<!--Dsiclaimer-->

</section><br><br>


<!--Contact Us-->
<section class= "my-5">
<h3 class="text-center" >Contact Us</h3>
<div class="container">
  <form action="action_page.php">

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="email">

    <label for="Message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</section>




<footer class="text-center mt-2 py-5">
        <p>&copy 2022  <b>XYZ</b> </br>Chairman, SparksBank Foundation</p>
      </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>