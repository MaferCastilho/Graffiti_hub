<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Cadastre-se</title>
</head>
<body>  
    <table>
        <tr><br>
            <td id="borda">
                <form action="index.php?action=register" method="post">
                    <h1>Cadastre-se</h1>

                    <div class="form-row">
                        <label for="perfil">Selecione seu Perfil</label>
                        <select name="perfil" id="perfil">
                            <option value="admin">Admin</option>
                            <option value="artista">Artista</option>
                            <option value="expectador">Expectador</option>
                        </select>
                    </div><br><br>

                        <label for="nome"></label>
                        <input type="text" placeholder="Nome de usuário" name="username" id="username"><br>

                        <label for="email"></label>
                        <input type="email" placeholder="Email" name="email" id="email" required><br>
                    
                        <label for="nome"></label>
                        <input type="text" name="nome" placeholder="Nome" id="nome" required><br>

                        <label for="nome"></label>
                        <input type="text" name="sobrenome" placeholder="sobrenome" id="sobrenome" required><br>
                   
                        <label for="senha"></label>
                        <input type="password" placeholder="Senha" name="senha" id="senha" required><br>
                                 
                        <label for="senha"></label>
                        <input type="date" placeholder="Data Nascimento" name="dataNasc" id="dataNasc" required><br><br>

                    <button type="submit" onclick="validarFormulario()">Cadastrar</button>

                    <a type="text" href="index.php?action=login">Login</a><br>
                </form>
            </td>
            <td>
                <img src="_img/Logo (3).png">
            </td>
        </tr>
    </table>
    <script src='cadastro.js'></script>
</body>
</html>
