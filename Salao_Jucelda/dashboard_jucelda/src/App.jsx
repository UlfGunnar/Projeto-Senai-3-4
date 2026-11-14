import KPI_valor_receber from "./components/KPI_valor_receber"
import KPI_receita_bruta from "./components/KPI_receita_bruta"
import KPI_despesas from "./components/KPI_despesas";
import KPI_lucro  from "./components/KPI_lucro";
import Grafico_linha from "./components/Linha_clientes_atendidos"

export default function App() {
  return <div>
    <div>
      {/* KPI do valor a receber */}
      <KPI_valor_receber />

      {/* KPI da receita bruta */}
      <KPI_receita_bruta/>

      {/* KPI do valor das despesas */}
      <KPI_despesas />

      {/* KPI do valor de lucro */}
      <KPI_lucro />
    </div>
    <div>
      {/* Gráfico de linha dos clientes atendidos por mês */}
      <Grafico_linha />
    </div>
  </div>;
}