<?php 
    /*
        * tipo_despesa:
            - Testar se é nulo ou uma string vazia
            - Se o dado é igual ao que pode ser selecionado
        
        * valor_despesa:
            - se o valor é número ou não está nulo
            - se o valor não é x <= 0
            
        * data_criacao:
            - se o valor não é nulo
    */

    function tratamento_tipo_despesa($tipo_despesa): bool {
        if ($tipo_despesa == null or $tipo_despesa == "" or $tipo_despesa == false) {
            $resultado = false;
        }
        else if (in_array($tipo_despesa, ['DF', 'DR', 'DP'], true)) {
            $resultado = false;
        }

        $resultado = true;

        return $resultado;
    }

    function tratamento_valor_despesa($valor_despesa): bool {
        $valor_despesa = filter_var($valor_despesa, FILTER_VALIDATE_FLOAT);
        $resultado = true;

        if($valor_despesa == "" or $valor_despesa == false) {
            $resultado = false;
        }

        else if ($valor_despesa <= 0) {
            $resultado = false;
        }

        return $resultado;
    }

    function tratamento_data_criacao($data_criacao) {
        $resultado = true;

        if($data_criacao == "" or $data_criacao == false) {
            $resultado = false;
        }

        return $resultado;
    }
?>