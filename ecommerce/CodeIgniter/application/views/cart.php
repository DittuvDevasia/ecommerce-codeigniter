<html>
    <head><title>User homepage</title></head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
  body{
  background-color: #3B5998;
}
footer{
     text-align: center;
    padding:50px;
     height: 170px;
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
.my_prod_row_class{
       padding-top:15px;
       padding-bottom:20px;
}
.my_prod_row_class .mx_auto{
       color:#fff;
       font-size:12px;
       text-decoration:none;
}

.my_prod_title{
       font-size:16px;
       letter-spacing:.2em;
       padding-top:15px;
       padding-bottom:10px;
}
.my_prod_text{
       padding-right:20px;
}
.my_search_text{
        padding-top:20px;
}
.my_custom_table{
     min-width:400px;
     font_size:14px;
}
.my_custom_thead{
      font-weight:normal;
      text_transform:uppercase;
      letter-spacing:.2em;
      background-color:#fafafa;
}
.custom_a{
      text-decoration:none;
}
.custom_icon{
      text-decoration:none;
      color:#868e96 !important;
}
.my_custom_button{
       margin-top:5px;
       size: 100px;
       width: 300px;

}
.h{
    text-align: center;
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
        <a class="nav-link" href="">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br><br>
<body>
<div class="container">
    <center>
    <h3><b><i>Your ads cart</i></b></h3>
    <br><br>
        <div class="row mx_auto">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-center">
            <table class="table my_custom_table">
                <thead class="my_custom_thead">
                <tr>
                    <th class="h" colspan="5">
                        Your Items
                    </th>
                </tr>
                </thead>
                  <tbody>
                  <tr>
                      <td>
                          <a href="#"><img src="<?= base_url('/uploads/') . $ads->image; ?>" width="70px;" alt=""></a>
                      </td>
                      <td class="text-left">
                         <?= $ads->title; ?>
                          <br>
                          Price: <?= $ads->price; ?>
                          <br>
                          Quantity: <?= $ads->quantity; ?>
                      </td>
                      <td>
                          &nbsp;<a href="" class="custom_a"> <i class="fa fa-plus"></i></a>&nbsp;
                          &nbsp;<a href="" class="custom_a"><i class="fa fa-minus"></i></a>&nbsp;
                          &nbsp;<a href="" class="custom_icon"><i class="fa fa-trash"></i></a>&nbsp;
                      </td>
</tr>
</tbody>
            </table>
        </div>
 <div class="col-12 col-sm-12 col-md-12 col-lg-6">
     <table class="table my_custom_table">
         <thead class="my_custom_thead">
         <tr>
             <th class="h">
                 Checkout
             </th>
         </tr>
         </thead>
         <tbody>
         <tr>
             <td>
             Please review your shopping cart items before proceeding with the order payment.
         </td>
         </tr>
         <tr>
             <td class="text-center">
                 Your Total is : <?= $ads->price; ?>
             </td>
         </tr>
         </tbody>
     </table>
     <div class="mx-auto text-center">
         <a href="<?= base_url('index.php/welcome/homepage') ?>" class="btn btn-success">Continue shopping</a>
         <a href="<?= base_url('index.php/welcome/homepage') ?>" class="btn btn-primary ">Payment</a>
     </div>
 </div>
    </div>
        </tr>
    </table>
    <br><br><br><br>
    <h3><i>Thanks for your shopping</i></h3>
</center>
</div>
</body>
<br><br>
<footer>
  <p>Copyright &copy; Ads management 2023</p>
  <a href="about">About us</a>
  <a href="contact">Contact</a>
  <a href="login">Login</a><br>
  <p>
      <a id="ftr" href="https://facebook.com/Dittu v devasia.luv/" class="fa fa-facebook"></a>
      <a id="ftr" href="#" class="fa fa-whatsapp"></a>
      <a id="ftr" href="https://instagram.com/Dittu v Devasia.luv" class="fa fa-instagram"></a>
      <a id="ftr" href="https://twitter.com/sumitkumar1503" class="fa fa-twitter"></a>
    </p>
</footer>

</html>