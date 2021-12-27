<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Sign Up</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <style>
      body {
        font: 14px sans-serif;
      }
      .wrapper {
        width: 360px;
        padding: 20px;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <h2>Sign Up</h2>
      <p>Please fill this form to create an account.</p>
      <form action="insertusers.php" method="post" name="form" onsubmit="return check()">
        <div class="form-group">
          <label for="username">Username</label>
          <input
            type="text"
            name="username"
            id="username"
            class="form-control"
            required
          />
          <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            name="password"
            class="form-control"
            value=""
            id="password"
            required
          />
          <span class="invalid-feedback"></span>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="submit" />
          <input type="reset" class="btn btn-secondary ml-2" value="Reset" />
        </div>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
      </form>
    </div>
    <script src="./register.js"></script>
  </body>
</html>