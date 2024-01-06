<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}


$page = "Register";
require "layout/header.php"


?>


    <!-- register -->



    <section class="my-5 py-5">
      <div class="container text-center mt3 pt-5">
        <h2 class="form-weight-bold">register</h2>
        <hr class="mx-auto" />
      </div>
      <div class="mx-auto container">



        <form id="register-form" method="post">
          <div class="form-groub">
            <label for="">name</label>
            <input
            type="text"
            class="form-control"
            name="name"  
            placeholder="Name"
            required
            class="box"
            />
          </div>
          <div class="form-groub">
            <label for="">Email</label>
            <input
              type="email"                 
              class="form-control"
              name="email"
              placeholder="Email"
              required 
              id="register-email"
              class="box"
            />
          </div>
          <div class="form-groub">
            <label for="">Password</label>
            <input 
              type="password" 
              name="password" 
              required 
              class="form-control"
              id="register-password"              
              placeholder="Password"              
              class="box"
            />
          </div>
          <div class="form-groub">
            <label for="">Confirm Password</label>
            <input 
              type="password" 
              name="cpassword"   
              class="form-control"
              id="register-confirm-password"              
              placeholder="confirm-Password"
              required
              class="box"              
            />
          </div>
          <div class="form-groub">
            <input  
              type="submit"
              name="submit"
              class="btn"
              id="register-btn"
              value="register"
            />
          </div>
          <div class="form-groub">
            <a id="login-url" class="btn" href="login.php"
              >do You have an account? login</a
            >
          </div>
        </form>



      </div>
    </section>







    <?php

require "layout/footer.php"

?>
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

