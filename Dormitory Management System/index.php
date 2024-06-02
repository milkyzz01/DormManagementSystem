<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
</head>
<body>
    <header id="header">
        <div class="dormname"><h1>Rivera's Dormitory</h1>
            <ul>
                <li><a href="#header">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="1.php">Sign In</a></li>
            </ul>
        </div>
        
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <section id="home">
        <div class="aboutus">
            <h1>Your Home Away From Home</h1>
            <p>At Rivera's Dormitory, we are comitted to providing simple,
                safe and affordable accomodations to students and young professionals.
            </p>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="container" id="gallery">
    <h1>Gallery</h1>
    <!-- Slider main container -->
    <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="dorm4.jpg"></div>
      <div class="swiper-slide"><img src="dorm5.jpg"></div>
      <div class="swiper-slide"><img src="dorm6.jpg"></div>
      <div class="swiper-slide"><img src="dorm7.jpg"></div>
      <div class="swiper-slide"><img src="dorm8.jpg"></div>
      
    
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    
</section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  <section>
  <div class="aboutus" id="about">
    <h1>About Us</h1>
    <p>
      Rivera's Dormitory offers the best value room for rent
      along batangas city we are located at alangilan, inside 
      the golden country homes subdivision/neptune street. Our
      location is the, we are usually fully occupied so please 
      grab rooms in advance.
      <br>
      <br>
      PRICE RANGE
      <br>
      1 Room Unit - As low as PHP 10, 800
      <br>
      <br>
      AMENITIES <br>
      1. Parking Space<br>
      2. CCTV Coverage<br>
      3. Friendly Staff 
    </p>
  </div>
</section>
  <br>
  <br>
  <br>
  <br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    

<footer>
    <h1>Contact Us</h1>
    <br>
   <div class="footer">
    <img src="10.png" class="one">
    <img src="11.png" class="two">
    <img src="12.png" class="three">
   </div>
   <h4 class="onee"><a href = "https://www.facebook.com/winceton.trivino">Winceton Triviño</a></h4>
   <h4 class="twoo">09952368754</h4>
   <h4 class="threee"><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Finstagram.com%2Fwincee_trvn%3Figshid%3DMzRlODBiNWFlZA%253D%253D%26fbclid%3DIwAR14EU-pkOwMmA34JIIAbTIBBIpGb5AWHX-nd4RGREhDvVKRN-E_fFYNO5Y&h=AT2JISCneV4LUhg39-XWhOnLeXN1T7wfQwhbRvDn9cF8h8tibc7F2-NG6HGyECliV-TDj8fzcgWQZQWA5qSOmaY8J5dkj1EGagO0E3SBemEFWi7GQIru4F__I2B2HFu1He4r8QIEyMTvEHpKPUcB7g">Winceton</a></h4>

</footer>



<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<script>
const swiper = new Swiper('.swiper', {
  autoplay: {
    delay: 3000,
    disableOnInteraction: false, 
  },
loop: true,
pagination: {
    el: '.swiper-pagination',
    clickable:true,
  }, 

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
</script>
</body>
</html>