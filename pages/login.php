<?php

include 'config.php';
$page = "Login";
require "layout/header.php";
session_start();

if(isset($_POST['submit'])){

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

  if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:account.php');
    }else{
      $message[] = 'incorrect password or email!';
  }

}

?>


    <!-- login -->
    <section class="my-5 py-5">
      <div class="container text-center mt3 pt-5">
        <h2 class="form-weight-bold">login</h2>
        <hr class="mx-auto" />
      </div>
      <div class="mx-auto container">


      
        <form id="login-form" action="" method="post">
          <div class="form-groub">
            <label for="">Email</label>
            <input  
              type="email"
              class="form-control"
              id="login-email"
              name="email"
              placeholder="Email"
              required
              class="box"
            />
          </div>
          <div class="form-groub">
            <label for="">Password</label>
            <input    
            type="password"
            class="form-control"
            id="login-password"
            name="password"
            placeholder="Password"
            required
            class="box"
            />
          </div>
          <div class="form-groub">
            <input type="submit" name="submit" class="btn" id="login-btn" value="login" />
          </div>
          <div class="form-groub">
            <a id="register-url" class="btn" href="register.php"
              >dont have account? register</a
            >
          </div>
        </form>

      </div>
    </section>

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <?php
    require "layout/footer.php"
    ?>

