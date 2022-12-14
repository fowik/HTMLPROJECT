<?php ?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel=”import” href="Nav-Bar.html">
    <script src="jquery.js" defer></script>
    <title>Главная</title>
</head>
<body>
  <div class="wrapper">
    <?php include 'views/Nav-Bar.html'?>
    
    <div class="main"> 
        <section class="section-one">
          <div class="section-div-center">
            <h4 class="h4-div-section-one">Few words about myself</h4>
            <h2 class="h2-div-section-one">Who am I?</h2>
            <p class="par-animation">Hello! My name is Rimsha Ilya. I am a third year student of the profession of a programmer in RVT.</p>
          </div>

          <div class="div-flex">
            <div>
                <div class="img-scale-animation">
                  <img class="img-scale" src="images/image.png" alt="Me">
                </div>
                <div class="div-portfolio">
                  <div class="a-div-portfolio">
                      <a>I am very glad to see you here!</a>
                  </div>
                  <div class="div-center">
                    <a class="a-button" target="_blank" href="https://github.com/fowik">Watch portfolio</a>
                  </div>
                  <div class="div-links">
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100036972453921" title="facebook"><img src="images/fb.png"  width="35" height="35"></a>
                    <a target="_blank" href="https://twitter.com/fow1ki" title="twitter"><img src="images/twitter-icon-18-256.png" width="35" height="35"></a>
                    <a target="_blank" href="https://www.instagram.com/fow1k/" title="instagram"><img src="images/instagram-icon-white-png-1.png" width="35" height="35"></a>
                  </div>
                </div>
            </div>
          </div>
        </section>

        <section class="section-two">
          <div class="container">
            <img class="section-two-div-img-scale" src="images/e-background.png" alt="">
            <div class="centered">
              <div class="h2-text">
                <h2>My adventure</h2>
              </div>
              <div class="p-text">
                <p>By clicking the button you will be sent to the site where you can watch a video with my participation.</p> 
              </div>
              <div class="a-div">
                <a class="a-button-two">Click me</a>
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php include 'views/Footer.html'?>

  </div>

</body>
</html>