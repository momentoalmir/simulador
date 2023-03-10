<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Empréstimo</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
        <div class="bloco">
            <h1>Simulador de Empréstimo</h1>
            <form action="resultado.php" method="post">
                <p>
                    <input type="text" name="nome" placeholder="Digite seu Nome" required>
                </p>
                <p>
                    <label for="cliente">Já é nosso cliente?</label>
                    <input type="radio" name="cliente" id="cliente" value="sim"> Sim
                    <input type="radio" name="cliente" id="cliente" value="nao" checked> Não
                </p>
                <p>
                    <input type="number" name="serasa" id="serasa" placeholder="Digite seu Serasa Score" required>
                </p>
                <p>
                    <input type="number" name="emprestimo" id="emprestimo" placeholder="Valor do Empréstimo" required>
                </p>
                <p>
                    <label for="parcelas">Quantidade de parcelas:</label>
                    <select name="parcelas" id="parcelas">
                        <option value="12">12</option>
                        <option value="24" selected>24</option>
                        <option value="36">36</option>
                    </select>
                </p>
                <p>
                    <input type="checkbox" name="seguro" id="seguro" value="sim" checked>
                    Deseja incluir seguro desemprego no valor de R$ 49,90
                </p>
                <p>
                    <input type="submit" value="Simular empréstimo!">
                </p>
            </form>
        </div>
    </main>
</body>
</html>
