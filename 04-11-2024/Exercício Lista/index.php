<?php 

/*

- [ ] 1. Qual o total de despesas?
[ ] 2. Qual o total de receitas?
[ ] 3. Quantas transações de cada tipo (Receita e Despesa) existem no array?
[ ] 4. Qual a média dos valores das receitas?
[ ] 5. Qual a média dos valores das despesas?
[ ] 6. Qual o maior valor de receita e qual pessoa o realizou?
[ ] 7. Qual o menor valor de despesa e qual pessoa o realizou?
[ ] 8. Quantas transações foram realizadas por pessoas do gênero "feminino" e "masculino"?
[ ] 9. Qual a soma total de todas as transações?
[ ] 10. Quantas transações possuem um valor acima de 500?
[ ] 11. Liste todas as pessoas que realizaram uma despesa com valor superior a 100.
[ ] 12. Quantas transações têm a descrição "Salário"?
[ ] 13. Qual é o valor total das transações com a descrição "Investimento"?
[ ] 14. Qual é a diferença entre o total de receitas e o total de despesas?
[ ] 15. Liste todas as pessoas que realizaram transações do tipo "Despesa".
[ ] 16. Qual a média dos valores das transações realizadas por pessoas do gênero "feminino"?
[ ] 17. Quantas transações possuem a descrição "Aluguel"?
[ ] 18. Qual o valor total de receitas realizadas por pessoas do gênero "masculino"?
[ ] 19. Quais transações possuem valores entre 100 e 300?
[ ] 20. Quais são os três maiores valores de receita?
[ ] 21. Quais são os três menores valores de despesa?
[ ] 22. Quantas transações possuem uma descrição que começa com a letra "S"?
[ ] 23. Liste todas as descrições únicas de transações (sem repetição).
[ ] 24. Quantas transações têm uma descrição com mais de uma palavra?
[ ] 25. Qual é a diferença entre o maior e o menor valor de todas as transações?
[ ] 26. Liste todas as transações realizadas por pessoas com o nome "Lucas".
[ ] 27. Qual o valor médio das transações para descrições que contenham a palavra "Freelance"?
[ ] 28. Quantas pessoas têm um nome que começa com a letra "J" e realizaram uma receita?
[ ] 29. Qual a soma dos valores das transações com descrição "Bônus"?
[ ] 30. Liste todas as pessoas que realizaram ao menos uma transação do tipo "Receita".
[ ] 31. Quais transações possuem valores exatos de 200?
[ ] 32. Quantas transações têm uma descrição contendo a palavra "Salário"?
[ ] 33. Quais transações possuem descrições de uma única palavra?
[ ] 34. Liste todas as transações realizadas por pessoas cujo nome termina com a letra "a".
[ ] 35. Qual é o valor total das despesas realizadas por pessoas do gênero "masculino"?
[ ] 36. Liste todas as transações de receitas com valores abaixo de 500.
[ ] 37. Qual é o valor médio de todas as transações realizadas por pessoas do gênero "feminino"?
[ ] 38. Quais transações possuem valores múltiplos de 100?
[ ] 39. Quantas transações de despesas possuem valores abaixo de 100?
[ ] 40. Quais são os valores únicos (sem repetição) das transações do tipo "Despesa"?
[ ] 41. Qual é o total de transações para pessoas com nomes de três sílabas?
[ ] 42. Qual é a transação de maior valor realizada por uma pessoa do gênero "feminino"?
[ ] 43. Liste todas as transações com a descrição "Aluguel".
[ ] 44. Quantas transações têm valores menores do que 500?
[ ] 45. Qual é a soma total das transações com descrições que contenham a palavra "Investimento"?
[ ] 46. Quantas transações foram feitas com valores pares?
[ ] 47. Qual a diferença entre o total de receitas e o total de despesas realizadas por pessoas do gênero "masculino"?
[ ] 48. Quantas pessoas têm o nome "Lucas" e realizaram uma despesa?
[ ] 49. Liste todas as descrições de transações realizadas por pessoas com nome começando com "A".
[ ] 50. Qual o valor total das despesas com a descrição "Compras do mês"?

*/


