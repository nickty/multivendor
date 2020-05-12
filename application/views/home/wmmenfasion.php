<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>home</title>

	<!-- Connect with metarialize -->
	<?= link_tag('asset/css/materialize.css'); ?>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?= link_tag('asset/fonts/css/all.css'); ?>

	<style type="text/css">
		.collapsible {
			box-shadow: none; 
		}
		.collapsible-body {
			padding:0px;
		}
		.collapsible-header {
			outline: none; 
			color: silver; 
		}
		.set_links {
			border-left: 3px solid orange; 
			padding: 0px; 
		}
		.set_links li a {
			color: silver; 
			padding-left: 18px;
			line-height: 35px; 
			font-size: 16px; 
		}

	</style>
	
</head>

<h2 class="center-align red-text hide-on-med-and-down">This page is only for mobile screen</h2>

<h5 class="orange section white-text center-align hide-on-med-and-up">Women Fashion</h5>
<ul class="collapsible hide-on-med-and-up">
    <li>
      <div class="collapsible-header">Mobiles &nbsp;  <span class="fa fa-angle-down" style="margin-top: 4px; "></span></div>
      <div class="collapsible-body">
      	<ul class="set_links">
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      	</ul>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Mobile Accessories &nbsp;  <span class="fa fa-angle-down" style="margin-top: 4px; "></span></div>
      <div class="collapsible-body">
      	<ul class="set_links">
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      	</ul>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Computers &nbsp;  <span class="fa fa-angle-down" style="margin-top: 4px; "></span></div>
      <div class="collapsible-body">
      	<ul class="set_links">
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      	</ul>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Computer Accessories &nbsp;  <span class="fa fa-angle-down" style="margin-top: 4px; "></span></div>
      <div class="collapsible-body">
      	<ul class="set_links">
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      		<li><a href="">sub mobile</a></li>
      	</ul>
      </div>
    </li>
 </ul>


<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
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
    $('.collapsible').collapsible();
  });
	</script>
	
</body>
</html>