<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

<!-- swiper css link  -->
<link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>




<!-- font awesome cdn link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 <!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts   --> 
<section class="header">
    <a href="home.php" class="logo">travel</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>

    </nav>

<div id="menu-btn" class="fas fa-bars"></div>


</section>
<!-- header section ends   -->


<!-- home section starts  -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Travel Around the World</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Discover the new place</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Make your tour around the worldwide</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
        </div>
           <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- home section ends  -->

<!-- services section starts  -->
<section class="services">
    <h1 class="heading-title">Our services</h1>

    <div class="box-container">

        <div class="box">
            <img src="">
            <h3>adventures</h3>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>tour guides</h3>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>trekking</h3>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>camp fires</h3>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>off roading</h3>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>
<!-- services section ends  -->

<!-- hoome about section starts  -->
<section class="home-about">
    <div class="image">
        <img src="images/bg-img-1.jpg" alt="">
    </div>
    <div class="content">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse eos debitis laborum porro dolore ad quam ab quisquam? 
            Nobis debitis laboriosam ducimus odit provident sapiente consequatur excepturi enim ullam quasi?</p>
        <a href="about.php" class="btn">Read More</a>
    </div>
</section>
<!-- home about section ends  -->
<!-- hoome Package section starts  -->
<section class="home-packages">
    <h1 class="heading-title"> Our Packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
            <img src="images/img-1.jpg" alt="">
            </div>          
            <div class="content">
                <h3>adventure & tour</h3>
                <p>About package</p>
                <a href="book.php" class="btn"> Book Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
            <img src="images/img-1.jpg" alt="">
            </div>          
            <div class="content">
                <h3>adventure & tour</h3>
                <p>About package</p>
                <a href="book.php" class="btn"> Book Now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
</section>
<!-- home Package section ends  -->

<!-- home offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>Upto 50% off</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
             Exercitationem doloribus repellendus aliquam voluptatem repellat iure, accusamus iste nisi est et.</p>
             <a href="book.php" class="btn"> Book Now</a>
    </div>
</section>
<!-- home offer section ends -->


<!-- footer section starts  -->
<section class="footer">

<div class="box-container">

<div class="box">
    <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
</div>

<div class="box">
    <h3>Extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Privacy Polict</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Terms and use</a>

</div>
<div class="box">
    <h3>Contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> 123456789</a>
        <a href="#"> <i class="fas fa-phone"></i> 123456789</a>
        <a href="#"> <i class="fas fa-envelope"></i> abc@gmail.coom</a>
        <a href="#"> <i class="fas fa-map"></i> Jaipur,India</a>
</div>
<div class="box">
    <h3>follow us</h3>
    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>



</div>

</div>

<div class="credit">Created By <span>Pratyush Kedia</span> Thank You</div>

</section>
<!-- footer section ends  -->


<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


  <!-- custom js file link  -->
<script src="js/script.js"></script>



</body>
</html>