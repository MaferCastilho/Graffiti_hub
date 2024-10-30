<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Login</title>
</head>
<body>
    <main>
        <table>
            <td>
                <img src="_img/Logo (3).png">
            </td>
            <td id="borda2">
                <form action="index.php?action=login" method="post">
                    <h1>Login</h1>
                    <label for="email">E-mail</label><br>
                    <input type="email" id="email" name="email" placeholder="Email">
                    <br><br>
                    <label for="senha">Senha</label><br>
                    <input type="password" id="senha" name="senha" placeholder="Senha">
                    <br><br>
                    <button type="submit" onclick="validarLogin()">Enviar</button>
                </form>
                <a href="index.php?action=register">Cadastro</a>
            </td>
    </table>
    </main>
</body>
</html>
