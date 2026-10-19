# Lumus PDV — Desktop

Aplicativo desktop para Windows com interface corporativa de PDV e gestão, inspirado em padrões genéricos de UX de sistemas ERP. O design é independente, sem reproduzir telas, marcas ou ativos da SAP.

## Escopo atual — versão 0.1.0 demonstrativa

- Frente de caixa com busca, filtro de categoria, quantidades e carrinho.
- Pagamentos ilustrativos: Pix, dinheiro, crédito e débito, sem integração financeira real.
- Vendas simuladas locais, baixa de estoque fictício e histórico da estação.
- Cadastro de produtos fictícios, relatórios básicos e exportação CSV.
- Sem autenticação, sincronização, emissão fiscal, processamento de valores ou integração SaaS.

## Instalar e executar no Windows

Requisitos: Node.js LTS e npm.

```powershell
cd desktop-pdv
npm install
npm start
```

## Criar o instalador Windows

```powershell
npm run dist:win
```

O electron-builder criará o instalador NSIS dentro de desktop-pdv/dist quando executado em ambiente Windows preparado. Nenhum .exe foi gerado neste commit.

## Evolução planejada: SaaS + cliente instalado

```text
Electron Windows Desktop
    | HTTPS + autenticação, sessões e controle por perfil
    v
Backend SaaS / API segura
    |-- Banco multiempresa (vendas, produtos, estoque)
    |-- Auditoria de ações e conciliação
    |-- Serviços fiscais e pagamentos homologados
```

O cliente publicado é uma demonstração offline e NÃO realiza operações financeiras, fiscais ou comerciais reais. A migração para produção exige backend autenticado, autorização, comunicação cifrada, integração fiscal, estratégia de sincronização, controle concorrente de estoque e validação de segurança.

## Arquivos

- main.js: janela Electron com isolamento de contexto e bloqueio de URLs externas.
- preload.js: interface mínima para o renderer.
- renderer/index.html: estrutura da aplicação.
- renderer/styles.css: identidade visual ERP/PDV.
- renderer/app.js: UI e operações simuladas.

Não utilizar com dados reais ou credenciais. Os dados no localStorage são exclusivamente para demonstração.
