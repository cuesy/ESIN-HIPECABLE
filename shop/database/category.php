<?php
function getCategoryById($id){
    $global dbh;


    $stmt = $dbh-> prepare('SELECT * 
                            FROM category 
                            WHERE id = ?');

    $stmt -> execute(array($id));
    return $stmt -> fetch();
}

function getAllCategories($id){
    $global dbh;


    $stmt = $dbh-> prepare('SELECT * 
                            FROM category 
                            WHERE id = ?');

    $stmt -> execute(array($id));
    return $stmt -> fetchAll();
}


?>