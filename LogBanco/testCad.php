<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
</head>
<body>
    <?php
    // Defina variáveis vazias para armazenar os valores do formulário e mensagens de erro
    $nome = $email = $senha = $confirmaSenha = "";
    $nomeErro = $emailErro = $senhaErro = $confirmaSenhaErro = "";

    // Função de validação de dados
    function validarDados($dados) {
        $dados = trim($dados);
        $dados = stripslashes($dados);
        $dados = htmlspecialchars($dados);
        return $dados;
    }
    

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validação do campo Nome
        if (empty($_POST["nome"])) {
            $nomeErro = "O campo Nome é obrigatório";
        } else {
            $nome = validarDados($_POST["nome"]);
            // Verifica se o nome contém apenas letras e espaços em branco
            if (!preg_match("/^[a-zA-Z ]*$/", $nome)) {
                $nomeErro = "Apenas letras e espaços em branco são permitidos";
            }
        }

        // Validação do campo Email
        if (empty($_POST["email"])) {
            $emailErro = "O campo Email é obrigatório";
        } else {
            $email = validarDados($_POST["email"]);
            // Verifica se o formato do email é válido
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErro = "Formato de email inválido";
            }
        }

        // Validação do campo Senha
        if (empty($_POST["senha"])) {
            $senhaErro = "O campo Senha é obrigatório";
        } else {
            $senha = validarDados($_POST["senha"]);
            // Verifica se a senha tem no mínimo 8 caracteres
            if (strlen($senha) < 8) {
                $senhaErro = "A senha deve ter no mínimo 8 caracteres";
            }
        }

        // Validação do campo Confirmar Senha
        if (empty($_POST["confirmaSenha"])) {
            $confirmaSenhaErro = "O campo Confirmar Senha é obrigatório";
        } else {
            $confirmaSenha = validarDados($_POST["confirmaSenha"]);
            // Verifica se a senha e a confirmação de senha são iguais
            if ($senha !== $confirmaSenha) {
                $confirmaSenhaErro = "A senha e a confirmação de senha não coincidem";
            }
        }

        // Se não houver erros, o cadastro é considerado válido
        if (empty($nomeErro) && empty($emailErro) && empty($senhaErro) && empty($confirmaSenhaErro)) {
            // Processa o cadastro, salva no banco de dados, etc.
            // Aqui você pode adicionar a lógica para realizar as ações necessárias após a validação
            // Por exemplo, inserir os dados em um banco de dados ou exibir uma mensagem de sucesso.
            echo "Cadastro realizado com sucesso!";
        }
    }
    ?>

    <h2>Cadastro</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $nome; ?>">
        <span><?php echo $nomeErro; ?></span><br><br>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span><?php echo $emailErro; ?></span><br><br>

        <label>Senha:</label>
        <input type="password" name="senha">
        <span><?php echo $senhaErro; ?></span><br><br>

        <label>Confirmar Senha:</label>
        <input type="password" name="confirmaSenha">
        <span><?php echo $confirmaSenhaErro; ?></span><br><br>

        <input type="submit" name="submit" value="Cadastrar">
    </form>
</body>
</html>
