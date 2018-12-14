
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
      @media only screen and (max-width:320px) {
        iframe {
          width: 300px;
        }
      }
      @media only screen and (max-width:600px) {
        .parallax-container {
          height: 1400px;
        }
        main {
          margin-top: 50px;
        }
      }
      @media only screen and (min-width:601px) {
        .parallax-container {
          height: 1430px;
        }
        main {
          margin-top: 50px;
        }
      }
      @media only screen and (min-width:993px) {
        .parallax-container {
          height: 1300px;
        }
        main {
          margin-top: 50px;
        }
      }
      </style>
    </head>

    <body>
      <div class="parallax-container">
        <div class="parallax"><img src="images/parallax-sm.jpg"></div>
        <!-- Menu navigacija -->
        <div class="container-nav">

          <nav>
            <div class="nav-wrapper brown darken-4">
              <a href="index.html" class="brand-logo"> <img class="circle" src="images/dlogo.png" alt=""> </a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="index.html">Pagrindinis</a></li>
                <li><a href="gallery.html">Galerija</a></li>
                <li><a href="contacts.php">Kontaktai</a></li>
              </ul>
            </div>
          </nav>
          <!-- Navigacija maziems ekranams -->
          <ul class="sidenav" id="mobile-demo">
            <li><a href="index.html">Pagrindinis</a></li>
            <li><a href="gallery.html">Galerija</a></li>
            <li><a href="contacts.php">Kontaktai</a></li>
          </ul>

        </div>

        <main>
          <div class="section">
            <div class="container-main brown lighten-4">

              <h5 class="h5-font">Kontaktai</h5>
              <p style="padding: 20px;">Norėdami sužinoti daugiau informacijos skambinkite telefonu <a href="tel: +370 614 04142">+370 614 04142</a> arba parašykite mums žinutę užpildę žemiau esančią formą.<br>Turėdami klausimų apie konkrečią atvirutę ar dėžutę, nurodykite jos numerį iš galerijos.</p>


              <div class=" container-submit">
                <!-- Kontaktine forma -->
                <form id="contact" action="" method="post">

                  <label for="fname">Vardas</label>
                  <input type="text" id="fname" name="vardas" value="<?php echo isset($_POST["vardas"]) ? $_POST["vardas"] : ''; ?>" placeholder="Įrašykite savo vardą" required autofocus>

                  <label for="email">El. paštas</label>
                  <input type="email" id="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" placeholder="Įrašykite savo el. pašto adresą" required>

                  <label for="message">Tekstas</label>
                  <textarea id="message" name="message" value="<?php echo isset($_POST["message"]) ? $_POST["message"] : ''; ?>" placeholder="" style="height:150px" required></textarea>

                  <p>
                    <label for="agree">
                      <input type="checkbox" name="check" id="agree" style="z-index:10;">
                      <span>Pažymėdami varnelę sutinkate, jog naudosime jūsų vardą ir el. pašto adresą, kad galėtume su jumis susisiekti.</span>
                    </label>
                  </p>

                  <input name="submit" type="submit" value="Siųsti" class="brown lighten-2">

                </form>
              </div>

            </div>
          </div>
        </main>
        <!-- Kontaktu menu juosta -->
        <footer class="page-footer">
          <div class="container-footer brown darken-3">

            <div class="row">

              <div class="col l6 s12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2300.617671631844!2d24.677696416080572!3d54.78668738030604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e766df9da0cdc3%3A0x6d6b53d1f0eca585!2sPergal%C4%97s+g.+49%2C+Elektr%C4%97nai+26125!5e0!3m2!1slt!2slt!4v1542651834779" width="350" height="250" frameborder="0" style="border:0; padding:30px;" allowfullscreen></iframe>
              </div>

              <div class="col l4 offset-l2 s12 footer-menu">
                <h5 class="white-text">Menu</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.html">Pagrindinis</a></li>
                  <li><a class="grey-text text-lighten-3" href="gallery.html">Galerija</a></li>
                </ul>
              </div>

              <div class="col l4 offset-l2 s12 footer-menu">
                <h5 class="white-text">Kontaktai</h5>
                <p class="grey-text text-lighten-4">
                  <ul>
                    <li>Tel.: <a href="tel: +370 614 04142" class="link-color">+370 614 04142</a></li>
                    <li>Arba atsiūskite mums <a href="contacts.php" style="color:#ffcdd2;">žinutę</a></li>
                  </ul>
                </p>
              </div>

            </div>

            <div class="footer-copyright brown darken-4">
              <div class="container-footer">
              <p>Website by <a href="mailto:vaisvis@gmail.com" class="link-color">Dominykas</a></p>
              </div>
            </div>

          </div>
        </footer>
      </div>

      <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.sidenav').sidenav();
          $('.parallax').parallax();
          });
      </script>
    </body>
  </html>
