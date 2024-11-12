# Atividade: Gerenciador de Tarefas em PHP

## Descrição
Nesta atividade, vocês desenvolverão um **Gerenciador de Tarefas** em PHP utilizando `$_SESSION` para armazenar dados temporariamente. Esse projeto permitirá que vocês pratiquem o uso de arrays multidimensionais e manipulação de sessões, aplicando também validações para garantir a consistência dos dados.


## Estrutura do Projeto
O projeto consiste em uma aplicação simples de gerenciamento de tarefas, onde cada tarefa possui os seguintes campos:
- `titulo`: O título da tarefa.
- `descricao`: A descrição detalhada da tarefa.
- `status`: O status atual da tarefa, que pode ser "Pendente" ou "Concluída".

## Funcionalidades
1. **Adicionar Tarefa**
   - Permitir ao usuário adicionar uma nova tarefa com os campos `titulo` e `descricao`.
   - A tarefa deve ser armazenada em `$_SESSION['tarefas']`, que é um array multidimensional.
   - Validação: Certifique-se de que os campos `titulo` e `descricao` sejam preenchidos. Caso contrário, exiba uma mensagem de erro e não adicione a tarefa.

2. **Listar Tarefas**
   - Exibir todas as tarefas armazenadas na sessão em uma lista.
   - Exibir os campos `id`, `titulo`, `descricao` e `status` de cada tarefa.

3. **Atualizar Status da Tarefa**
   - Permitir que o usuário marque uma tarefa como "Concluída".
   - O status deve ser atualizado diretamente no array `$_SESSION['tarefas']`.

4. **Remover Tarefa**
   - Permitir que o usuário remova uma tarefa específica da lista.
   - Use a função `array_splice` para remover o item do array, passando o índice correto da tarefa a ser removida.

5. **Filtrar Tarefas por Status**
   - Implementar uma opção para exibir apenas as tarefas "Pendentes" ou "Concluídas".
   - Essa funcionalidade é opcional, mas pode ser um desafio extra para praticar a manipulação de arrays.

## Dicas de Implementação
- Utilize `array_push` para adicionar novas tarefas ao array de tarefas na sessão.
- Para remover uma tarefa, use `array_splice` e verifique se o índice existe antes de tentar remover.
- Para marcar uma tarefa como "Concluída", altere o valor do campo `status` da tarefa selecionada.
