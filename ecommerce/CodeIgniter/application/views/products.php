<html>
    <head><title>User homepage</title></head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
footer{
     text-align: center;
    padding:50px;
     height: 160px;
     background-color: whitesmoke;
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
  </style>
  <div class="logo text-center">
    <div>
    <a href="homepage">Ads</a>
    </div>
  </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login">Login</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= base_url('index.php/welcome/logout/' ); ?>">logout</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Jobs</a>
          <a class="dropdown-item" href="#">Vehicles</a>
          <a class="dropdown-item" href="#">Plots</a>
          <a class="dropdown-item" href="#">Matrimony</a>
          <a class="dropdown-item" href="#">House</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<body>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col-md-3 mb-5">
    <div class="card h-100">
      <img src="<?= base_url('/uploads/') . $product->image; ?>" class="card-img-top" alt="..." height="300px" width="50px">
      <div class="card-body">
        <h5 class="card-title"><?= $product->title; ?></h5>
        <p class="card-text"><?= $product->description; ?></p>
        <p class="card-text"><?= $product->price; ?></p>
        <a href="<?= base_url(); ?>index.php/welcome/details/<?= $product->id; ?>">view</a>
      </div>
    </div>
  </div>
 </div>
</body>
</html>

</main>
</body><br><br>
<footer>
  <p>Copyright &copy; Ads management</p>
  <a href="#">About us</a>
  <a href="#">Contact</a>
  <a href="login">Login</a>
</footer>

</html>