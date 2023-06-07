<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
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
    input[type="button"]{
        background-color: #4CAF50;
        align-items: center;
        margin-top: 5px;
        width: 100%;
        border: none;
        border-radius: 4px;
        color: #fff;
        font-size: 13pt;
    }
    input[type="button"]:hover{
        background-color: #45a049;
    }
  </style>
  <?php 
    function cad(){
      echo "<script>setTimeout(
                function(){
                  window.location.href='sing_in.php'},5000
                );
            </script>"}
  ?>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form id = "formlogin" action="verificar_login.php" method = "POST">
      <input type="text" placeholder="Login" name="email" id="email">
      <input type="password" placeholder="Password" name="senha" id="password">
      <input type="submit" value="Login">
    </form>
    <form action="cad">
      <input type="submit" value="Cadastre-se">
    </form>
        

  </div>
</body>
</html>
