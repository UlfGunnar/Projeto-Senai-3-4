import { useState } from "react";
import {
  LineChart, Line, XAxis, YAxis, Tooltip, CartesianGrid, ResponsiveContainer,
} from "recharts";
import "./App.css";

const vendas = [
  { mes: "Jan", valor: 4000 },
  { mes: "Fev", valor: 3000 },
  { mes: "Mar", valor: 5200 },
  { mes: "Abr", valor: 4800 },
  { mes: "Mai", valor: 6100 },
];

function Card({ titulo, valor }) {
  return (
    <div className="card">
      <span>{titulo}</span>
      <strong>{valor}</strong>
    </div>
  );
}

export default function App() {
  const [busca, setBusca] = useState("");
  const filtrado = vendas.filter((v) =>
    v.mes.toLowerCase().includes(busca.toLowerCase())
  );
  const total = filtrado.reduce((soma, v) => soma + v.valor, 0);

  return (
    <div className="dashboard">
      <h1>Meu Dashboard</h1>

      <input
        placeholder="Filtrar por mês..."
        value={busca}
        onChange={(e) => setBusca(e.target.value)}
      />

      <div className="cards">
        <Card titulo="Total" valor={`R$ ${total}`} />
        <Card titulo="Meses" valor={filtrado.length} />
      </div>

      <div style={{ height: 300 }}>
        <ResponsiveContainer>
          <LineChart data={filtrado}>
            <CartesianGrid strokeDasharray="3 3" />
            <XAxis dataKey="mes" />
            <YAxis />
            <Tooltip />
            <Line type="monotone" dataKey="valor" stroke="#4f46e5" />
          </LineChart>
        </ResponsiveContainer>
      </div>
    </div>
  );
}