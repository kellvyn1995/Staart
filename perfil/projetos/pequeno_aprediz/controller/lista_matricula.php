<?php
require_once '../model/conexao.php';
function lista_alunos(){
    $pdo = conectar();
    try {
        $query = $pdo->prepare("SELECT * FROM alunos");
        $query->execute();
        return $query;
    } catch (PDOException $e) {
        echo "Erro ao lista alunos: ".$e->getMessage();
        return false;
    }
}
$resultado = lista_alunos();
?>