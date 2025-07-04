<!DOCTYPE html>
<html>
<head>
<title>Download</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .hero {
    display: flex;
    align-items: center;
    justify-content: space-around;
    background: #ffffff;
    color: white;
    padding: 50px 0;
}

.content {
    max-width: 500px;
}

.content h1 {
    font-size: 70px;
    margin-bottom: 20px;
    color: black;
}

.content p {
    margin-bottom: 20px;
}

.app-links {
    display: flex;
    justify-content: space-between;
}

.app-links a img {
    width: 40%;
  
}

.image img {
    width: 400px;
}

button {
  all: unset;
  position: relative;
  cursor: pointer;
}



button div {
  position: relative;
  display: inline-block;
  overflow: hidden;
  width: auto;
  height: auto;
  padding: 15px 0;
  background: #2AA467;
  border-radius: 10px;
}

button div::after {
  content: '';
  position: absolute;
  right: 0;
  bottom: 0;
  width: 5px;
  height: 5px;
  background: #0f1923;
  transition: 0.4s;
}

button:hover div::after {
  background: #2AA467;
}

button div span {
  position: absolute;
  width: 120%;
  height: 110%;
  transform: translate(-100%, -20px);
  background: #0f1923;
  clip-path: polygon(5% 0, 100% 0, 95% 100%, 0% 100%);
  transition: 0.4s;
}

button:hover div span {
  transform: translate(-10%, -20px);
}

button div a {
  position: relative;
  text-decoration: none;
  color: #ffffff;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: bold;
  padding: 20px 80px;
}
</style>
</head>
<body>
<div id="page">
  <div id="header">
    <div><img src="images/logo.png" alt="" style="width: 20%;"></div>
    <ul>
      <li><a href="index.php"><span><i class="fa fa-home"></i> Home</span></a></li>
      <li><a href="wes.php"><span>What is Equa Smart</span></a></li>
      <li><a href="tips.php"><span>Advantages</span></a></li>
      <li><a href="gallery.php"><span><i class="fa fa-image"></i> Gallery</span></a></li>
      <li><a href="about.php"><span><i class="fa fa-user-circle-o"></i> About</span></a></li>
      <li><a href="contact.php"><span><i class="fa fa-phone"></i> Contact</span></a></li>
      <li class="current"><a href="download.php"><span><i class="fa fa-download"></i> Download</span></a></li>
      <!--<li><a href="login_page.php"><span><i class="fa fa-sign-in"></i> Login</span></a></li>-->
    </ul>
  </div>
  <div class="body">
        <section class="hero">
            <div class="content">
                <h1> Download eQuaSmart!</h1>

                <button>
                <div>
                  <span></span>
                  <a href="path/to/your/file.zip" download>Download</a>
                </div>
              </button>
                
                <div class="app-links">
                    <a href="#"><img src="images/google.png" alt="Get it on Google Play"></a>
                </div>
            </div>
            <div class="image">
                <img src="images/phone.png" alt="App Screenshot">
            </div>
        </section>
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
