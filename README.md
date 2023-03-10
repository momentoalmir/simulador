# Simulador de Empréstimo

Esse é um projeto realizado como exercício da Fatec Itapira, ministrado pelo professor [Júnior Gonçalves](https://github.com/jrgoncalves85). O código é escrito em PHP e é um simulador de empréstimo.

## Aviso
Este código não deve ser referenciado para uso em produção, pois não foi desenvolvido com esse propósito e não foi testado para esse fim.

## Funcionamento
O código recebe dados de um formulário HTML através do método POST e realiza cálculos para determinar o custo efetivo total do empréstimo. Alguns dos dados recebidos são:

Nome do usuário;
Se o usuário é cliente da instituição financeira;
Pontuação do usuário no Serasa;
Número de parcelas desejadas;
Valor do empréstimo.
O código calcula a taxa de juros a ser aplicada com base na pontuação do usuário no Serasa e adiciona taxas e impostos como tarifas, IOF e seguro-desemprego ao custo efetivo total do empréstimo. Em seguida, exibe o resultado em uma página HTML.
