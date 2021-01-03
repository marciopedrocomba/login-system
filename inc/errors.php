<?php

if(isset($_GET['error'])) {
    $error = $_GET['error'];

    if($error == 'empty') {

        ?>

            <div class="error">
                <p>Por favor preencha todos os campos</p>
            </div>

        <?php

    }else if($error == "invalidmail") {

        ?>

            <div class="error">
                <p>E-mail invalido</p>
            </div>  

        <?php
    }else if($error == "existentUser") {

        ?>

            <div class="error">
                <p>E-mail existente, por favor escolhe um outro</p>
            </div>  

        <?php
    }else if($error == "wrongpassword") {
        ?>
            <div class="success">
                <p>Oops! senha errada.</p>
            </div>
        <?php

    }else if($error == "userNotfound") {

        ?>

            <div class="error">
                <p>Usuario não existe</p>
            </div>  

        <?php
    }
}


if(isset($_GET['success'])) {
    
    ?>

        <div class="success">
            <p>Conta criada com sucesso</p>
        </div>

    <?php
}


