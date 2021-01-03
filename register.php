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
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    
    <main class="main">
        <div class="login-container">
            <form action="/inc/Controller/AppController.php" method="post">

                <div class="form-header">
                    <h1>Register</h1>
                    <span></span>
                </div>

                <div class="form-body">

                    <?php include_once 'inc/errors.php' ?>

                    <div class="form-input">
                        <label for="firstname">Primeiro nome</label>

                        <input type="text" required name="firstname" id="firstname" value="<?php print($_GET['firstname'] ?? ""); ?>">
                    </div>

                    <div class="form-input">
                        <label for="lastname">Ultimo nome</label>
                        <input type="text" required name="lastname" id="lastname" value="<?php print($_GET['lastname'] ?? ""); ?>">
                    </div>

                    <div class="form-input">
                        <label for="email">E-mail</label>
                        <input type="email" required name="email" id="email" value="<?php print($_GET['email'] ?? ""); ?>">
                    </div>
    
                    <div class="form-input">
                        <label for="password">Senha</label>
                        <input type="password" required name="password" id="password">
                    </div>
    
                    <div class="form-input">
                        <button type="submit" name="register">Criar conta</button>
                    </div>
                </div>

                <div class="form-footer">
                    <p>ja tem conta?</p>
                    <a href="/">Entrar</a>
                </div>

            </form>
        </div>
    </main>

</body>
</html>