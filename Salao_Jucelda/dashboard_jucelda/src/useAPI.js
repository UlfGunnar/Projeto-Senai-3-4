import { useEffect, useState } from "react";

const API = "/API";

export function useApi(endpoint) {
    const [dados, setDados] = useState(null);
    const [erro, setErro] = useState(null);
    
    useEffect(() => {
        fetch(`${API}/${endpoint}`).then((res) => {
            if (!res.ok) throw new Error(`Erro ${res.status}`);
            return res.json();
        }).then(setDados).catch((e) => (e.message));
    }, [endpoint]);

    return {
                dados, 
                erro, 
                carregando: !dados && !erro
            };
}