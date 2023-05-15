<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>

    <!-- Este é o "form" que está a direcionar pagina de para o arquivo,
        "auth.php" para fazer a autenticação do usuário com o e-mail e a senha. -->
    <form action="auth.php" method="POST">
        <label>E-mail</label>
        <input type="text" name="email" placeholder="email">

        <label>Password</label>
        <input type="password" name="password">

        <!-- Este 'button: Sign in' é para que realize a ação,
            da página de login para de autenticação. -->
        <button>Sign in</button>
    </form>

</body>
</html>