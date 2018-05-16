<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/FF-cash.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<!--==============================header=================================-->
<header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <a class="navbar-brand" href="javascript:void(0)">Electronic Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link" href="contacts.php">Contact Us <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <div><a href="login.php"><button class="btn btn-outline-primary">log in</button></a> </div>

        </div>
    </nav>
</header>
<body>
<!--==============================content================================-->
<section id="content" >
    <div>
        <div class="container">
            <h2 style="color: white;">Feedback</h2>
            <form class="card p-2" id="form" method="post" action="insertfeedback.php">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="text" class="form-control" id="message" name="message" required></textarea>
                </div>
                <div class="d-flex flex-row justify-content-start">
                    <button class="btn btn-primary float-right mr-2" type="submit">Send</button>
                    <button class="btn btn-danger float-right mr-2" type="reset">Reset</button>
                </div>
            </form>
            <br>
            <h2 style="color: white;">Contact us</h2>

            <div class="mt-5 d-flex flex-row justify-content-between">
                <p>
                    Monday - Friday: 8:00 am - 6:00 pm<br>
                    Saturday: 8:00 am - 13:00<br>
                    Telephone:+21621254342<br>
                    E-mail : mkaouarmalek@gmail.com
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.358359262261!2d10.144908043298289!3d36.833892685816714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd331323b908fd%3A0x38d13b397ab78abe!2sUnnamed+Road%2C+Tunis!5e0!3m2!1sfr!2stn!4v1525819488648" width="400" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
</section>
</body>
