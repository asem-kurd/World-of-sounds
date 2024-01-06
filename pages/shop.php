<?php

$page = "Shop";
require "layout/header.php"

?>

    <!-- featured -->
    <section id="featured" class="my-5 py-5">
      <div class="container mt-5 py-5">
        <h3>Our Products</h3>
        <hr />
        <p>Here are some of our products</p>
      </div>
      <div class="row mx-auto container">
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
          <h4 class="p-name">$169.99</h4>
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
        <div class="product text-center col-lg-3 col0md04 col-sm-12">
          <img class="img-fluid mb-3" src="../images/featured5.png" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">VR P10</h5>
          <h4 class="p-name">$79.99</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col0md04 col-sm-12">
          <img class="img-fluid mb-3" src="../images/featured6.png" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">NS7 Wireless</h5>
          <h4 class="p-name">$249.99</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col0md04 col-sm-12">
          <img class="img-fluid mb-3" src="../images/featured7.png" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">JBL Go 3</h5>
          <h4 class="p-name">$69.99</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col0md04 col-sm-12">
          <img class="img-fluid mb-3" src="../images/featured8.png" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">XPRS 10</h5>
          <h4 class="p-name">$189.99</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
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
  </body>
</html>
