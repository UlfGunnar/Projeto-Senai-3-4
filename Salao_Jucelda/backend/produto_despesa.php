<?php 
    require "Functions/Tratamento_erros/tratamento_despesa.php";

    $tipo_despesa       = isset($_POST['tipo_despesa']) ? $_POST['tipo_despesa'] : "";
    $valor_despesa      = isset($_POST['valor_despesa']) ? $_POST['valor_despesa'] : "";
    $data_criacao       = isset($_POST['data_criacao']) ? $_POST['data_criacao']  : "";
    
    $nome_produto       = isset($_POST['nome_produto']) ? $_POST['nome_produto'] : "";
    $preco_produto      = isset($_POST['preco']) ? $_POST['preco'] : "";
    $quantidade_produto = isset($_POST['quantidade']) ? $_POST['quantidade'] : "";
?>