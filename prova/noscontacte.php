<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nos contacte</title>
</head>
<body>
    <?php include_once('TEMPLATES/topo.php'); ?>
    <?php include_once('TEMPLATES/menu.php'); ?>

    <div>
        <h1>Nos contacte</h1>
        <form action="faleconosco.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="mensagem">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" required></textarea><br><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $mensagem = htmlspecialchars($_POST['mensagem']);
            echo "<p>Obrigado, $nome! Sua mensagem foi recebida.</p>";
        
        }
        ?>
    </div>

    <?php include_once('TEMPLATES/rodape.php'); ?>
</body>
</html>