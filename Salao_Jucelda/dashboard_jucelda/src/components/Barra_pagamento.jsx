import { BarChart, Bar, XAxis, YAxis, CartesianGrid, Tooltip, Legend, ResponsiveContainer } from "recharts";

const dados = [
  {
    "mes": "Jan",
    "pagamento": 1500.00
  },
  {
    "mes": "Fev",
    "pagamento": 1800.00
  },
  {
    "mes": "Mar",
    "pagamento": 1650.00
  },
  {
    "mes": "Abr",
    "pagamento": 2000.00
  },
  {
    "mes": "Mai",
    "pagamento": 1750.00
  },
  {
    "mes": "Jun",
    "pagamento": 2200.00
  },
  {
    "mes": "Jul",
    "pagamento": 1900.00
  },
  {
    "mes": "Ago",
    "pagamento": 2100.00
  },
  {
    "mes": "Set",
    "pagamento": 1850.00
  },
  {
    "mes": "Out",
    "pagamento": 2300.00
  },
  {
    "mes": "Nov",
    "pagamento": 1950.00
  },
  {
    "mes": "Dez",
    "pagamento": 2500.00
  }
]

export default function GraficoBarras() {
    return (
        <div className="h-72 w-full rounded-xl border border-gray-200 bg-white p04 shadow-sm">
            <h2>Gráfico da Receita Bruta por mês</h2>
            
            <ResponsiveContainer width="100%" height="100%">
                <BarChart data={dados}>
                    <CartesianGrid strokeDasharray="3 3" vertical={false}/>
                    <XAxis dataKey="mes" />
                    <YAxis/>
                    <Tooltip/>
                    <Legend/>

                    <Bar dataKey="pagamento" name="Receita Bruta" fill="#13c749" radius={[4, 4, 0,0]}/>
                </BarChart>
            </ResponsiveContainer>
        </div>
    );
}