<?php
$db = new SQLite3('minhadb.db');

echo("<h1>Scores</h1>");

$results = $db->query('SELECT * FROM score');
while ($row = $results->fetchArray()) {
    echo "{$row['ID']} {$row['username']} {$row['score']} <br>";
}

echo("<br><br><a href='https://paginas.fe.up.pt/~up201603438/lpoo/insert.php'>Insercao de dados</a><br>");
?>