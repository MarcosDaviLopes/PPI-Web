<!DOCTYPE html>
<html>
<head>
  <title>Dados dos Usuários</title>
  <link rel="stylesheet" href="listagemE.css">
</head>

<body>
  <?php
  function recuperaALL(){
    $con = conectaBD();
    $sql = "SELECT * FROM usuario";
    $stm = $con->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
  
  $usuarios = recuperaALL();
  
  if (empty($usuarios)) {
    echo "Nenhum usuário encontrado";
    } else {
    foreach ($usuarios as $usuario) {
        ?>
        <tr>
          <td><?php echo $usuario['codigo']; ?></td>
          <td><?php echo $usuario['nome']; ?></td>
          <td><?php echo $usuario['telefone']; ?></td>
          <td><?php echo $usuario['data_nascimento']; ?></td>
          <td>
            <button>Edite</button>
            <button>Delete</button>
          </td>
        </tr>
        <?php
      }
  }?>
    <table>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data de Nascimento</th>
        <th>Ação</th>
      </tr>
    </table>
</body>
</html>
