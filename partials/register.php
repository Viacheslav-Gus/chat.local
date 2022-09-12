<?php
  include "partials/header.php";

    if(!empty($_POST)) 
  { 
    echo $_POST['name'] . " - " . $_POST['email'];
    echo "<br>";

    $sql = "INSERT INTO users (username, email, password) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "');";
    
  if (mysqli_query($conn, $sql)) 
    {
          echo "INSERT" . "<br>";
          header("Location: /");

    } 
  else 
    {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   mysqli_close($conn);  
  }
?>

<div class="container">
            <main class="form-signin w-100 m-auto">
              <form action="#" method="POST">
                <img class="mb-4" src="/img/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Register</h1>
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Ivan Ivanov">
                  <label for="floatingInput">User name</label>
                </div>
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">©Viacheslav.Gus 2022</p>
              </form>
            </main>
</div>

<?php
  include "partials/footer.php"
?>
