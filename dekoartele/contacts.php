
<?php
  require __DIR__ . '/app/src/app.php';
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <title>Dekoartele</title>
      <style media="screen">
      @media only screen and (max-width:600px) {
        .parallax-container {
          height: 1400px;
        }
        main {
          margin-top: 100px;
        }
      }

      @media only screen and (min-width:601px) {
        .parallax-container {
          height: 1430px;
        }
        main {
          margin-top: 130px;
        }
      }

      @media only screen and (min-width:993px) {
        .parallax-container {
          height: 1300px;
        }
        main {
          margin-top: 150px;
        }
      }
      </style>
    </head>

    <body>
      <div class="parallax-container">
        <div class="parallax"><img src="images/parallax-sm.jpg"></div>
        <nav class="navTop purple lighten-5">
          <div class="nav-wrapper purple lighten-2">
            <a href="index.html" class="brand-logo"> <img src="images/logo1.jpg" alt=""> </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="index.html">Pagrindinis</a></li>
              <li><a href="gallery.html">Galerija</a></li>
              <li><a href="contacts.php">Kontaktai</a></li>
            </ul>
          </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
          <li><a href="index.html">Pagrindinis</a></li>
          <li><a href="gallery.html">Galerija</a></li>
          <li><a href="contacts.php">Kontaktai</a></li>
        </ul>

        <main>
          <div class="section purple lighten-5">
            <div class="container">
              <h3 class="h5-font">Kontaktai</h3>
              <p>Norėdami sužinoti daugiau informacijos skambinkite telefonu arba parašykite mums žinutę:</p>
            </div>

            <div class="container container-submit">
              <form id="contact" action="" method="post">

                <label for="fname">Vardas</label>
                <input type="text" id="fname" name="vardas" placeholder="Įrašykite savo vardą" required autofocus>

                <label for="email">El. paštas</label>
                <input type="email" id="email" name="email" placeholder="Įrašykite savo el. pašto adresą" required>

                <label for="message">Tekstas</label>
                <textarea id="message" name="message" placeholder="" style="height:150px" required></textarea>

                <input name="submit" type="submit" value="Siųsti" class="purple lighten-2">

              </form>
            </div>
          </div>
        </main>

        <footer class="page-footer purple lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2300.617671631844!2d24.677696416080572!3d54.78668738030604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e766df9da0cdc3%3A0x6d6b53d1f0eca585!2sPergal%C4%97s+g.+49%2C+Elektr%C4%97nai+26125!5e0!3m2!1slt!2slt!4v1542651834779" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>

              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Menu</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.html">Pagrindinis</a></li>
                  <li><a class="grey-text text-lighten-3" href="gallery.html">Galerija</a></li>
                </ul>
              </div>

              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Kontaktai</h5>
                <p class="grey-text text-lighten-4">
                  <ul>
                    <li>Tel.: +370 614 04142</li>
                    <li>Arba atsiūskite mums <a href="contacts.php" style="color:#ffcdd2;">žinutę</a></li>
                  </ul>
                </p>
              </div>

            </div>
          </div>

          <div class="footer-copyright">
            <div class="container">
            Website by DomVai
            </div>
          </div>

        </footer>
      </div>

      <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.sidenav').sidenav();
          $('.parallax').parallax();
          });
      </script>
    </body>
  </html>
