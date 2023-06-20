<!DOCTYPE html>
<html>
<head>
  <title>Dados dos Usuários</title>

  <style>
    table {
      border-collapse: collapse;
    }
    
    th, td {
      border: 1px solid black;
      padding: 8px;
    }
  </style>
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
  
  if (!empty($usuarios)) {
    ?>
    <table>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data de Nascimento</th>
        <th>Ação</th>
      </tr>
      <?php
      foreach ($usuarios as $usuario) {
        ?>
        <tr>
          <td><?php echo $usuario['codigo']; ?></td>
          <td><?php echo $usuario['nome']; ?></td>
          <td><?php echo $usuario['telefone']; ?></td>
          <td><?php echo $usuario['data_nascimento']; ?></td>
          <td>
            <button>Edit</button>
          </td>
        </tr>
        <?php
      }
      ?>
    </table>
    <?php
  } else {
    echo "Nenhum usuário encontrado.";
  }
  ?>
</body>
</html>
