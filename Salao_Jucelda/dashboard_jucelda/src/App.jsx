import KPI_valor_receber from "./components/KPI_valor_receber"
import KPI_receita_bruta from "./components/KPI_receita_bruta"
import KPI_despesas from "./components/KPI_despesas";
import KPI_lucro  from "./components/KPI_lucro";
import Grafico_linha from "./components/Linha_clientes_atendidos"
import Grafico_barra from "./components/Barra_pagamento"
import Grafico_pizza from "./components/Pizza_Servico"

export default function App() {
  return <div>
    <div className="flex flex-col gap-4 p-6 lg:flex-row">
      <div className="flex flex-col gap-4 lg:w-64">
        {/* KPI do valor a receber */}
        <KPI_valor_receber />
        {/* KPI da receita bruta */}
        <KPI_receita_bruta/>
        {/* KPI do valor das despesas */}
        <KPI_despesas />
        {/* KPI do valor de lucro */}
        <KPI_lucro />
      </div>

      <div className="flex-1">
        {/* Gráfico em pizza para mostrar a porcentagem da solicitação de cada serviço */}
        <Grafico_pizza />
      </div>
    </div>

    
    
    {/* Gráfico de linha dos clientes atendidos por mês */}
    <Grafico_linha />

    {/* Gráfico em barra mostrando a receita bruta por mês */}
    <Grafico_barra/>

    
  </div>;
}