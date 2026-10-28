## Requisitos Funcionais:
    - Agendamento de Clientes:
        * Pode remover ou adicionar algum serviço;
        * Forma de pagamento pode ser alterada após o agendamento;
        * Deve poder ver todos os agendamentos;
        * Funcionário pode manipular o agendamento;
        * Cada dia da semana vai ter um horário de almoço que não pode haver agendamentos;
        * O cliente pode fazer mais de um agendamento;

    - Geração de pagamentos:
        * Crédito pode ser parcelado até 3x;
        * Gerar um recibo com base no serviço marcado;
        * Deve ser possível gerar um pagamento a partir da listagem

    - DashBoard:
        * Tela principal vai conter o valor total a receber;
            + Pode ser ocultado;
        * Página que mostra a receita total, despesas e o lucro do salão;
        * Quantia de clientes atendidos;
        * Fluxo de caixa (anual e diário), contendo quando entrou (separado por meio de pagamento) com um gráfico exibindo estes valores e a porcentagem de cada serviço/
        * Lista de nome dos clientes e o valores que ele gastou, do maior para o menor;

    - Mensagens automatizadas no WhatsApp:
        * Enviar um lembrete automático no WhatsApp as 8 da manhã para a cliente um dia antes do serviço;
        * Redirecionar do software para o contato ao clicar no cliente;

    - Bloqueio de agendamento;

    - Cadastro de Funcionário;

    - Congelamento de Agendamentos;

    - Mensagens pré-definidas;

    - Listagens:
        * Lista de espera de clientes, com aviso quando liberar algum espaço.
        * Lista de aniversáriantes;
        * Cobranças;
            + O valor total de valor devendo e valor pago de cada divida;
            + Exibir valor que o cliente está devendo;
            + Eibir quantas vezes o cliente desmarcou a consulta;
            + Exibir a quantia de vezes que foi atendia no mês
        * Listagem de clentes cadastrados;
        * Listagem de agendamentos;
            + Exibi apenas se tiver nos próximos 30 dias;
                > Envia um lembrete
        * Seção pessoal para mostrar fotos do serviço de cada cliente;
        * Produtos;
        * Serviços
        * Valor total de despesa separada por categoria;
            + Seção paga;
            + Seção não paga

    - Cadastro da anamnese:
        * Necessário assinatura do cliente;
            
    - Geração de Recibos;
        * Exibir apenas o valor faltante;

    - Cobrança:
        * Funcionário pode remover cobrança;
        * Opção de enviar lembrete via zap;
        * A cobrança é excluída apos ser pagada;
        * O valor pode ser acumulativo;

    - O cliente pode adicionar saldo;

    - Cadastro de produtos:
        
    - Cadastro de despesas;

    - Cadastro de serviços:

## Requisitos não Funcionais:

## Dados a ser salvo:
    - Agenda:
        * Data marcada;
        * Nome do Cliente;
        * Número do cliente;
        * Serviço a ser feito;
        * Forma de pagamento (Crédito, Débito, Pix, Dinheiro, Boleto, Grátis);
        * Observação;
        * Status;
        * Valor (+ taxa de cobrança);
        * Horário;
    
    - Cobrança:
        * Nome do cliente;
        * Data Início;
        * Data Fim;
        * Horário Início;
        * Horário Fim;
        * Celular;
        * Serviço;
        * Valor a dever;
        * Observação;
        * Status;
        * Total pago;

    - Serviço;
        * Nome do Serviço;
        * Estimativa de tempo;

    - Cliente:
        * Nome do Cliente;
        * Celular;
        * cpf;
        * data nascimento;
        * Saldo;

    - Funcionário:
        * Data de nascimento;

    - Intervalo dos Funcionários:

    - Produtos:
        * Nome Produto;
        * Preço;
        * Quantidade;

    - Movimentação de produtos:
        * tipo de Movimentação;
        * Valor gasto;

    - Despesas;
        * Vertente (Despesa fixa, despesa regular, despesa parcelada)
        * Pago?
        * Nome da despesa;
        * Valor;
        * Categoria.
        * Data Início;
        * Data Fim;

    - Anamnses
        * Cabelo;
        * Risco de saúde;

## UX/UI
    - Cada serviço deve ter uma cor diferente (customizavel)    

    - Cadastro de despesa, a categoria pode selecionar entre Custos, administração geral, comercial) ou outro

    - Página de redirecionamento para WhatsApp e Instagram;

## Perguntas: 
    - Quais dados do cliente deve ser salvo?
    - Qual é a taxa de cobrança?
    - "Cada serviço deve ter uma cor diferente" especificar o que seria cada serviço (tela?);
    - Especificar melhor o item "Separar o funcionários por coluna/tela" o que é isto?;
    - Especificar melhor o item "botão de redirecionamento para a data atual" aonde estaria este botão;
    - Qual é o limite da quantidade de agendamento?
    - Qual é o horário de almoço?
    - Qual são os serviços e seus tempos estimados;
    - Quais são os produtos e seus preços;
    - O que seria um agendamento múltiplo;
    - Especificar melhor o item "Separar os clientes por seções"
    - Especificar melhor o item "O Total a receber"
    - Especificar melhor o item "mandar um lembrete quando bater os 30 dias"
    - Especificar melhor o que seria o cabelo no anamnese;
    - Especificar o cálculo deste item "Página que mostra a receita total, despesas e o lucro do salão"
    - Falta Layout das páginas;
    - Regras de negócio;
    - Requisitos não funcionais;
