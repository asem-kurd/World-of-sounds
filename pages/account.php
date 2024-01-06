<?php

include 'config.php';
$page = "Account";
require "layout/header.php"
   ?>



  <!-- Account -->
  <section class="my-5 py-5">
   <div class="row container mx-auto">
    <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
        <h3 class="font-weight-bold">Account info</h3>
        <hr class="mx-auto">
        <div class="account-info">
            <p>Name <span><?php echo $name ?></span></p>
            <p>Email <span><?php echo $email; ?></span></p>
            <p><a href="catr.php" id="orders-btn">Your Orders</a></p>
            <p><a href="login.php" id="logout-btn">Logout</a></p>

        </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <form id="account-form" >
                <h3>Change Password</h3>
                <hr class="mx-auto">
                <div class="form-group">
                    <label >password</label>
                    <input type="password" class="form-control" id="accoutn-password" name="password" placeholder="password" required>
                </div>
                <div class="form-group">
                    <label >Confirm password</label>
                    <input type="password" class="form-control" id="accoutn-password-confirm" name="confirm password" placeholder="confirm password" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Change Password" class="btn" id="change-pass-btn">
                </div>
            </form>
        </div>

    </div>

</section>



<!-- Orders -->
    <section class="orders container my-5 py-3">
        <div class="container mt-2">
            <h2 class="font-weight-bold text-center">Your orders</h2>
            <hr class="mx-auto">
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>product</th>
                <th>Date</th>
            </tr>
            
            <tr>
                <td>
                    <div class="product-info">
                        <img src="../images/featured1.png" alt="">
                        <div>
                            <p class="mt-3">speker</p>
                        </div>
                    </div>
                </td>
                <td>
                   <span>2023-11-12</span> 

                </td>

              
            </tr>
            
                
                    
            </table>
        </div>

    </section>



  <?php
require "layout/footer.php"
?>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

