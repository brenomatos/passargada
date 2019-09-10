# Project Passargada
### Objetivo e descrição do sistema:

O sistema desenvolvido é baseado no Project Gutemberg e no site Domínio Público. Ele contará com livros que estão em domínio público, possibilitando sua leitura e download, e também terá usuários que poderão apreciar mais funcionalidades como lista de favoritos e recomendações de livros.

Ao término do sprint, almejamos haver implementado um sistema que permita consulta e download de livros, criação de contas para usuários que tenham funcionalidades como lista de favoritos e recomendação de novos livros. Para facilitar a utilização do sistema, será implementada uma interface gráfica básica.

### Equipe:

Ana Flavia Ciríaco - 2018055008

Breno Matos - 2017086007

Francisco Galuppo Azevedo - 2017014960

Luiza Chagas Brandão Campos - 2017015010

Rennan Cordeiro - 2018054850

# Controle do Sprint

*Burn-down Chart*

[Planilha de Commits](https://docs.google.com/spreadsheets/d/1thcQ9RHk4XSkCc5FZykp5Lb3o5-JKXV9LDxOl3-1imQ/edit?usp=sharing)

# Estórias e tarefas
1. Eu, como usuário, gostaria de poder observar as informações dos livros;
    1. Criar a Tabela de livros
    1. Criar as páginas
        1. Todos os livros
        1. Busca de livros
        1. Página de livro
        1. Página de usuário
   1. Criar a interface gráfica do site

1. Eu, como usuário, gostaria de fazer buscas por livros;
    1. Implementar queries do banco de dados
    1. Implementar a funcao de busca
    1. Fazer o form de busca

1. Eu, como usuário, gostaria de ter uma conta 
    1. Criar a tabela de usuários
    1. Adaptar função de hash para usuários e senhas
    1. Criar form de login

1. Eu, como usuário, gostaria de comentar e avaliar livros
    1. Criar tabela de comentários e avaliação    
    1. Criar form de comentários e avaliação
    1. Criar função para buscar comentários para a página do livro

1. Eu, como usuário, gostaria de salvar livros lidos na minha conta;
    1. Criar tabela de livro lido
    1. Criar botão de lido
    1. Criar função para buscar livros lidos para a página do usuário

1. Eu, como usuário, gostaria de ter uma lista de desejos na minha conta;
    1. Criar tabela de favoritos
    1. Criar botão de favoritos
    1. Criar função para buscar livros desejados para a página do usuário

1. Eu, como usuário, gostaria de receber recomendações de livros;
    1. Criar o sistema de recomendação 
    1. Criar interface de recomendações na página da conta
    1. Criar função para buscar livros recomendados para a página do usuário

1. Eu, como usuário, gostaria de sugerir livros;
    1. Criar tabela de sugestões
    1. Criar form de sugestoes

1. Eu, como usuário, gostaria de ver os livros mais lidos do mês.
    1. Criar query que retorna os livros mais lidos do mês
    1. Criar interface de livros mais lidos
    1. Criar função para buscar livros mais lidos do mês
