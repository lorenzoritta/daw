<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>

<body>
    <form action="inserir_ok.php" method="post">
        Nome do Manga:
        <input type="text" name="nome" required />
        <br>
        Editora:
        <input type="text" name="editora" required />
        <br>
        Descrição:
        <textarea name="descricao" required></textarea>
        <br>
        Autor:
        <input type="text" name="autor" required />
        <br>
        Preço:
        <input type="text" name="preco" required />
        <br>
        Data de Lançamento:
        <input type="date" name="data_lancamento" required />
        <br>
        País de Origem:
        <input type="text" name="pais_origem" required />
        <br>
        Número de Volumes:
        <input type="number" name="num_volumes" required />
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
