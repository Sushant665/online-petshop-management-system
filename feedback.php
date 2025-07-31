<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6uZ6D2EHIv3E6fDTo5GIbB2lFOqLv06H"
        crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  
    <title>Your Online Store</title>
    <?php require'navbar.php'; ?>
    <!-- Add your custom styles here -->
    <style>
        /* Add your custom styles here */
        body {
            padding: 20px;
        }

        .feedback-form {
            max-width: 600px;
            margin: 0 auto;
        }

        /* Add more custom styles as needed */
    </style>
</head>

<body>

    <div class="container feedback-form">
        <h2 class="mt-5 mb-2">Customer Feedback</h2>

        <form>
            <!-- How Was Your Shopping Experience? -->
            <div class="form-group">
                <label for="shoppingExperience">How was your shopping experience?</label>
                <select class="form-control" id="shoppingExperience">
                    <option>Excellent</option>
                    <option>Good</option>
                    <option>Poor</option>
                </select>
            </div>

            <!-- Product Reviews -->
            <h4 class="mt-4 mb-4">Product Reviews</h4>

            <div class="form-group">
                <label for="productQuality">How would you rate the quality of the product?</label>
                <select class="form-control" id="productQuality">
                    <option>Excellent</option>
                    <option>Good</option>
                    <option>Poor</option>
                </select>
            </div>

            <!-- Customer Service -->
            <h4 class="mt-4 mb-4">Customer Service</h4>

            <div class="form-group">
                <label for="customerService">How satisfied are you with our customer service?</label>
                <select class="form-control" id="customerService">
                    <option>Excellent</option>
                    <option>Good</option>
                    <option>Poor</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
    </div>
    <?php require'footer.php'; ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"
        integrity="sha384-Lz9AT0RrLf81bJFYd8jWSt2pOMFyhpjZXWh0/W8e+3vR+ez9a4VWXh1pFnU2R5V2"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6uZ6D2EHIv3E6fDTo5GIbB2lFOqLv06H"
        crossorigin="anonymous"></script>
</body>

</html>
