export default function KpiLucro({valor = 0}) {
  return <div className="w-50 rounde-xl border border-gray-200 bg-white p-5 shadow-sm">
    <div className="flex items-center justify-between">
        <p className="text-sm font-medium text-gray-500">
            Lucro
        </p>
    </div>
    <p className="mt-2 text-2xl font-bold text-green-600">
        {valor.toLocaleString("pt-BR", {
            style: "currency",
            currency: "BRL"
          })}
    </p>
  </div>;
}