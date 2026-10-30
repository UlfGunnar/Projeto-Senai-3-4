## Requisitos Funcionais:
    1- Agendamento de Clientes:
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

    3 - Cadastro de Funcionário;

    - Mensagens pré-definidas;

    - Listagens (tropinha): 
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

    7 - Cadastro da anamnese:
        * Necessário assinatura do cliente;
            
    - Geração de Recibos;
        * Exibir apenas o valor faltante;

    5 - Cobrança:
        * Funcionário pode remover cobrança;
        * Opção de enviar lembrete via zap;
        * A cobrança é excluída apos ser pagada;
        * O valor pode ser acumulativo;

    - O cliente pode adicionar saldo;

    4 - Cadastro de produtos:
        
    6 - Cadastro de despesas;

    2 - Cadastro de serviços:

    - Login (primeiro func depois cliente);

## Requisitos não Funcionais:

## Dados a ser salvo:
    - Agenda:
        pk_agendamento; int
        fk_cliente; int
        * Data marcada; date
        * Nome do Cliente; string
        * Número do cliente; string
        * fk_servico; int
            Serviço a ser feito; string
        * Forma de pagamento (Crédito, Débito, Pix, Dinheiro, Boleto, Grátis); string
        * Observação; string
        * Status; string
        * Valor (+ taxa de cobrança); double
        * Horário; time
        * nome funcionario; str
            fk_funcionario; int

    - Cobrança:0
        pk_cobranca; int
        fk_cliente; str
        * Nome do cliente; string
        * Data Início; date
        * Data Fim; date
        * Horário Início; time
        * Horário Fim; time
        * Celular; string
        * Serviço; strig
        * Valor a dever; doble
        * Observação; string
        * Status; string
        * Total pago; double

    - Serviço;
        pk_servico; int
        * Nome do Serviço; string
        * Estimativa de tempo; time

    - Cliente:
        pk_cliente; int
        fk_anamnese; int
        * Nome do Cliente; str
        * Celular; str
        * cpf; str
        * data nascimento; date
        * Saldo; double

    - Funcionário:
        pk_funcionario; int
        cpf; int
        nome; str
        numero; str
        * Data de nascimento; date

    - Intervalo dos Funcionários:
        pk_intervalo; int
        fk_funcionario; int
        hora_inicio; time
        hora_fim; time
        
    - Produtos:
        pk_produto; int
        * Nome Produto; str
        * Preço; double
        * Quantidade; int

    - Movimentação de produtos:
        fk_produto; int
        pk_movimentacao; int
        * tipo de Movimentação; str 
        * Valor gasto; double

    - Despesas;
        pk_despesas; int
        * Vertente (Despesa fixa, despesa regular, despesa parcelada) str
        * Pago? str
        * Nome da despesa; str
        * Valor; double
        * Categoria; str
        * Data Início; date
        * Data Fim; date

    - Anamnses
        pk_anamnses; int
        * Cabelo; str
        * Risco de saúde; str

## Carnalidades

cliente agenda 1:N
serviço agenda 1:N
funcionario agenda 1:N
cliente cobranca 1:N
produto movimentacao de produtos 1:N
funcionario intervalo funcionario 1:N
cliente anamnese 1:N
despesas sem relacionamento


## UX/UI
    - Cada serviço deve ter uma cor diferente (customizavel)    

    - Cadastro de despesa, a categoria pode selecionar entre Custos, administração geral, comercial) ou outro

    - Página de redirecionamento para WhatsApp e Instagram;

    - Listagem de agendamento 

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
    * Especificar o atributos do Funcionário; 
    * Falta Layout das páginas; 
    * Regras de negócio;
    * Requisitos não funcionais;
