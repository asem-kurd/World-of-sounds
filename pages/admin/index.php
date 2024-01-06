
<body>
<link href="index.css" rel="stylesheet">
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Admin page</h2>
                <img src="../../images/logo.png" alt="logo" width="250px">
                <input type="text" name='name' placeholder="Product name">
                <br>
                <input type="text" name='price' placeholder="Product price">
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">Select image</label>
                <button name='upload'>Post product✅</button>
                <br><br>
                <a href="products.php">View Products</a>
            </form>
        </div>
        
    </center>
</body>
