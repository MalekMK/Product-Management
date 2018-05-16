<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
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
<?php
require "../db/dbconfig.php";
$db = new DB($host,$username,$password,$database);

if ($_POST) {
    $reference = $_POST["reference"];
    $sql = "SELECT * FROM products WHERE reference = '$reference'";
    $query = $db->query($sql);
}
?>
<section id="content">
    <div>
        <div class="container">
            <h2 style="color: white;">Edit Product</h2>
            <form class="card p-2" id="form" method="post" action="setproduct.php">

                <div class="form-group">
                    <label for="reference">Reference</label>
                    <input type="text" class="form-control" id="reference" name="reference" value="<?php echo $query[0]["reference"] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type='text' class='form-control' id='name' name='name' value="<?php echo $query[0]["name"] ?>" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $query[0]["stock"] ?>" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="price">Price/Unit(en DT)</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $query[0]["price"] ?>" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" required><?php echo $query[0]["description"] ?></textarea>
                </div>
                <div class="d-flex flex-row justify-content-start">
                    <button class="btn btn-primary float-right mr-2" type="submit">Update</button>
                    <button class="btn btn-warning float-right mr-2" type="reset">Reset</button>
                    <a class="btn btn-danger" href="dashboard.php">Cancel</a>
                </div>
            </form>

</body>