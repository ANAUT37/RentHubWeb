<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./modules/auth/view/login/css/index.css">
    <title>Document</title>
</head>
<body>
    <div class="login-main-container">
        <div class="login-form-container">
            <h1 class="login-form-title">Bienvenidx de nuevo!</h1>
            <p class="login-form-subtitle">¿No tienes una cuenta? <a href="signup">Regístrate aquí</a></p>
            <form class="login-form" action="">
                <label id="email-error" for="email" class="classic-input-text-error" hidden>⚠︎</label>
                <input name="email" class="classic-input login-input" type="text" placeholder="Correo electrónico" require/>
                <label id="email-error" for="email" class="classic-input-text-error" hidden>⚠︎</label>
                <input name="password" class="classic-input login-input" type="password" placeholder="Contraseña" require/>
                <input class="classic-primary-button login-button" type="submit" value="Continuar">
            </form>
        </div>
    </div>
</body>
</html>