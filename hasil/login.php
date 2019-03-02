
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
<?php include '../modul/css.php' ?>
  </head>
  <body>
    <br>
    <br>
    <div class="card col-lg-4 offset-4">
<br>
<div class="card-body"><form method="POST" action="../modul/crud.php">
    <fieldset>
        <div class="form-group">
            <input class="form-control" required placeholder="Email" name="email" type="text" autofocus>
        </div>
        <div class="form-group">
            <input class="form-control" required placeholder="Password" name="password" type="password" value="">
        </div>
        <div class="checkbox">
            <label>
                <input name="remember" type="checkbox" value="Remember Me">Remember Me
            </label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary" name="login">Login</button>
        </div>
    </fieldset>
</form></div>

</div>


    <?php include '../modul/javascript.php' ?>
  </body>
</html>
