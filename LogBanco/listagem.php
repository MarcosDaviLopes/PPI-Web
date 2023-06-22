<!DOCTYPE html>
<html>
<head>
  <title>Dados dos Usuários</title>
  <link rel="stylesheet" href="listagemE.css">
</head>

<body>
  <?php
  function conectaBD()
  {
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
  
  if (empty($usuarios)) {
    echo "Nenhum usuário encontrado";
    } else {
      ?>
      <table>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data de Nascimento</th>
        <th>Ação</th>
      </tr>
    </table>

    <?php
    foreach ($usuarios as $usuario) {
        ?>
        <tr>
          <td><?php echo $usuario['id']; ?></td>
          <td><?php echo $usuario['nome']; ?></td>
          <td><?php echo $usuario['telefone']; ?></td>
          <td>
            <button>Edite</button>
            <button>Delete</button>
          </td>
        </tr>
        <?php
      }
  }?>
    
</body>
</html>
