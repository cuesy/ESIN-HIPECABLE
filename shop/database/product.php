<?php


$global dbh;

function getProductsByCategory($id){
$stmt = $dbh-> prepare('SELECT * 
                        FROM product 
                        WHERE cat_id = ?');

$stmt -> execute(array($id));
return $stmt -> fetchAll();


$stmt = $dbh->prepare('SELECT * from product WHERE cat_id = ?');
$stmt->execute(array($id));
$products = $stmt->fetchAll();
}
?>