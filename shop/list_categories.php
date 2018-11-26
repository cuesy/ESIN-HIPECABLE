<?php


require_once('config/init.php')
require_once('database/category.php')

  $stmt = $dbh->prepare('SELECT * from category');
  $stmt->execute();

  $id = $_GET['id'];

  $categories = getAllCategories($id);

 
   include('templates/header.php')
   include('templates/list_categories.php');
   include('templates/footer.php');
   
    
   

?>