import { BarChart, Bar, XAxis, YAxis, CartesianGrid, Tooltip, Legend, ResponsiveContainer } from "recharts";
import { useAPI } from "./../useAPI"

const meses = ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"];

function rotuloMes(anoMes) {
  const [ano, mes] = anoMes.split("/")
  return `${meses[Number(mes) - 1]}/${ano.slice(2)}`;                                                                                 
}

export default function GraficoBarras() {
  const {dados, erro, carregando} = useAPI("Receita_bruta_mensal.php");

  if (carregando) return <p>Carregando...</p>;
  if (erri) return <p>Erro: {erro}</p>;
  if (!dados || dados.length === 0) return <p>Sem dados para exibir.</p>

    return (
        <div className="h-72 w-full rounded-xl border border-gray-200 bg-white p04 shadow-sm">
            <h2>Gráfico da Receita Bruta por mês</h2>
            
            <ResponsiveContainer width="100%" height="100%">
                <BarChart data={dados}>
                    <CartesianGrid strokeDasharray="3 3" vertical={false}/>
                    <XAxis dataKey="mes_ano" />
                    <YAxis/>
                    <Tooltip/>
                    <Legend/>

                    <Bar dataKey="total_receita_bruta" name="Receita Bruta" fill="#13c749" radius={[4, 4, 0,0]}/>
                </BarChart>
            </ResponsiveContainer>
        </div>
    );
}