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
    #show_profile, #seller_orders, #seller_listings  {
      width: 15% !important; 

    }
    #link_task {
      color: silver; padding-left: 15px; line-height: 30px; display: black; padding; 5px; 
    }

  </style>

</head>



<nav style="height: 35px; line-height: 35px">
  <div class="container">
    <div class="nav-wrapper">
      <div class="left">
        <ul>
          <li><a href="#" class="dropdown-trigger" data-target="show_profile"> <i class="fas fa-user-tie"></i> Seller name</a></li>
          <ul class="dropdown-content" id="show_profile">
            <li><a href=""><i class="far fa-id-badge"></i> Seller Profile</a></li>
            <li><a href=""><i class="fas fa-user-cog"></i> Account Settings</a></li>
            <li><a href="<?= base_url('index.php/Seller/Logout'); ?>"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
          </ul>
          <li><a href="#"><i class="fas fa-phone-alt"></i> Help & Contact</a></li>
        </ul>
      </div>
      <div class="right">
        <ul>
          <li><a href="#"><i class="fab fa-sellsy"></i> Sell</a></li>
          <li><a href="#"><i class="far fa-bell"></i> Notification</a></li>
          <li><a href="#"><i class="fas fa-shopping-cart"></i> Cart</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container">
  <h5>Seller Hub <span style="font-size: 17px;"><a href="">Profile Name</a></span></h5>
  <nav>
    <div class="nav-wrapper">
      <div class="left">
        <ul>
          <li><a href="">Overview</a></li>
          <li><a href="#" class="dropdown-trigger" data-target="seller_orders">Orders</a></li>
          <ul class="dropdown-content" id="seller_orders">
            <li><a href="">All orders</a></li>
            <li><a href="">Awaiting payment</a></li>
            <li><a href="">Awaiting shipment</a></li>
            <li><a href="">Paid and shipped</a></li>
            <li><a href="">Cancellations</a></li>
            <li><a href="">Returns</a></li>
            <li><a href="">Cases</a></li>
            <li><a href="">Shipping labels</a></li>
          </ul>
          <li><a href="#" class="dropdown-trigger" data-target="seller_listings">Listings</a></li>
          <ul class="dropdown-content" id="seller_listings">
            <li><a href="<?= base_url('index.php/Seller/common_listing'); ?>">Create listing</a></li>
            <li><a href="<?= base_url('index.php/Seller/active_listing'); ?>">Active</a></li>
            <li><a href="">Unsold</a></li>
            <li><a href="">Drafts</a></li>
            <li><a href="">Scheduled</a></li>
            <li><a href="">Embeded</a></li>
          </ul>
          <li><a href="">Marketings</a></li>
          <li><a href="">Performance</a></li>
          <li><a href="">Research</a></li>
          
        </ul>
      </div>
      <div class="right">
        <ul>
          <li><a href="">Message</a></li>
          <li><a href="">Comments</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="container">
  <div class="row">
    <div class="col l2 m4 s12" style="padding: 5px; ">
      <div id="box" style="border: 1px solid orange; border-radius: 3px;">
        <h6 style="background-color: orange; font-size: 16px; padding: 5px; color: white; margin-top: 0px; margin-bottom: 0px">Unread Message</h6>
        <h5 style="color: silver; padding-left: 3px;">10</h5>
      </div>
    </div>
    <div class="col l2 m4 s12" style="padding: 5px; ">
      <div id="box" style="border: 1px solid orange; border-radius: 3px;">
        <h6 style="background-color: orange; font-size: 16px; padding: 5px; color: white; margin-top: 0px; margin-bottom: 0px">Awaiting shipment</h6>
        <h5 style="color: silver; padding-left: 3px;">10</h5>
      </div>
    </div>
    <div class="col l2 m4 s12" style="padding: 5px; ">
      <div id="box" style="border: 1px solid orange; border-radius: 3px;">
        <h6 style="background-color: orange; font-size: 16px; padding: 5px; color: white; margin-top: 0px; margin-bottom: 0px">Sales (31 days)</h6>
        <h5 style="color: silver; padding-left: 3px;">10</h5>
      </div>
    </div>
    <div class="col l2 m4 s12" style="padding: 5px; ">
      <div id="box" style="border: 1px solid orange; border-radius: 3px;">
        <h6 style="background-color: orange; font-size: 16px; padding: 5px; color: white; margin-top: 0px; margin-bottom: 0px">Today's feedback</h6>
        <h5 style="color: silver; padding-left: 3px;">10</h5>
      </div>
    </div>
    <div class="col l2 m4 s12" style="padding: 5px; ">
      <div id="box" style="border: 1px solid orange; border-radius: 3px;">
        <h6 style="background-color: orange; font-size: 16px; padding: 5px; color: white; margin-top: 0px; margin-bottom: 0px">Unread Message</h6>
        <h5 style="color: silver; padding-left: 3px;">10</h5>
      </div>
    </div>
    <div class="col l2 m4 s12" style="padding: 5px; ">
      <div id="box" style="border: 1px solid orange; border-radius: 3px;">
        <h6 style="background-color: orange; font-size: 16px; padding: 5px; color: white; margin-top: 0px; margin-bottom: 0px">Growth</h6>
        <h5 style="color: silver; padding-left: 3px;">10</h5>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col l4 m4 s12" style="padding: 10px">
      <div style="border: 1px solid orange">


        <h6 style="background-color: orange; padding: 5px; margin-top: 0px; margin-bottom: 0px; color: white">Task</h6>
        <ul id="link_task">
          <li><a href="">Messages <span class="badge orange white-text">5</span></a></li>
          <li><a href="">Shipments <span class="badge red white-text">5</span></a></li>
          <li><a href="">Feedback <span class="badge orange white-text">5</span></a></li>
        </ul>
      </div>
    </div>

    <div class="col l8 m8 s12" style="padding: 10px">
      <div style="border: 1px solid orange">


        <h6 style="background-color: orange; padding: 5px; margin-top: 0px; margin-bottom: 0px; color: white">Sales Overview</h6>
        <div class="row">
          <div class="col l3 m3 s6">
            <center>
              <h6 style="color: silver">Today</h6>
              <h5 style="margin-top: -4px; color: gray ">$0.00</h5>
            </center>
          </div>
          <div class="col l3 m3 s6">
            <center>
              <h6 style="color: silver">Last 7 Days</h6>
              <h5 style="margin-top: -4px; color: gray ">$0.00</h5>
            </center>
          </div>
          <div class="col l3 m3 s6">
            <center>
              <h6 style="color: silver">Last 31 Days</h6>
              <h5 style="margin-top: -4px; color: gray ">$0.00</h5>
            </center>
          </div>
          <div class="col l3 m3 s6">
            <center>
              <h6 style="color: silver">Last 90 Days</h6>
              <h5 style="margin-top: -4px; color: gray ">$0.00</h5>
            </center>
          </div>

        </div>
        <div class="row">

          <div class="col l3 m3 s6">
            <div class="progress">
              <div class="determinate" style="width: 70%"></div>
            </div>
          </div>
          <div class="col l3 m3 s6">
            <div class="progress">
              <div class="determinate" style="width: 70%"></div>
            </div>
          </div>
          <div class="col l3 m3 s6">
            <div class="progress">
              <div class="determinate" style="width: 70%"></div>
            </div>
          </div>
          <div class="col l3 m3 s6">
            <div class="progress">
              <div class="determinate" style="width: 70%"></div>
            </div>
          </div>
        </div>
      </div>


    </div>

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col l4 m4 s12" style="padding: 10px">
      <div style="border: 1px solid orange">


        <h6 style="background-color: orange; padding: 5px; margin-top: 0px; margin-bottom: 0px; color: white">Selling tools</h6>
        <ul id="link_task">
          <li><a href="">PayPal</a></li>
          <li><a href="">Promoted listings</a></li>
          <li><a href="">Sellers you follow</a></li>
        </ul>
      </div>
    </div>
    <div class="col l4 m4 s12" style="padding: 10px">
      <div style="border: 1px solid orange;">

        <h6 style="background-color: orange; padding: 5px; margin-top: 0px; margin-bottom: 0px; color: white">Promotional offers</h6>
        <div style="padding: 10px;">

          <h6><b>Fixed Price Listing</b></h6>
          <p>Start Date: <?php echo date('d-M-Y', strtotime($lsellers[0]['sl_sdate'])); ?> </p>
          <p>End Date: <?php echo date('d-M-Y', strtotime($lsellers[0]['sl_ldate'])); ?></p>
          <b>Used/Left: <?php echo sizeof($fresult); ?>/<?= $lsellers[0]['sl_num'] - sizeof($fresult); ?></b>
          <hr>
          <h6><b>Auction type Listing</b></h6>
          <p>Start Date: <?php echo date('d-M-Y', strtotime($lsellers[0]['sl_sdate'])); ?> </p>
          <p>End Date: <?php echo date('d-M-Y', strtotime($lsellers[0]['sl_ldate'])); ?></p>
          <b>Used/Left: <?= sizeof($result); ?>/<?= $lsellers[0]['sl_num'] - sizeof($result); ?></b>
        </div>
      </div>
    </div>
    <div class="col l4 m4 s12" style="padding: 10px">
      <div style="border: 1px solid orange">


        <h6 style="background-color: orange; padding: 5px; margin-top: 0px; margin-bottom: 0px; color: white">Monthly limits</h6>
        <ul id="link_task">
          <li><a href="">PayPal</a></li>
          <li><a href="">Promoted listings</a></li>
          <li><a href="">Sellers you follow</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>  

