import KPI_valor_receber  from "./components/KPI_valor_receber"
import KPI_receita_bruta  from "./components/KPI_receita_bruta"
import KPI_despesas       from "./components/KPI_despesas";
import KPI_lucro          from "./components/KPI_lucro";
import Grafico_linha      from "./components/Linha_clientes_atendidos"
import Grafico_barra      from "./components/Barra_pagamento"
import Grafico_pizza      from "./components/Pizza_Servico"
import { useApi }         from "./useAPI"
import { useState } from "react";

export default function App() {
  const query = ano ? `ano=?${ano}` : ""

  const {dados: kpis, erro, carregando} = useApi(`KPI.php${query}`)

  const [ano, setAno] = useState("")

  const ANOS = [2023, 2024, 2025, 2026]

  return <div>
    <div className="flex items-center gap-2 px-6 pt-6">
      <label htmlFor="ano">Ano: </label>
      <select id="ano" value={ano} onChange={(e) => setAno(e.target.value)} className="border rounded px-2 py-1">
        <option value="">Todos</option>
        {ANOS.map((a) => (
          <option key={a} value={a}>{a}</option>
        ))}
      </select>
    </div>

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
            <KPI_despesas valor={kpis.Valor_despesa}/>

            {/* KPI do valor de lucro */}
            <KPI_lucro valor={kpis.Valor_lucro}/>
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