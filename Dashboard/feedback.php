<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feedback</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <script src="../js/jquery-1.7.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/FF-cash.js"></script>
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
                    <a class="nav-link" href="dashboard.php">Products</a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link" href="feedback.php">Read Feedbacks <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div><a href="../logout.php"><button class="btn btn-outline-primary">log out</button></a> </div>

        </div>
    </nav>
</header>
<!--==============================content================================-->
<section id="content" class="container mt-5">
    <div>
        <div class="body">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h2 class="p3" style="color: white;">Feedbacks</h2>
                <table class="table table-dark">
                    <thead class="text-primary">
                    <th style="font-size: 30px;">Name</th>
                    <th style="font-size: 30px;">Email</th>
                    <th style="font-size: 30px;">Phone</th>
                    <th style="font-size: 30px;">Message</th>
                    </thead>
                    <tbody>
                    <?php
                    require "../db/dbconfig.php";
                    $db = new DB($host,$username,$password,$database);
                    ?>
                    <?php

                    $delete_query = "DELETE FROM feedback WHERE ID = " . $_POST["id"] .";";
                    $db->query($delete_query);
                    ?>
                    <?php
                    $sql = "SELECT * FROM feedback" ;
                    $query = $db->query($sql);
                    foreach ($query as &$value) {
                        echo "<tr>";
                        echo "<td>".$value["name"]."</td>";
                        echo "<td>".$value["email"]."</td>";
                        echo "<td>".$value["phone"]."</td>";
                        echo "<td>".$value["message"]."</td>";
                        echo "<td>".
                                "<form action='feedback.php' method='post'><button style='color: red;' class='btn btn-sm btn-link' type='submit'>".
                                    "<input type='hidden' name='id' value='". $value["id"] ."'>".
                                    "<i class='fas fa-2x fa-times'></i>".
                                "</button></form>".
                              "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
</body>