<div class="container">
  <div class="row">
    <div class="col l4 m4 s12" style="padding: 10px">
      <div style="border: 1px solid orange">


        <h6 style="background-color: orange; padding: 5px; margin-top: 0px; margin-bottom: 0px; color: white">Feedbacks</h6>
        <ul id="link_task">
          <li><a href="">Positive <span class="badge orange white-text">5</span></a></li>
          <li><a href="">Negative <span class="badge red white-text">5</span></a></li>
          
        </ul>
      </div>
    </div>
    <div class="col l4 m4 s12" style="padding: 10px">
      <div style="border: 1px solid orange">


        <h6 style="background-color: orange; padding: 5px; margin-top: 0px; margin-bottom: 0px; color: white">Promotional offers</h6>
        <ul id="link_task">
          <li><a href="">PayPal</a></li>
          <li><a href="">Promoted listings</a></li>
          <li><a href="">Sellers you follow</a></li>
        </ul>
      </div>
    </div>
    <div class="col l4 m4 s12" style="padding: 10px">
      <div style="border: 1px solid orange">


        <h6 style="background-color: orange; padding: 5px; margin-top: 0px; margin-bottom: 0px; color: white">Account Summery</h6>
        <ul id="link_task">
          <li><a href="">PayPal</a></li>
          <li><a href="">Promoted listings</a></li>
          <li><a href="">Sellers you follow</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>    


<footer class="page-footer">
  <div class="container">
   <div class="row">
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
    $('.dropdown-trigger').dropdown({
      coverTrigger: false, 
      hover: true
    }); 
  });

</script>

</body>
</html>

