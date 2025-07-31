<?php require 'dbconnect.php';
// Start the session
session_start();
?>

<head>
  <title>HOME |ANIMAL PLANET</title>
</head>
<?php require 'header.php' ?>
<?php require 'navbar.php' ?>

<body>
  <!-- header -->

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/slide1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/slide2.jpg" class="d-block w-100" height=550 alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/slide3.jpg" class="d-block w-100" height=550 alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 




  <!-- brans section -->

  <!-- <div class="row m-1 mb-4">
    <div class="col">
      <div class="card" style="width: 300px;">
        <img src="./img/puma.webp" class="card-img-top" alt="..." />
      </div>
    </div>
 -->
    <div class="container py-5 d-flex flex-wrap">
      <div class="row">
        <?php

        // Search query
        $search = isset($_GET['search']) ? $_GET['search'] : '';

        // Query to include the search filter
        $sql = "SELECT * FROM cards WHERE title LIKE '%$search%'";
        $sql = "SELECT * FROM cards LIMIT 8";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-5 mt-3">
              <a href="product.php?product_id=<?php echo $row['pid']; ?>">
                <div class="card trends" id="card">
                  <img src="images/<?php echo $row['img']; ?>" class="card-img-top" alt="error" />
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <p class="medium"><b><a href="#!" class="text-muted" id="tr"><?php echo $row['title']; ?></a></b></p>
                      <p class="small"><?php echo 'Rs ' . $row['price']; ?></p>
                      <!-- <p class="small"><?php echo 'Pid ' . $row['pid']; ?></p> -->
                    </div>
                    <div class="d-flex justify-content-between align-items-center">

                      <form method="POST" action="add_to_cart.php?product_id=<?php echo $productID; ?>">
                        <input type="hidden" name="product_id" value=" <?php echo $product_id; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $product['title']; ?>">
                        <input type="hidden" name="description" value="<?php echo $product['descr']; ?>">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="category" value="<?php echo $product['category']; ?>">
                        <input type="hidden" name="size" value="Small"> <!-- Set the default size as needed -->
                        <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                        <!-- Add the 'img' input field here -->
                        <input type="hidden" name="img" value="<?php echo $product['img']; ?>">
                      </form>
                      <!-- <div class="icon">
                      <i class="fas fa-shopping-cart m-1 "><a href="./card.php"><img src="./img/cart.png" alt="" style="width:1rem;"></i></a> Shopping cart icon 
                      <i class="far m-1"><img src="./img/heart.png" alt="" style="width:1rem;"></i> 
                    </div> -->
                    </div>
                  </div>
                </div>
              </a>
            </div>
        <?php
          }
        } else {
          echo "No item found.";
        }
        ?>

      </div>
    </div>
  </section>




  <!-- Footer -->
  <?php require 'footer.php'; ?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




  <script>
    document.getElementById('search-form').addEventListener('submit', function(e) {
      e.preventDefault(); // Prevent form submission
      const searchValue = document.getElementById('search-input').value.toUpperCase();
      const cards = document.querySelectorAll('.card.trends');

      cards.forEach(card => {
        const title = card.querySelector('.text-muted').textContent.toUpperCase();
        if (title.includes(searchValue)) {
          card.style.display = ''; // Show the card
        } else {
          card.style.display = 'none'; // Hide the card
        }
      });
    });
  </script>


<!-- Add this script at the end of your HTML body -->
<script>
  // Function to perform live search
  function liveSearch() {
    const searchValue = document.getElementById('search-input').value.toUpperCase();
    const cards = document.querySelectorAll('.card.trends');

    cards.forEach(card => {
      const title = card.querySelector('.text-muted').textContent.toUpperCase();
      if (title.includes(searchValue)) {
        card.style.display = ''; // Show the card
      } else {
        card.style.display = 'none'; // Hide the card
      }
    });
  }

  // Add event listener to the search input field
  document.getElementById('search-input').addEventListener('input', liveSearch);
</script>

</body>

</html>