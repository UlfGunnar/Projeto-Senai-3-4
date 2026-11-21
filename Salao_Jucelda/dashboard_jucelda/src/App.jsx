import KPI_valor_receber  from "./components/KPI_valor_receber"
import KPI_receita_bruta  from "./components/KPI_receita_bruta"
import KPI_despesas       from "./components/KPI_despesas";
import KPI_lucro          from "./components/KPI_lucro";
import Grafico_linha      from "./components/Linha_clientes_atendidos"
import Grafico_barra      from "./components/Barra_pagamento"
import Grafico_pizza      from "./components/Pizza_Servico"
import { useApi }         from "./useAPI"

export default function App() {
  const {
    dados: kpis,
    erro,
    carregando
  } = useApi("kpis.php")

  return <div>
    <div className="flex flex-col gap-4 p-6 lg:flex-row">
      <div className="flex flex-col gap-4 lg:w-64">
        {carregando && <p>Carregando KPIs...</p>}
        {erro && <p>Erro nos KPIs: {erro}</p>}

        {kpis && (
          <>
            {/* KPI do valor a receber */}
            <KPI_valor_receber valor={kpis.Valor_receber}/>

            {/* KPI da receita bruta */}
            <KPI_receita_bruta valor={kpis.Receita_bruta}/>

            {/* KPI do valor das despesas */}
            <KPI_despesas />

            {/* KPI do valor de lucro */}
            <KPI_lucro />
          </>
        )}
        
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