<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Seller Account</title>

	<!-- Connect with metarialize -->
	<?= link_tag('asset/css/materialize.css'); ?>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?= link_tag('asset/fonts/css/all.css'); ?>

	<style type="text/css">
		#seller_username{
      width: 15%; 
      border: 1px solid white; 
      height: 30px; 
      margin-left: 58%; 
      box-shadow: none; 
      font-size: 13px; 
      padding: 2px; 
      color: white; 
    }
    #seller_password {
      width: 15%; 
      border: 1px solid white; 
      height: 30px; 
      margin-left: 1px; 
      box-shadow: none; 
      font-size: 13px; 
      padding: 2px; 
      color: white; 
    }
    button {
      height: 30px; 
      line-height: 30px; 
      margin-top: -4px; 
      
    }
    body{ background-color: rgba(0,0,0,0.05); }
    #email, #password, #mobile_no, #li_no  {
      width: 49%; 
    }
    #company_name, #email, #password, #mobile_no, #li_no {
      border: 1px solid silver;
      border-radius: 3px; 
      margin-bottom: 15px; 
    }
    

  </style>

</head>


<nav class="orange hide-on-med-and-down">
  <div class="container">
    <div class="nav-wrapper">
      <a href="" class="brand-logo">Seller Account</a>
      <?= form_open('Seller/Login'); ?>
      <input type="text" id="seller_username" placeholder="Username" name="seller_username" required>
      <input type="password" name="seller_password" id="seller_password" placeholder="password" required>
      <button type="submit" class="btn waves-effect waves-light" style="background-color: black">Login</button>
      <?= form_close(); ?>
    </div>
  </div>
</nav>
<div class="container hide-on-med-and-up">
  <div class="row">
    <div class="col l12 m12 s12">
     <h6>Seller Account</h6>
   </div>

   <div class="col l12 m12 s12">

     <?= form_open(); ?>
     <input type="text" id="sseller_username" placeholder="Username" name="">
     <input type="password" name="" id="selsler_password" placeholder="password">
     <button class="btn waves-effect waves-light" style="background-color: black">Login</button>
     <?= form_close(); ?>
   </div>
 </div>



</div>

<section class="container">

  <div class="row" style="margin:15px; ">
    <div class="col l6 m6 s12">
      <div class="orange">Sell to crores of customers on Flipkart, right from your doorstep!</div>
    </div>
    <div class="col l6 m6 s12 white" style="padding: 15px; ">
      <?= form_open('Seller/Create_account'); ?>
      <h6 class="center-align" style="margin-bottom: 10px">Register As A Seller</h6>
      <input type="text" id="company_name" name="cname" placeholder="Company Name" required>
      <input type="email" id="email" name="email" placeholder="Email" required>
      <input type="password" id="password" name="password" placeholder="Password">
      <input type="number" id="mobile_no" name="mobile_no" placeholder="Mobile Number" required="required">
      <input type="number" id="li_no" name="li_no" placeholder="License Number">
      <button type="submit" id="submit" class="btn waves-effect waves-light" style="background-color: black">Register</button>
      <?= form_open(); ?>
    </div>
  </div>
  
</section>
<div style="background-color: white; padding: 25px 0;">
<section class="container">
  <div class="row">
    <h2 class="center-align">Buyers & Sellers <span class="orange-text">Accounts</span></h2>
  <div class="col l6 m6 s12">
    <h1 class="center-align"><i class="fa fa-users" style="padding:8px; font-size: 100px; border:3px solid silver; border-radius: 100%; color: orange;"></i></h1>
    <h4 class="center-align orange-text">10 Buyers</h4>
    <h6 class="center-align" style="color: silver;">Buying their goods everyday</h6>
  </div>
  <div class="col l6 m6 s12">
    <h1 class="center-align"><i class="fa fa-users" style="padding: 8px; font-size: 100px; border:3px solid silver; border-radius: 100%; color: orange;"></i></h1>
    <h4 class="center-align orange-text"><?= sizeof($sellers); ?> Sellers</h4>
    <h6 class="center-align" style="color: silver;">Comfortabely selling their goods</h6>
  </div>
</div>
</section>
</div>

<section class="container">
   <h2 class="center-align">Recent Registered <span class="orange-text">Sellers</span></h2>
   <div class="row">
    <?php if (count($sell)): ?>
    <?php foreach ($sell as $val): ?>
  
    <div class="col l4 m4 s12">
      <div class="card">
        <div class="card-image">
            <img src="localhost/multi-vendor/imgs/accessories/143518de81146b8.jpg">
           </div>
        <div class="card-content">
          <h5><?= $val->cname; ?></h5>
          <?= $val->city; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <?php else: ?>
    <h5>No Seller Found</h5>
   <?php endif; ?> 
   </div>
</section>



<footer class="page-footer">
 <div class="row container">
  <div class="col l3 m6 s12">
    <h5 class="white-text">Footer Content</h5>
    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
  </div>
  <div class="col l3 m6 s12">
    <h5 class="white-text">Links</h5>
    <ul>
      <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
    </ul>
  </div>
  <div class="col l3 m6 s12">
    <h5 class="white-text">Important Links</h5>
    <ul>
      <li><a class="grey-text text-lighten-3" href="<?= base_url('index.php/Seller/index'); ?>">Create Seller Account</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
    </ul>
  </div>
  <div class="col l3 m6 s12">
    <h5 class="white-text">Links</h5>
    <ul>
      <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
    </ul>
  </div>

</div>
<div class="footer-copyright">
  <div class="container">
    © 2014 - <?= date('Y'); ?> Copyright Receiver
    <a class="grey-text text-lighten-4 right" href="#!">Mizanur Rahman</a>
  </div>
</div>
</footer>

<script type="text/javascript" src="<?= base_url('asset/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('asset/js/materialize.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('asset/fonts/js/all.js'); ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

  function ValidateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
  };
  $("#email").keyup(function () {
    if (!ValidateEmail($("#email").val())) {

      $('#submit').prop('disabled', true); 
    }
    else {
     $('#submit').prop('disabled', false); 
   }
 });
</script>

</body>
</html>