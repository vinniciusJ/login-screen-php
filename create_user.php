<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/create_user.css">
    <link rel="shortcut icon" href="images/logo.svg">

    <title>Criar usuário</title>
</head>
<body>
    <main class="container">
        <header class="container__header">
            <h1>Criar um usuário</h1>
        </header>
        <form action="create.php" class="create-user-form" method="POST">
                <div class="create-user-form__input-container">
                    <label for="user">
                        <span>Usuário: </span>
                        <input type="text" name="username" id="username" required />
                    </label>
                </div>
                <div class="create-user-form__input-container">
                    <label for="password">
                        <span>Senha: </span>
                        <input type="password" name="password" id="password" required />
                    </label>
                </div>

                <section class="create-user-form__options">
                    <a href="/login.php">Cancelar</a>
                    <button>Criar</button>
                </section>
        </form>
    </main>
</body>
</html>