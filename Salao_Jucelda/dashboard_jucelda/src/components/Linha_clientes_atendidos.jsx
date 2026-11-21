import { LineChart, Line, XAxis, YAxis, CartesianGrid, Tooltip, Legend, ResponsiveContainer } from "recharts";
import { useApi } from "./../useAPI"

const meses = ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"];

function rotuloMes(anoMes) {
  const [ano, mes] = anoMes.split("/"); //separa o ano e mes pelo "/"
  return `${meses[Number(mes) - 1]}/${ano.slice(2)}`; //conver o mês númerico para o descritivo
}

export default function GraficoDoisEixos() {
  const {dados, erro, carregando} = useApi("Clientes_atendidos.php");

  if (carregando) return <p>Carregando...</p>;
  if (erro) return <p>Erro: {erro}</p>;
  if (!dados || dados.length === 0) return <p>Sem dados para exibir.</p>;

  return (
    <div className="h-72 w-full rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
      <h2>Gráfico de cliente atendidos por mês</h2>
      
      <ResponsiveContainer width="100%" height="100%">
        <LineChart data={dados}>
          <CartesianGrid strokeDasharray="3 3" />
          {/* Eixo X */}
          <XAxis dataKey="ano_mes" tickFormatter={rotuloMes} stroke="#747474" tick= {
            {
              fill: "#747474",
              fontSize: 12
            }
          }/>

          {/* Eixo Y*/}
          <YAxis stroke="#747474" allowDecimals={false}/>

          <Tooltip labelFormatter={rotuloMes}/>
          <Legend />

          <Line
            type="monotone"
            dataKey="total_clientes"
            name="Clientes atendidos"
            stroke="#13c749"
            strokeWidth={2}
          />
        </LineChart>
      </ResponsiveContainer>
    </div>
  );
}