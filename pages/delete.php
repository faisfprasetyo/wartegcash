<?php
include'../includes/connection.php';

if( isset($_GET['product_id']) ) {

    $id = $_GET['product_id'];

    $query = mysqli_query($db, "DELETE FROM product WHERE PRODUCT_ID=$id");

    if($query) {
        header('location: product.php?=');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("gagal menghapus...");
}
?>