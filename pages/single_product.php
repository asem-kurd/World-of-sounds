<?php

$page = "Product";
require "layout/header.php"

?>
<!-- single proudect -->
<section class="container single-product mt-5 pt-5">
    <div class="row mt-5 ">
        <div class="col-lg-5 col-md-6 col-sm-12 ">
            <img class="img-fluid w-100 pb-1" src="../images/featured1.png" alt="" id="mainImg">
            <div class="small-img-groub">
                <div class="small-img-col">
                    <img class="small-img" width="100%" src="../images/featured1.png" alt="">
                </div>
                <div class="small-img-col">
                    <img class="small-img" width="100%" src="../images/featured1.2.png" alt="">
                </div>
                <div class="small-img-col">
                    <img class="small-img" width="100%" src="../images/featured1.3.png" alt="">
                </div>
                <div class="small-img-col">
                    <img class="small-img" width="100%" src="../images/featured1.4.png" alt="">
                </div>
            </div>
        </div>
        

        <div class="col-lg-6 col-md-12 col-sm-12 details">
            <h5 >soundcore headphone</h5>
            <h3 class="py-4">AeroFit Pro</h3>
            <h2>$169.99</h2>
            <input type="number" value="1">
            <button class="buy-btn">Add To cart</button>
            <h3 class="mt-5 mb-3">product details</h3>
            <span >
                These headphones offer air-like comfort with an open-ear design and ultra-soft materials. 
                The snug fit is ensured by flexible ear hooks and a detachable neckband for extra stability.
                 Enjoy robust bass from 16.2mm oversized drivers,
                  coupled with true spatial audio and LDAC technology support for an immersive experience.
                   Additionally, they are IPX5 water-resistant with SweatGuard™️,
                 combining comfort, performance, and durability in one sleek package.
            </span>
        </div>
    </div>
</section>
<!-- related product -->
<section id="related product" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3>related product</h3>
        <hr class="mx-auto">
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col0md04 col-sm-12">
            <img class="img-fluid mb-3" src="../images/featured1.png" alt="">
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
            <img class="img-fluid mb-3" src="../images/featured2.png" alt="">
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
            <img class="img-fluid mb-3" src="../images/featured3.png" alt="">
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
            <img class="img-fluid mb-3" src="../images/featured4.png" alt="">
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

<!-- footer -->
<?php

require "layout/footer.php"

?>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



    <script>
        var mainImg = document.getElementById("mainImg");
        var smallImg = document.getElementsByClassName("small-img");
        for(let i=0 ; i<4 ; i++){
            smallImg[i].onclick = function(){
                mainImg.src = smallImg[i].src;
            }
            
        }
        
    </script>

</body>
</html>