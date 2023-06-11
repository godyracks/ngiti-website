<?php include('includes/header.php');?>
<section class="showcase-area" id="showcase">
            <div class="showcase-container">
                <h1 class="main-title" id="home">OUR PRODUCTS</h1>
                <p>What We Deal in</p>
                <!-- <a href="about.php" class="btn btn-primary">Who We Are</a> -->
            </div>
        </section>

<!-- slider -->
<div class="slider">
  <div class="slides">
    <div class="slide">
      <img src="images/love1.jpg" alt="Slide 1">
      <div class="caption">
        <h3>Hoodies</h3>
        <p>This Cold Season get yourself Hoodies And Jumpers!</p>
      </div>
    </div>
    <div class="slide">
      <img src="images/love2.jpg" alt="Slide 2">
      <div class="caption">
        <h3>Tshirts</h3>
        <p>High Quality Tshirts Printed as you wish!</p>
      </div>
    </div>
    <div class="slide">
      <img src="images/love3.jpg" alt="Slide 3">
      <div class="caption">
        <h3>Badges</h3>
        <p>Get School, Church and Work Badges designed for you today!</p>
      </div>
    </div>
  </div>
  <div class="navigation">
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
  </div>
</div>


<!-- slider ends -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <!-- Dropdown menu for product categories -->
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Product Categories
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="?category=tshirts">T-Shirts</a></li>
          <li><a href="?category=hotwaterbottles">Hot Water Bottles</a></li>
          <li><a href="?category=cakes">Cakes</a></li>
          <li><a href="?category=capsbadges">Caps &amp; Badges</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <!-- Search bar for product name -->
      <form class="form-inline pull-right" method="get">
        <div class="form-group">
          <input type="text" class="form-control" name="search" placeholder="Search Products">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    </div>
  </div>
</div>

<!-- Display products based on selected category or search term -->
<div class="container">
  <?php
    // Connect to MySQL database
    include 'config.php';
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve products from database based on selected category or search term
    if (isset($_GET['category'])) {
      $category = $_GET['category'];

      $sql = "SELECT * FROM products WHERE category='$category'";
    } elseif (isset($_GET['search'])) {
      $search = $_GET['search'];

      $sql = "SELECT * FROM products WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
    } else {
      $sql = "SELECT * FROM products";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // Display products in a table
      echo "<table class='table'>";
      echo "<thead><tr><th>Product Name</th><th>Description</th><th></th><th></th></tr></thead>";
      echo "<tbody>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class='product-image'><img src='images/" . $row['image'] . "' alt='" . $row['name'] . "'></td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
       // echo "<td>KES" . $row['price'] . "</td>";
       // echo "<td><a href='payment.php?product=" . $row['id'] . "'>Buy Now</a></td>";
        echo "</tr>";
      }
      echo "</tbody></table>";
    } else {
      echo "No products found.";
    }

    mysqli_close($conn);
  ?>
</div>



<?php include('includes/footer.php');?>
<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

var prev = document.querySelector(".prev");
var next = document.querySelector(".next");

prev.addEventListener("click", function(){
  plusSlides(-1);
});

next.addEventListener("click", function(){
  plusSlides(1);
});


</script>
