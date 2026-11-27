/// <reference types="cypress" />

describe ('Teste de APIs', () => {
    it('Teste de sucesso da API dos KPIs', () => {
        cy.request({
            method: 'GET',
            url: 'https://pedrolucasrodrigues.com.br/API/KPI.php'
        }).then((res) => {
            expect(res.status).to.eq(200);
            expect(Object.keys(res.body)).to.have.length(4);
            expect(res.body).to.have.all.keys(
                'Valor_receber',
                'Receita_bruta',
                'Valor_despesa',
                'Valor_lucro'
            );
        });
    });
});