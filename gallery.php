<!DOCTYPE html>
<html>
<head>
  <title>Gallery</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Add CSS for gallery */
    #gallery {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .image {
      flex: 0 0 auto;
      width: 30%; /* Adjust as needed */
    }
    .image img {
      width: 100%;
      height: auto;
    }
  </style>
  <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css"><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div><img src="images/equa.png" alt="" style="width: 20%;"></div>
    <ul>
      <li><a href="index.php"><span><i class="fa fa-home"></i> Home</span></a></li>
      <li><a href="wes.php"><span>What is Equa Smart</span></a></li>
      <li><a href="tips.php"><span>Advantages</span></a></li>
      <li class="current"><a href="gallery.php"><span><i class="fa fa-image"></i> Gallery</span></a></li>
      <li><a href="about.php"><span><i class="fa fa-user-circle-o"></i> About</span></a></li>
      <li><a href="contact.php"><span><i class="fa fa-phone"></i> Contact</span></a></li>
      <li><a href="download.php"><span><i class="fa fa-download"></i> Download</span></a></li>
      <!--<li><a href="login_page.php"><span><i class="fa fa-sign-in"></i> Login</span></a></li>-->
    </ul>
  </div>
  <div class="body">
    <div id="blog">
        <h2 style="margin-top: 20px;">Gallery</h2>
        <div id="gallery">
          <div class="image"><img src="images/14.jpg" alt="Gallery Image 1"></div>
          <div class="image"><img src="images/15.jpg" alt="Gallery Image 2"></div>
          <div class="image"><img src="images/3.jpg" alt="Gallery Image 3"></div>
          <div class="image"><img src="images/4.jpg" alt="Gallery Image 1"></div>
          <div class="image"><img src="images/5.jpg" alt="Gallery Image 2"></div>
          <div class="image"><img src="images/6.jpg" alt="Gallery Image 3"></div>
          <div class="image"><img src="images/7.jpg" alt="Gallery Image 1"></div>
          <div class="image"><img src="images/8.jpg" alt="Gallery Image 2"></div>
          <div class="image"><img src="images/9.jpg" alt="Gallery Image 3"></div>
          <div class="image"><img src="images/11.jpg" alt="Gallery Image 1"></div>
          <div class="image"><img src="images/12.jpg" alt="Gallery Image 2"></div>
          <div class="image"><img src="images/13.jpg" alt="Gallery Image 3"></div>
        </div>
    </div>
  </div>
  <div id="footer">
    <ul>
      <li>
        <h3>Books</h3>
        <div id="magazine">
          <p>The book of Complete guide to Aquaponics</p>
          <a href="#"><img src="images/book.jpg" alt=""style="width: 72%; "></a> </div>
      </li>
      <li>
        <h3>Gallery</h3>
        <div id="gallery"> <b>Gellery of Aquaponics</b> <a href="#"><img src="images/14.jpg" alt="" style="width: 90%; height: 100%;"></a>
          <p>This is the Gallery of Aquaponics or Equa Smart <br>
            by: Group Phoenix</p>
          <a href="gallery.php" class="viewall">View all Photos</a> </div>
      </li>
      <li>
        <h3>Get in Touch</h3>
        <div>
          <p>Email:<br>
            Equasmart@gmail.com<br>
            <br>
          </p>
          <p>Address:<br>
            Block 7 Lot 11 Mt. Kilimanjaro Street Panorama Hills Subdivision, Antipolo<br>
            <br>
          </p>
          <p>Phone:<br>
            +639 475402264</p>
        </div>
      </li>
    </ul>
    <div>
      <p style="text-align: center;color: #988878;">Copyright © 2024 Group Phoenix ®</p>
    </div>
  </div>
</div>
</body>
</html>
