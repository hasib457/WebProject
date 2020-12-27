<?php

    if(isset($_POST["name"])){
	$name=$_POST["name"];
        $message=$_POST["message"];
        $email=$_POST["email"];
        $connect=mysqli_connect("localhost","root","","webProject");
        $quary="INSERT INTO `contacts`( `name`, `date`, `email`, `msg`) VALUES ('$name',now(),'$email','$message')";
        mysqli_query($connect,$quary);
     }   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>freelance</title>
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
  <section id="main">
    <!-- navbar -->
    <nav>
        <!-- logo -->
        <a href="#" class="logo">FREELANCE</a>
        <!-- menu -->
        <ul class="menu">
            <li><a href="#"  class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portifolio</a></li>
            <li><a href="#contact-form">Contact</a></li>
        </ul>

    </nav>
  </section>
  <!-- intro -->
  <div class="intro">
      <p>Hello</p>
      <h1>I'm <font color="#17d1ac"> Mohamed </font></Mohamed>Hasib</h1>
      <p class="details">we will provide you a perfect freelance services for your business</p>
      <a href="#contact-btn" class="contact-btn">Contact us</a>
  </div>
  <!-- <div class="img">
      <img src="">
  </div> -->
  <!---about section--->
  <section id="about">
    <!--text---->
    <div class="about-text">
    <h1>About Us</h1>
    <h2>freelancing </h2>
    <p>My goal is to partner with you on your entire business and see how I can take work away from you.
    My favorite clients are the ones that view our business relationship as a partnership.
    I value strong communication, transparency and focus.
    I have worked with startups, local businesses, mobile apps,
    softwares, fortune 500 companies and everything in between.
    </p>
    <!---btn---->
    <button>More Details</button>
    </div>
    <!--about-model-img------>
    <div class="about-model">
      <img src="images/about-model.png"alt="model"/>
    </div>
  </section>
    
    <!--services!-->
  <section id="services">
    <div class="service_head"> <!---this for title-->
    <h1>Services</h1>
    <p>There are the services we provide!</p>
    </div>
    <div class="box-container">
    <div class="service_box1">
    <div class="service_image1">
        <div class="service_type">Flutter</div>
        
    </div>
    <div class="service_text">
    <a href="#">With our website we provide many features to be suitable with you!</a>	
    </div>
    </div>
    <div class="service_box2">
    <div class="service_image2">
        <div class="service_type">Web Development</div>
        
    </div>
    <div class="service_text">
    <a href="#">With our website we provide many features to be suitable with you!</a>	
    </div>
    </div>
    </div>
</section>
    
  <!-- Portfolio section -->
  <section id="portfolio">
    <h1 class="p-heading">Portfolio</h1>
    <div class="p-b-container">

      <div class="p-box">
        <div class="text-overlay">
          <h1>UI/UX</h1>
          <p>UI/UX for a client requested a landing pae for his company</p>
        </div>
        <img src="images/gallery-1.jpg" alt="portfolio image">
      </div>

      <div class="p-box">
        <div class="text-overlay">
          <h1>Mobile Development</h1>
          <p>Task Management App for Android and Ios Devices</p>
        </div>
        <img src="images/gallery-2.jpg" alt="portfolio image">
      </div>

      <div class="p-box">
        <div class="text-overlay">
          <h1>UI/UX</h1>
          <p>Landing page for a company</p>
        </div>
        <img src="images/gallery-3.jpg" alt="portfolio image">
      </div>

      <div class="p-box">
        <div class="text-overlay">
          <h1>Mobile Development </h1>
          <p>Home Workout App for Android and Ios Devices</p>
        </div>
        <img src="images/gallery-4.jpg" alt="portfolio image">
      </div>

      <div class="p-box">
        <div class="text-overlay">
          <h1>Web Development</h1>
          <p>Landing page for an comming soon app</p>
        </div>
        <img src="images/gallery-5.jpg" alt="portfolio image">
      </div>

      <div class="p-box">
        <div class="text-overlay">
          <h1>Graphic Design</h1>
          <p>Vector Art design for furniture company</p>
        </div>
        <img src="images/gallery-6.jpg" alt="portfolio image">
      </div>
    </div>
  </section>

    
     <!--contact------------------->
	<section id="contact-btn">
	<h1 class="c-b-heading">If You Need To Make Any Project </h1>
    <button >Contact Us</button>
	</section>
    
    <!--contact-form------------------->
	<section id="contact-form">
	<form method="post">
	<div class="contact-left">
	<h1 class="c-l-heading"><font style="border-bottom: 3px solid #1ED98B;">Write to us</font></h1>
	<div class="f-name">
	<font >Name</font>
	<input type="text" name="name" placeholder="Full Name"/>
	</div>
	<div class="f-email">
	<font >Email</font>
	<input type="email" name="email" placeholder="Example@gmail.com"/>
	</div>
	</div>
	<div class="contact-right">
	<div class="message">
	<font >Message</font>
	<textarea name="message" rows="5" cols="20" placeholder="Write Message..."></textarea>
	</div>
	<button>submit</button>
	</div>
		
	</form>
	</section>
  
</body>
