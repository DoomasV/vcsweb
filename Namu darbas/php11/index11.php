<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php if(!isset($_POST['Submit']) && empty($_POST['length']) && empty($_POST['width'])) { ?>
          <form action="" method="POST">
            Input length: <input type="text" name="length">
            Input width: <input type="text" name="width">
            <input type="submit" value="Submit">
          </form>
      <?php } else {
                  echo('Area: '.$area = $_POST['length'] * $_POST['width']);
              };
      ?>
  </body>
</html>
