<?php 
    session_start();

    
    session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.svg">

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/login.css">


    <title>Login</title>
</head>
<body>
   

    <main class="container">
        <aside class="container__welcome-back">
            
                <h1>Seja bem-vindo(a) de volta!</h1>
                <p>Sentimos a sua falta nesse período em que ficou ausente</p>

                <img src="images/welcome-back.svg" alt="Seja bem-vindo">

           
        </aside>
        <section class="login-section">
            <header class="login-section__header">
                <h1>Login</h1>
            </header>

            
            <form method="POST" action="login.php" class="login-form">
                <div class="login-form__input-container">
                    <label for="user">
                        <span>Usuário: </span>
                        <input type="text" name="username" id="username" required />
                    </label>
                </div>
                <div class="login-form__input-container">
                    <label for="password">
                        <span>Senha: </span>
                        <input type="password" name="password" id="password" required />
                    </label>
                </div>

                <?php   
                    if(isset($_SESSION['wrong-credentials'])):
                ?>

                <section class="alert">
                    
                    <p>Usuário e/ou senha estão incorretos, tente novamente!</p>
                    
                </section>

                <?php
                    endif;

                    unset($_SESSION['differentPW']);
                ?>

                <button>Entrar</button>
            </form>

            

            <footer class="login-section__footer">
                <a href="/create_user.php">Ainda não tenho uma conta</a>
            </footer>
        </section>
    </main>

    
</body>
</html>

