# Doces da Vovó

## Sobre o projeto

A Tech Solutions foi contrata pela confeitaria Doces da Vovó, para criar um site institucional, com o objetivo de se conectar mais com seus clientes
trazendo uma exibição de seus produtos, uma maior facilidade para fazer pedidos e até mesmo entrar em contato para dúvidas e sugestões.

## Tecnologias Utilizadas

- **Front-end:** HTML, CSS e JavaScript
- **Back-end:** PHP e SQL
- **Banco de Dados: phpMyadmin**

## Recomendações de Segurança

- **Sanitizar os campos:** Fazer o uso do htmlspecialchars() para converter caracteres inválidos ou do filter_var() para remover.
- **Validação de e-mail:** Tambem pode-se usar o filter_var() para uma validação de e-mails.
- **Tamanho máximo de mensagem:** Atravez do strlen() e possivel saber o tamanho da mensagem e limitar seu tamanho.
- **Prevenção de Injeção SQL:** Usar declarações preparadas como prepare(), bind_param(), execute() para que a consulta com o banco de dados seja segura.
