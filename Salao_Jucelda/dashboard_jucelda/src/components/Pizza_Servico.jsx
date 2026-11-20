import { PieChart, Pie, Cell, Tooltip, Legend, ResponsiveContainer } from "recharts";
import { useApi } from "../useAPI";

const Cores = [
  "#3498DB", "#E84393", "#F1C40F", "#9B59B6", "#2ECC71",
  "#1ABC9C", "#E67E22", "#34495E", "#E74C3C", "#95A5A6",
];

export default function Pizza_Servico() {
  const { dados, erro, carregando } = useApi("servicos.php");

  if (carregando) return <p>Carregando...</p>;
  if (erro) return <p>Erro: {erro}</p>;
  if (!dados || dados.length === 0) return <p>Sem dados para exibir.</p>;

  return (
    <div className="flex h-[27rem] w-full flex-col rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
      <h2 className="mb-2 font-semibold">Gráfico de pedido de serviços</h2>

      <div className="min-h-0 flex-1">
        <ResponsiveContainer width="100%" height="100%">
          <PieChart>
            <Pie
              data={dados}
              dataKey="quantidade_servico"
              nameKey="nome_servico"
              cx="50%"
              cy="50%"
              outerRadius="80%"
              label={({ percent }) => `${(percent * 100).toFixed(0)}%`}
            >
              {dados.map((item, i) => (
                <Cell key={item.pk_servico} fill={Cores[i % Cores.length]} />
              ))}
            </Pie>

            <Tooltip formatter={(valor, nome) => [`${valor} pedidos`, nome]} />
            <Legend />
          </PieChart>
        </ResponsiveContainer>
      </div>
    </div>
  );
}