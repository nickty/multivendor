	<!-- MObile search box -->
	<div class="orange hide-on-med-and-up" style="padding:10px; ">
		<center>
			<?= form_open(); ?>
			<input type="text" id="mobile_search_box" placeholder="Search For Products & Brands" name="">
			<?= form_close(); ?>
		</center>
	</div>
<section class="container">
	<div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="<?= base_url('asset/img/1.jpg'); ?>" class="responsive-img"></a>
    <a class="carousel-item" href="#two!"><img src="<?= base_url('asset/img/1.jpg'); ?>" class="responsive-img"></a>
    <a class="carousel-item" href="#three!"><img src="<?= base_url('asset/img/1.jpg'); ?>" class="responsive-img"></a>
    <a class="carousel-item" href="#four!"><img src="<?= base_url('asset/img/1.jpg'); ?>" class="responsive-img"></a>
  </div>
 </section> 

  <!-- Offer Area -->
<section class="container">
<div class="row">
    <div class="col l2 s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="<?= base_url('asset/img/product_imgs/pr-01.png'); ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title">Electronics</span>

          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          <p>70% off</p>
        </div>
      </div>
    </div>
    <div class="col l2 s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="<?= base_url('asset/img/product_imgs/pr-01.png'); ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          <p>70% off</p>
        </div>
      </div>
    </div>
    <div class="col l2 s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="<?= base_url('asset/img/product_imgs/pr-01.png'); ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          <p>70% off</p>
        </div>
      </div>
    </div>
    <div class="col l2 s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="<?= base_url('asset/img/product_imgs/pr-01.png'); ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          <p>70% off</p>
        </div>
      </div>
    </div>
    <div class="col l2 s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="<?= base_url('asset/img/product_imgs/pr-01.png'); ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          <p>70% off</p>
        </div>
      </div>
    </div>
    <div class="col l2 s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="<?= base_url('asset/img/product_imgs/pr-01.png'); ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          <p>70% off</p>
        </div>
      </div>
    </div>
  </div>

<!-- Electronics section  -->

<div class="row">
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
</div>

<h5 class="center">Electronics Products</h5>

<div class="row">
	<?php foreach($electronic as $product) : ?>
		
    <div class="col l2 s6 m4">
      <div class="card"  style="height: 280px;">
        <div class="card-image">
          <img style="height: 120px;" src="<?= base_url().'imgs/products/'.$product['mobile_image_0']; ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title" style="font-size: 16px;"><?= substr($product['title'], 0, 20);  ?></span>
        	<span class="badge left"><b><?= number_format($product['price']); ?></b> Taka</span>
                  
        </div>
        
        	<a href="<?= base_url().'home/single_product/'.$product['id']; ?>" class="btn orange" style="width: 100%;">View More</a>
	    
	    	<a class="btn cart" id="pr<?= $product['id']; ?>" style="width: 100%;">Add to Cart</a>
	    
	    
        
      </div>
    </div>


   <?php endforeach; ?>

 </div>
 <div class="row">
 	<center>
 		<a href="<?= base_url('home/electronics') ?>" class="btn orange">More Electronic Products</a>
 	</center>
 	
 </div>

  <!-- Men section  -->

  <div class="row">
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
</div>

<h5 class="center">Men Products</h5>

<div class="row">
	<?php foreach($men_fashon as $product) : ?>
		
    <div class="col l2 s6 m4">
      <div class="card"  style="height: 280px;">
        <div class="card-image">
          <img style="height: 120px;" src="<?= base_url().'imgs/products/'.$product['mobile_image_0']; ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title"><?= substr($product['title'], 0, 10);  ?></span>
        	<span class="badge left"><b><?= number_format($product['price']); ?></b> Taka</span>
                  
        </div>
        
        	<a class="btn orange" style="width: 100%;">View More</a>
	    
	    	<a class="btn cart" id="pr<?= $product['id']; ?>" style="width: 100%;">Add to Cart</a>
	    
	    
        
      </div>
    </div>

   <?php endforeach; ?>
 </div>

 <div class="row">
 	<center>
 		<a href="<?= base_url('home/men_fastion');?>" class="btn orange">More Men Fashion Products</a>
 	</center>
 	
 </div>

 <!-- women section  -->

 <div class="row">
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
</div>

<h5 class="center">Women Products</h5>

