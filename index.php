<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Blueasy</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>



  <header>
    <nav>
      <div class="wrapper">
        <h1>BLU<span>E</span>ASY</h1>
        <div class="nav-links">
          <a href="#">HOME</a>
          <a href="#">SERVICES</a>
          <a href="#">TESTIMONIALS</a>
          <a href="#">CONTACT</a>
        </div>
      </div>
    </nav>
    <div class="hero">
      <h2>"I'm looking for the unexpected.<br>I'm looking for things i've never seen before."</h2>
    </div>
  </header>



  <div class="section-service">
    <div class="wrapper">
      <h3><span>SER</span>VICES</h3>
      <div class="services">
        <div class="service">
          <img src="img/Icon_coffee.png" alt="coffee-icon" class="icon">
          <h4>Coffee</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate explicabo maiores eos? Exercitationem est porro ad odit nihil architecto ipsum, eveniet asperiores ipsam officiis, nobis laborum numquam, non voluptatem optio!</p>
        </div>
        <div class="service">
          <img src="img/Icon_instant.png" alt="instant" class="icon">
          <h4>Instant</h4>
          <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reiciendis nemo aut eos tenetur porro illum tempora aspernatur quasi veniam incidunt accusamus fugit aperiam illo recusandae ipsam soluta, eveniet expedita.</p>
        </div>
        <div class="service">
          <img src="img/Icon_serious.png" alt="icon" class="icon">
          <h4>Serious</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ipsa aliquam voluptatibus ea, quia dolorum neque dicta accusantium mollitia corporis consequatur ipsam, ut numquam doloribus? Ex, ad reiciendis deserunt sequi.</p>
        </div>
        <div class="service">
          <img src="img/Icon_frame.png" alt="frame" class="icon">
          <h4>Frame</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla reiciendis quo sit cumque optio dicta. Velit perspiciatis tempore mollitia libero dolorem placeat repellendus maxime officiis cum a non fuga, quam.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section-testimonials">
    <div class="wrapper">
      <h3><span>TES</span>TIMONIALS</h3>
      <p class="quote-sign">"</p>
      <div class="quote">
        <p class="quote-text">
          <?php
            echo( file_get_contents("doc/testimonial_citaat.txt"))
          ?>
        </p>
        <p class="quote-name">- Walter White</p>
      </div>
    </div>
  </div>

  <div class="section-contact">
    <div class="wrapper">
      <h3><span>CO</span>NTACT</h3>
      <form> <!-- Rode lijn -->
        <div class="form-flex"> <!-- Blauwe lijn -->
          <div class="form-flex-box"> <!-- Zwarte lijn -->
            <label>Full name</label>
            <div class="fake-input"></div>
            <label>Email</label>
            <div class="fake-input"></div>
          </div>
          <div class="form-flex-box address"> <!-- Zwarte lijn -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quo deserunt reprehenderit dolorum.</p>
            <p>Linda Newman<br/>W325 State Road 123<br/>Mondovi......</p>
          </div>
        </div>
        <label>Message</label>
        <textarea></textarea>
        <div class="fake-button">Message</div>
      </form>
    </div>
  </div>




  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
