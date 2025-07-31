<?php
require 'dbconnect.php';
require 'navbar.php';

// Start the session
session_start();

// Search query
$search = isset($_GET['search']) ? $_GET['search'] : '';
$priceFilter = isset($_GET['priceFilter']) ? $_GET['priceFilter'] : 'all';
$categoryFilter = isset($_GET['categoryFilter']) ? $_GET['categoryFilter'] : 'all';

// SQL query to include both price and category filters
$sql = "SELECT * FROM cards WHERE title LIKE '%$search%'";

// Add category filter if it's not 'all'
if ($categoryFilter != 'all') {
    // Add WHERE clause
    $sql .= " AND category = '$categoryFilter'";
}

// Add price filter if it's not 'all'
if ($priceFilter == 'low_to_high') {
    $sql .= " ORDER BY price ASC";
} elseif ($priceFilter == 'high_to_low') {
    $sql .= " ORDER BY price DESC";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="shortcut icon" href="./img/clogo.png" type="image/x-icon">
</head>

<body>
    <div class="d-flex flex-wrap">
<!-- Filter Form on the Left Side -->
<div class="col-md-3 mt-3">
    <div class="card bg-light sticky-top" style="top: 20px;">
        <div class="card-body">
            <h5 class="card-title">Filters</h5>
            <hr>
            <form method="GET" action="allproducts.php">
                <!-- Price filter options -->
                <div class="mb-3">
                    <h6 class="mb-3">Price Range</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="priceFilter" id="priceAll" value="all" <?php if ($priceFilter == 'all') echo 'checked'; ?>>
                        <label class="form-check-label" for="priceAll">All</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="priceFilter" id="priceLowToHigh" value="low_to_high" <?php if ($priceFilter == 'low_to_high') echo 'checked'; ?>>
                        <label class="form-check-label" for="priceLowToHigh">Low to High</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="priceFilter" id="priceHighToLow" value="high_to_low" <?php if ($priceFilter == 'high_to_low') echo 'checked'; ?>>
                        <label class="form-check-label" for="priceHighToLow">High to Low</label>
                    </div>
                </div>
                <!-- Category filter options -->
                <div class="mb-3">
                    <h6 class="mb-3">Category</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="categoryFilter" id="categoryAll" value="all" <?php if ($categoryFilter == 'all') echo 'checked'; ?>>
                        <label class="form-check-label" for="categoryAll">All</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="categoryFilter" id="categoryDog" value="dog" <?php if ($categoryFilter == 'dog') echo 'checked'; ?>>
                        <label class="form-check-label" for="categoryDog">Dog</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="categoryFilter" id="categoryCat" value="cat" <?php if ($categoryFilter == 'cat') echo 'checked'; ?>>
                        <label class="form-check-label" for="categoryCat">Cat</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="categoryFilter" id="categoryFish" value="Fish" <?php if ($categoryFilter == 'Fish') echo 'checked'; ?>>
                        <label class="form-check-label" for="categoryCat">Fish</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="categoryFilter" id="categoryBirds" value="Birds" <?php if ($categoryFilter == 'Birds') echo 'checked'; ?>>
                        <label class="form-check-label" for="categoryCat">Birds</label>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Apply Filters</button>
            </form>
        </div>
    </div>
</div>


        <!-- End Filter Form on the Left Side -->

        <!-- Product Display -->
        <div class="col-md-9">
            <div class="container py-5 d-flex flex-wrap">
                <div class="row">
                    <section class=" mt-3" id="allproducts" style="background-color: #ffffff;">
                        <div class="container py-5 d-flex flex-wrap">
                            <div class="row">
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-3 mt-3" style="margin-left:30px;margin-right:30px">
                                            <div class="card trends" id="card">
                                                <img src="images/<?php echo $row['img']; ?>" class="card-img-top" alt="error" />
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="medium"><b><a href="#!" class="text-muted" id="tr"><?php echo $row['title']; ?></a></b></p>
                                                        <p class="small"><?php echo 'Rs ' . $row['price']; ?></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <a href="product.php?product_id=<?php echo $row['pid']; ?>" class="btn btn-dark buy-now" id="tr">Buy Now</a>
                                                        <p class="small" style="margin-left:5rem"><strong><?php echo 'Category:' . $row['category']; ?></strong></p>
                                                        <div class="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                </div>
            </div>
        </div>
        <!-- End Product Display -->
    </div>
    <!-- footer -->
    <?php require 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
