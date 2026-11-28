<?php 
    /*
        * tipo_despesa:
            - Testar se é nulo ou uma string vazia
            - Se o dado é igual ao que pode ser selecionado
        
            
    */

    function tratamento_tipo_despesa($tipo_despesa): bool {
        if ($tipo_despesa == null or $tipo_despesa == "") {
            $resultado = false;
        }
        else if (in_array($tipo_despesa, ['DF', 'DR', 'DP'], true)) {
            $resultado = false;
        }

        $resultado = true;

        return $resultado;
    }
?>