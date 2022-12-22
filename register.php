<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-5">Register</h1>

      <form action="vendor/create_user.php" method="post">
        <div class="mb-3">
          <label for="login" class="form-label">Login</label>
          <input name="login" id="login" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="mb-3">
          <label for="inputPassword5" class="form-label">Password</label>
          <input name="password" type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
          <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
    

    <script src="scripts/bootstrap.bundle.min.js"></script>
  </body>
</html>