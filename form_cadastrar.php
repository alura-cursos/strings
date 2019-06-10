<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Curso Strings</title>
</head>
<body>
<div class="mx-5 my-5">
    <h1>Formulário de cadastro loja virtual</h1>

        <form action="/cadastro.php" method="post">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome">
            </div>

            <div class="form-group">
                <label for="genero">Genero:</label>
                <select id="genero" name="genero" class="form-control">
                    <option>M</option>
                    <option>F</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Digite o seu email">
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="text" id="senha" name="senha" class="form-control" placeholder="Digite a sua senha">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Digite a sua senha">
            </div>

            <div class="form-group">
                <label for="endereco">Endereço: </label>
                <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Digite o seu endereço">
            </div>

            <div class="form-group">
                <label for="cep">CEP: </label>
                <input type="text" id="cep" name="cep" class="form-control" placeholder="Digite o seu CEP">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

</body>
</html>
