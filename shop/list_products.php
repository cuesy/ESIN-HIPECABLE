<?php
require_once('config/init.php')
require_once('database/category.php')

$id = $_GET['id'];  

$category = getCategoryById($id);
$products = getProductsByCategory($id);

include('templates/header.php')
include('templates/list_products.php')
include('templates/footer.php')
?>
