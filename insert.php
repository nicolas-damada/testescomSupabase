<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <style>
        body{
            background-color: lightgreen;
            
            
        }
        main{
            width: 20%;
            text-align: center;
            margin: auto;
            background-color: lightgrey;
            border: 5px solid;
            border-color: darkorchid;
            border-radius: 15px;
            padding-bottom: 15px;
            padding-top: 15px;


        }

    </style>
</head>

<body>
    <main>
        <form action="" method="post">
            <label for="name">que nome deseja cadastrar no bcd?</label>
            <input type="text" name="nome" id="nome">
        </form>
    </main>

    <?php
    require_once './conect.php'; //requere o "conect.php para conectar com o banco antes de fazer um insert

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['nome'];
        $sql = "INSERT INTO projeto (nome) VALUES(:nome)";

    try {        //a variavel conexão é do arquivo "conect.php"
        $stmt = $conexao->prepare($sql); //"->" chama um metodo
        $stmt->bindValue(":nome", $nome); //bindvalues troca a informação: nome por pericles

        $stmt->execute();
        echo "aluno inserido com sucesso";
    } catch (PDOException $e) {
        echo "erro:" . $e->getMessage();
    }
    }
    

    ?>
</body>

</html>