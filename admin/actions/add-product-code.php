<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");
if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $collections = $_POST['collections'];
    $product_category = $_POST['product_category'];
    $company_name = $_POST['company_name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $product_pattern = $_POST["product_pattern"];
    $quantity = $_POST['quantity'];
    $product_color = $_POST['product_color'];
    $size = $_POST['size'];
    $product_stiched = $_POST['product_stiched'];
    $image1 = $_FILES["image1"]["name"];
    move_uploaded_file($_FILES["image1"]["tmp_name"], "Dresses/" . $_FILES["image1"]["name"]);

    $sql = "INSERT INTO product(product_name,collections,product_category,company_name,brand,price,description,product_pattern,quantity,product_color,size,product_stiched,product_image) VALUES(:product_name,:collections,:product_category,:company_name,:brand,:price,:description,:product_pattern,:quantity,:product_color,:size,:product_stiched,:image1)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':product_name', $product_name, PDO::PARAM_STR);
    $query->bindParam(':collections', $collections, PDO::PARAM_STR);
    $query->bindParam(':product_category', $product_category, PDO::PARAM_STR);
    $query->bindParam(':company_name', $company_name, PDO::PARAM_STR);
    $query->bindParam(':brand', $brand, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':product_pattern', $product_pattern, PDO::PARAM_STR);
    $query->bindParam(':quantity', $quantity, PDO::PARAM_STR);
    $query->bindParam(':product_color', $product_color, PDO::PARAM_STR);
    $query->bindParam(':size', $size, PDO::PARAM_STR);
    $query->bindParam(':product_stiched', $product_stiched, PDO::PARAM_STR);
    $query->bindParam(':image1', $image1, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        // $msg = "Product added successfully";
        $_SESSION['stat'] = "Product Added Successfully";
        $_SESSION['status_code'] = "success";
        header('Location:../add-product.php');
    } else {
        // $error = "Something went wrong. Please try again";
        $_SESSION['stat'] = "Error";
        $_SESSION['status_code'] = "error";
        header('Location:../add-product.php');
    }
}
