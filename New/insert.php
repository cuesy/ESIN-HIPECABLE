<?php
$db = new SQLite3('minhadb.db');

$username = $_GET['username'];
$score = $_GET['score'];

$sql = "INSERT INTO score (username, score) VALUES ('{$username}', {$score})";


if ($db->query($sql) == TRUE) {
    echo "Obrigado pela inserÃ§Ã£o! <br> <a href='https://paginas.fe.up.pt/~up201603438/lpoo/'>Voltar</a>";
} else {
    echo "Erro! <br><br>Exemplo de inserÃ§Ã£o: <br> <b>https://paginas.fe.up.pt/~up201603438/lpoo/insert.php?username=vidal&score=13</b> <br><br><b>Tambem podes inserir aqui:</b><br> <br><form action='/~up201603438/lpoo/insert.php'>Username:<br><input type='text' name='username'><br>Score:<br><input type='text' name='score'><br><br><input type='submit' value='Submit'></form> <br><br> <a href= 'https://paginas.fe.up.pt/~up201603438/lpoo/'>Scores</a>";
}
?>