<?php

$page = "Home";
require "layout/header.php"

?>
    <!-- home -->
    <section id="home">
      <div class="container">
        <h5>NEW ARRIVALS</h5>
        <h1><span>Best Price</span> This Season</h1>
        <p>world of sounds offers the best for the most affordabable prices</p>
        <button onclick="window.location.href='shop.php'">shop Now</button>
      </div>
    </section>

    <!-- brand -->
    <section id="brand" class="container">
      <div class="row">
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="../images/brand1.png"
          alt=""
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="../images/brand2.png"
          alt=""
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="../images/brand3.png"
          alt=""
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="../images/brand4.png"
          alt=""
        />
      </div>
    </section>
    <!-- featured -->
    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Popular Products</h3>
        <hr class="mx-auto" />
        <p>Here are some of our best-sellers</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div
          onclick="window.location.href='single_product.php'"
          class="product text-center col-lg-3 col0md04 col-sm-12"
        >
          <img class="img-fluid mb-3" src="../images/featured1.png" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">AeroFit Pro</h5>
          <h4 class="p-name">$196.99</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col0md04 col-sm-12">
          <img class="img-fluid mb-3" src="../images/featured2.png" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">JBL Vibe Beam</h5>
          <h4 class="p-name">$99.99</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col0md04 col-sm-12">
          <img class="img-fluid mb-3" src="../images/featured3.png" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Motion Boom Plus</h5>
          <h4 class="p-name">$179.99</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col0md04 col-sm-12">
          <img class="img-fluid mb-3" src="../images/featured4.png" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">HDJ-X7</h5>
          <h4 class="p-name">$85.99</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
      </div>
    </section>

    <!-- banner -->
    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>MID SEASON'S SALE</h4>
        <h1>
          Competitive Offers <br />
          UP to 30% OFF
        </h1>
        <button
          class="text-Uppercase"
          onclick="window.location.href='shop.php'"
        >
          Shop now
        </button>
      </div>
    </section>

    <!-- footer -->

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
