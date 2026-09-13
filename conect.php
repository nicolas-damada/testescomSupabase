
    <?php
        // Credenciais atualizadas para usar o Pooler gratuito (IPv4)
        $host = "aws-0-sa-east-1.pooler.supabase.com";
        $port = "6543";
        $dbname = "postgres";
        $user = "postgres.vjuwhjvyrlhfqxpjyati"; // Note que leva o ID do seu projeto junto
        $pass = "Lara2912*2011"; // Coloque aqui a senha do seu banco

        try {
            $conexao = new PDO(
                "pgsql:host=$host;port=$port;dbname=$dbname",
                $user,
                $pass,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            echo "erro: " . $e->getMessage();
        }
    ?>