<div class="row">
    <?php foreach($women_fashon as $product) : ?>
		
    <div class="col l2 s6 m4">
      <div class="card"  style="height: 280px;">
        <div class="card-image">
          <img style="height: 120px;" src="<?= base_url().'imgs/products/'.$product['mobile_image_0']; ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title"><?= substr($product['title'], 0, 10);  ?></span>
        	<span class="badge left"><b><?= number_format($product['price']); ?></b> Taka</span>
                  
        </div>
        
        	<a class="btn orange" style="width: 100%;">View More</a>
	    
	    	<a class="btn cart" id="pr<?= $product['id']; ?>" style="width: 100%;">Add to Cart</a>
	    
	    
        
      </div>
    </div>

   <?php endforeach; ?>
 </div>

<div class="row">
 	<center>
 		<a href="<?= base_url('home/women_fastion');?>" class="btn orange">More Women Products</a>
 	</center>
 	
 </div>
<!-- Home & Furniture section  -->

 <div class="row">
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
</div>

<h5 class="center">Home & Furniture</h5>

<div class="row">
    <?php foreach($home_furniture as $product) : ?>
		
    <div class="col l2 s6 m4">
      <div class="card"  style="height: 280px;">
        <div class="card-image">
          <img style="height: 120px;" src="<?= base_url().'imgs/products/'.$product['mobile_image_0']; ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title"><?= substr($product['title'], 0, 10);  ?></span>
        	<span class="badge left"><b><?= number_format($product['price']); ?></b> Taka</span>
                  
        </div>
        
        	<a class="btn orange" style="width: 100%;">View More</a>
	    
	    	<a class="btn cart" id="pr<?= $product['id']; ?>" style="width: 100%;">Add to Cart</a>
	    
	    
        
      </div>
    </div>

   <?php endforeach; ?>
 </div>

<div class="row">
 	<center>
 		<a href="<?= base_url('home/home_furniture');?>" class="btn orange">More Home & Furnicute Products</a>
 	</center>
 	
 </div>
 <!-- Sports & Sationary section  -->

 <div class="row">
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
</div>

<h5 class="center">Sports & Sationary</h5>

<div class="row">
    <?php foreach($sports_stationary as $product) : ?>
		
    <div class="col l2 s6 m4">
      <div class="card"  style="height: 280px;">
        <div class="card-image">
          <img style="height: 120px;" src="<?= base_url().'imgs/products/'.$product['mobile_image_0']; ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title"><?= substr($product['title'], 0, 10);  ?></span>
        	<span class="badge left"><b><?= number_format($product['price']); ?></b> Taka</span>
                  
        </div>
        
        	<a class="btn orange" style="width: 100%;">View More</a>
	    
	    	<a class="btn cart" id="pr<?= $product['id']; ?>" style="width: 100%;">Add to Cart</a>
	    
	    
        
      </div>
    </div>

   <?php endforeach; ?>
 </div>
<div class="row">
 	<center>
 		<a href="<?= base_url('home/sports_stationary');?>" class="btn orange">More Sports & Stationary Products</a>
 	</center>
 	
 </div>
 <!-- Daily Need  -->

 <div class="row">
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
	<div class="col l6 m6 s12">
		<img src="<?= base_url('asset/img/adds/el-02.jpg'); ?>" class="responsive-img">
	</div>
</div>

<h5 class="center">Daily Need</h5>

<div class="row">
    <?php foreach($daily_need as $product) : ?>
		
    <div class="col l2 s6 m4">
      <div class="card"  style="height: 280px;">
        <div class="card-image">
          <img style="height: 120px;" src="<?= base_url().'imgs/products/'.$product['mobile_image_0']; ?>" class="responsive-img">
                   
        </div>
        <div class="card-content">
        	<span class="card-title"><?= substr($product['title'], 0, 10);  ?></span>
        	<span class="badge left"><b><?= number_format($product['price']); ?></b> Taka</span>
                  
        </div>
        
        	<a class="btn orange" style="width: 100%;">View More</a>
	    
	    	<a class="btn cart" id="pr<?= $product['id']; ?>" style="width: 100%;">Add to Cart</a>
	    
	    
        
      </div>
    </div>

   <?php endforeach; ?>
 </div>
 <div class="row">
 	<center>
 		<a href="<?= base_url('home/daily_need');?>" class="btn orange">More Daily Need Products</a>
 	</center>
 	
 </div>
</section>

 