$transacoes = [
  [
    "nome" => "João Lucas",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Salário",
    "valor" => 4500
  ],
  [
    "nome" => "Ana Paula",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Aluguel",
    "valor" => 1200
  ],
  [
    "nome" => "Carlos Silva",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Freelance",
    "valor" => 800
  ],
  [
    "nome" => "Mariana Souza",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Compras do mês",
    "valor" => 300
  ],
  [
    "nome" => "Pedro Santos",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Bônus",
    "valor" => 1200
  ],
  [
    "nome" => "Fernanda Lima",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Academia",
    "valor" => 150
  ],
  [
    "nome" => "Lucas Almeida",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Investimento",
    "valor" => 200
  ],
  [
    "nome" => "Beatriz Oliveira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Manutenção do carro",
    "valor" => 500
  ],
  [
    "nome" => "Rafael Nunes",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Aluguel de imóvel",
    "valor" => 1300
  ],
  [
    "nome" => "Carla Figueiredo",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Curso online",
    "valor" => 250
  ],
  [
    "nome" => "Thiago Gomes",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Dividendos",
    "valor" => 100
  ],
  [
    "nome" => "Sofia Costa",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Restaurante",
    "valor" => 120
  ],
  [
    "nome" => "Leonardo Martins",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Venda de produto",
    "valor" => 500
  ],
  [
    "nome" => "Isabela Dias",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Pet shop",
    "valor" => 80
  ],
  [
    "nome" => "Ricardo Moreira",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Salário extra",
    "valor" => 700
  ],
  [
    "nome" => "Camila Rocha",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Internet",
    "valor" => 100
  ],
  [
    "nome" => "Gustavo Reis",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Comissão",
    "valor" => 400
  ],
  [
    "nome" => "Larissa Teixeira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Luz",
    "valor" => 90
  ],
  [
    "nome" => "Diego Costa",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Rendimentos",
    "valor" => 200
  ],
  [
    "nome" => "Juliana Pereira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Farmácia",
    "valor" => 40
  ],
  [
    "nome" => "Marcelo Fonseca",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Salário",
    "valor" => 3500
  ],
  [
    "nome" => "Luciana Matos",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Transporte",
    "valor" => 200
  ],
  [
    "nome" => "Rodrigo Freitas",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Projeto extra",
    "valor" => 600
  ],
  [
    "nome" => "Elaine Souza",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Presentes",
    "valor" => 150
  ],
  [
    "nome" => "Bruno Lopes",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Consultoria",
    "valor" => 900
  ],
  [
    "nome" => "Tatiana Ferreira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Cosméticos",
    "valor" => 70
  ],
  [
    "nome" => "Vitor Hugo",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Investimento",
    "valor" => 150
  ],
  [
    "nome" => "Renata Araújo",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Cabeleireiro",
    "valor" => 120
  ],
  [
    "nome" => "Fábio Miranda",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Aluguel",
    "valor" => 1100
  ],
  [
    "nome" => "Clarissa Antunes",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Lazer",
    "valor" => 200
  ],
  [
    "nome" => "André Silva",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Venda",
    "valor" => 450
  ],
  [
    "nome" => "Sara Lima",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Cinema",
    "valor" => 50
  ],
  [
    "nome" => "Igor Pereira",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Projeto de TI",
    "valor" => 1300
  ],
  [
    "nome" => "Priscila Mendes",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Roupas",
    "valor" => 300
  ],
  [
    "nome" => "Henrique Lopes",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Consultoria",
    "valor" => 600
  ],
  [
    "nome" => "Lívia Moraes",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Café",
    "valor" => 15
  ],
  [
    "nome" => "Fernando Faria",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Empreendimento",
    "valor" => 1000
  ],
  [
    "nome" => "Laura Martins",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Gasolina",
    "valor" => 100
  ],
  [
    "nome" => "Eduardo Castro",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Salário",
    "valor" => 2500
  ],
  [
    "nome" => "Bianca Vieira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Viagem",
    "valor" => 400
  ],
  [
    "nome" => "Vinicius Dantas",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Bônus",
    "valor" => 500
  ],
  [
    "nome" => "Amanda Pinto",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Supermercado",
    "valor" => 150
  ],
  [
    "nome" => "Márcio Coelho",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Freelance",
    "valor" => 700
  ],
  [
    "nome" => "Carolina Prado",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Seguro",
    "valor" => 80
  ],
  [
    "nome" => "Jorge Medeiros",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Investimento",
    "valor" => 400
  ],
  [
    "nome" => "Rita Borges",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Livros",
    "valor" => 60
  ]
];
