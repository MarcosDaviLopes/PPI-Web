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
      cursor: pointer;
    }
    
    .container input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form id = "formlogin" action="verificar_login.php" method = "POST">
      <input type="text" placeholder="Login" name="email" id="email" value="rbeninca@gmail.com">
      <input type="password" placeholder="Password" name="senha" id="password" value="1234">
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
