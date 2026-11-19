<?php
#especificar quais DateTime são date ou time (kkkkk)
class anamnese {
    public int $pk_anamnese; #i
    public int $fk_cliente; #i
    public string $cabelo; # i
    public string $risco_saude; #i 

}

class cliente {
    public int $pk_cliente; #i
    public int $fk_anamnese; #i
    public string $nome_cliente; #i
    public string $celular_cliente; #i
    public string $cpf; #i
    public DateTime $data_nascimento; #i
}

class credito_cliente {
    public int $pk_credito; #i
    public int $fk_cliente; #i
    public float $valor; #i
}

class servico {
    public int $pk_servico; #i
    public string $nome_servico; #i
    public DateTime $tempo; #i
    public float $valor_servico; #i
}

class produtos{
    public int $pk_produto; #i
    public string $nome_produto; #i
    public float $preco; #i
    public int $quantidade; #i
}

class movimentacao_produto {
    public int $pk_movimentacao; #i
    public int $fk_produto; #i
    public string $tipo_movimentacao; #i
    public float $valor_gasto; #i
}

class funcionario {
    public int $pk_funcionario; #i
    public string $cpf_funcionario; #i
    public string $numero_celular; #i
    public string $nome_funcionario; #i
    public DateTime $data_nascimento; #i
}

class agendamento {
    public int $pk_agendamento; #i
    public DateTime $data_marcada; #i
    public int $fk_cliente; #i
    public int $fk_servico; #i
    public string $pagamento; #i
    public string $observacao; #i
    public string $status; #i
    public DateTime $hora_marcada; #
    public int $fk_funcionario; #i
}
class cobranca {
    public int $pk_cobranca; #i
    public int $fk_cliente; #i
    public int $fk_servico; #i
    public DateTime $data_inicio; #i 
    public DateTime $data_fim; #i
    public DateTime $hora_inicio; #i
    public DateTime $hora_fim; #i
    public float $saldo_devedor; #i
    public string $observacao; #i
    public string $status; #i
    public float $total_pago; #i
}

class despesa {
    public int $pk_despesa; #i
    public string $tipo_despesa; #i
    public bool $pago; #i
    public int $fk_produto; #i
    public float $valor_produto; #i
    public string $categoria; #i
    public DateTime $data_inicio; #i
    public DateTime $data_fim; #i
}

class servico_agendamento {
    public int $pk_servico_agendamento; #i
    public int $fk_agendamento; #i
    public int $fk_servico; #i
}

class produto_despesa {
    public int $pk_produto_despesa; #i
    public int $fk_produto; #i
    public int $fk_despesa; #i
}

class funcionario_agendamento {
    public int $pk_funcionario_agendamento; #i
    public int $fk_agendamento; #i
    public int $fk_funcionario; #i
}
?>