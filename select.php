<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
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
            <label for="id">qual id vc quer ver do bcd?</label>
            <input type="text" name="id" id="id">
        </form>
    </main>
    <?php
require_once 'conect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num = $_POST['id'];
    }

$id = $num;

$sql = "SELECT nome FROM projeto WHERE id = :id";
try{
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

$aluno = $stmt->fetch
(PDO::FETCH_ASSOC);
echo "nome: {$aluno['nome']}";
}catch(PDOException $e){
    echo "ERRO: " . $e->getMessage();
}
?>
</body>
</html>