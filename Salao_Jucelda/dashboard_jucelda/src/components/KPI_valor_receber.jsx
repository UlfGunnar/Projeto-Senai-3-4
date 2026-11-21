import { useState } from "react";
import { Eye, EyeOff } from "lucide-react";

export default function KpiValorReceber({valor = 0}) {
  const [visivel, setVisivel] = useState(true); // seta sempre como visivel

  return <div className="w-50 rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
    <div className="flex items-center justify-between">
        <p className="text-sm font-medium text-gray-500">
            Valor a Receber
        </p>
        <button onClick={() => setVisivel(!visivel)} className="rounded-md px-2 py-1 text-xs font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
            {
                visivel 
                ? <Eye size={18}/>
                : <EyeOff size={18}/>
            } 
        </button> {/* este botão inverte o sinal */}
    </div>

    <p className="mt-2 text-2xl font-bold text-green-600">
        {visivel 
        ? valor.toLocaleString("pt-BR", {style: "currency", currency: "BRL"})
        :  "R$ ••••"
        }
    </p> {/* O parágrafo vai verificar o sinal para verificar o que mostrar */}
  </div>;
}