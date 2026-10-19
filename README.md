# Sistema de Pedidos — Portfólio

[![Abrir demonstração](https://img.shields.io/badge/▶_Preview_interativo-187e91?style=for-the-badge)](https://ronilima1810.github.io/formulario-de-matricula/portfolio-demos/?demo=loja)

Projeto independente de aplicação web de pedidos personalizados com estrutura em **PHP, JavaScript, CSS e MySQL**.

## Visualizar a interface

[**Abrir preview visual do catálogo e carrinho**](https://ronilima1810.github.io/formulario-de-matricula/portfolio-demos/?demo=loja)

Este projeto **não é a Torre de Pedidos do Ruby**, que possui [preview específico](https://ronilima1810.github.io/formulario-de-matricula/portfolio-demos/?demo=pedidos). O preview deste repositório é uma **simulação de portfólio**, independente do PHP e do banco de dados. Os produtos e valores são fictícios. Não há cobrança, envio de pedidos ou coleta de dados pessoais.

## Estrutura do repositório

- `index.php`: listagem de produtos
- `produto.php`: página de produto
- `carrinho.php` e `checkout.php`: fluxo de compra
- `admin/`: painel administrativo
- `api/`: endpoints
- `database/`: esquema inicial do banco

## Segurança

O código-fonte deste repositório não deve ser implantado em produção sem revisão de autenticação, tratamento de dados e credenciais. A demonstração visual não usa nenhum componente sensível.

## Configuração local necessária

Para o envio de e-mails e a exibição de dados de pagamento, configure as variáveis de ambiente **no servidor, nunca no Git**:

- `SMTP_HOST`, `SMTP_PORT`, `SMTP_SECURITY`
- `SMTP_USERNAME`, `SMTP_PASSWORD`
- `SMTP_FROM_EMAIL`, `SMTP_FROM_NAME`
- `PIX_KEY`, `PIX_HOLDER_NAME`, `PIX_BANK_NAME`

As credenciais e os dados PIX que constavam em arquivos versionados foram substituídos por referências a essas variáveis. **Credenciais antigas presentes no histórico do Git devem ser revogadas/rotacionadas.** Os envios de e-mail e a apresentação de dados PIX dependem da configuração do ambiente de execução.
