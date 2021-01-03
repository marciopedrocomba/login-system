<?php

session_start();

if(isset($_SESSION['ibox_user_id'])) {
    header("Location: /home");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    
    <main class="main">
        <div class="login-container">
            <form action="/inc/Controller/AppController.php" method="post">

                <div class="form-header">
                    <h1>Login</h1>
                    <span></span>
                </div>

                <div class="form-body">


                    <?php include_once 'inc/errors.php' ?>

                    <div class="form-input">
                        <label for="email">Seu e-mail</label>
                        <input type="text" name="email" required id="email">
                    </div>
    
                    <div class="form-input">
                        <label for="password">Sua senha</label>
                        <input type="password" name="password" required id="password">
                    </div>


                    <div class="form-input-check">
                        <input type="checkbox" name="check" id="check">
                        <label for="check">Manter-me logado</label>
                    </div>
    
                    <div class="form-input">
                        <button type="submit" name="login">Logar</button>
                    </div>
                </div>

                <div class="form-footer">
                    <p>Ainda não tem conta?</p>
                    <a href="/register">Cadastre-se</a>
                </div>

            </form>
        </div>
    </main>

</body>
</html>