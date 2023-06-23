<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lidar com o envio do formulário de edição
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $con = conectaBD();

    $sql = "UPDATE usuario SET nome = :nome, telefone = :telefone, email = :email WHERE id = :id";
    $stm = $con->prepare($sql);
    $stm->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stm->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $stm->bindParam(':email', $email, PDO::PARAM_STR);
    $stm->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stm->execute()) {
        echo "Usuário atualizado com sucesso";
    } else {
        echo "Erro ao atualizar o usuário";
    }
} else {
    // Exibir o formulário de edição
    $id = $_GET['id'];
    $con = conectaBD();

    $sql = "SELECT * FROM usuario WHERE id = :id";
    $stm = $con->prepare($sql);
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    $stm->execute();
    $usuario = $stm->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $nome = $usuario['nome'];
        $telefone = $usuario['telefone'];
        $email = $usuario['email'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Editar Usuário</title>
  <link rel="stylesheet" href="edit.css">
</head>

<body>
  <h2>Editar Usuário</h2>
  <form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required>
    </div>
    <div>
      <label for="telefone">Telefone:</label>
      <input type="text" id="telefone" name="telefone" value="<?php echo $telefone; ?>" required>
    </div>
    <div>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
    </div>
    <button type="submit">Salvar</button>
  </form>
</body>
</html>

<?php
    } else {
        echo "Usuário não encontrado";
    }
}
?>
