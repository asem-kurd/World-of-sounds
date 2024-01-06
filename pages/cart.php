<?php

$page = "Cart";
require "layout/header.php"

?>

    <!-- cart -->
    <section class="cart container my-5 py-5">
      <div class="container mt-5">
        <h2 class="font-weight-bolde">Your cart</h2>
        <hr />
      </div>

      <table class="mt-5 pt-5">
        <tr>
          <th>product</th>
          <th>Quantitiy</th>
          <th>subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="product-info">
              <img src="../images/featured1.png" alt="" />
              <div>
                <p>speker</p>
                <small><span>$</span>169</small>
                <br />
                <a class="remove-btn" href="#">remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" value="1" />
            <a class="edit-btn" href="">edit</a>
          </td>

          <td>
            <span>$</span>
            <span class="product-price">169</span>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-info">
              <img src="../images/featured1.png" alt="" />
              <div>
                <p>speker</p>
                <small><span>$</span>169</small>
                <br />
                <a class="remove-btn" href="#">remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" value="1" />
            <a class="edit-btn" href="">edit</a>
          </td>

          <td>
            <span>$</span>
            <span class="product-price">169</span>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-info">
              <img src="../images/featured1.png" alt="" />
              <div>
                <p>speker</p>
                <small><span>$</span>169</small>
                <br />
                <a class="remove-btn" href="#">remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" value="1" />
            <a class="edit-btn" href="">edit</a>
          </td>

          <td>
            <span>$</span>
            <span class="product-price">169</span>
          </td>
        </tr>
      </table>
      <div class="cart-total">
        <table>
          <tr>
            <td>subtotal</td>
            <td>$169</td>
          </tr>
          <tr>
            <td>total</td>
            <td>$196</td>
          </tr>
        </table>
      </div>

      <div class="checkout-container">
        <button class="btn checkout-btn">Checkout</button>
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
