<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Login </title>
    <style>
        header .header{
        background-color: #fff;
        height: 45px;
        }
        header a img{
        width: 134px;
        margin-top: 4px;
        }
        .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
        }
        .login-page .form .login{
        margin-top: -31px;
        margin-bottom: 26px;
        }
        .form {
        position: relative;
        z-index: 1;
        background: black;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        }
        .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background-color: #328f8a;
        background-image: linear-gradient(45deg,#bbb, #4CCEE8);
        width: 100%;
        border: 0;
        padding: 15px;
        color: black;
        font-weight: 800;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        }
        .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
        }
        .form .message a {
        color: #4CAF50;
        text-decoration: none;
        }

        .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
        }

        body {
            height: 97vh;
        background-color: black;
        background-image: linear-gradient(-45deg,black,#4CCEE8);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body>
  <div class="login-page">
    <div class="form">
      <div class="login" >
        <div class="login-header">
          <h3 style="color: white;font-size: 22px;">LOGIN</h3>
          <p style="color: #4CCEE8;font-size: 12px;">Please enter your credentials to login.</p>
        </div>
      </div>
      <form method="POST" action="Components/login.php" class="login-form">
        <input type="text" placeholder="Role Id" name="roleId" />
        <input type="password" placeholder="password" name="password" />
        <button type="submit">login</button>
    </form>
    </div>
  </div>
</body>
</html>