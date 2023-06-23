<!DOCTYPE html>
<html>
<head>
  <title>Dados dos Usuários</title>
  <link rel="stylesheet" href="listagemE.css">
</head>

<body>
  <?php
  function conectaBD(){
      $con = new PDO("mysql:host=localhost;dbname=Usuarios", "root", "aluno");
      return $con;
  }
  function recuperaALL(){
    $con = conectaBD();
    $sql = "SELECT * FROM usuario";
    $stm = $con->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
  
  $usuarios = recuperaALL();
  
  function deletarUsuario($id){
    $con = conectaBD();
    
    // Deleta o usuário com o ID fornecido
    $sql = "DELETE FROM usuario WHERE id = :id";
    $stm = $con->prepare($sql);
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stm->execute()) {
        echo "Usuário deletado com sucesso";
    } else {
        echo "Erro ao deletar o usuário";
    }
}

  function editarUsuario($id){
    $con = conectaBD();
    
    // Recupera os dados do usuário com o ID fornecido
    $sql = "SELECT * FROM usuario WHERE id = :id";
    $stm = $con->prepare($sql);
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    $stm->execute();
    $usuario = $stm->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        header("Location: editUser.php?id=" . $id);
        exit();
    } else {
        echo "Usuário não encontrado";
    }
}

  if (empty($usuarios)) {
    echo "Nenhum usuário encontrado";
    } else {
      ?>
      <table>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Ação</th>
      </tr>

    <?php
    foreach ($usuarios as $usuario) {
        ?>
        <tr>
          <td><?php echo $usuario['id']; ?></td>
          <td><?php echo $usuario['nome']; ?></td>
          <td><?php echo $usuario['telefone']; ?></td>
          <td>
            <button onclick="editarUsuario(<?php echo $usuario['id']; ?>)">Editar</button>
            <button onclick="deletarUsuario(<?php echo $usuario['id']; ?>)">Deletar</button>
          </td>
        </tr>
        <br>
        <?php
      }
  }?> 
      </table>
    
</body>
</html>
