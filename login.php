<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, user!</title>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-5">Hello, user! Login now</h1>
      <br><a class="register" href="register.php">Register now</a>

      <form action="vendor/authorize_user.php" method="post">
        <div class="mb-3">
          <label for="login" class="form-label">Login</label>
          <input name="login" id="login" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
    <script src="scripts/bootstrap.bundle.min.js"></script>
  </body>
</html>