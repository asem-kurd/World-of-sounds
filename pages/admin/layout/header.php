
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page?></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-..."
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../../../css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top py-3">
      <div class="container">
        <a href="../../index.php">
          <img class="logo" src="../../../images/logo.png" alt="" />
        </a>
        <a href="../../index.php">
          <h2 class="brand">world of sounds</h2>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse nav-buttons"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../contact.php">Contact Us</a>
            </li>

            <li class="nav-item">
              <a href="../../cart.php"
                ><i class="fa-solid fa-cart-shopping icon"></i
              ></a>
              <a href="../../account.php"><i class="fa-regular fa-user icon"></i></a>
              <a href="../../register.php"
                ><i class="fa-regular fa-user icon"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </html>