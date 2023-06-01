<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<form action="insertar" method="post">
        
        <img src="IMG/pq.png" alt="logo EPS" width="120" height="120" aling="center">
        <h1>Registrarse</h1>
        <br>
        <label>Usuario</label>
        <input type="number" name="usuario">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <label>Correo</label>
        <input type="email" name="correo">
        <label>Direccion</label>
        <input type="text" name="direccion">
        <label>Telefono</label>
        <input type="number" name="telefono">    
        <label>Contraseña</label>
        <input type="password" name="contraseña">
        <input type="submit" name="iniciar">
    </form>  
    <style>
  form {
    width: 400px;
    margin: 0 auto;
    padding: 40px;
    background-color: #f5f5f5;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-family: Arial, sans-serif;
  }

  h1 {
    font-size: 24px;
    margin-bottom: 30px;
    color: #333;
  }

  label {
    display: block;
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
  }

  input[type="text"],
  input[type="password"],
  input[type="email"],
  input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  input[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  input[type="submit"]:hover {
    background-color: #555;
  }
</style>
</body>
</html>