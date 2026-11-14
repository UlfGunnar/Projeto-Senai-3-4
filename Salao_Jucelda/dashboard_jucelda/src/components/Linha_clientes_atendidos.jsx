import { LineChart, Line, XAxis, YAxis, CartesianGrid, Tooltip, Legend, ResponsiveContainer } from "recharts";

const dados = [
  {
    "mes": "Jan",
    "quantidade_clientes": 120
  },
  {
    "mes": "Fev",
    "quantidade_clientes": 150
  },
  {
    "mes": "Mar",
    "quantidade_clientes": 135
  },
  {
    "mes": "Abr",
    "quantidade_clientes": 180
  },
  {
    "mes": "Mai",
    "quantidade_clientes": 165
  },
  {
    "mes": "Jun",
    "quantidade_clientes": 200
  },
  {
    "mes": "Jul",
    "quantidade_clientes": 190
  },
  {
    "mes": "Ago",
    "quantidade_clientes": 220
  },
  {
    "mes": "Set",
    "quantidade_clientes": 175
  },
  {
    "mes": "Out",
    "quantidade_clientes": 210
  },
  {
    "mes": "Nov",
    "quantidade_clientes": 195
  },
  {
    "mes": "Dez",
    "quantidade_clientes": 250
  }
]

export default function GraficoDoisEixos() {
  return (
    <div className="h-72 w-full rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
      <ResponsiveContainer width="100%" height="100%">
        <LineChart data={dados}>
          <CartesianGrid strokeDasharray="3 3" />
          <XAxis dataKey="mes" />

          {/* Eixo Y*/}
          <YAxis yAxisId="eixoY" stroke="#747474" />

          {/* Eixo X */}
          <XAxis dataKey="mes" stroke="#747474" tick={{ fill: "#747474", fontSize: 12 }} />

          <Tooltip />
          <Legend />

          <Line
            yAxisId="eixoY"
            type="monotone"
            dataKey="quantidade_clientes"
            name="Clientes atendidos"
            stroke="#13c749"
            strokeWidth={2}
          />
        </LineChart>
      </ResponsiveContainer>
    </div>
  );
}