<?php

require_once '../backend/conexao.php';

$sql = "DELETE FROM agendamento 
        WHERE pk_agendamento = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['pk_agendamento']
]);

?>