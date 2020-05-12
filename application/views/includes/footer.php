  <!-- Start footer -->


<footer class="page-footer">
        <div class="container">  
            <div class="row">
              <div class="col l3 m6 s12">
                <h5 class="white-text">Bussiness Name</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l3 m6 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Community</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Security</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Announcments</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Blog</a></li>
                </ul>
              </div>
              <div class="col l3 m6 s12">
                <h5 class="white-text">Seller Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="<?= base_url('index.php/Seller/index'); ?>">Create Seller Account</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Seller Information Center</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Resolution Center</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Affiliates</a></li>
                </ul>
              </div>
              <div class="col l3 m6 s12">
                <h5 class="white-text">Other Pages</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">FAQ</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Policis</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Help & Contact</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Site Map</a></li>
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
  <script type="text/javascript" src="<?= base_url('asset/js/common.js'); ?>"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.dropdown-trigger').dropdown({
        coverTrigger:false, 
        hover: true
      }); 

      $('.sidenav').sidenav();

      //for slider 
      $('.carousel.carousel-slider').carousel({
          fullWidth: false, 
          indicators: true
        });

        
    }); 
  </script>
</body>
</html>