<?php

$page = "Check Out";
require "layout/header.php"

?>

    <section class="my-5 py-5">
      <div class="container text-center mt3 pt-5">
        <h2 class="form-weight-bold">Check Out</h2>
        <hr class="mx-auto" />
      </div>
      <div class="mx-auto container">
        <form id="checkout-form">
          <div class="form-groub checkout-small-element">
            <label for="">name</label>
            <input
              type="text"
              class="form-control"
              id="checkout-name"
              name="name"
              placeholder="name"
              required
            />
          </div>
          <div class="form-groub checkout-small-element">
            <label for="">Email</label>
            <input
              type="text"
              class="form-control"
              id="checkout-email"
              name="email"
              placeholder="Email"
              required
            />
          </div>
          <div class="form-groub checkout-small-element">
            <label for="">Phone</label>
            <input
              type="tel"
              class="form-control"
              id="checkout-phone"
              name="phone"
              placeholder="Phone"
              required
            />
          </div>
          <div class="form-groub checkout-small-element">
            <label for="">City</label>
            <input
              type="text"
              class="form-control"
              id="checkout-city"
              name="city"
              placeholder="City"
              required
            />
          </div>
          <div class="form-groub checkout-large-element">
            <label for="">Address</label>
            <input
              type="text"
              class="form-control"
              id="checkout-address"
              name="Address"
              placeholder="Address"
              required
            />
          </div>
          <div class="form-groub checkout-btn-container">
            <input
              type="submit"
              class="btn"
              id="checkout-btn"
              value="Checkout"
            />
          </div>
        </form>
      </div>
    </section>

    <!-- footer -->
    <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <img class="logo" src="../images/logo.png" alt="" />
          <p class="pt-3">
            world of sounds offers the best for the most affordabable prices
          </p>
        </div>
        <div class="footer-one col-lg-4 col-md-6 col-sm-12">
          <h5 class="pb-2">Contuct US</h5>
          <div>
            <h6 class="text-uppercase">Phone</h6>
            <p>213 802 0544</p>
          </div>
          <div>
            <h6 class="text-uppercase">Email</h6>
            <p>info@gmsil.com</p>
          </div>
        </div>

        <div class="footer-one col-lg-4 col-md-6 col-sm-12">
          <h5 class="pb-2">instagram</h5>
          <div class="row">
            <img
              class="img-fluid w-25 h-100 m-2"
              src="../images/featured1.png"
              alt=""
            />
            <img
              class="img-fluid w-25 h-100 m-2"
              src="../images/featured2.png"
              alt=""
            />
            <img
              class="img-fluid w-25 h-100 m-2"
              src="../images/featured3.png"
              alt=""
            />
            <img
              class="img-fluid w-25 h-100 m-2"
              src="../images/featured4.png"
              alt=""
            />
            <img
              class="img-fluid w-25 h-100 m-2"
              src="../images/featured5.png"
              alt=""
            />
          </div>
        </div>
      </div>

      <div class="copyright mt-5">
        <div class="row container mx-auto">
          <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <img src="../images/payment.png" alt="" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-4 text-nowrap mb-2">
            <p>eCommerce @ 2023 all Right reserved</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </footer>

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
  </body>
</html>
