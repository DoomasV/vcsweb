<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php if(!isset($_POST['Submit']) && empty($_POST['name']) && empty($_POST['surname'])) { ?>
          <form action="" method="POST">
            Input name: <input type="text" name="name">
            Input surname: <input type="text" name="surname">
            <input type="submit" value="Submit">
          </form>
      <?php } else {
                  echo('Name: '.$_POST['name'].' '.$_POST['surname']);
              };
      ?>
  </body>
</html>
