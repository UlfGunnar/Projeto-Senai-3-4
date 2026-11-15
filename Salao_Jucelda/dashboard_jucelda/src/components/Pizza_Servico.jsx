import { PieChart, Pie, Cell, Tooltip, Legend, ResponsiveContainer } from "recharts";

const dados = [
  {
    "servico": "Corte masculino",
    "execucao": 20
  },
  {
    "servico": "Corte feminino",
    "execucao": 15
  },
  {
    "servico": "Escova",
    "execucao": 12
  },
  {
    "servico": "Coloração",
    "execucao": 10
  },
  {
    "servico": "Hidratação",
    "execucao": 10
  },
  {
    "servico": "Progressiva",
    "execucao": 8
  },
  {
    "servico": "Mechas e luzes",
    "execucao": 7
  },
  {
    "servico": "Barba",
    "execucao": 8
  },
  {
    "servico": "Penteados",
    "execucao": 5
  },
  {
    "servico": "Tratamento capilar",
    "execucao": 5
  }
];

const Cores = [
  "#3498DB",
  "#E84393",
  "#F1C40F",
  "#9B59B6",
  "#2ECC71",
  "#1ABC9C",
  "#E67E22",
  "#34495E",
  "#E74C3C",
  "#95A5A6"
];

export default function GraficoPizza() {
    return (
        <div className="h-108 w-full rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
            <h2>Gráfico de pedido de serviços</h2>

            <ResponsiveContainer width="100%" height="100%">
                <PieChart> 
                    <Pie data={dados} dataKey="execucao" nameKey="servico" cx="50%" cy="50%" outerRadius={170} label={({ value }) => `${value}%`}>
                        {dados.map((item, i) => (
                            <Cell key={item.servico} fill={Cores[i % Cores.length]}/>
                        ))} 
                    </Pie>

                    <Tooltip formatter={(valor, nome) => [`${valor}%`, nome]} />
                </PieChart>
            </ResponsiveContainer>
        </div>
    );
}