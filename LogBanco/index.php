<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #547acc;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }
    
    .container input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      font-size: 13pt;
      cursor: pointer;
    }
    
    .container input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    a {
      display: flex;
      background-color: #4CAF50;
      align-items: center;
      justify-content: center;
      margin-top: 20px;
      width: max-content;
      border: none;
      border-radius: 4px;
      color: #fff;
      font-size: 13pt;
      text-decoration: none;
    }
    
    a:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form id="formlogin" action="verificaLOG.php" method="POST">
      <input type="text" placeholder="Email" name="email" id="email">
      <input type="password" placeholder="Senha" name="senha" id="password">
      <input type="submit" value="Login">
    </form>
    <form action="cad">
      <a href="singIn.php">Cadastre-se</a>
    </form>
  </div>
</body>
</html>