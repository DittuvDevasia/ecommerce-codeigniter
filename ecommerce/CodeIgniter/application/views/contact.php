<html>
    <head><title>User homepage</title></head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  background-color: #3B5998;
}
footer{
     text-align: center;
    padding:50px;
     height: 180px;
     background-color: black;
     color:white;
}
.banner{
  background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMR-U5n6aQtHU4RGFO_ews5t3VyVrdm9OAng&usqp=CAU");
    height:300px;
    width:1340px;
}
.banner h2{
  text-align: center;
  padding: 150px;
  font-size: large;
  font-weight: bold;
}
.banner a{
  text-align: center;
  padding: 150px;
}
.logo a{
    font-size: 50px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
}
.main-content {
    padding-left: 60px;
    padding-right: 60px;
}
* {
    font-family: 'Poppins', serif;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

 .fa-facebook {
  color: white;
}
.fa-whatsapp {
  color: green;
}
.fa-instagram {
  color: #F33A6A;
}
</style>
  <div class="logo text-center">
    <div>
    <a style="color:whitesmoke;" href="homepage">Ads</a>
    </div>
  </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= base_url('index.php/welcome/login/' ); ?>">login</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= base_url('index.php/welcome/logout/' ); ?>">logout</a>
      </li>
      <li class="nav-item">
        <a href="cart" class="nav-link">Cart <span>( * )</span> </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<body>
    <br><br>
    <div class="container">
        <h3>contact details</h3>
        <p>Dittu v devasia <br>
            dittuvld@gmail.com<br>
            8113983249<br>
            <p>
      <a id="ftr" href="https://facebook.com/Dittu v devasia.luv/" class="fa fa-facebook"></a>
      <a id="ftr" href="#" class="fa fa-whatsapp"></a>
      <a id="ftr" href="https://instagram.com/Dittu v Devasia.luv" class="fa fa-instagram"></a>
      <a id="ftr" href="https://twitter.com/sumitkumar1503" class="fa fa-twitter"></a>
    </p>
        </p>
    </div>
</body><br><br>
<footer>
  <p>Copyright &copy; Ads management</p>
  <a href="#">About us</a>
  <a href="#">Contact</a>
  <a href="login">Login</a><br>
  <p>
      <a id="ftr" href="https://facebook.com/Dittu v devasia.luv/" class="fa fa-facebook"></a>
      <a id="ftr" href="#" class="fa fa-whatsapp"></a>
      <a id="ftr" href="https://instagram.com/Dittu v Devasia.luv" class="fa fa-instagram"></a>
      <a id="ftr" href="https://twitter.com/sumitkumar1503" class="fa fa-twitter"></a>
    </p>
</footer>

</html>